<?php

use App\Livewire\HomeGest;
use Illuminate\Support\Facades\Route;
use App\Livewire\IndexCategories;
use App\Livewire\IndexTasks;


Route::get('/', HomeGest::class)->name('home');
Route::get('/tasks', IndexTasks::class)->name('indexTasks');
Route::get('/categorias', IndexCategories::class)->name('indexCategories');
