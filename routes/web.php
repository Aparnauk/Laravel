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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','FrontendController@homePage')->name('home');

Route::get('new-user','FrontendController@create')->name('create.user');

Route::post('save-user','FrontendController@save')->name('save.user');

Route::get('about-controller','FrontendController@aboutController')->name('about');

Route::get('contact-controller','FrontendController@contactController')->name('contact');


