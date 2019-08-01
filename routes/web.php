<?php
//-# Authentifikasi
Auth::routes();

//-> public
Route::get('/', function () {
    return view('welcome');
});
Route::get('/joblist', function () {
    return view('job_list');
});
Route::get('/jobsingle', function () {
    return view('job_single');
});
//->Public
Route::get('/home', 'HomeController@index')->name('home');
Route::get('lowongan/', 'PublicController@showLowonganpublic')->name('PublicLowongan');
Route::get('lowongan/{id}', 'PublicController@getLowonganpublic')->name('PublicLowonganById');
//-> Jobseeker
Route::prefix('jobseeker')->group(function(){
    //-x regular
    Route::get('profil/', 'JobSeekerController@getProfil');
    Route::get('profil/edit/{id}', 'JobSeekerController@editProfil');
    Route::get('notifikasi', 'JobSeekerController@getNotifikasi');
    Route::get('riwayattes', 'JobSeekerController@getRiwayattes');
    Route::get('lowonganpekerjaan', 'JobSeekerController@getLowonganpekerjaan');

    //-x data diri
    Route::get('datadiri/', 'JobSeekerController@showDataDiri')->name('JobseekerDatadiri');
    Route::get('datadiri/insert', 'JobSeekerController@insertDataDiri');

    //-x Hubungan jobseeker dengan lowongan
    Route::get('dashboard', 'JobSeekerController@getDashboard')->name('JobseekerDashboard');
    Route::get('dashboard/show/{id}', 'JobSeekerController@showLowongan');
    Route::post('lamaran/subscribe','JobSeekerController@subscribeLamaran')->name('subscribeJob');

    //-x create method
    Route::get('profil/riwayatpekerjaan/create', 'JobSeekerController@createRiwayatpekerjaan');
    Route::get('profil/riwayatpendidikan/create', 'JobSeekerController@createRiwayatPendidikan');
    Route::get('profil/sertifikatkeahlian/create', 'JobSeekerController@createSertifikatkeahlian');
    Route::get('profil/kemampuanbahasa/create', 'JobSeekerController@createKemampuanbahasa');
    Route::get('profil/curiculumvitae/create', 'JobSeekerController@createCuriculumvitae');
    Route::get('profil/tentangsaya/create', 'JobSeekerController@createTentangsaya');
    Route::get('notifikasi/create', 'JobSeekerController@createNotifikasi');
    Route::get('riwayattes/create', 'JobSeekerController@createRiwayattes');
    Route::get('lowonganpekerjaan/create', 'JobSeekerController@createtLowonganpekerjaan');

    //-x Store method
    Route::post('datadiri/submitdatadiriawal/', 'JobSeekerController@storeDataDiriAwal');
    Route::post('datadiri/submitdatadiri/', 'JobSeekerController@storeDataDiri');
    Route::post('datadiri/submitpendidikanformal/', 'JobSeekerController@storeDataPendidikanFormal');
    Route::post('datadiri/submitpendidikaninformal/', 'JobSeekerController@storeDataPendidikanInformal');
    Route::post('datadiri/submitpendidikanbahasa/', 'JobSeekerController@storeDataPendidikanBahasa');
    Route::post('datadiri/submitpengalamankerja/', 'JobSeekerController@storeDataPengalamanKerja');
    Route::post('datadiri/submitpengalamanorganisasi/', 'JobSeekerController@storeDataPengalamanOrganisasi');
    Route::post('datadiri/submitriwayatpenyakit/', 'JobSeekerController@storeDataRiwayatPenyakit');
    Route::post('datadiri/submitminat/', 'JobSeekerController@storeDataMinat');

    //-x support ajax
    Route::post('support/getst/', 'SupportController@getSt');
});

//-> Admin
Route::prefix('admin')->group(function(){
    //-x Get Method
    Route::get('dashboard', 'AdminController@getDashboard');
    Route::get('notifikasi', 'AdminController@getNotifikasi');
    Route::get('sdm', 'AdminController@getSdm');
    Route::get('klien', 'AdminController@getKlien');
    Route::get('lowongan', 'AdminController@getLowongan');
    Route::get('manajementes', 'AdminController@getManajementes');
    Route::get('manajemenuser', 'AdminController@getManajemenuser');
    Route::get('lowongan/show/{id}', 'AdminController@showLowongan')->name('showAdminLowongan');
    Route::get('lowongan/penilaian/{jobid}/users/{userid}', 'AdminController@showPenilaian')->name('penilaian');
    
    //-x Create Method
    Route::get('dashboard/create', 'AdminController@createDashboard');
    Route::get('notifikasi/create', 'AdminController@createNotifikasi');
    Route::get('sdm/create', 'AdminController@createSdm');
    Route::get('klien/create', 'AdminController@createKlien');
    Route::get('lowongan/create', 'AdminController@createLowongan');
    Route::get('manajementes/create', 'AdminController@createManajementes');
    Route::get('manajemenuser/create', 'AdminController@createManajemenuser');
    
    //-x Store Method
    Route::post('lowonganpekerjaan/store', 'AdminController@storeLowogan');


Route::get('hrd/dashboard', 'HRDController@getDashboard');
Route::get('hrd/payroll', 'HRDController@getPayroll');
Route::get('hrd/payroll/slipgaji', 'HRDController@getSlipgaji');
Route::get('hrd/setup/komponengaji', 'HRDController@getKomponengaji');
Route::post('/hrd/setup/komponengaji/store', 'HRDController@storeKomponengaji');
Route::post('/hrd/setup/komponengaji/update/{id}', 'HRDController@updateKomponengaji');
Route::delete('hrd/setup/komponengaji/delete/{id}', 'HRDController@destroyKomponengaji')->name('post-delete');
Route::get('hrd/setup/gajiperlokasi', 'HRDController@getGajiperlokasi');
Route::get('/home', 'HomeController@index')->name('home');
    //-x Cetak
    Route::get('cetak_pkwt', 'AdminController@cetak_pkwt');
});

//-> HRD
Route::prefix('hrd')->group(function(){
    //-x get method
    Route::get('dashboard', 'HRDController@getDashboard');
    Route::get('payroll', 'HRDController@getPayroll');
    Route::get('payroll/slipgaji', 'HRDController@getSlipgaji');
    Route::get('setup/komponengaji', 'HRDController@getKomponengaji');
    Route::get('setup/gajiperlokasi', 'HRDController@getGajiperlokasi');
});

//-> client
Route::prefix('client')->group(function(){
    //--x get method
    Route::get('dashboard', 'ClientController@getDashboard');
    Route::get('notifikasi', 'ClientController@getNotifikasi');
    Route::get('orderlayanan', 'ClientController@getOrderlayanan');
    Route::get('datakaryawan', 'ClientController@getDatakaryawan');    

    //--x create method
    Route::get('dashboard/create', 'ClientController@createDashboard');
    Route::get('notifikasi/create', 'ClientController@createNotifikasi');
    Route::get('orderlayanan/create', 'ClientController@createOrderlayanan');
    Route::get('datakaryawan/create', 'ClientController@createDatakaryawan');    
});