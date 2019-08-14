<?php

//-> HRD
Route::prefix('hrd')->group(function(){
    //-x get method
    Route::get('dashboard', 'HRDController@getDashboard');
	Route::get('presensi', 'HRDController@getPresensi');
    Route::get('payroll', 'HRDController@getPayroll');
    Route::get('payroll/slipgaji', 'HRDController@getSlipgaji');

    Route::get('setup/komponengaji', 'HRDController@getKomponengaji');
    Route::get('setup/umk', 'HRDController@getUMK');
    Route::get('setup/periodecutoffgaji', 'HRDController@getPeriodecutoff');
    Route::get('setup/tunjanganjabatan', 'HRDController@getTunjanganjabatan');
    Route::get('setup/tunjangantransport', 'HRDController@getTunjangantransport');
    Route::get('setup/tunjanganmakan', 'HRDController@getTunjanganmakan');
    Route::get('setup/jamsostekdanbpjs', 'HRDController@getJamsostekdanbpjs');
    Route::get('setup/potonganterlambat', 'HRDController@getPotonganterlambat');
    Route::get('setup/uanghadir', 'HRDController@getUanghadir');

    Route::post('setup/komponengaji/store', 'HRDController@storeKomponengaji');
    Route::post('setup/komponengaji/update/{id}', 'HRDController@updateKomponengaji');
    Route::delete('setup/komponengaji/delete/{id}', 'HRDController@destroyKomponengaji')->name('post-delete');
    Route::get('sdm/smi','HRDController@getSMI');
    Route::get('sdm/worker','HRDController@getWorker');
    Route::get('sdm/resign','HRDController@getResign');
});
