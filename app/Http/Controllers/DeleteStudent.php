<?php

namespace App\Http\Controllers;

use App\Models\Student;

class DeleteStudent extends Controller
{
    function __invoke($id):string{
        $student = Student::find($id);
        if($student == null){
            return view('delete_student_failed');
        }else{
            $isDeleted = $student-> delete();
            if($isDeleted == 0){
                return view('delete_student_failed');
            }else{
                return view('delete_student_succeed');
            }
        }
    }
}
