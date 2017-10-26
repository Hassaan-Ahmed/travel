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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
//    return view('slider');
});

Route::get('user/profile','UsersController@profile');
Route::get('about','AdminAboutController@getUs');
Route::get('user/profile/image','UsersController@update_image');
Route::resource('/tour','AdminUserController',
    [ 'only' => ['show','index']] );
Route::resource('/continent','AdminContinentController',
    [ 'only' => ['index']] );
Route::resource('/contact','AdminContactController',
    [ 'only' => ['index']] );
Route::resource('/admin/about','AdminAboutController', ['only' => [ 'show']]);
Auth::routes();
Route::group(['middleware'=>'auth'],function (){
    Route::resource('user','UsersController');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'IsAdmin'],function (){
    Route::resource('/admin/continent','AdminContinentController',
        [ 'except' => ['index']] );
    Route::get('/admin/tour','AdminUserController@detail');
    Route::resource('/admin/tour','AdminUserController',
        [ 'except' => ['show','index']] );
    Route::resource('/admin/about','AdminAboutController',
        [ 'except' => ['show']]  );
    Route::resource('/admin/contact','AdminContactController',
        [ 'except' => ['index']] );
    Route::get('/admin/contact','AdminContactController@detail');
});

//Route::group(['middleware'=>'auth'],function (){
//    Route::resource('/user','UsersController');
//});

