<?php

// Route::group(['prefix' => 'info-kamar'], function() {
//     Route::get('demo', 'Supriyanih\InfoKamar\Http\Controllers\InfoKamarController@demo');
//     Route::resource('kelas', 'Supriyanih\InfoKamar\Http\Controllers\KelasController');
// });

Route::group(['middleware' => ['web']], function () {
    Route::get('demo','Supriyanih\InfoKamar\Http\Controllers\InfoKamarController@demo');
    Route::resource('kelas', 'Supriyanih\InfoKamar\Http\Controllers\KelasController');
    Route::resource('ruang', 'Supriyanih\InfoKamar\Http\Controllers\RuangController');
    Route::resource('bed', 'Supriyanih\InfoKamar\Http\Controllers\BedController');
});
