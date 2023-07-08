<?php

use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\UseracceptController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserViewController;

Route::get('/Dashboard', [UserController::class ,'ShowDashboard'] )->name('cmsdashboard');

Route::get('/confirm', [ConfirmController::class ,'index'] )->name('confirm');
Route::get('/confirm/{id}', [ConfirmController::class, 'show'])->name('confirm-page');
Route::delete('/confirm/{id}', [ConfirmController::class, 'destroy'])->name('reject');
Route::post('/confirm/{id}', [ConfirmController::class, 'move'])->name('move');
Route::resource('konfirmasi-pemilih',UserController::class);
Route::delete('konfirmasi-pemilih/{id}', [UserController::class ,'destroy'] )->name('rejectuser');

Route::resource('data-kandidat',KandidatController::class);
// Route::get('/data-kandidat', [KandidatController::class ,'create'] )->name('data-kandidat');
// Route::post('/data-kandidat', [KandidatController::class ,'store'] )->name('tambah-data-kandidat');
// Route::get('/data-kandidat', function () {
//     return view('cms.data-kandidat',[
//         'title' => 'data-kandidat'
//     ]);
// }); 

Route::resource('data-user',UserController::class);
// Route::get('/data-user', [UserController::class ,'create'] )->name('data-user');
// Route::post('/data-user', [UserController::class ,'store'])->name('tambah-user');

Route::resource('page-vote',UserViewController::class);
Route::post('page-vote/{id}', [UserViewController::class ,'vote'] )->name('vote');




