<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Department;
use App\Models\User;

Route::get('/', function () {
    return view('home');
});

Route::get('/department', [DepartmentController::class, 'index']);
Route::get('/department/{id}', [DepartmentController::class, 'show']);


Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
// Route::get('/user', function () {
//     return view('/user');
// });

Route::get('/project', [ProjectController::class, 'index']);
Route::get('/project/{id}', [ProjectController::class, 'show']);

Route::get('/task', [TaskController::class, 'index']);
Route::get('/task/{id}', [TaskController::class, 'show']);