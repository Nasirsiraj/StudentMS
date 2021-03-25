<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class RegisterStudent extends Controller
{
    public function index()
    {
        return view('register_student');
    }
    public function create()
    {
        return 'create';
    }
    public function store(Request $request)
    {
        $student = new Student();
        $student-> name = $request-> name;
        $student-> roll = $request-> roll;
        $student-> reg = $request-> reg;
        $student-> email = $request-> email;
        $student-> department = $request-> department;
        $student-> semester = $request-> semester;

        $isSaved = $student-> save();
        if($isSaved == 0){
            return view('register_student_failed');
        }else{
            return view('register_student_succeed');
        }

    }
    public function show($id)
    {
        return 'show';
    }
    public function edit($id)
    {
        return 'edit';
    }
    public function update(Request $request, $id)
    {
        return 'update';
    }
    public function destroy($id)
    {
        return 'destroy';
    }
}
