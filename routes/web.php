<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoteController;
use App\Http\Controllers\LoginController;

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


Route::get('/', [LoginController::class, 'showFormLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::prefix('note')->group(function() {
    Route::get('/home', [NoteController::class, 'showNote'])->name('show.note');
    Route::get('/create', [NoteController::class, 'createNote'])->name('create.note');
    Route::post('/create', [NoteController::class, 'store'])->name('store.note');
    Route::get('/{id}update', [NoteController::class, 'updateNote'])->name('update.note');
    Route::post('/{id}update', [NoteController::class, 'editNote'])->name('edit.note');
    Route::get('/{id}/delete', [NoteController::class, 'deleteNote'])->name('delete.note');
});

