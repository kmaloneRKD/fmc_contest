<?php

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/videos', 'HomeController@getVideos')->name('videos');
Route::get('/burnoff', 'HomeController@getBurnoff')->name('burnoff');
Route::get('/form', 'HomeController@getForm')->name('form');
Route::get('/thankyou', 'HomeController@getThankyou')->name('thankyou');

Route::post('/postcontest', 'HomeController@postContest')->name('postcontest');
// Route::get('/', function () {
//     return view('welcome');
// });
