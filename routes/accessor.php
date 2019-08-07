<?php
//-> client
Route::prefix('accessor')->group(function(){
    //--x get method
    Route::get('lowongan', 'AccessorController@getLowongan');
    Route::get('lowongan/show/{id}', 'AccessorController@showLowongan');

    //--x create method
    Route::get('dashboard/create', 'ClientController@createDashboard');
    Route::get('notifikasi/create', 'ClientController@createNotifikasi');
    Route::get('orderlayanan/create', 'ClientController@createOrderlayanan');
    Route::get('datakaryawan/create', 'ClientController@createDatakaryawan');
});
