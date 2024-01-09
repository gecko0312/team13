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

Route::get('monitors',[MonitorsController::class,'index'])->name('monitors.index');
Route::get('monitors/{id}',[MonitorsController::class,'show'])->where('id','[0-9]+')->name('monitors.show');
Route::get('monitors/{id}/edit',[MonitorsController::class,'edit'])->where('id','[0-9]+')->name('monitors.edit');
Route::get('brands',[BrandsController::class,'index'])->name('brands.index');
Route::get('brands/{id}',[BrandsController::class,'show'])->where('id','[0-9]+')->name('brands.show');
Route::get('brands/{id}/edit',[BrandsController::class,'edit'])->where('id','[0-9]+')->name('brands.edit');
Route::get('monitors',[MonitorsController::class,'index'])->name('monitors.index');
Route::get('brands',[BrandsController::class,'index'])->name('brands.index');
Route::delete('monitors/delete/{id}',[MonitorsController::class,'destroy'])->where('id','[0-9]+')->name('monitors.destroy')->middleware('can:admin');
Route::delete('brands/delete/{id}',[BrandsController::class,'destroy'])->where('id','[0-9]+')->name('brands.destroy')->middleware('can:admin');
Route::get('monitors/create',[MonitorsController::class,'create'])->name('monitors.create')->middleware('can:admin');
Route::get('brands/create',[BrandsController::class,'create'])->name('brands.create')->middleware('can:admin');
Route::get('monitors/{id}/edit', [MonitorsController::class, 'edit'])->where('id', '[0-9]+')->name('monitors.edit');
Route::patch('monitors/update/{id}', [MonitorsController::class, 'update'])->where('id', '[0-9]+')->name('monitors.update');
Route::get('brands/{id}/edit', [BrandsController::class, 'edit'])->where('id', '[0-9]+')->name('brands.edit');
Route::patch('brands/update/{id}', [BrandsController::class, 'update'])->where('id', '[0-9]+')->name('brands.update');
Route::post('monitors/store',[MonitorsController::class,'store'])->name('monitors.store')->middleware('can:admin');
Route::post('brands/store',[BrandsController::class,'store'])->name('brands.store')->middleware('can:admin');
Route::get('monitors/panel', [MonitorsController::class, 'panel'])->name('monitors.panel');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('monitors/have_speaker',[MonitorsController::class,'have_speaker'])->name('monitors.have_speaker');
Route::get('monitors/over_fifty',[BrandsController::class,'over_fifty'])->name('brands.over_fifty');
Route::get('brands/location',[BrandsController::class,'location'])->name('brands.location');

