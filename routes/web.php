<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InovasiController;


//dashboard
Route::get('/', [DashboardController::class, 'index']);

//inovasi
Route::get('/inovasi', [InovasiController::class, 'index']);
Route::get('/inovasi', [InovasiController::class, 'create']);
Route::post('/inovasi', [InovasiController::class, 'create_action']);
Route::get('/inovasi/{id}/edit', [InovasiController::class, 'edit']);
Route::post('/inovasi/{id}/edit', [InovasiController::class, 'edit_action']);
Route::get('/inovasi/{id}/delete', [InovasiController::class, 'delete']);

//pdf
Route::get('/inovasi/pdf', [InovasiController::class, 'generatePDF'])->name('inovasi.pdf');


