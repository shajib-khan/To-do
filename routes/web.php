<?php

use App\Livewire\ToDo;
use App\Livewire\EditPost;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', ToDo::class)->name('todo');
Route::get('edit-post/{id}', EditPost::class)->name('edit.post');
