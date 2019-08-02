<?php

//-> HRD
Route::prefix('hrd')->group(function(){
    //-x get method
    Route::get('dashboard', 'HRDController@getDashboard');
    Route::get('payroll', 'HRDController@getPayroll');
    Route::get('payroll/slipgaji', 'HRDController@getSlipgaji');
    Route::get('setup/komponengaji', 'HRDController@getKomponengaji');
    Route::get('setup/gajiperlokasi', 'HRDController@getGajiperlokasi');
    Route::post('setup/komponengaji/store', 'HRDController@storeKomponengaji');
    Route::post('setup/komponengaji/update/{id}', 'HRDController@updateKomponengaji');
    Route::delete('setup/komponengaji/delete/{id}', 'HRDController@destroyKomponengaji')->name('post-delete');
    Route::get('sdm/smi','HRDController@getSMI');
    Route::get('sdm/worker','HRDController@getWorker');
    Route::get('sdm/resign','HRDController@getResign');
});
