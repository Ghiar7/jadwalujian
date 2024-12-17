<?php

use App\Http\Controllers\JadwalujianController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JadwalujianController::class, 'index']);
Route::get('/tambahdata', [JadwalujianController::class, 'tambahdata']);
Route::get('/editdata/{kodeujian}', [JadwalujianController::class, 'editdata']);
Route::post('/storejadwalujian', [JadwalujianController::class, 'storejadwalujian']);
Route::post('/updatejadwalujian', [JadwalujianController::class, 'updatejadwalujian']);
