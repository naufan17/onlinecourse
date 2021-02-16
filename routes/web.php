<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'HomeController@home');

Route::get('/about', 'HomeController@about');

Route::get('/course', 'HomeController@course');

Route::get('/intro/{title}', 'CoursesController@intro');

Route::get('/learningContent', 'CoursesController@learningContent');

Route::post('/intro', 'CoursesController@comment');


Route::get('/blog/{blog}', 'BlogController@blogContent');

Route::get('/blog', 'BlogController@blog');


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', 'AdminController@course');


Route::get('/editcourse', 'EditcourseController@intro');

Route::get('/ubahcourse/{course}', 'EditcourseController@ubah');

Route::get('/ubahdatacourse/{course}', 'EditcourseController@ubahdata');

Route::get('/tambahcourse', 'EditcourseController@tambah');

Route::get('/tambahdatacourse', 'EditcourseController@tambahdata');

Route::get('/hapuscourse/{id}', 'EditcourseController@hapus');


Route::get('/editblog', 'EditblogController@blog');

Route::get('/ubahblog/{blog}', 'EditblogController@ubah');

Route::get('/ubahdatablog/{blog}', 'EditblogController@ubahdata');

Route::get('/tambahblog', 'EditblogController@tambah');

Route::get('/tambahdatablog', 'EditblogController@tambahdata');

Route::get('/hapusblog/{id}', 'EditblogController@hapus');
