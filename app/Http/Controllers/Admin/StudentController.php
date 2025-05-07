<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StudentRequest;
use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\Student;
use App\Traits\GeneralTrait;
use File;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    use GeneralTrait;
    // index
    public function index()
    {
        $title = __('menu.students');
        $students = Student::withoutTrashed()->orderByDesc('created_at')->paginate(15);
        return view('admin.students.index', compact('title', 'students'));
    }

    public function create()
    {
        $title = __('menu.add_new_student');
        return view('admin.students.create', compact('title'));
    }

    public function store(StudentRequest $request)
    {
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $desctination_path = public_path('/adminBoard/uploadedImages/students//');
            $photo_path = $this->saveImage($photo, $desctination_path);
        } else {
            $photo_path = '';
        }

        $student = Student::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'password' => bcrypt($request->password),
            'mobile' => $request->mobile,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'gender' => $request->gender,
            'freeze' => '',
            'photo' => $photo_path,
        ]);

        if ($student) {
            return $this->returnSuccessMessage(__('general.add_success_message'));
        } else {
            return $this->returnError(__('general.add_error_message'), 400);
        }
    }

    public function edit($id = null)
    {
        $title = __('students.student_update');
        $student = Student::withoutTrashed()->findOrFail($id);
        if (!$student) {
            return redirect()->route('admin.not.found');
        }
        return view('admin.students.update', compact('title', 'student'));
    }

    public function update(StudentRequest $request, $id = null)
    {

        $student = Student::findOrFail($request->id);

        if (!$student) {
            return redirect()->route('admin.not.found');
        }

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


        $student->update([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'password' => $password,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'gender' => $request->gender,
            'photo' => $photo_path,
        ]);

        if ($student) {
            return $this->returnSuccessMessage(__('general.update_success_message'));
        } else {
            return $this->returnError(__('general.update_error_message'), 400);
        }
    }

    // trashed
    public function trashed()
    {
        $title = __('menu.trashed_students');
        $students = Student::onlyTrashed()->orderByDesc('created_at')->paginate(15);
        return view('admin.students.trashed', compact('title', 'students'));
    }

    public function destroy(Request $request)
    {
        if ($request->ajax()) {
            $student = Student::find($request->id);
            if (!$student) {
                return redirect()->route('admin.not.found');
            }

            if ($student->delete()) {
                return $this->returnSuccessMessage(__('general.move_to_trash'));
            } else {
                return $this->returnError(__('general.destroy_error_message'), 400);
            }
        }
    }
    public function restore(Request $request)
    {
        if ($request->ajax()) {
            $student = Student::onlyTrashed()->find($request->id);
            if (!$student) {
                return redirect()->route('admin.not.found');
            }
            if ($student->restore()) {
                return $this->returnSuccessMessage(__('general.restore_success_message'));
            } else {
                return $this->returnError(__('general.restore_error_message'), 400);
            }
        }
    }

    public function forceDelete(Request $request)
    {
        if ($request->ajax()) {
            $student = Student::onlyTrashed()->find($request->id);
            if (!$student) {
                return redirect()->route('admin.not.found');
            }


            $studentCourses = CourseStudent::where('student_id', $request->id)->get();
            if (!$studentCourses->isEmpty()) {
                return $this->returnError(__('students.cannot_be_deleted_because_it_have_courses'), 500);
            }

            if ($student->forceDelete()) {
                if (!empty($student->photo)) {
                    $photo_path = public_path('/adminBoard/uploadedImages/students//' . $student->photo);
                    if (File::exists($photo_path)) {
                        File::delete($photo_path);
                    }
                }
                return $this->returnSuccessMessage(__('general.delete_success_message'));
            } else {
                return $this->returnError(__('general.delete_error_message'), 400);
            }
        }
    }

    public function changeFreeze(Request $request)
    {
        if ($request->ajax()) {
            $student = Student::find($request->id);
            if ($request->switchFreeze == 'true') {
                $student->freeze = 'on';
                $student->save();
            } else {
                $student->freeze = '';
                $student->save();
            }
            return $this->returnSuccessMessage(__('general.change_status_success_message'));
        }
    }

    public function profile($id = null){
        if(!$id){
            return redirect()->route('admin.not.found');
        }
        $student = Student::find($id);
        $courses = $student->courses;

        $title = __('students.profile');
        return view('admin.students.profile' , compact('title','student','courses'));

    }
}
