<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TaskController::class,'index'])->name(name:'tasks.index');
Route::get('/tasks/create',[TaskController::class,'create'])->name(name:'tasks.create');
Route::get('/tasks/{task}/edit',[TaskController::class,'edit'])->name(name:'tasks.edit');
Route::get('/tasks/{task}',[TaskController::class,'show'])->name(name:'tasks.show');
Route::post('/tasks',[TaskController::class,'store'])->name(name:'tasks.store');
Route::delete('/tasks/{task}',[TaskController::class,'destroy'])->name(name:'tasks.destroy');
Route::put('/tasks/{task}',[TaskController::class,'update'])->name(name:'tasks.update');