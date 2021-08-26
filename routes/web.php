<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact/id/{id}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\ContactController@id'
]);

Route::get('/contacts', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\ContactController@all'
]);
