<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\HasilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('pelamar', PelamarController::class);
Route::resource('position', PositionController::class);
Route::resource('jadwal', JadwalController::class);
Route::resource('hasil', HasilController::class);

Route::post('/jadwal/{id}', [JadwalController::class, 'create_jadwal']);