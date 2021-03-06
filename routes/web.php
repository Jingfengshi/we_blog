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

Route::group(['prefix' => 'backend','namespace'=>'Backend'], function ($route) {
    $route->get('login','LoginController@showLoginForm')->name('login');
    $route->post('login', 'LoginController@login');
    $route->get('logout', 'LoginController@logout')->name('logout');

    $route->get('/','HomeController@index')->name('backend.home');

    $route->get('user','UserController@index')->name('user.index');
    $route->get('user_add','UserController@create')->name('user.add');
    $route->post('user','UserController@store')->name('user.store');
    $route->get('user_edit/{user}','UserController@edit')->name('user.edit');
    $route->put('user_update/{user}','UserController@update')->name('user.update');
    $route->delete('user_delete/{user}','UserController@delete')->name('user.delete');
});





