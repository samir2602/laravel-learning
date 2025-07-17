<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/about', function(){
    return view('about');
});

Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/create', [TaskController::class, 'create']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit']);
Route::put('/tasks/{task}', [TaskController::class, 'update']);
Route::delete('/tasks/{task}', [TaskController::class, 'destory']);