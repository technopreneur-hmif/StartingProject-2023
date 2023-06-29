<?php

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
    return view('cms',[
        'title' => 'cms'
    ]);
});

Route::get('/confirm', function () {

    return view('confirm');
    
});

Route::get('/data-kandidat', function () {
    return view('data-kandidat',[
        'title' => 'data-kandidat'
    ]);
});

// Route::get('/data-user', function () {
//     return view('data-user');
// });

Route::get('/data-user', [UserController::class ,'create'] )->name('data-user');
Route::post('/data-user', [UserController::class ,'store'])->name('tambah-user');


Route::get('/konfirmasi-pemilih', function () {
    return view('konfirmasi-pemilih' ,[
        'title' => 'konfirmasi-pemilih'
    ]);
});



