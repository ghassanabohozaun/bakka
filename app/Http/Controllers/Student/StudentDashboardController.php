<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentUpdateAccountRequest;
use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\Notification;
use App\Models\Revenue;
use App\Models\Student;
use App\Traits\GeneralTrait;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;

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
        $student = Student::findOrFail(student()->id());
        $studentCourses  =$student->courses()->paginate(perPage: 2);
        return view('student.courses', compact('title', 'studentCourses'));
    }

    // courses paging
    public function coursesPaging(Request $request)
    {
        if ($request->ajax()) {
            $student = Student::findOrFail(student()->id());
            $studentCourses  =$student->courses()->paginate(perPage: 2);
        }
        return view('student.courses-paging', compact('studentCourses'))->render();
    }

    // get update account
    public function getUpdateAccount()
    {
        $title = __('site.account_update');
        return view('student.account-update', compact('title'));
    }

    //  update account
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
                // 'name_ar' => $request->name_ar,
                // 'name_en' => $request->name_en,
                  // 'mobile' => $request->mobile,
                'password' => $password,
                'whatsapp' => $request->whatsapp,
                'gender' => $request->gender,
                'photo' => $photo_path,
            ]);
            return $this->returnSuccessMessage(__('general.update_success_message'));
        } else {
            return $this->returnError(__('general.update_error_message'), 404);
        }
    }

    public function checkout($id = null)
    {
        if (!$id) {
            return redirect()->route('index');
        }
        $title = __('site.checkout');
        $course = Course::findOrFail($id);
        return view('student.course-checkout', compact('title', 'course'));
    }

    // enroll course
    public function enrollCourse(Request $request)
    {
        $course = Course::findOrFail($request->course_id);
        if (!$course) {
            return redirect()->route('admin.not.found');
        }

        // check student enrolled on course
        $courseStudents = $course->students->where('id', student()->id());

        if ($courseStudents->isEmpty()) {
            //enroll student
            $courseStudent = $course->students()->attach(student()->id(), ['enrolled_date' => Carbon::now()->format('Y-m-d')]);
            // add revenue
            $this->addRevenue($request->course_id, student()->id());

            // add notifications
            $this->addAdminNotification($course, student()->id());
            $this->addStudentNotification($course, student()->id());

            return $this->returnSuccessMessage(__('site.coures_enrolled'));
        } else {
            return $this->returnError(__('site.coures_not_enrolled'), 404);
        }
    }

    //add revenue
    public function addRevenue($course_id, $student_id)
    {
        $coureCost = Course::find($course_id)->cost;
        $coureDiscount = Course::find($course_id)->discount;

        if ($coureDiscount == '' || $coureDiscount == 0) {
            $value = $coureCost;
        } else {
            $value = $coureDiscount;
        }

        Revenue::create([
            'student_id' => $student_id,
            'date' => Carbon::now()->format('Y-m-d'),
            'value' => $value,
            'revenue_for' => $course_id,
            'details' => 'enroll_course',
            'payment_method' => 'payment_gateway',
        ]);
    }

    // add admin notification
    public function addAdminNotification($course, $student_id)
    {
        Notification::create([
            'title_ar' => 'تنبيه التسجيل في دورة',
            'title_en' => 'Enrolled In Course Notification',
            'details_ar' => ' قام الطالب   ' . Student::find($student_id)->name_ar . ' بالتسجيل في الدورة التالية  ' . $course->title_ar,
            'details_en' => ' The Student  ' . Student::find($student_id)->name_en . ' Enrolled In This Course   ' . $course->title_en,
            'notify_status' => 'send',
            'notify_class' => 'unread',
            'notify_for' => 'admin',
            'admin_id' => admin()->user()->id,
            'student_id' => $student_id,
        ]);
    }

    // add student notification
    public function addStudentNotification($course, $student_id)
    {
        Notification::create([
            'title_ar' => 'تنبيه التسجيل في دورة',
            'title_en' => 'Enrolled In Course Notification',
            'details_ar' => ' قمت بالتسجيل في الدورة التالية ' . $course->title_ar,
            'details_en' => ' You Enrolled In This Course  ' . $course->title_en,
            'notify_status' => 'send',
            'notify_class' => 'unread',
            'notify_for' => 'student',
            'admin_id' => admin()->user()->id,
            'student_id' => $student_id,
        ]);
    }


}
