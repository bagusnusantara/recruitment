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
<<<<<<< HEAD
    Route::get('setup/jabatan','HRDController@getJabatan');
=======
    Route::get('setup/jkslain', 'HRDController@getJkslain');
    Route::get('setup/bpjs', 'HRDController@getBpjs');
    Route::get('setup/tunjangankjk', 'HRDController@getTunjangankjk');
    Route::get('setup/tunjanganotn', 'HRDController@getTunjanganotn');
    Route::get('setup/tunjanganotr', 'HRDController@getTunjanganotr');
    Route::get('setup/tunjanganshiftmalam', 'HRDController@getTunjanganshiftmalam');
    Route::get('setup/kjkperjabatansite', 'HRDController@getKjkperjabatansite');
    Route::get('setup/otnperjabatansite', 'HRDController@getOtnperjabatansite');
    Route::get('setup/masakerjatahunansite', 'HRDController@getMasakerjatahunansite');
    Route::get('setup/kelompoktanggalpenggajian', 'HRDController@getKelompoktanggalpenggajian');
    Route::get('setup/creatorpaymentrequisition', 'HRDController@getCreatorpaymentrequisition');
    Route::get('setup/ttpaymentrequisition', 'HRDController@getTtpaymentrequisition');
>>>>>>> df8d36457521a5431634c6f08fb024584a0ba6f9

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
    Route::post('setup/jkslain/store', 'HRDController@storeJkslain');
    Route::post('setup/jkslain/update/{id}', 'HRDController@updateJkslain');
    Route::post('setup/bpjs/store', 'HRDController@storeBpjs');
    Route::post('setup/bpjs/update/{id}', 'HRDController@updateBpjs');
    Route::post('setup/tunjangankjk/store', 'HRDController@storeTunjangankjk');
    Route::post('setup/tunjangankjk/update/{id}', 'HRDController@updateTunjangankjk');
    Route::post('setup/tunjanganotn/store', 'HRDController@storeTunjanganotn');
    Route::post('setup/tunjanganotn/update/{id}', 'HRDController@updateTunjanganotn');
    Route::post('setup/tunjanganotr/store', 'HRDController@storeTunjanganotr');
    Route::post('setup/tunjanganotr/update/{id}', 'HRDController@updateTunjanganotr');
    Route::post('setup/tunjanganshiftmalam/store', 'HRDController@storeTunjanganshiftmalam');
    Route::post('setup/tunjanganshiftmalam/update/{id}', 'HRDController@updateTunjanganshiftmalam');
    Route::post('setup/kjkperjabatansite/store', 'HRDController@storeKjkperjabatansite');
    Route::post('setup/kjkperjabatansite/update/{id}', 'HRDController@updateKjkperjabatansite');
    Route::post('setup/otnperjabatansite/store', 'HRDController@storeOtnperjabatansite');
    Route::post('setup/otnperjabatansite/update/{id}', 'HRDController@updateOtnperjabatansite');
    Route::post('setup/masakerjatahunansite/store', 'HRDController@storeMasakerjatahunansite');
    Route::post('setup/masakerjatahunansite/update/{id}', 'HRDController@updateMasakerjatahunansite');
    Route::post('setup/kelompoktanggalpenggajian/store', 'HRDController@storeKelompoktanggalpenggajian');
    Route::post('setup/kelompoktanggalpenggajian/update/{id}', 'HRDController@updateKelompoktanggalpenggajian');
    Route::post('setup/creatorpaymentrequisition/store', 'HRDController@storeCreatorpaymentrequisition');
    Route::post('setup/creatorpaymentrequisition/update/{id}', 'HRDController@updateCreatorpaymentrequisition');
    //Route::post('setup/ttpaymentrequisition/store', 'HRDController@storeTtpaymentrequisition');
    //Route::post('setup/ttpaymentrequisition/update/{id}', 'HRDController@updateTtpaymentrequisition');

    //-x Delete Method
    Route::delete('setup/umk/delete/{id}', 'HRDController@destroyUmk')->name('post-umk-delete');
    Route::delete('setup/tunjanganjabatan/delete/{id}', 'HRDController@destroyTunjanganjabatan')->name('post-tunj-jabatan-delete');
    Route::delete('setup/tunjangantransport/delete/{id}', 'HRDController@destroyTunjangantransport');
    Route::delete('setup/tunjanganmakan/delete/{id}', 'HRDController@destroyTunjanganmakan');
    Route::delete('setup/periodecutoffgaji/delete/{id}', 'HRDController@destroyPeriodecutoffgaji');
    Route::delete('setup/tunjanganprestasi/delete/{id}', 'HRDController@destroyTunjanganprestasi');
    Route::delete('setup/gpjabatansite/delete/{id}', 'HRDController@destroyGpjabatansite');
    Route::delete('setup/penandatanganangaji/delete/{id}', 'HRDController@destroyPenandatanganangaji');
    Route::delete('setup/jkslain/delete/{id}', 'HRDController@destroyJkslain');
    Route::delete('setup/bpjs/delete/{id}', 'HRDController@destroyBpjs');
    Route::delete('setup/tunjangankjk/delete/{id}', 'HRDController@destroyTunjangankjk');
    Route::delete('setup/tunjanganotn/delete/{id}', 'HRDController@destroyTunjanganotn');
    Route::delete('setup/tunjanganotr/delete/{id}', 'HRDController@destroyTunjanganotr');
    Route::delete('setup/tunjanganshiftmalam/delete/{id}', 'HRDController@destroyTunjanganshiftmalam');
    Route::delete('setup/kjkperjabatansite/delete/{id}', 'HRDController@destroyKjkperjabatansite');
    Route::delete('setup/otnperjabatansite/delete/{id}', 'HRDController@destroyOtnperjabatansite');
    Route::delete('setup/masakerjatahunansite/delete/{id}', 'HRDController@destroyMasakerjatahunansite');
    Route::delete('setup/kelompoktanggalpenggajian/delete/{id}', 'HRDController@destroyKelompoktanggalpenggajian');
    Route::delete('setup/creatorpaymentrequisition/delete/{id}', 'HRDController@destroyCreatorpaymentrequisition');
    //Route::delete('setup/ttpaymentrequisition/delete/{id}', 'HRDController@destroyTtpaymentrequisition');

    //-x
    Route::post('setup/komponengaji/store', 'HRDController@storeKomponengaji');
    Route::post('setup/komponengaji/update/{id}', 'HRDController@updateKomponengaji');
    Route::delete('setup/komponengaji/delete/{id}', 'HRDController@destroyKomponengaji')->name('post-delete');
    Route::get('sdm/smi','HRDController@getSMI');
    Route::get('sdm/worker','HRDController@getWorker');
    Route::get('sdm/resign','HRDController@getResign');
});
