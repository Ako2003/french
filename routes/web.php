<?php

use App\Http\Controllers\Admin\VocabularyController;
use App\Http\Controllers\Admin\WordController;
use App\Http\Controllers\PagesController;
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

// Route::

Route::post("vocabulary/store",[VocabularyController::class, 'store'])->name('vocabulary.store');
Route::resource("word",WordController::class);
Route::delete("words_mass_destroy",[WordController::class, 'massDestroy'])->name('words.mass_destroy');
