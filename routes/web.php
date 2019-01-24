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

Route::get('/test/service', 'TestProviderController@index')->middleware('auth');

Route::get('/test/event', 'TestEventController@index')->middleware('auth');

Route::get('/test/lib', 'TestCutomLibController@index')->middleware('auth');

Route::get('/test/redis/send', 'TestRedisController@send')->middleware('auth');

Route::get('/test/redis/response', 'TestRedisController@response')->middleware('auth');

Route::get('/test/redis/recive/', 'TestRedisController@recive')->middleware('auth');

Route::get('/test/user/{id}', 'TestUserController@index')->middleware('auth');

Route::get('/test/mail', 'TestMailController@send')->middleware('auth');

Route::get('/test/role', 'TestRoleController@index')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
