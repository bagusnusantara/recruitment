<?php
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

Route::get('hrd/setup/gajiperlokasi', 'HRDController@getGajiperlokasi');
Route::get('/home', 'HomeController@index')->name('home');
    //-x Cetak
    Route::get('cetak_pkwt', 'AdminController@cetak_pkwt');
});
