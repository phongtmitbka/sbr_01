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

Auth::routes();

Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('auth/facebook', ['as' => 'facebook.login', 'uses' => 'Auth\LoginController@redirectToProvider']);

Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('user/confirmation/{token}', ['as' => 'confirmation', 'uses' => 'Auth\RegisterController@confirmation']);

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {

    Route::get('setting', ['as' => 'user.setting', 'uses' => 'AccountController@setting']);

    Route::post('update', ['as' => 'user.update', 'uses' => 'AccountController@update']);

    Route::get('changePass', ['as' => 'user.changePass', 'uses' => 'AccountController@changePass']);

    Route::post('storePass', ['as' => 'user.storePass', 'uses' => 'AccountController@storePass']);
});

Route::get('search/member', ['as' => 'search.member', 'uses' => 'MemberController@searchMember']);

