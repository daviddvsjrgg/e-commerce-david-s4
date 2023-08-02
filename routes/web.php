<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index1462100120Controller;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\DetailPenjualanController;

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


// Index1462100120Controller
route::get('/', [Index1462100120Controller::class, 'main']);
route::get('/profile', [Index1462100120Controller::class, 'profile']);
route::get('/about', [Index1462100120Controller::class, 'about']);

//KategoriController
route::resource('kategori', KategoriController::class);

//PelangganController
route::resource('pelanggan', PelangganController::class);

//DetailPenjualanController
route::resource('detail', DetailPenjualanController::class);

//SearchController
route::get('/search/kategori', [SearchController::class, 'searchKat']);
route::get('/search/pelanggan', [SearchController::class, 'searchPel']);
route::get('/search/detail', [SearchController::class, 'searchDet']);










