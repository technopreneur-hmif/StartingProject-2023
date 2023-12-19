<?php

use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\UseracceptController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserViewController;
use App\Http\Controllers\ClientKandidatController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\VoteResultAdminController;

Route::get('/Dashboard', [UserController::class ,'ShowDashboard'] )->name('cmsdashboard')->middleware('admin');

Route::get('/confirm', [ConfirmController::class ,'index'] )->name('confirm')->middleware('admin');
Route::get('/confirm/{id}', [ConfirmController::class, 'show'])->name('confirm-page')->middleware('admin');
Route::delete('/confirm/{id}', [ConfirmController::class, 'destroy'])->name('reject')->middleware('admin');
Route::post('/confirm/{id}', [ConfirmController::class, 'move'])->name('move')->middleware('admin');
Route::resource('konfirmasi-pemilih',UserController::class)->middleware('admin')->middleware('admin');
Route::delete('konfirmasi-pemilih/{id}', [UserController::class ,'destroy'] )->name('rejectuser')->middleware('admin');

Route::resource('data-kandidat',KandidatController::class)->middleware('admin');
// Route::get('/data-kandidat', [KandidatController::class ,'create'] )->name('data-kandidat');
// Route::post('/data-kandidat', [KandidatController::class ,'store'] )->name('tambah-data-kandidat');
// Route::get('/data-kandidat', function () {
//     return view('cms.data-kandidat',[
//         'title' => 'data-kandidat'
//     ]);
// }); 

Route::resource('data-user',UserController::class)->middleware('admin');
// Route::get('/data-user', [UserController::class ,'create'] )->name('data-user');
// Route::post('/data-user', [UserController::class ,'store'])->name('tambah-user');

Route::get('/page-vote',[VoteController::class ,'index'])->middleware('auth');
Route::post('/page-vote/{user:username}', [VoteController::class ,'vote'] );

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/', [BerandaController::class, 'index'])->middleware('auth');

// client-side

Route::get('/vote', function () {
    return view('user.page-vote', [
        "active" => ""
    ]);
})->middleware('auth');

Route::get('/calon-kandidat', [ClientKandidatController::class, 'index'])->middleware('auth');
Route::get('/detail-kandidat/{calon:nama_kandidat}', [ClientKandidatController::class, 'show'])->middleware('auth');

Route::get('/cara-voting', function () {
    return view('user.cara-voting');
})->middleware('auth');

Route::get('/hasil-voting', function () {
    return view('user.hasil-voting',);
})->middleware('auth');

Route::get('/hasil-voting-admin', [VoteResultAdminController::class, 'index'])->middleware('auth');





