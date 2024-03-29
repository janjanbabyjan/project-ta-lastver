<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professors extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'professor_id',
        'professor_name'
    ];
}
