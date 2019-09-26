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

Route::get('/', 'ProductController@homePage');


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('products', 'ProductController');

Route::resource('products', 'ProductController');

Route::resource('categories', 'CategoryController');

Route::resource('categorySubs', 'CategorySubController');

Route::resource('users', 'UserController');

Route::get('roles', 'RoleController@roleIndex');

Route::get('product/{id}','ProductController@productPage');

Route::get('product/category/{id}', 'ProductController@productCategory');
Route::get('/hotdeals/','ProductController@hotDeals');

Route::get('/activate/{id}', 'ProductController@activateHotDeals');

Route::get('/deactivate/{id}', 'ProductController@DeActivateHotDeals');


Route::get('/top-selling/','ProductController@topSelling');

Route::get('/activate-topselling/{id}', 'ProductController@ActivateTopSelling');

Route::get('/deactivate-topselling/{id}', 'ProductController@DeActivateTopSelling');
