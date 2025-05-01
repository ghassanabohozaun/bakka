<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;



class Student extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    use SoftDeletes;
    protected $table = 'students';
    protected $fillable = ['name_ar', 'name_en', 'password', 'mobile', 'email', 'whatsapp', 'gender', 'freeze','revenue_id', 'photo'];
    protected $hidden = ['created_at', 'updated_at', 'remember_token'];


    // relations
    // courses
    public function courses(){
        return $this->belongsToMany(Course::class,'course_student')->orderByPivot('id','desc')->withPivot('id')->withPivot('enrolled_date');
    }

    // revenues
    public function revenues(){
        return $this->hasMany(Revenue::class);
    }
}
