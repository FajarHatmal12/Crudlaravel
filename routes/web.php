<?php

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('create');
});

Route::get('/Ujian', 'UjianController@index');
Route::get('/Ujian/create', 'UjianController@create')->name('create');
Route::post('/Ujian', 'UjianController@store')->name('index');
Route::get('/Ujian/{id}/edit', 'UjianController@edit')->name('edit');
Route::put('/Ujian/{id}', 'UjianController@update')->name('update');
Route::delete('/Ujian/{id}', 'UjianController@destroy')->name('destroy');






