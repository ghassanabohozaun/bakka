<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
    use HasFactory;

    protected $table = 'course_student';
    protected $fillable = ['course_id','student_id','certification_flag','enroll_agreement','enrolled_date'];
    protected $hidden  =['created_at', 'updated_at'];
}
