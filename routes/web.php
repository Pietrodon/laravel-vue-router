<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->namespace('Admin')
    ->group(function(){

    // Route::get('/home', 'HomeController@index')->name('home');
    // Route::get('/create', 'PostController@index')->name('create');
    // Route::get('/edit', 'PostController@index')->name('edit');
    // Route::get('/delete', 'PostController@index')->name('delete');
    Route::resource('posts','PostController');
});
