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


//Home
Route::get('/', function () {return view('welcome');});
//Laravel Authentication Routes
Auth::routes();
//Dashboard
Route::get('/home', 'UserController@index')->name('home');
//Resource routes for the user controller (CRUD)
Route::resource('user', UserController::class);