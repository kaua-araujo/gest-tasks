<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\IndexCategories;
use App\Livewire\IndexTasks;


Route::get('/categorias', function () {
    return view('welcome');
});
Route::get('/tasks', IndexTasks::class);
Route::get('/', function () {
    return view('welcome');
});
