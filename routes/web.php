<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// show
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/task/{task}', [TaskController::class, 'show']);

// edit
Route::get('/task/{task}/edit', [TaskController::class, 'edit']);
Route::patch('/task/{task}/edit', [TaskController::class, 'update']);

// create
Route::get('/task/create', [TaskController::class, 'create']);
// Route::post('/task/create', [TaskController::class, 'create']);


// delete/done
Route::delete('task/delete/{task}', [TaskController::class, 'destroy']);


