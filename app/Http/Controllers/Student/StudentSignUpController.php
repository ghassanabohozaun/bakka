<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StudentRequest;
use App\Models\Notification;
use App\Models\Student;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class StudentSignUpController extends Controller
{
    use GeneralTrait;

    // get sign up
    public function getSignup()
    {
        $title = __('site.sign_up');
        return view('student.auth.signup', compact('title'));
    }

    // do sign up
    public function doSignup(StudentRequest $request)
    {
        $student = Student::where('email', $request->email)->first();

        if (!$student) {
            $studentCreated = Student::create([
                'name_ar' => $request->name_ar,
                'name_en' => $request->name_en,
                'password' => bcrypt($request->password),
                'mobile' => $request->mobile,
                'email' => $request->email,
                'whatsapp' => $request->whatsapp,
                'gender' => $request->gender,
                'freeze' => 'on',
                'photo' => '',
            ]);

            //  Admin notification
            Notification::create([
                'title_ar' => 'تنبيه تسجيل طالب جديد في الموقع ',
                'title_en' => 'Sign Up New Student Notification',
                'details_ar' => ' قام الطالب ' . $request->name_ar . ' بالتسجيل في الموقع ',
                'details_en' => ' The Student ' . $request->name_en . ' sign up in website',
                'notify_status' => 'send',
                'notify_class' => 'unread',
                'notify_for' => 'admin',
            ]);


            // student notification
            Notification::create([
                'title_ar' => 'تم تسجيلك في الموقع بنجاح',
                'title_en' => 'Successfully Sign Up In Website',
                'details_ar' => ' تمت عملية تسجيلك كطالب جديد معنا ' ,
                'details_en' => ' Your Sign Up As Student Successfully' ,
                'notify_status' => 'send',
                'notify_class' => 'unread',
                'notify_for' => 'student',
                'student_id' => $studentCreated->id,
            ]);

            return $this->returnSuccessMessage(__('site.signup_success_message'));
        } else {
            return $this->returnError(__('site.you_have_already_registered_with_us'), 400);
        }
    }
}
