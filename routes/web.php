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

Route::get('/todos', [ToDoController::class, 'index']);

Route::get('/diaries', [DiaryController::class, 'index']);

Route::get('/todos/create', [ToDoController::class, 'create']);

Route::post('/todos/store', [ToDoController::class, 'store']);


Route::get('/todos/{t}', [ToDoController::class, 'show']);