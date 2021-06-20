<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact/view/{id}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\ContactController@view'
]);

Route::get('/contacts', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\ContactController@all'
]);
