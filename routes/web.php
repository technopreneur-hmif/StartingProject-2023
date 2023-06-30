<?php

use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\UseracceptController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Confirm;
use Database\Factories\UseracceptFactory;

Route::get('/', function () {
    return view('cms.cms',[
        'title' => 'cms'
    ]);
});



Route::get('/confirm', [ConfirmController::class ,'index'] )->name('confirm');
Route::get('/confirm/{id}', [ConfirmController::class, 'show'])->name('confirm-page');
// Route::delete('/confirm/{id}', [ConfirmController::class, 'destroy'])->name('reject');

// Route::get('/confirm/{id}', [UseracceptController::class ,'move'] )->name('move');


// // Route::get('/confirm', function () {
//     return view('cms.confirm');
    
// });

Route::get('/konfirmasi-pemilih', [UserController::class ,'index'] )->name('konfirmasi-pemilih');
Route::delete('/konfirmasi-pemilih/{id}', [UseracceptController::class, 'move'])->name('move');
// Route::get('/konfirmasi-pemilih', function () {
//     return view('cms.konfirmasi-pemilih' ,[
//         'title' => 'konfirmasi-pemilih'
//     ]);
// });

Route::get('/data-kandidat', [KandidatController::class ,'create'] )->name('data-kandidat');
Route::post('/data-kandidat', [KandidatController::class ,'store'] )->name('tambah-data-kandidat');
// Route::resource('kandidat', KandidatController::class);
// Route::get('/data-kandidat', function () {
//     return view('cms.data-kandidat',[
//         'title' => 'data-kandidat'
//     ]);
// }); 

// Route::resource('user', UserController::class);
Route::get('/data-user', [UserController::class ,'create'] )->name('data-user');
Route::post('/data-user', [UserController::class ,'store'])->name('tambah-user');





