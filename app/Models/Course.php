<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_code',
        'course_name_thai',
        'course_name_english',
        'credits',
        'year',
        'category_id',
        'branch_id',
        'professor_id',
        'created_at',
        'updated_at'
    ];
}
