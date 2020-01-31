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
Route::get('/blank','Dashboard@blank');
Route::get('/institute_setup','Institute@institute_setup');
Route::get('/academic_year','Institute@academic_year');
Route::post('/academic_year','Institute@academic_year_save');
Route::post('/update_institute_details','Institute@update_institute_details');
Route::get('/delete_academic_year/{id}','Institute@delete_academic_year');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard','Dashboard@dashboard');

//teacher urls
Route::get('/add_teacher','Teachers@add_teacher_form');
Route::get('/teachers','Teachers@teachers');
Route::post('/save_teacher','Teachers@save_teacher');
Route::get('/delete_teacher/{id}','Teachers@delete_teacher');
Route::get('/edit_teacher/{id}','Teachers@edit_teacher');
Route::post('/update_teacher','Teachers@update_teacher');

//Section Routes
Route::get('/sections','Section@view');
Route::post('/sections/save','Section@save');
Route::post('/sections/save_updates','Section@save_updates');
Route::get('/sections/add','Section@add');
Route::get('/sections/edit/{id}','Section@edit');
Route::get('/sections/delete/{id}','Section@delete');

// Row Classes
Route::get('/rowclasses','RowClasses@list');
Route::get('/rowclasses/add','RowClasses@add');
Route::post('/rowclasses/save','RowClasses@save');
Route::get('/rowclasses/edit/{id}','RowClasses@edit');
Route::post('/rowclasses/save_updates','RowClasses@save_updates');
Route::get('/rowclasses/delete/{id}','RowClasses@delete');

