<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class EditStudent extends Controller
{
    public function index(){
        return 'index';
    }
    public function create(){
        return 'create';
    }
    public function store(Request $request){
        $student = Student::find($request-> id);
        $student-> name = $request-> name;
        $student-> roll = $request-> roll;
        $student-> reg = $request-> reg;
        $student-> email = $request-> email;
        $student-> department = $request-> department;
        $student-> semester = $request-> semester;
        $student-> updated_at = $request-> updated_at;
        $student-> created_at = $request-> created_at;

        $isSaved = $student-> save();

        if($isSaved == 0){
            return view('edit_student_failed');
        }else{
            return view('edit_student_succeed');
        }
    }
    public function show($id){
        $student = Student::find($id);
        if($student == null){
            return view('edit_student_failed');
        }else{
            return view('edit_student', compact('student'));
        }
    }
    public function edit($id){
        return 'edit';
    }
    public function update(Request $request, $id){
        return 'update';
    }
    public function destroy($id){
        return 'destroy';
    }
}
