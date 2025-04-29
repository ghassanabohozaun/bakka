<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $table = 'notifications';
    protected $fillable = ['title_ar', 'title_en', 'details_ar', 'details_en', 'notify_status', 'notify_class', 'notify_for', 'admin_id', 'student_id'];
    protected $hidden = ['created_at', 'updated_at'];
}
