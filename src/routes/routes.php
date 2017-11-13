<?php

// Route::group(['prefix' => 'info-kamar'], function() {
//     Route::get('demo', 'Supriyanih\InfoKamar\Http\Controllers\InfoKamarController@demo');
//     Route::resource('kelas', 'Supriyanih\InfoKamar\Http\Controllers\KelasController');
// });

Route::group(['middleware' => ['web']], function () {
    Route::get('demo','Bantenprov\YankesInfoKamar\Http\Controllers\InfoKamarController@demo');
    Route::resource('kelas', 'Bantenprov\YankesInfoKamar\Http\Controllers\KelasController');
    Route::resource('ruang', 'Bantenprov\YankesInfoKamar\Http\Controllers\RuangController');
    Route::resource('bed', 'Bantenprov\YankesInfoKamar\Http\Controllers\BedController');
});
