@extends('layout.master')
@section('content')
    <br>
    <h1>Enter student info</h1>
    <br><br>
    <form method="post" action="{{ route('register.store')  }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="name">
        </div>
        <div class="form-group">
            <label for="roll">Roll</label>
            <input name="roll" type="number" class="form-control" id="roll" placeholder="roll no">
        </div>
        <div class="form-group">
            <label for="reg">Reg</label>
            <input name="reg" type="number" class="form-control" id="reg" placeholder="reg no">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="example@gmail.com">
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <input name="department" type="text" class="form-control" id="department" placeholder="department">
        </div>
        <div class="form-group">
            <label for="semester">Semester</label>
            <input name="semester" type="text" class="form-control" id="semester" placeholder="semester">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
