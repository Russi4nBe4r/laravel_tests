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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/service', 'TestProviderController@index');

Route::get('/test/event', 'TestEventController@index');

Route::get('/test/lib', 'TestCutomLibController@index');

Route::get('/test/redis/send', 'TestRedisController@send');

Route::get('/test/redis/response', 'TestRedisController@response');

Route::get('/test/redis/recive/', 'TestRedisController@recive');

Route::get('/test/user/{id}', 'TestUserController@index');

Route::get('/test/mail', 'TestMailController@send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
