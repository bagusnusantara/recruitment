<?php
//-# Authentifikasi
Auth::routes();
include ('hrd.php');
include ('admin.php');
include ('client.php');
include ('accessor.php');

Route::get('/joblist', function () {
    return view('job_list');
});
Route::get('/jobsingle', function () {
    return view('job_single');
});
//->Public
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PublicController@showhome')->name('PublicHome');
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
    Route::post('datadiri/submitlampiran/', 'JobSeekerController@storeDataLampiran');

    //delete data
    Route::delete('datadiri/deletependidikanformal/', 'JobSeekerController@destroyDataPendidikanFormal');
    Route::delete('datadiri/deletependidikaninformal/', 'JobSeekerController@destroyDataPendidikanInformal');
    Route::delete('datadiri/deletependidikanbahasa/', 'JobSeekerController@destroyDataPendidikanBahasa');
    Route::delete('datadiri/deletepengalamankerja/', 'JobSeekerController@destroyDataPengalamanKerja');
    Route::delete('datadiri/deletepengalamanorganisasi/', 'JobSeekerController@destroyDataPengalamanOrganisasi');
    Route::delete('datadiri/deleteriwayatpenyakit/', 'JobSeekerController@destroyDataRiwayatPenyakit');
    Route::delete('datadiri/deleteminat/', 'JobSeekerController@destroyDataMinat');
    Route::delete('datadiri/deletelampiran/', 'JobSeekerController@destroyDataLampiran');

    //-x support ajax
    Route::post('support/getst/', 'SupportController@getSt');
});
