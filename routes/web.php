<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/why', function () {
    return view('why');
});

Route::get('/iphone', function () {
    return view('iphone');
});

Route::get('/todos', [ToDoController::class, 'index'])->name('todos.index');
Route::get('/todos/create', [ToDoController::class, 'create'])->name('todos.create');
Route::post('/todos', [ToDoController::class, 'store'])->name('todos.store');
Route::get('/todos/{todo}', [ToDoController::class, 'show'])->name('todos.show');
Route::get('/todos/{todos}/edit', [ToDoController::class, 'edit'])->name('todos.edit');
Route::put('/todos/{todo}', [ToDoController::class, 'update'])->name('todos.update');
// Route::delete('/todos/{todo}', [ToDoController::class, 'destroy'])->name('todos.destroy');

// Route::resource("/todos", ToDoController::class);
Route::resource("/diaries", DiaryController::class);