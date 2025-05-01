<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class StudentNotiticationsController extends Controller
{
    //index
    public function index(){

        $notifications  = Notification::get();
        return view("student.includes.notifications", compact("notifications"));
    }
}
