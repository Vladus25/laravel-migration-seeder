<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'TestController@home') -> name('home');
Route::get('/game/{id}', 'TestController@game') -> name('game');
Route::get('/create/game', 'TestController@create') -> name('create');
Route::post('/store/game', 'TestController@store') -> name('store');
