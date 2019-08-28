<?php
//-> Admin
Route::prefix('pegawai')->group(function(){
    //-x Get Method
    Route::get('dashboard', 'PegawaiController@getDashboard');
    Route::get('presensi', 'PegawaiController@getSdm');

});
