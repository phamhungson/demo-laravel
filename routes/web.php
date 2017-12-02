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
    return view('content.index');
});
Route::get('home',['as'=>'home','uses'=>'PagesController@getHome']);
Route::get('login',['as'=>'login','uses'=>'PagesController@getLogin']);
Route::get('product',['as'=>'product','uses'=>'PagesController@getProduct']);
Route::get('product_type',['as'=>'product_type','uses'=>'PagesController@getProductType']);
Route::get('register',['as'=>'register','uses'=>'PagesController@getRegister']);
Route::get('checkout',['as'=>'checkout','uses'=>'PagesController@getCheckOut']);
Route::get('about',['as'=>'about','uses'=>'PagesController@getAbout']);
Route::get('404',['as'=>'404','uses'=>'PagesController@get404']);
Route::get('contact',['as'=>'contact','uses'=>'PagesController@getContact']);
Route::get('register',['as'=>'register','uses'=>'RegisterController@register']);
Route::post('register',['as'=>'register','uses'=>'RegisterController@postRegister']);
Route::get('login',['as'=>'login','uses'=>'LoginController@login']);
Route::post('login',['as'=>'login','uses'=>'LoginController@postLogin']);