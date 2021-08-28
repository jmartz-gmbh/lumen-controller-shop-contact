<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact/id/{id}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\ShopContactController@id'
]);

Route::get('/contacts', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\ShopContactController@all'
]);
