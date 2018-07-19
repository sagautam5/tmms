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
    return view('home.home');
});

// Faculty
Route::resource('faculties', 'FacultiesController', [
    'except' => ['show']
]);


// Teacher
Route::resource('teachers', 'TeachersController', [
    'except' => ['show']
]);

// Module

Route::group(['prefix'=>'faculties/{faculty_id}'], function(){
	Route::resource('modules','ModulesController', [
		'except' => ['show','intex']
	]);
});
