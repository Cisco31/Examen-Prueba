<?php

use App\Http\Livewire\Libros\IndexLibros;
use App\Http\Livewire\Libros\LibrosCreate;
use App\Http\Livewire\Libros\LibrosEdit;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/libros', IndexLibros::class)->name('libros.index');
Route::get('/libros/create', LibrosCreate::class)->name('libros.create');
Route::get('/libros/{libro}/edit', LibrosEdit::class)->name('libros.edit');
