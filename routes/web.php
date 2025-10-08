<?php

use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware('auth')->group(function () {
    // show
    Route::get('/tasks', [TaskController::class, 'index']);
    Route::get('/task/{task}', [TaskController::class, 'show']);

    // edit
    Route::get('/task/{task}/edit', [TaskController::class, 'edit'])->can('edit', 'task');
    Route::patch('/task/{task}/edit', [TaskController::class, 'update']);

    // create
    Route::get('/tasks/create', [TaskController::class, 'create']);
    Route::post('/task/create', [TaskController::class, 'store']);

    // delete/done
    Route::delete('task/delete/{task}', [TaskController::class, 'destroy']);

    // logout

});

    // register
    Route::get('/register', [RegisterUserController::class, 'create']);
    Route::post('/register', [RegisterUserController::class, 'store']);

    // login
    Route::get('/login', [LoginUserController::class, 'create'])->name('login');
    Route::post('/login', [LoginUserController::class, 'store']);

    Route::post('/logout', [LoginUserController::class, 'destroy']);

