<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\DangkilamgiasuController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\DangkitimgiasuController;
// use App\Http\Controllers\GioithieuController;
// use App\Http\Controllers\HocphithamkhaoController;
// use App\Http\Controllers\PhuhuynhcanbietController;

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
    return view('pages.gioithieu');
});



// Route::get('/home',[HomeController::class,'home']);
Route::get('/home',[HomeController::class,'home']);
// Route::get('/dangkilamgiasu',[DangkilamgiasuController::class,'dangkilamgiasu']);
// Route::get('/dangkitimgiasu',[DangkitimgiasuController::class,'dangkitimgiasu']);
// Route::get('/gioithieu',[GioithieuController::class,'gioithieu']);
// Route::get('/hocphithamkhao',[HocphithamkhaoController::class,'hocphithamkhao']);
// Route::get('/phuhuynhcanbiet',[PhuhuynhcanbietController::class,'phuhuynhcanbiet']);



// Route::get('/admin_login',[AdminController::class,'admin_login']);