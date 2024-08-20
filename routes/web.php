<?php

use App\Livewire\CreateCategorie;
use App\Livewire\CreateTask;
use App\Livewire\HomeGest;
use Illuminate\Support\Facades\Route;
use App\Livewire\IndexCategories;
use App\Livewire\IndexTasks;
use App\Livewire\ShowTask;

Route::get('/', HomeGest::class)->name('home');
// Tasks
Route::get('/tasks', IndexTasks::class)->name('indexTasks');
Route::get('/criar-task', CreateTask::class)->name('formCreateTask');
Route::get('/show-task/{id}', ShowTask::class)->name('showTask');

// Categorias
Route::get('/categorias', IndexCategories::class)->name('indexCategories');
Route::get('/criar-categoria', CreateCategorie::class)->name('formCreateCategorie');
