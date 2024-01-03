<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\MonitorsController;
use Illuminate\Support\Facades\Auth;

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
// Route::get('/',function(){
//     return view('welcome');
// });
Route::middleware(['auth'])->group(function(){

    Route::get('/',function(){
        return redirect('monitors'); 
    });
    // 顯示 所有 螢幕 表格
    Route::get('monitors',[MonitorsController::class,'index'])->name('monitors.index');
    // 顯示 單一 螢幕 資料
    Route::get('monitors/{id}',[MonitorsController::class,'show'])->where('id','[0-9]+')->name('monitors.show');
    // 編輯 單一 螢幕 資料
    Route::get('monitors/{id}/edit',[MonitorsController::class,'edit'])->where('id','[0-9]+')->name('monitors.edit');
    //刪除 單一 螢幕 資料
    Route::delete('monitors/delete/{id}',[MonitorsController::class,'destroy'])->where('id','[0-9]+')->name('monitors.destroy')->middleware('can:admin');
    // 新增 螢幕 資料
    Route::get('monitors/create',[MonitorsController::class,'create'])->name('monitors.create')->middleware('can:admin');
    // 修改 螢幕 資料
    Route::patch('monitors/update/{id}',[MonitorsController::class,'update'])->where('id','[0-9]+')->name('monitors.update');
    // 儲存 螢幕 資料
    Route::post('monitors/store',[MonitorsController::class,'store'])->name('monitors.store')->middleware('can:admin');
    // 顯示 有喇叭 螢幕 資料
    Route::get('monitors/have_speaker',[MonitorsController::class,'have_speaker'])->name('monitors.have_speaker');
    // 選定面板 查詢 螢幕 資料
    Route::get('monitors/panel',[MonitorsController::class,'panel'])->name('monitors.panel');

    // 顯示 所有 廠牌 表格
    Route::get('brands',[BrandsController::class,'index'])->name('brands.index');
    // 顯示 單一 廠牌 資料
    Route::get('brands/{id}',[BrandsController::class,'show'])->where('id','[0-9]+')->name('brands.show');
    // 編輯 單一 廠牌 資料
    Route::get('brands/{id}/edit',[BrandsController::class,'edit'])->where('id','[0-9]+')->name('brands.edit');
    //刪除 單一 廠牌 資料
    Route::delete('brands/delete/{id}',[BrandsController::class,'destroy'])->where('id','[0-9]+')->name('brands.destroy')->middleware('can:admin');
    // 新增 廠牌 資料
    Route::get('brands/create',[BrandsController::class,'create'])->name('brands.create')->middleware('can:admin');
    // 修改 廠牌 資料
    Route::patch('brands/update/{id}',[BrandsController::class,'update'])->where('id','[0-9]+')->name('brands.update');
    // 儲存 廠牌 資料
    Route::post('brands/store',[BrandsController::class,'store'])->name('brands.store')->middleware('can:admin');
    // 顯示 成立超過50年 廠牌 資料
    Route::get('monitors/over_fifty',[BrandsController::class,'over_fifty'])->name('brands.over_fifty');
    // 選定地區 查詢 廠牌 資料
    Route::get('brands/location',[BrandsController::class,'location'])->name('brands.location');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
