<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);
Route::put('tasks/{task}/complete', [TaskController::class, 'complete'])->name("tasks.complete");
