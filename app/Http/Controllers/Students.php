<?php

namespace App\Http\Controllers;

use App\Models\Student;

class Students extends Controller
{
    public function __invoke()
    {

        $students = Student::all();
        return view('students', compact('students'));
    }
}
