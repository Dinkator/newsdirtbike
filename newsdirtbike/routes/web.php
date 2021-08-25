<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TheloaiController;
use App\Http\Controllers\TinController;
use App\Http\Controllers\GuimailController;
use App\Http\Controllers\UserController;
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
//admin
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class,'logout']);

Route::get('quantri/', function () {
    return view('quantri/layoutquantri');
})->middleware('auth', 'Quantri');
//createtheloai
Route::group(['middleware' => ['auth','Quantri']], function () {
    Route::resource('quantri/theloai',  App\Http\Controllers\TheloaiController::class);

});

Route::group(['middleware' => ['auth','Quantri']], function () {
    Route::resource('quantri/loaitin',  App\Http\Controllers\LoaitinController::class);
});

Route::group(['middleware' => ['auth','Quantri']], function () {
    Route::resource('quantri/tin',  App\Http\Controllers\TinController::class);
});
Route::group(['middleware' => ['auth','Quantri']], function () {
    Route::resource('quantri/user',  App\Http\Controllers\UserController::class);
});
//endadmin

//layout
// Route::get('/', [TinController::class,'ind
Route::get('tin/{id}', [TinController::class,'chitiettin']);
Route::get('tin-trong-loai/{id}/{slug}', [TinController::class,'tintrongloai']);
Route::get('lien-he/', [TinController::class,'lienhe']);
Route::post('lien-he/', [GuimailController::class,'guimaillienhe']);
Route::get('thong-bao', 'GuimailController@guimaillienhe');
Route::get('camon', function () {
    return view('camon');
});
Route::get('bao-cao', [TinController::class,'baocao']);
//end




