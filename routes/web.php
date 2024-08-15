<?php

use App\Livewire\IndexTasks;
use Illuminate\Support\Facades\Route;


Route::get('/tasks', IndexTasks::class);
Route::get('/', function () {
    return view('welcome');
});
