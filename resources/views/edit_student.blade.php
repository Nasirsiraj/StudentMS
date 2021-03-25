@extends('layout.master')
@section('content')
    <br>
    <h1>Edit student info:</h1>
    <br><br>
    <form method="post" action="{{route('edit.store')}}">
        @csrf
        <input
            type="number"
            name="id"
            hidden
            value="{{$student-> id}}">
        <div class="form-group">
            <label for="name">Name</label>
            <input
                value="{{$student-> name}}"
                name="name"
                type="text"
                class="form-control"
                id="name"
                placeholder="name">
        </div>
        <div class="form-group">
            <label for="roll">Roll</label>
            <input
                value="{{$student-> roll}}"
                name="roll"
                type="number"
                class="form-control"
                id="roll"
                placeholder="roll no">
        </div>
        <div class="form-group">
            <label for="reg">Reg</label>
            <input
                value="{{$student-> reg}}"
                name="reg"
                type="number"
                class="form-control"
                id="reg"
                placeholder="reg no">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input
                value="{{$student-> email}}"
                name="email"
                type="email"
                class="form-control"
                id="email"
                placeholder="example@gmail.com">
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <input
                value="{{$student-> department}}"
                name="department"
                type="text"
                class="form-control"
                id="department"
                placeholder="department">
        </div>
        <div class="form-group">
            <label for="semester">Semester</label>
            <input
                value="{{$student-> semester}}"
                name="semester"
                type="text"
                class="form-control"
                id="semester" placeholder="semester">
        </div>
        <input
            name="created_at"
            type="text"
            value="{{$student-> created_at}}"
            hidden/>
        <input
            name="updated_at"
            type="text"
            value="{{$student-> updated_at}}"
            hidden/>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@stop
