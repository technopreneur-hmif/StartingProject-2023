<?php

use App\Http\Controllers\KandidatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('cms.cms',[
        'title' => 'cms'
    ]);
});

Route::get('/confirm', function () {

    return view('cms.confirm');
    
});


// Route::resource('kandidat', KandidatController::class);
// Route::get('/data-kandidat', function () {
//     return view('cms.data-kandidat',[
//         'title' => 'data-kandidat'
//     ]);
// });
Route::get('/data-kandidat', [KandidatController::class ,'create'] )->name('data-kandidat');
Route::post('/data-kandidat', [KandidatController::class ,'store'] )->name('tambah-data-kandidat');


// Route::resource('user', UserController::class);
Route::get('/data-user', [UserController::class ,'create'] )->name('data-user');
Route::post('/data-user', [UserController::class ,'store'])->name('tambah-user');


Route::get('/konfirmasi-pemilih', function () {
    return view('cms.konfirmasi-pemilih' ,[
        'title' => 'konfirmasi-pemilih'
    ]);
});



