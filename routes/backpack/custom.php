<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VocabularyController;


// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::get('vocabulary', 'VocabularyController@index')->name('page.vocabulary.index');
    Route::get('word', 'WordController@index')->name('page.word.index');
    Route::get('show', 'ShowController@index')->name('page.show.index');
    Route::get('edit', 'EditController@index')->name('page.edit.index');
}); // this should be the absolute last line of this file