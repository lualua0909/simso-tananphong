<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'getHome'])->name('getHome');
Route::get('/tuyen-dung', [MainController::class, 'getTuyenDung']);
Route::get('/ve-chung-toi', [MainController::class, 'getAboutUs']);
Route::get('/tin-tuc', [MainController::class, 'getNews']);
Route::get('/tin-tuc/{slug}', [MainController::class, 'getNewsDetail']);
Route::get('/tim-kiem', [MainController::class, 'getSearch']);

Route::get('/dang-ky-chinh-chu', [MainController::class, 'getDangKyChinhChu']);
Route::get('/chon-goi-cuoc', [MainController::class, 'getChonGoiCuoc']);
Route::get('/hoan-tat', [MainController::class, 'getHoanTat']);
Route::get('/thong-tin-khach-hang', [MainController::class, 'getThongTinKhachHang']);
Route::get('/huong-dan', [MainController::class, 'getHuongDan']);