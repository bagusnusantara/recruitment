<?php
//-# Authentifikasi
Auth::routes();
include ('hrd.php');
include ('admin.php');
include ('client.php');
include ('accessor.php');
include ('pegawai.php');

Route::get('/joblist', function () {
    return view('job_list');
});
Route::get('/jobsingle', function () {
    return view('job_single');
});
//->Public
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PublicController@showhome')->name('PublicHome');
Route::get('lowongan', 'PublicController@showLowonganpublic')->name('PublicLowongan');
Route::get('lowongan/show/{id}', 'PublicController@getLowonganpublic')->name('PublicLowonganById');
Route::post('lamaran/subscribe','JobseekerController@subscribeLamaran')->name('PublicLowonganSubscribe');

//-> Jobseeker
Route::prefix('jobseeker')->group(function(){
    //-x regular
    Route::get('profil/', 'JobseekerController@getProfil');
    Route::get('profil/edit/{id}', 'JobseekerController@editProfil');
    Route::get('notifikasi', 'JobseekerController@getNotifikasi');
    Route::get('riwayattes', 'JobseekerController@getRiwayattes');
    Route::get('lowonganpekerjaan', 'JobseekerController@getLowonganpekerjaan');

    //-x data diri
    Route::get('datadiri/', 'JobseekerController@showDataDiri')->name('JobseekerDatadiri');
    Route::get('datadiri/insert', 'JobseekerController@insertDataDiri');

    //-x Hubungan jobseeker dengan lowongan
    Route::get('dashboard', 'JobseekerController@getDashboard')->name('JobseekerDashboard');
    Route::get('dashboard/show/{id}', 'JobseekerController@showLowongan');
    Route::post('lamaran/subscribe','JobseekerController@subscribeLamaran')->name('JobseekerLowonganSubscribe');

    //-x create method
    Route::get('profil/riwayatpekerjaan/create', 'JobseekerController@createRiwayatpekerjaan');
    Route::get('profil/riwayatpendidikan/create', 'JobseekerController@createRiwayatPendidikan');
    Route::get('profil/sertifikatkeahlian/create', 'JobseekerController@createSertifikatkeahlian');
    Route::get('profil/kemampuanbahasa/create', 'JobseekerController@createKemampuanbahasa');
    Route::get('profil/curiculumvitae/create', 'JobseekerController@createCuriculumvitae');
    Route::get('profil/tentangsaya/create', 'JobseekerController@createTentangsaya');
    Route::get('notifikasi/create', 'JobseekerController@createNotifikasi');
    Route::get('riwayattes/create', 'JobseekerController@createRiwayattes');
    Route::get('lowonganpekerjaan/create', 'JobseekerController@createtLowonganpekerjaan');

    //-x Store method
    Route::post('datadiri/submitdatadiriawal/', 'JobseekerController@storeDataDiriAwal');
    Route::post('datadiri/submitdatadiri/', 'JobseekerController@storeDataDiri');
    Route::post('datadiri/submitpendidikanformal/', 'JobseekerController@storeDataPendidikanFormal');
    Route::post('datadiri/submitpendidikaninformal/', 'JobseekerController@storeDataPendidikanInformal');
    Route::post('datadiri/submitpendidikanbahasa/', 'JobseekerController@storeDataPendidikanBahasa');
    Route::post('datadiri/submitpengalamankerja/', 'JobseekerController@storeDataPengalamanKerja');
    Route::post('datadiri/submitpengalamanorganisasi/', 'JobseekerController@storeDataPengalamanOrganisasi');
    Route::post('datadiri/submitriwayatpenyakit/', 'JobseekerController@storeDataRiwayatPenyakit');
    Route::post('datadiri/submitminat/', 'JobseekerController@storeDataMinat');
    Route::post('datadiri/submitlampiran/', 'JobseekerController@storeDataLampiran');

    //delete data
    Route::delete('datadiri/deletependidikanformal/', 'JobseekerController@destroyDataPendidikanFormal');
    Route::delete('datadiri/deletependidikaninformal/', 'JobseekerController@destroyDataPendidikanInformal');
    Route::delete('datadiri/deletependidikanbahasa/', 'JobseekerController@destroyDataPendidikanBahasa');
    Route::delete('datadiri/deletepengalamankerja/', 'JobseekerController@destroyDataPengalamanKerja');
    Route::delete('datadiri/deletepengalamanorganisasi/', 'JobseekerController@destroyDataPengalamanOrganisasi');
    Route::delete('datadiri/deleteriwayatpenyakit/', 'JobseekerController@destroyDataRiwayatPenyakit');
    Route::delete('datadiri/deleteminat/', 'JobseekerController@destroyDataMinat');
    Route::delete('datadiri/deletelampiran/', 'JobseekerController@destroyDataLampiran');

    //-x support ajax
    Route::post('support/getst/', 'SupportController@getSt');


    Route::get('lampiran/{kategori}','JobseekerController@getLampiran');
});
