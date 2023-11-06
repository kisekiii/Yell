<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['guest'])->group(function()
{
    Route::get('/login',[SesiController::class,'index'])->name('login');
    Route::get('/register',[SesiController::class,'register'])->name('register');
    Route::post('/register-proses',[SesiController::class,'register_proses'])->name('register-proses');
    Route::post('/login',[SesiController::class,'login']);
});
Route::get('/home', function () {
  return redirect('/dashboard');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[AdminController::class,'index']);
    Route::get('/dashboard/superadmin',[AdminController::class,'superadmin'])->middleware('userAkses:superadmin');
    Route::get('/dashboard/admin',[AdminController::class,'admin'])->middleware('userAkses:admin');
    Route::get('/dashboard/user',[AdminController::class,'user'])->middleware('userAkses:user');
    Route::get('/logout',[SesiController::class,'logout']);

});

