<?php

use Illuminate\Support\Facades\Route;


// home page
Route::redirect('/', '/students');

// all student page
Route::any(
    '/students',
    'App\Http\Controllers\Students');
// register student page
Route::resource(
    '/register',
    'App\Http\Controllers\RegisterStudent');
Route::resource(
    '/edit',
    'App\Http\Controllers\EditStudent');
Route::get(
    '/delete/{id}',
    'App\Http\Controllers\DeleteStudent');
