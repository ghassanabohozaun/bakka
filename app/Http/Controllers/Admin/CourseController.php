<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CourseRequest;
use App\Models\Course;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use File;
class CourseController extends Controller
{
    use GeneralTrait;

    // index
    public function index()
    {
        $title = __('menu.courses');
        $courses = Course::withoutTrashed()->orderByDesc('created_at')->paginate(perPage: 15);
        return view('admin.courses.index', compact('title', 'courses'));
    }

        // create
        public function create()
        {
            $title = __('menu.add_new_course');
            return view('admin.courses.create', compact('title'));
        }



    // store
    public function store(CourseRequest $request)
    {

        if ($request->hasFile('photo')) {
            $photo_file  = $request->file('photo');
            $path_destination = public_path('/adminBoard/uploadedImages/courses//');
            $photo = $this->saveResizeImage($photo_file, $path_destination, 800, 600);
        } else {
            $photo = '';
        }

        $site_lang_en = setting()->site_lang_en;

        $course =  Course::create(
            [
                'title_en_slug' => slug($request->title_en),
                'title_ar_slug' => $site_lang_en == 'on' ? slug($request->title_ar) : '',
                'title_ar' =>  $request->title_ar ,
                'title_en' => $site_lang_en == 'on' ? $request->title_en : '',
                'description_ar' => $request->description_ar,
                'description_en' => $site_lang_en == 'on' ? $request->description_en : '',
                'hours' => $request->hours,
                'cost' => $request->cost,
                'discount' => $request->discount,
                'start_at' => $request->start_at,
                'end_at' => $request->end_at,
                'zoom_link' => $request->zoom_link,
                'active' => 'on',
                'status' => 'on',
                'photo' => $photo,
                'language' =>   $site_lang_en == 'on' ? 'ar_en'  : 'ar',
            ]
        );

        if ($course) {
            return $this->returnSuccessMessage(__('general.add_success_message'));
        } else {
            return $this->returnError('general.add_error_message', 404);
        }
    }



    // edit
    public function edit($id)
    {
        $title = __('courses.update_course');
        $course = Course::find($id);
        if (!$course) {
            return redirect()->route('admin.not.found');
        }
        return view('admin.courses.update', compact('title', 'course'));
    }


    // update
    public function update(CourseRequest $request)
    {
        $course = Course::find($request->id);
        if (!$course) {
            return redirect()->route('admin.not.found');
        }

        if ($request->hasFile('photo')) {
            if (!empty($course->photo)) {

                //delete old photo
                $public_path = public_path('/adminBoard/uploadedImages/courses//') . $course->photo;
                if (File::exists($public_path)) {
                    File::delete($public_path);
                }

                // upload new photo
                $photo_file = $request->file('photo');
                $photo_destination = public_path('/adminBoard/uploadedImages/courses//');
                $photo = $this->saveImage($photo_file, $photo_destination);
            } else {

                $photo_file = $request->file('photo');
                $photo_destination = public_path('/adminBoard/uploadedImages/courses//');
                $photo = $this->saveImage($photo_file, $photo_destination);
            }
        } else {
            if (!empty($course->photo)) {
                $photo = $course->photo;
            } else {
                $photo = '';
            }
        }


        $site_lang_en = setting()->site_lang_en;

        $course->update(
            [
                'title_en_slug' => slug($request->title_en),
                'title_ar_slug' => $site_lang_en == 'on' ? slug($request->title_ar) : '',
                'title_ar' =>  $request->title_ar ,
                'title_en' => $site_lang_en == 'on' ? $request->title_en : '',
                'description_ar' => $request->description_ar,
                'description_en' => $site_lang_en == 'on' ? $request->description_en : '',
                'hours' => $request->hours,
                'cost' => $request->cost,
                'discount' => $request->discount,
                'start_at' => $request->start_at,
                'end_at' => $request->end_at,
                'zoom_link' => $request->zoom_link,
                'photo' => $photo,
                'language' =>   $site_lang_en == 'on' ? 'ar_en'  : 'ar',
            ]
        );


        return $this->returnSuccessMessage(__('general.update_success_message'));
    }



    // destroy
    public function destroy(Request $request)
    {
        if ($request->ajax()) {
            $course = Course::find($request->id);
            if (!$course) {
                return redirect()->route('admin.not.found');
            }

            if ($course->delete()) {
                return $this->returnSuccessMessage(__('general.move_to_trash'));
            } else {
                return $this->returnError(__('general.delete_error_message'), 400);
            }
        }
    }
    // get trashed
    public function trashed()
    {
        $title = __('general.trashed');
        $courses = Course::onlyTrashed()->orderByDesc('deleted_at')->paginate(15);
        return view('admin.courses.trashed', compact('title', 'courses'));
    }

    // restore
    public function restore(Request $request)
    {
        if ($request->ajax()) {
            $course = Course::onlyTrashed()->find($request->id);
            if (!$course) {
                return redirect()->route('admin.not.found');
            }
            if ($course->restore()) {
                return $this->returnSuccessMessage(__('general.restore_success_message'));
            } else {
                return $this->returnError('general.restore_error_message', 404);
            }
        }
    }

    // force delete
    public function forceDelete(Request $request)
    {
        if ($request->ajax()) {
            $course = Course::onlyTrashed()->find($request->id);

            if (!$course) {
                return redirect()->route('admin.not.found');
            }

            if (!empty($course->photo)) {
                $public_path = public_path('/adminBoard/uploadedImages/courses//') . $course->photo;
                if (File::exists($public_path)) {
                    File::delete($public_path);
                }
            }

            if ($course->forceDelete()) {
                return $this->returnSuccessMessage(__('general.delete_success_message'));
            } else {
                return $this->returnError(__('general.delete_error_message'), 404);
            }
        }
    }

    // change status
    public function changeStatus(Request $request)
    {
        if ($request->ajax()) {
            $course = Course::find($request->id);
            if (!$course) {
                return redirect()->route('admin.not.found');
            }
            if ($request->statusSwitch == 'true') {
                $course->status = 'on';
                $course->save();
            } else {
                $course->status = '';
                $course->save();
            }

            return $this->returnSuccessMessage(__('general.change_status_success_message'));
        }
    }

    // change active
    public function changeActive(Request $request)
    {
        if ($request->ajax()) {
            $course = Course::find($request->id);
            if (!$course) {
                return redirect()->route('admin.not.found');
            }
            if ($request->activeSwitch == 'true') {
                $course->active = 'on';
                $course->save();
            } else {
                $course->active = '';
                $course->save();
            }

            return $this->returnSuccessMessage(__('general.change_status_success_message'));
        }
    }
}
