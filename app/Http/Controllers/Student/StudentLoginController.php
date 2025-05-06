<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentLoginRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentLoginController extends Controller
{


    public function getLogin()
    {
        $title = __('site.login');
        return view('student.auth.login', compact('title'));
    }

    /// do Login
    public function doLogin(StudentLoginRequest $request)
    {
        $student = Student::where('email', $request->email)->first();

        if (!$student) {
            return redirect()
                ->route('get.student.login')
                ->with(['error' => __('login.account_unavailable')]);
        } else {
            if ($student->freeze == 'on') {
                return redirect()
                    ->route('get.student.login')
                    ->with(['error' => __('login.account_disabled')]);
            } else {
                if (
                    auth()
                        ->guard('student')
                        ->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])
                ) {
                    return redirect()->route('student.courses');
                } else {
                    return redirect()
                        ->route('get.student.login')
                        ->with(['error' => __('login.login_failed')]);
                } // end  auth else
            }
        } //end student else
    }

    // logout
    public function logout()
    {
        auth()->guard('student')->logout();
        return redirect()->route('get.student.login');
    }

}
