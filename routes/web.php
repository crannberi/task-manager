<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/departments', function () {
    return view('departments');
});

Route::get('/users', function () {
    return view('welcome');
});

Route::get('/projects', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    return view('welcome');
});