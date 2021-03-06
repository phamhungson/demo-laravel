<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------
-------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('home',['as'=>'home','uses'=>'PagesController@getHome']);
Route::get('product/{id}','PagesController@getProduct');
Route::post('product/{id}','PagesController@comment');
Route::get('product_type/gender/men',['as'=>'product_type_gender_men','uses'=>'PagesController@getProductTypeGenderMen']);
Route::get('product_type/gender/women',
	['as'=>'product_type_gender_women','uses'=>'PagesController@getProductTypeGenderWomen']);
Route::get('product_type/{id}',['as'=>'product_type','uses'=>'PagesController@getProductType']);
Route::get('search',['as'=>'search','uses'=>'PagesController@search']);
Route::get('about',['as'=>'about','uses'=>'PagesController@getAbout']);
Route::get('404',['as'=>'404','uses'=>'PagesController@get404']);
Route::get('contact',['as'=>'contact','uses'=>'PagesController@getContact']);
Route::post('contact',['as'=>'contact','uses'=>'PagesController@postContact']);
Route::get('order',['as'=>'order','uses'=>'PagesController@order']);
//ShoppingCart
Route::get('addCart/{id}',['as'=>'addCart','uses'=>'PagesController@addCart']);
Route::get('cart',['as'=>'cart','uses'=>'PagesController@getCart']);
Route::get('removeCart/{id}',['as'=>'removeCart','uses'=>'PagesController@removeCart']);
Route::get('destroyCart',['as'=>'destroyCart','uses'=>'PagesController@destroyCart']);
Route::get('minusQtyCart/{id}',['as'=>'minusQtyCart','uses'=>'PagesController@minusQtyCart']);
Route::get('addQtyCart/{id}',['as'=>'addQtyCart','uses'=>'PagesController@addQtyCart']);
Route::get('order',['as'=>'order','uses'=>'PagesController@getOrder']);
Route::post('order',['as'=>'order','uses'=>'PagesController@checkout']);
//Info User
Route::get('info',['as'=>'info','uses'=>'PagesController@info']);
Route::get('order_detail/{id}',['as'=>'order_detail','uses'=>'PagesController@order_detail']);
Route::get('update_info',['as'=>'update_info','uses'=>'PagesController@updateInfo']);
Route::post('update_info',['as'=>'update_info','uses'=>'PagesController@postUpdateInfo']);
//login-logout
Route::get('register',['as'=>'register','uses'=>'RegisterController@register']);
Route::post('register',['as'=>'register','uses'=>'RegisterController@postRegister']);
Route::get('login',['as'=>'login','uses'=>'LoginController@login']);
Route::post('login',['as'=>'login','uses'=>'LoginController@postLogin']);
Route::get('logout',['as'=>'logout','uses'=>'LoginController@logout']);



######################### ADMIN ############################################################
Route::group(['prefix'=>'admin',['middleware'=>'adminLogin']],function(){
	Route::group(['prefix'=>'product'],function(){
		Route::get('list',['as'=>'list_product','uses'=>'AdminController@listProduct']);
		Route::get('add',['as'=>'add_product','uses'=>'AdminController@addProduct']);
		Route::post('add',['as'=>'add_product','uses'=>'AdminController@postAddProduct']);
		Route::get('edit/{id}',['as'=>'edit_product','uses'=>'AdminController@editProduct']);
	//	Route::get('edit/{id}',['as'=>'edit_product','uses'=>'AdminController@postEditProduct']);
		Route::get('del/{id}',['as'=>'del_product','uses'=>'AdminController@delProduct']);
		});
	Route::group(['prefix'=>'manafacture'],function(){
		Route::get('add',['as'=>'add_manafacture','uses'=>'AdminController@addManafacture']);
		Route::post('add',['as'=>'add_manafacture','uses'=>'AdminController@postAddManafacture']);
		Route::get('list',['as'=>'list_manafacture','uses'=>'AdminController@listManafacture']);
		Route::get('edit/{id}',['as'=>'edit_manafacture','uses'=>'AdminController@editManafacture']);
		Route::get('edit/{id}',['as'=>'edit_manafacture','uses'=>'AdminController@postEditManafacture']);
		Route::get('del/{id}',['as'=>'del_manafacture','uses'=>'AdminController@delManafacture']);
		});
	Route::group(['prefix'=>'category'],function(){
		Route::get('add',['as'=>'add_category','uses'=>'AdminController@addCategory']);
		Route::post('add',['as'=>'add_category','uses'=>'AdminController@postAddCategory']);
		Route::get('list',['as'=>'list_category','uses'=>'AdminController@listCategory']);
		Route::get('edit/{id}',['as'=>'edit_category','uses'=>'AdminController@editCategory']);
		Route::get('edit/{id}',['as'=>'edit_category','uses'=>'AdminController@postEditCategory']);
		Route::get('del/{id}',['as'=>'del_category','uses'=>'AdminController@delCategory']);
		});
	Route::group(['prefix'=>'order'],function(){
		Route::get('list',['as'=>'list_order','uses'=>'AdminController@listOrder']);
		});
	Route::group(['prefix'=>'user'],function(){
		Route::get('list',['as'=>'list_user','uses'=>'AdminController@listUser']);
		});
});
Route::get('admin-login',['as'=>'admin-login','uses'=>'AdminLoginController@loginAdmin']);
Route::post('admin-login',['as'=>'admin-login','uses'=>'AdminLoginController@login']);  
Route::post('admin-logout',['as'=>'admin-logout','uses'=>'AdminLoginController@logoutAdmin']); 