<?php
//-> Admin
Route::prefix('pegawai')->group(function(){
    //-x Get Method
    Route::get('dashboard', 'PegawaiController@getDashboard');
    Route::get('presensi', 'PegawaiController@getPresensi');
    Route::get('cuti', 'PegawaiController@getCuti');
    Route::get('lembur', 'PegawaiController@getLembur');
    Route::get('sanksi', 'PegawaiController@getSanksi');

});
