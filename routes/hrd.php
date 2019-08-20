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
    Route::get('setup/tunjanganprestasi', 'HRDController@getTunjanganprestasi');
    Route::get('setup/gpjabatansite', 'HRDController@getGpjabatansite');
    Route::get('setup/penandatanganangaji', 'HRDController@getPenandatanganangaji');

    //-x Post Method
    Route::post('setup/umk/store', 'HRDController@storeumk');
    Route::post('setup/umk/update/{id}','HRDController@updateUmk');
    Route::post('setup/tunjanganjabatan/store', 'HRDController@storeTunjanganjabatan');
    Route::post('setup/tunjanganjabatan/update/{id}','HRDController@updateTunjanganjabatan');
    Route::post('setup/tunjangantransport/store', 'HRDController@storeTunjangantransport');
    Route::post('setup/tunjangantransport/update/{id}','HRDController@updateTunjangantransport');
    Route::post('setup/tunjanganmakan/store', 'HRDController@storeTunjanganmakan');
    Route::post('setup/tunjanganmakan/update/{id}','HRDController@updateTunjanganmakan');
    Route::post('setup/periodecutoffgaji/store', 'HRDController@storePeriodecutoffgaji');
    Route::post('setup/periodecutoffgaji/update', 'HRDController@updatePeriodecutoffgaji');
    Route::post('setup/tunjanganprestasi/store', 'HRDController@storeTunjanganPrestasi');
    Route::post('setup/tunjanganprestasi/update/{id}', 'HRDController@updateTunjanganprestasi');
    Route::post('setup/gpjabatansite/store', 'HRDController@storeGpjabatansite');
    Route::post('setup/gpjabatansite/update/{id}', 'HRDController@updateGpjabatansite');
    Route::post('setup/penandatanganangaji/store', 'HRDController@storePenandatanganangaji');
    Route::post('setup/penandatanganangaji/update/{id}', 'HRDController@updatePenandatanganangaji');


    //-x Delete Method
    Route::delete('setup/umk/delete/{id}', 'HRDController@destroyUmk')->name('post-umk-delete');
    Route::delete('setup/tunjanganjabatan/delete/{id}', 'HRDController@destroyTunjanganjabatan')->name('post-tunj-jabatan-delete');
    Route::delete('setup/tunjangantransport/delete/{id}', 'HRDController@destroyTunjangantransport');
    Route::delete('setup/tunjanganmakan/delete/{id}', 'HRDController@destroyTunjanganmakan');
    Route::delete('setup/periodecutoffgaji/delete/{id}', 'HRDController@destroyPeriodecutoffgaji');
    Route::delete('setup/tunjanganprestasi/delete/{id}', 'HRDController@destroyTunjanganprestasi');
    Route::delete('setup/gpjabatansite/delete/{id}', 'HRDController@destroyGpjabatansite');
    Route::delete('setup/penandatanganangaji/delete/{id}', 'HRDController@destroyPenandatanganangaji');


    //-x
    Route::post('setup/komponengaji/store', 'HRDController@storeKomponengaji');
    Route::post('setup/komponengaji/update/{id}', 'HRDController@updateKomponengaji');
    Route::delete('setup/komponengaji/delete/{id}', 'HRDController@destroyKomponengaji')->name('post-delete');
    Route::get('sdm/smi','HRDController@getSMI');
    Route::get('sdm/worker','HRDController@getWorker');
    Route::get('sdm/resign','HRDController@getResign');
});
