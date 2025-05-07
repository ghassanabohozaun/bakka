<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'courses';
    protected $fillable = ['title_ar_slug', 'title_en_slug', 'title_ar', 'title_en', 'description_ar',
    'description_en', 'hours', 'cost', 'discount', 'zoom_link', 'language', 'status', 'show_cost',
    'start_at', 'end_at', 'course_details', 'photo'];

    protected $hidden = ['created_at', 'updated_at'];

    // relations
    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_student')
            ->orderByPivot('id', 'desc')
            ->withPivot('id')
            ->withPivot('enrolled_date')
            ->withPivot('certification_flag')
            ->withPivot('enroll_agreement')
            ->withPivot('student_id');
    }
}
