<?php

use Illuminate\Support\Facades\Route;


/// lebih rapi dari sebelum nya admin nya di buat folder
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\AdminAbout;
use App\Http\Controllers\admin\AdminAuth;
use App\Http\Controllers\admin\AdminBanner;
use App\Http\Controllers\admin\AdminDasboard;
use App\Http\Controllers\admin\AdminInformasi;
use App\Http\Controllers\admin\AdminPesan;
use App\Http\Controllers\admin\AdminFoto;
use App\Http\Controllers\admin\AdminJurusan;
use App\Http\Controllers\home\Home;
use App\Http\Controllers\home\HomeContact;
use App\Http\Controllers\home\HomeFoto;
use App\Http\Controllers\home\HomeInformasi;
use App\Http\Controllers\home\HomeJurusan;

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

Route::get('/', [Home::class, 'index']);
Route::get('/detail/{id}', [Home::class, 'detail']);
Route::get('/informasi/{id}', [Home::class, 'informasi']);
Route::get('/informasi', [HomeInformasi::class, 'index']);
Route::get('/informasi/{id}', [HomeInformasi::class, 'informasi']);
Route::get('/foto', [HomeFoto::class, 'index']);
Route::get('/show/{id}', [HomeFoto::class,'detail']);
Route::post('/siswa/send', [HomeSiswa::class, 'send']);
Route::get('/contact', [HomeContact::class, 'index']);
Route::post('/contact/send', [HomeContact::class, 'send']);
Route::get('/jurusan', [HomeJurusan::class, 'index']);
Route::get('/show/{id}', [HomeJurusan::class,'detail']);

Route::get('/alamat', function () {
    $data = [
        'content'=> 'home/alamat/index'
    ];
    return view('home.layouts.wrapper',$data);
});




// Admin
Route::prefix('/admin')->group(function (){
    Route::get('/dasboard', [AdminDasboard::class, 'index']);
    Route::resource('/about', AdminAbout::class);
    Route::resource('/pesan', AdminPesan::class);
    Route::resource('/banner', AdminBanner::class);
    Route::resource('/informasi', AdminInformasi::class);
    Route::resource('/foto', AdminFoto::class);
    Route::resource('/jurusan', AdminJurusan::class);










});