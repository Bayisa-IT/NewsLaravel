<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\frontController;
use  App\Http\Controllers\adminController;
use  App\Http\Controllers\crudController;

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
Route::get('/', 'frontController@index');

Route::get('article/{slug}', 'frontController@article');

Route::get('/post','frontController@post' );

Route::get('/category/{slug}', 'frontController@category');

Route::get('/page/{slug}', 'frontController@page');

Route::get('/laranews-admin', 'adminController@index');
//category
Route::get('/viewcategory', 'adminController@viewCategory' );

Route::post('/addcategory', 'crudController@insertData' );

Route::get('/editcategory/{id}', 'adminController@editCategory' );

Route::post('/updatecategory/{id}', 'crudController@updateData' );

Route::post('/multipledelete', 'adminController@multipleDelete' );
//setting
Route::get('/setting', 'adminController@setting');

Route::post('/addsettings', 'crudController@insertData');

Route::post('/updatesettings/{id}', 'crudController@updateData');

//post
Route::get('/add-post', 'adminController@addPost');

Route::post('/addpost', 'crudController@updateData');

Route::get('/all-posts', 'adminController@allPosts');


Route::get('/editpost/{id}', 'adminController@editPost');

Route::post('/updatepost/{id}', 'crudController@updateData');

Route::get('/search-content', 'frontController@searchContent');

//page
Route::get('/add-page', 'adminController@addPage');

Route::post('/addpage', 'crudController@updateData');

Route::get('/all-pages', 'adminController@allPages');


Route::get('/editpage/{id}', 'adminController@editPage');

Route::post('/updatepage/{id}', 'crudController@updateData');

//Advertisments

Route::get('/add-adv', 'adminController@addAdv');
Route::get('/all-advs', 'adminController@allAdv');
Route::get('/edit-adv/{id}', 'adminController@editAdv');

Route::post('/addadv', 'crudController@insertData');
Route::post('/updateadv/{id}', 'crudController@updateData');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/logout', 'HomeController@logout');
