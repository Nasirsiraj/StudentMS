@extends('layout.master')
@section('content')
    @if(count($students) == 0)
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <h1 align="center">No student found</h1>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
    @else
        <br>
        <h1>All Students:</h1>
        <br><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Roll</th>
                <th scope="col">Reg</th>
                <th scope="col">Email</th>
                <th scope="col">Department</th>
                <th scope="col">Semester</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
           @foreach($students as $student)
               <tr>
                   <th scope="row">{{$student-> id}}</th>
                   <td>{{$student-> name}}</td>
                   <td>{{$student-> roll}}</td>
                   <td>{{$student-> reg}}</td>
                   <td>{{$student-> email}}</td>
                   <td>{{$student-> department}}</td>
                   <td>{{$student-> semester}}</td>
                   <td>
                       <a type="button" class="btn btn-warning" href="/edit/{{$student-> id}}">Edit</a>
                   </td>
                   <td>
                       <a type="button" class="btn btn-danger" href="/delete/{{$student-> id}}">Delete</a>
                   </td>
               </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    <br><br><br><br>
    <br><br>
@stop
