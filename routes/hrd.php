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
    Route::get('setup/jabatan','HRDController@getJabatan');
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
    Route::get('setup/harilibur', 'HRDController@getHarilibur');
    Route::get('setup/kalenderlibur', 'HRDController@getKalenderlibur');
    Route::get('setup/harilembur', 'HRDController@getHarilembur');
    Route::get('setup/waktulembur', 'HRDController@getWaktulembur');
    Route::get('setup/sanksi', 'HRDController@getSanksi');
    Route::get('setup/alasanabsen', 'HRDController@getAlasanabsen');
    Route::get('setup/schclass', 'HRDController@getSchclass');
    Route::get('setup/schpola', 'HRDController@getSchpola');
    Route::get('setup/jadwalgroup', 'HRDController@getJadwalgroup');
    Route::get('setup/jadwalpersonal', 'HRDController@getJadwalpersonal');
    Route::get('setup/periode', 'HRDController@getPeriode');
    Route::get('setup/sisacuti', 'HRDController@getSisacuti');
    Route::get('setup/departemen', 'HRDController@getDepartemen');
    Route::get('setup/group', 'HRDController@getGroup');
    Route::get('setup/shift', 'HRDController@getShift');
    Route::get('setup/staff', 'HRDController@getStaff');
    Route::get('setup/golongan', 'HRDController@getGolongan');
    Route::get('setup/jabatan', 'HRDController@getJabatan');
    Route::get('setup/leveljabatan', 'HRDController@getLeveljabatan');
    Route::get('setup/statuskaryawan', 'HRDController@getStatuskaryawan');
    Route::get('setup/alasanresign', 'HRDController@getAlasanresign');


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
    Route::post('setup/harilibur/store', 'HRDController@storeHarilibur');
    Route::post('setup/harilibur/update/{id}', 'HRDController@updateHarilibur');
    Route::post('setup/kalenderlibur/store', 'HRDController@storeKalenderlibur');
    Route::post('setup/kalenderlibur/update/{id}', 'HRDController@updateKalenderlibur');
    Route::post('setup/harilembur/store', 'HRDController@storeHarilembur');
    Route::post('setup/harilembur/update/{id}', 'HRDController@updateharilembur');
    Route::post('setup/waktulembur/store', 'HRDController@storeWaktulembur');
    Route::post('setup/waktulembur/update/{id}', 'HRDController@updateWaktulembur');
    Route::post('setup/sanksi/store', 'HRDController@storeSanksi');
    Route::post('setup/sanksi/update/{id}', 'HRDController@updateSanksi');
    Route::post('setup/alasanabsen/store', 'HRDController@storeAlasanabsen');
    Route::post('setup/alasanabsen/update/{id}', 'HRDController@updateAlasanabsen');
    Route::post('setup/schclass/store', 'HRDController@storeSchclass');
    Route::post('setup/schclass/update/{id}', 'HRDController@updateSchclass');
    Route::post('setup/schpola/store', 'HRDController@storeSchpola');
    Route::post('setup/schpola/update/{id}', 'HRDController@updateSchpola');
    Route::post('setup/jadwalgroup/store', 'HRDController@storeJadwalgroup');
    Route::post('setup/jadwalgroup/update/{id}', 'HRDController@updatejadwalgroup');
    Route::post('setup/jadwalpersonal/store', 'HRDController@storeJadwalpersonal');
    Route::post('setup/jadwalpersonal/update/{id}', 'HRDController@updatejadwalpersonal');
    Route::post('setup/periode/store', 'HRDController@storePeriode');
    Route::post('setup/periode/update/{id}', 'HRDController@updatePeriode');
    Route::post('setup/sisacuti/store', 'HRDController@storeSisacuti');
    Route::post('setup/sisacuti/update/{id}', 'HRDController@updateSisacuti');
    Route::post('setup/departemen/store', 'HRDController@storeDepartemen');
    Route::post('setup/departemen/update/{id}', 'HRDController@updateDepartemen');
    Route::post('setup/group/store', 'HRDController@storeGroup');
    Route::post('setup/group/update/{id}', 'HRDController@updateGroup');
    Route::post('setup/shift/store', 'HRDController@storeShift');
    Route::post('setup/shift/update/{id}', 'HRDController@updateShift');
    Route::post('setup/staff/store', 'HRDController@storeStaff');
    Route::post('setup/staff/update/{id}', 'HRDController@updateStaff');
    Route::post('setup/golongan/store', 'HRDController@storeGolongan');
    Route::post('setup/golongan/update/{id}', 'HRDController@updateGolongan');
    Route::post('setup/jabatan/store', 'HRDController@storeJabatan');
    Route::post('setup/jabatan/update/{id}', 'HRDController@updatejabatan');
    Route::post('setup/leveljabatan/store', 'HRDController@storeLeveljabatan');
    Route::post('setup/leveljabatan/update/{id}', 'HRDController@updateLeveljabatan');
    Route::post('setup/statuskaryawan/store', 'HRDController@storeStatuskaryawan');
    Route::post('setup/statuskaryawan/update/{id}', 'HRDController@updateStatuskaryawan');
    Route::post('setup/alasanresign/store', 'HRDController@storeAlasanresign');
    Route::post('setup/alasanresign/update/{id}', 'HRDController@updateAlasanresign');


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
    Route::delete('setup/harilibur/delete/{id}', 'HRDController@destroyHarilibur');
    Route::delete('setup/kalenderlibur/delete/{id}', 'HRDController@destroyKalenderlibur');
    Route::delete('setup/harilembur/delete/{id}', 'HRDController@destroyHarilembur');
    Route::delete('setup/waktulembur/delete/{id}', 'HRDController@destroyWaktulembur');
    Route::delete('setup/sanksi/delete/{id}', 'HRDController@destroySanksi');
    Route::delete('setup/alasanabsen/delete/{id}', 'HRDController@destroyAlasanabsen');
    Route::delete('setup/schclass/delete/{id}', 'HRDController@destroySchclass');
    Route::delete('setup/schpola/delete/{id}', 'HRDController@destroySchpola');
    Route::delete('setup/jadwalgroup/delete/{id}', 'HRDController@destroyJadwalgroup');
    Route::delete('setup/jadwalpersonal/delete/{id}', 'HRDController@destroyJadwalpersonal');
    Route::delete('setup/periode/delete/{id}', 'HRDController@destroyPeriode');
    Route::delete('setup/sisacuti/delete/{id}', 'HRDController@destroySisacuti');
    Route::delete('setup/departemen/delete/{id}', 'HRDController@destroyDepartemen');
    Route::delete('setup/group/delete/{id}', 'HRDController@destroyGroup');
    Route::delete('setup/shift/delete/{id}', 'HRDController@destroyShift');
    Route::delete('setup/staff/delete/{id}', 'HRDController@destroyStaff');
    Route::delete('setup/golongan/delete/{id}', 'HRDController@destroyGolongan');
    Route::delete('setup/jabatan/delete/{id}', 'HRDController@destroyJabatan');
    Route::delete('setup/leveljabatan/delete/{id}', 'HRDController@destroyLeveljabatan');
    Route::delete('setup/statuskaryawan/delete/{id}', 'HRDController@destroyStatuskaryawan');
    Route::delete('setup/alasanresign/delete/{id}', 'HRDController@destroyAlasanresign');

    //-x
    Route::post('setup/komponengaji/store', 'HRDController@storeKomponengaji');
    Route::post('setup/komponengaji/update/{id}', 'HRDController@updateKomponengaji');
    Route::delete('setup/komponengaji/delete/{id}', 'HRDController@destroyKomponengaji')->name('post-delete');
    Route::get('sdm/smi','HRDController@getSMI');
    Route::get('sdm/worker','HRDController@getWorker');
    Route::get('sdm/resign','HRDController@getResign');
});
