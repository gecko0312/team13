<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\MonitorsController;

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

Route::get('/',function(){
    return redirect('monitors'); 
});
// 顯示 所有 螢幕 表格
Route::get('monitors',[MonitorsController::class,'index'])->name('monitors.index');
// 顯示 單一 螢幕 資料
Route::get('monitors/{id}',[MonitorsController::class,'show'])->where('id','[0-9]+')->name('monitors.show');
// 修改 單一 螢幕 資料
Route::get('monitors/{id}/edit',[MonitorsController::class,'edit'])->where('id','[0-9]+')->name('monitors.edit');
//刪除 單一 螢幕 資料
Route::delete('monitors/delete/{id}',[MonitorsController::class,'destroy'])->where('id','[0-9]+')->name('monitors.destroy');
// 新增 螢幕 資料
Route::get('monitors/create',[MonitorsController::class,'create'])->name('monitors.create');
// 編輯 螢幕 資料
Route::get('monitors/update/{id}',[MonitorsController::class,'update'])->where('id','[0-9]+')->name('monitors.update');



// 顯示 所有 廠牌 表格
Route::get('brands',[BrandsController::class,'index'])->name('brands.index');
// 顯示 單一 廠牌 資料
Route::get('brands/{id}',[BrandsController::class,'show'])->where('id','[0-9]+')->name('brands.show');
// 修改 單一 廠牌 資料
Route::get('brands/{id}/edit',[BrandsController::class,'edit'])->where('id','[0-9]+')->name('brands.edit');
//刪除 單一 廠牌 資料
Route::delete('brands/delete/{id}',[BrandsController::class,'destroy'])->where('id','[0-9]+')->name('brands.destroy');
// 新增 廠牌 資料
Route::get('brands/create',[BrandsController::class,'create'])->name('brands.create');
// 編輯 廠牌 資料
Route::get('brands/update/{id}',[BrandsController::class,'update'])->where('id','[0-9]+')->name('brands.update');

