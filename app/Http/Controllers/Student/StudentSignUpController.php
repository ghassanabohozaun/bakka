<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StudentRequest;
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
            $student = Student::create([
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

            return $this->returnSuccessMessage(__('site.signup_success_message'));
        } else {
            return $this->returnError(trans('site.you_have_already_registered_with_us'), 400);
        }
    }
}
