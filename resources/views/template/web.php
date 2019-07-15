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
Route::get('jobseeker/profil/', 'JobSeekerController@getProfil');
Route::get('jobseeker/profil/edit/{id}', 'JobSeekerController@editProfil');
Route::get('jobseeker/profil/riwayatpekerjaan', 'JobSeekerController@getRiwayatpekerjaan');
Route::get('jobseeker/profil/riwayatpendidikan', 'JobSeekerController@getRiwayatPendidikan');
Route::get('jobseeker/profil/sertifikatkeahlian', 'JobSeekerController@getSertifikatkeahlian');
Route::get('jobseeker/profil/kemampuanbahasa', 'JobSeekerController@getKemampuanbahasa');
Route::get('jobseeker/profil/curiculumvitae', 'JobSeekerController@getCuriculumvitae');
Route::get('jobseeker/profil/tentangsaya', 'JobSeekerController@getTentangsaya');
Route::get('jobseeker/notifikasi', 'JobSeekerController@getNotifikasi');
Route::get('jobseeker/riwayattes', 'JobSeekerController@getRiwayattes');
Route::get('jobseeker/lowonganpekerjaan', 'JobSeekerController@getLowonganpekerjaan');
//data diri
Route::get('jobseeker/datadiri/', 'JobSeekerController@showDataDiri');
Route::post('jobseeker/datadiri/submitdatadiri/', 'JobSeekerController@storeDataDiri');
//st
Route::post('jobseeker/datadiri/getst/', 'JobSeekerController@getSt');

Route::get('admin/dashboard', 'AdminController@getDashboard');
Route::get('admin/notifikasi', 'AdminController@getNotifikasi');
Route::get('admin/sdm', 'AdminController@getSdm');
Route::get('admin/klien', 'AdminController@getKlien');
Route::get('admin/lowongan', 'AdminController@getLowongan');
Route::get('admin/manajementes', 'AdminController@getManajementes');
Route::get('admin/manajemenuser', 'AdminController@getManajemenuser');

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
Route::get('admin/sdm/create', 'AdminController@createSdm');
Route::get('admin/klien/create', 'AdminController@createKlien');
Route::get('admin/lowongan/create', 'AdminController@createLowongan');
Route::get('admin/manajementes/create', 'AdminController@createManajementes');
Route::get('admin/manajemenuser/create', 'AdminController@createManajemenuser');
Route::get('/showpenilaian', 'AdminController@showPenilaian');

Route::get('client/dashboard/create', 'ClientController@createDashboard');
Route::get('client/notifikasi/create', 'ClientController@createNotifikasi');
Route::get('client/orderlayanan/create', 'ClientController@createOrderlayanan');
Route::get('client/datakaryawan/create', 'ClientController@createDatakaryawan');

Route::post('/admin/lowonganpekerjaan/store', 'AdminController@storeLowogan');
Route::get('/jobseeker/dashboard/show/{id}', 'JobSeekerController@showLowongan');
Route::post('/jobseeker/lamaran/store', 'JobSeekerController@storeLamaran');
Route::get('/admin/lowongan/show/{id}', 'AdminController@showLowongan');

Route::get('hrd/dashboard', 'HRDController@getDashboard');
Route::get('hrd/payroll', 'HRDController@getPayroll');
Route::get('hrd/payroll/slipgaji', 'HRDController@getSlipgaji');
Route::get('hrd/setup/komponengaji', 'HRDController@getKomponengaji');
Route::get('hrd/setup/gajiperlokasi', 'HRDController@getGajiperlokasi');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/cetak_pkwt', 'AdminController@cetak_pkwt');
