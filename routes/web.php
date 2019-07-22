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
//Registrasi Recruitment
Route::get('jobseeker/public', 'JobSeekerController@getPublic');
Route::get('jobseeker/dashboard', 'JobSeekerController@getDashboard')->name('JobseekerPublic');
Route::get('/jobseeker/dashboard/show/{id}', 'JobSeekerController@showLowongan');
Route::get('/jobseeker/dashboard/showpublic/{id}', 'JobSeekerController@showLowonganpublic');
Route::post('/jobseeker/lamaran/store', 'JobSeekerController@storeLamaran');
Route::post('/jobseeker/lamaran/subscribe','JobSeekerController@subscribeLamaran')->name('subscribe');

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
Route::get('jobseeker/datadiri/insert', 'JobSeekerController@insertDataDiri');
//support ajax
Route::post('support/getst/', 'SupportController@getSt');

//store and uupdate data jobseeker
Route::post('jobseeker/datadiri/submitdatadiriawal/', 'JobSeekerController@storeDataDiriAwal');
Route::post('jobseeker/datadiri/submitdatadiri/', 'JobSeekerController@storeDataDiri');
Route::post('jobseeker/datadiri/submitpendidikanformal/', 'JobSeekerController@storeDataPendidikanFormal');
Route::post('jobseeker/datadiri/submitpendidikaninformal/', 'JobSeekerController@storeDataPendidikanInformal');
Route::post('jobseeker/datadiri/submitpendidikanbahasa/', 'JobSeekerController@storeDataPendidikanBahasa');
Route::post('jobseeker/datadiri/submitpengalamankerja/', 'JobSeekerController@storeDataPengalamanKerja');
Route::post('jobseeker/datadiri/submitpengalamanorganisasi/', 'JobSeekerController@storeDataPengalamanOrganisasi');
Route::post('jobseeker/datadiri/submitriwayatpenyakit/', 'JobSeekerController@storeDataRiwayatPenyakit');
Route::post('jobseeker/datadiri/submitminat/', 'JobSeekerController@storeDataMinat');


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

//admin
Route::prefix('admin')->group(function(){
    //---------Get Method
    Route::get('dashboard', 'AdminController@getDashboard');
    Route::get('notifikasi', 'AdminController@getNotifikasi');
    Route::get('sdm', 'AdminController@getSdm');
    Route::get('klien', 'AdminController@getKlien');
    Route::get('lowongan', 'AdminController@getLowongan');
    Route::get('manajementes', 'AdminController@getManajementes');
    Route::get('manajemenuser', 'AdminController@getManajemenuser');
    Route::get('lowongan/show/{id}', 'AdminController@showLowongan')->name('showAdminLowongan');
    Route::get('lowongan/penilaian/{jobid}/users/{userid}', 'AdminController@showPenilaian')->name('penilaian');
    //-----------Create Method
    Route::get('dashboard/create', 'AdminController@createDashboard');
    Route::get('notifikasi/create', 'AdminController@createNotifikasi');
    Route::get('sdm/create', 'AdminController@createSdm');
    Route::get('klien/create', 'AdminController@createKlien');
    Route::get('lowongan/create', 'AdminController@createLowongan');
    Route::get('manajementes/create', 'AdminController@createManajementes');
    Route::get('manajemenuser/create', 'AdminController@createManajemenuser');
    //------------Store Method
    Route::post('lowonganpekerjaan/store', 'AdminController@storeLowogan');
});


Route::get('client/dashboard/create', 'ClientController@createDashboard');
Route::get('client/notifikasi/create', 'ClientController@createNotifikasi');
Route::get('client/orderlayanan/create', 'ClientController@createOrderlayanan');
Route::get('client/datakaryawan/create', 'ClientController@createDatakaryawan');



Route::get('hrd/dashboard', 'HRDController@getDashboard');
Route::get('hrd/payroll', 'HRDController@getPayroll');
Route::get('hrd/payroll/slipgaji', 'HRDController@getSlipgaji');
Route::get('hrd/setup/komponengaji', 'HRDController@getKomponengaji');
Route::get('hrd/setup/gajiperlokasi', 'HRDController@getGajiperlokasi');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/cetak_pkwt', 'AdminController@cetak_pkwt');
