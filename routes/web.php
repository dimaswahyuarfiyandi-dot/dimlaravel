<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('WAD/welcome');
});

Route::get('/helloinformatika',
[\App\Http\Controllers\helloinformatikacontroller::class,
'helloinformatika']);

use Illuminate\Http\Request;

// Pendaftaran
Route::post('/daftar', function (Request $request) {
    return redirect('/WAD/sukses-daftar');
});

// Aspirasi
Route::post('/aspirasi', function (Request $request) {
    return redirect('/WAD/sukses-aspirasi');
});
Route::get('/sukses-daftar', function () {
    return view('/WAD/sukses_daftar');
});

Route::get('/sukses-aspirasi', function () {
    return view('/WAD/sukses_aspirasi');
});

Route::get('/menu', function () {
    return view('DPW/menu');
});

Route::get('/pakaian', function () {
    return view('DPW/pakaian');
});

Route::get('/aksesoris', function () {
    return view('DPW/aksesoris');
});

Route::get('/skincare', function () {
    return view('DPW/skincare');
});

Route::view('/biodata-ahmad', 'biodata.ahmad');
Route::view('/biodata-dimas', 'biodata.dimas');
Route::view('/biodata-vita', 'biodata.vita');
Route::view('/biodata-suci', 'biodata.suci');