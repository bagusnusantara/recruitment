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
Route::get('jobseeker/profil/riwayatpekerjaan', 'JobSeekerController@getRiwayatpekerjaan');
Route::get('jobseeker/profil/riwayatpendidikan', 'JobSeekerController@getRiwayatPendidikan');
Route::get('jobseeker/profil/sertifikatkeahlian', 'JobSeekerController@getSertifikatkeahlian');
Route::get('jobseeker/profil/kemampuanbahasa', 'JobSeekerController@getKemampuanbahasa');
Route::get('jobseeker/profil/curiculumvitae', 'JobSeekerController@getCuriculumvitae');
Route::get('jobseeker/profil/tentangsaya', 'JobSeekerController@getTentangsaya');
Route::get('jobseeker/notifikasi', 'JobSeekerController@getNotifikasi');
Route::get('jobseeker/riwayattes', 'JobSeekerController@getRiwayattes');
Route::get('jobseeker/lowonganpekerjaan', 'JobSeekerController@getLowonganpekerjaan');

Route::get('/home', 'HomeController@index')->name('home');
