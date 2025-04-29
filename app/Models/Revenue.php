<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasFactory;

    protected $table = 'revenues';
    protected $fillable = [
        'student_id',
        'date',
        'value',
        'revenue_for',
        'details',
        'payer_id',
        'payment_id',
        'token',
        'payment_method',
    ];
    protected $hidden = ['updated_at'];
}
