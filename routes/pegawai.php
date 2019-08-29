<?php
//-> Admin
Route::prefix('pegawai')->group(function(){
    //-x Get Method
    Route::get('dashboard', 'PegawaiController@getDashboard');
    Route::get('presensi', 'PegawaiController@getPresensi');
    Route::get('cuti', 'PegawaiController@getCuti');
    Route::get('lembur', 'PegawaiController@getLembur');
    Route::get('sanksi', 'PegawaiController@getSanksi');
    Route::get('training', 'PegawaiController@getTraining');

    //-x Post Method
    Route::post('cuti/store', 'PegawaiController@storeCuti');
    Route::post('cuti/update', 'PegawaiController@updateCuti');

    //-x Delete Method
    Route::delete('cuti/delete', 'PegawaiController@deleteCuti');

});
