<?php

use Illuminate\Support\Facades\Route;
use App\Models\Department;

Route::get('/', function () {
    // $departments = Department::all();

    // dd($departments);

    return view('home');
});

Route::get('/department', function () {
    return view('department', [
        'departments' => Department::all()
    ]);
});

Route::get('/department/{id}', function ($id) {
    $department = Department::find($id);

    return view('department', ['department' => $department]);
});

Route::get('/user', function () {
    return view('/user');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/task', function () {
    return view('task');
});
