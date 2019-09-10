<?php
//-> client
Route::prefix('client')->group(function(){
    //--x get method
    Route::get('dashboard', 'ClientController@getDashboard');
    Route::get('notifikasi', 'ClientController@getNotifikasi');
    Route::get('orderlayanan', 'ClientController@getOrderlayanan');
    Route::get('datakaryawan', 'ClientController@getDatakaryawan');

    //--x create method
    Route::get('dashboard/create', 'ClientController@createDashboard');
    Route::get('notifikasi/create', 'ClientController@createNotifikasi');
    Route::get('orderlayanan/create', 'ClientController@createOrderlayanan');
    Route::get('datakaryawan/create', 'ClientController@createDatakaryawan');
});
