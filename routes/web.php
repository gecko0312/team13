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
//顯示所有螢幕表格
Route::get('monitors',[MonitorsController::class,'index'])->name('monitors.index');
//顯示單一螢幕資料
Route::get('monitors/{id}',[MonitorsController::class,'show'])->where('id','[0-9]+')->name('monitors.show');
//編輯單一螢幕資料
Route::get('monitors/{id}/edit',[MonitorsController::class,'edit'])->where('id','[0-9]+')->name('monitors.edit');
//刪除單一螢幕資料
Route::delete('monitors/delete/{id}',[MonitorsController::class,'destroy'])->where('id','[0-9]+')->name('monitors.destroy');
//新增螢幕資料
Route::get('monitors/create',[MonitorsController::class,'create'])->name('monitors.create');
//修改螢幕資料
Route::patch('monitors/update/{id}',[MonitorsController::class,'update'])->where('id','[0-9]+')->name('monitors.update');
//儲存螢幕資料
Route::post('monitors/store',[MonitorsController::class,'store'])->name('monitors.store');


//顯示所有廠牌表格
Route::get('brands',[BrandsController::class,'index'])->name('brands.index');
//顯示單一廠牌資料
Route::get('brands/{id}',[BrandsController::class,'show'])->where('id','[0-9]+')->name('brands.show');
//編輯單一廠牌資料
Route::get('brands/{id}/edit',[BrandsController::class,'edit'])->where('id','[0-9]+')->name('brands.edit');
//刪除單一廠牌資料
Route::delete('brands/delete/{id}',[BrandsController::class,'destroy'])->where('id','[0-9]+')->name('brands.destroy');
//新增廠牌資料
Route::get('brands/create',[BrandsController::class,'create'])->name('brands.create');
//修改廠牌資料
Route::patch('brands/update/{id}',[BrandsController::class,'update'])->where('id','[0-9]+')->name('brands.update');
//儲存廠牌資料
Route::post('brands/store',[BrandsController::class,'store'])->name('brands.store');
