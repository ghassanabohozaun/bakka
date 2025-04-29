<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentUpdateAccountRequest;
use App\Models\Course;
use App\Models\Student;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use File;
class StudentDashboardController extends Controller
{

    use GeneralTrait;
    //index
    public function index()
    {
        $title = __('site.portfolio');
        return view('student.portfolio', compact('title'));
    }

    // courses
    public function courses()
    {
        $title = __('site.courses');
        if (Lang() == 'ar') {
            //////  Courses
            $courses = Course::withoutTrashed()
                ->orderByDesc('id')
                ->where('status', 'on')
                ->where('active', 'on')
                ->where(function ($q) {
                    $q->where('language', 'ar')->orWhere('language', 'ar_en');
                })
                ->paginate(perPage: 2);

            ///// English
        } else {
            //////  Courses
            $courses = Course::withoutTrashed()
                ->orderByDesc('id')
                ->where('status', 'on')
                ->where('active', 'on')
                ->where(function ($q) {
                    $q->where('language', 'en')->orWhere('language', 'ar_en');
                })
                ->paginate(perPage: 2);
        }
        return view('student.courses', compact('title', 'courses'));
    }

    // courses paging
    public function coursesPaging(Request $request)
    {
        if ($request->ajax()) {
            if (Lang() == 'ar') {
                //////  Courses
                $courses = Course::withoutTrashed()
                    ->orderByDesc('id')
                    ->where('status', 'on')
                    ->where('active', 'on')
                    ->where(function ($q) {
                        $q->where('language', 'ar')->orWhere('language', 'ar_en');
                    })
                    ->paginate(perPage: 2);

                ///// English
            } else {
                //////  Courses
                $courses = Course::withoutTrashed()
                    ->orderByDesc('id')
                    ->where('status', 'on')
                    ->where('active', 'on')
                    ->where(function ($q) {
                        $q->where('language', 'en')->orWhere('language', 'ar_en');
                    })
                    ->paginate(perPage: 2);
            }
        }
        return view('student.courses-paging', compact('courses'))->render();
    }

    // get update account
    public function getUpdateAccount()
    {
        $title = __('site.account_update');
        return view('student.account-update', compact('title'));
    }

    public function updateAccount(StudentUpdateAccountRequest $request)
    {
        $student = Student::findOrFail($request->id);



        if ($request->hasFile('photo')) {
            if (!empty($student->photo)) {
                $old_photo_path = public_path('/adminBoard/uploadedImages/students//' . $student->photo);
                if (File::exists($old_photo_path)) {
                    File::delete($old_photo_path);
                }

                $photo = $request->file('photo');
                $destination_path = public_path('/adminBoard/uploadedImages/students//');
                $photo_path = $this->saveImage($photo, $destination_path);
            } else {
                $photo = $request->file('photo');
                $destination_path = public_path('/adminBoard/uploadedImages/students//');
                $photo_path = $this->saveImage($photo, $destination_path);
            }
        } else {
            if (!empty($student->photo)) {
                $photo_path = $student->photo;
            } else {
                $photo_path = '';
            }
        }


        if (!empty($request->input('password'))) {
            $password = bcrypt($request->password);
        } else {
            $password = $student->password;
        }


        if ($student) {
            $student->update([
                    'name_ar' => $request->name_ar,
                    'name_en' => $request->name_en,
                    'password' => $password,
                    'mobile' => $request->mobile,
                    'whatsapp' => $request->whatsapp,
                    'gender' => $request->gender,
                    'photo' => $photo_path,
            ]);
            return $this->returnSuccessMessage(__('general.update_success_message'));
        } else {
            return $this->returnError(__('general.update_error_message')  , 404);
        }
    }
}
