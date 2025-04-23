<?php

use Illuminate\Support\Facades\Route;

// Viesu maršruti
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('welcome'); // Welcome skats viesiem
    })->name('welcome');

    Route::get('/register', [App\Http\Controllers\RegisterController::class, 'create'])->name('register');
    Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])->name('register');

    Route::get('/login', [App\Http\Controllers\SessionController::class, 'create'])->name('login');
    Route::post('/login', [App\Http\Controllers\SessionController::class, 'store'])->name('login');
});

// Pieteikušos lietotāju maršruti
Route::middleware('auth')->group(function () {
    Route::post('/logout', [App\Http\Controllers\SessionController::class, 'destroy'])->name('logout');

    // Uzdevumu maršruti
    Route::get('/todos', [App\Http\Controllers\ToDoController::class, 'index'])->name('todos.index');
    Route::get('/todos/create', [App\Http\Controllers\ToDoController::class, 'create'])->name('todos.create');
    Route::post('/todos', [App\Http\Controllers\ToDoController::class, 'store'])->name('todos.store');
    Route::get('/todos/{todo}', [App\Http\Controllers\ToDoController::class, 'show'])->name('todos.show');
    Route::get('/todos/{todo}/edit', [App\Http\Controllers\ToDoController::class, 'edit'])->name('todos.edit');
    Route::put('/todos/{todo}', [App\Http\Controllers\ToDoController::class, 'update'])->name('todos.update');
    Route::delete('/todos/{todo}', [App\Http\Controllers\ToDoController::class, 'destroy'])->name('todos.destroy');

    // Dienasgrāmatas maršruti
    Route::resource('/diaries', App\Http\Controllers\DiaryController::class);
});