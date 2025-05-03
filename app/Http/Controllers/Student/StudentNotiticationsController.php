<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class StudentNotiticationsController extends Controller
{
    //index
    public function index()
    {
        $notifications = Notification::where('student_id', student()->id())
            ->where('notify_class', 'unread')
            ->where('notify_for', 'student')
            ->orderByDesc('created_at')
            ->get();
        return view('student.includes.notifications', compact('notifications'));
    }
}
