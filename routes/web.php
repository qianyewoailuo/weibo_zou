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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');

Route::get('/signup','UserController@create')->name('signup');

// Route::resource('users','UserController');
// 等价于
Route::get('/users','UserController@index')->name('users.index'); // 显示用户列表
Route::get('/users/create','UserController@create')->name('users.create'); // 创建用户页面
Route::get('/users/{user}','UserController@show')->name('users.show'); // 显示个人用户
Route::post('/users','UserController@store')->name('users.store');  // 创建用户
Route::get('/users/{user}/edit','UserController@edit')->name('users.edit'); // 编辑用户页面
Route::patch('/users/{user}','UserController@update')->name('users.update');  // 更新用户
Route::delete('/users/{user}','UserController@destroy')->name('users.destroy');// 删除用户
