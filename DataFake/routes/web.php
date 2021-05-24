<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'TestController@home') -> name('home');
Route::get('/game/{id}', 'TestController@game') -> name('game');
