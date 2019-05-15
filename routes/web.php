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
Route::get('/joblist', function () {
    return view('job_list');
});
Route::get('/jobsingle', function () {
    return view('job_single');
});
Auth::routes();


Route::get('jobseeker/dashboard', 'JobSeekerController@getDashboard');

Route::get('/home', 'HomeController@index')->name('home');
