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

Route::get('/home', 'HomeController@index')->name('home');



//Route::get('/create', 'UserController@edit');

Route::get('/user', 'UserController@profile')->name('profile');
Route::get('/user', 'UserController@index')->name('profile');
Route::get('/user/edit/{id}', 'UserController@edit')->name('edit');
Route::post('/user/edit/{id}', 'UserController@update')->name('update');


Route::get('/create', 'CourseController@create')->name('course.create');
Route::post('/create', 'CourseController@store')->name('course.create');
Route::get('/allcourses', 'CourseController@index')->name('courses');


Route::get('/enroll', 'CourseController@enroll')->name('enroll');




