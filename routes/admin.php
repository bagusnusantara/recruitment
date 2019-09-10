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
    Route::get('lowongan/datapelamar/{jobid}/users/{userid}', 'AdminController@showDatapelamar')->name('datapelamar');
    Route::get('lowongan/datapelamar/{jobid}/users/{userid}/pdf', 'AdminController@showDatapelamarpdf')->name('datapelamarpdf');
    Route::get('profile', 'AdminController@profile');
    Route::post('profile', 'AdminController@update_avatar');
    //-x Create Method
    Route::get('dashboard/create', 'AdminController@createDashboard');
    Route::get('notifikasi/create', 'AdminController@createNotifikasi');
    Route::get('sdm/create', 'AdminController@createSdm');
    Route::get('klien/create', 'AdminController@createKlien');
    Route::get('lowongan/create', 'AdminController@createLowongan');
    Route::get('manajementes/create', 'AdminController@createManajementes');
    Route::get('manajemenuser/create', 'AdminController@createManajemenuser');

    //-x Store Method
    Route::post('lowongan/store', 'AdminController@storeLowogan');

    //-x Update
    Route::post('lowongan/penilaian/update/{id}', 'AdminController@updatePenilaian');

Route::get('hrd/setup/gajiperlokasi', 'HRDController@getGajiperlokasi');
Route::get('/home', 'HomeController@index')->name('home');
    //-x Cetak
    Route::get('cetak_pkwt', 'AdminController@cetak_pkwt');
});
