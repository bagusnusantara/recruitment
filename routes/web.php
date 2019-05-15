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

Route::get('admin/dashboard', 'AdminController@getDashboard');
Route::get('admin/notifikasi', 'AdminController@getNotifikasi');
Route::get('admin/carisdm', 'AdminController@getCarisdm');
Route::get('admin/inputlowongan', 'AdminController@getInputlowongan');
Route::get('admin/inputtes', 'AdminController@getInputtes');

Route::get('client/dashboard', 'ClientController@getDashboard');
Route::get('client/notifikasi', 'ClientController@getNotifikasi');
Route::get('client/orderlayanan', 'ClientController@getOrderlayanan');
Route::get('client/datakaryawan', 'ClientController@getDatakaryawan');

Route::get('jobseeker/profil/riwayatpekerjaan/create', 'JobSeekerController@createRiwayatpekerjaan');
Route::get('jobseeker/profil/riwayatpendidikan/create', 'JobSeekerController@createRiwayatPendidikan');
Route::get('jobseeker/profil/sertifikatkeahlian/create', 'JobSeekerController@createSertifikatkeahlian');
Route::get('jobseeker/profil/kemampuanbahasa/create', 'JobSeekerController@createKemampuanbahasa');
Route::get('jobseeker/profil/curiculumvitae/create', 'JobSeekerController@createCuriculumvitae');
Route::get('jobseeker/profil/tentangsaya/create', 'JobSeekerController@createTentangsaya');
Route::get('jobseeker/notifikasi/create', 'JobSeekerController@createNotifikasi');
Route::get('jobseeker/riwayattes/create', 'JobSeekerController@createRiwayattes');
Route::get('jobseeker/lowonganpekerjaan/create', 'JobSeekerController@createtLowonganpekerjaan');

Route::get('admin/dashboard/create', 'AdminController@createDashboard');
Route::get('admin/notifikasi/create', 'AdminController@createNotifikasi');
Route::get('admin/carisdm/create', 'AdminController@createCarisdm');
Route::get('admin/inputlowongan/create', 'AdminController@createInputlowongan');
Route::get('admin/inputtes/create', 'AdminController@createInputtes');

Route::get('client/dashboard/create', 'ClientController@createDashboard');
Route::get('client/notifikasi/create', 'ClientController@createNotifikasi');
Route::get('client/orderlayanan/create', 'ClientController@createOrderlayanan');
Route::get('client/datakaryawan/create', 'ClientController@createDatakaryawan');

Route::get('/home', 'HomeController@index')->name('home');
