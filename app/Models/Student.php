<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    // student table configuration
    protected $table = 'student';
    protected $primaryKey = 'id';
}
