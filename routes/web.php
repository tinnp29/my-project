<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.index');
});

// Test upload
Route::post('/upload', 'UserController@uploadAvatar');

Route::resource('hobby', 'HobbyController');


// Administrator
Route::get('admin', 'AdminController@index');
Route::resource('admin/user', 'UserController');

Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
