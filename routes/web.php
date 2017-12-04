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



######################### ADMIN ############################################################
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	Route::group(['prefix'=>'product'],function(){
		Route::get('list',['as'=>'list_product','uses'=>'AdminController@listProduct']);
		Route::get('add',['as'=>'add_product','uses'=>'AdminController@addProduct']);
		Route::post('add',['as'=>'add_product','uses'=>'AdminController@postAddProduct']);
		});

	Route::group(['prefix'=>'manafacture'],function(){
		Route::get('add',['as'=>'add_manafacture','uses'=>'AdminController@addManafacture']);
		Route::post('add',['as'=>'add_manafacture','uses'=>'AdminController@postAddManafacture']);
		Route::get('list',['as'=>'list_manafacture','uses'=>'AdminController@listManafacture']);
		});
	Route::group(['prefix'=>'category'],function(){
		Route::get('add',['as'=>'add_category','uses'=>'AdminController@addCategory']);
		Route::post('add',['as'=>'add_category','uses'=>'AdminController@postAddCategory']);
		Route::get('list',['as'=>'list_category','uses'=>'AdminController@listCategory']);
		});
	Route::group(['prefix'=>'order'],function(){
		Route::get('list',function(){
			return view('admin.order');
		});
	});
	Route::group(['prefix'=>'user'],function(){
		Route::get('list',function(){
			return view('admin.list_user');
		});
		Route::get('add',function(){
			return view('admin.add_user');
		});
	});
});

Route::get('admin-login',['as'=>'admin-login','uses'=>'AdminLoginController@loginAdmin']);
Route::post('admin-login',['as'=>'admin-login','uses'=>'AdminLoginController@login']);  