<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\MoviesController@index')->name('movies.index');
Route::get('/movies/{id}', 'App\Http\Controllers\MoviesController@show')->name('movies.show');
 