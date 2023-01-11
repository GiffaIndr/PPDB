<?php

use App\Http\Controllers\TakeController;
use Illuminate\Support\Facades\Route;

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
Route::middleware(['isguest'])->group(function(){
    Route::get('/', [TakeController::class, 'index']);
    Route::get('/login', [TakeController::class, 'login'])->name('login');
    Route::post('/login/input', [TakeController::class, 'loginAccount'])->name('login.input');
    Route::post('/login/auth', [TakeController::class, 'auth'])->name('auth');
    Route::get('/pendaftaran', [TakeController::class, 'pendaftaran'])->name('pendaftaran');
});


    Route::middleware(['islogin', 'checkRole:admin,user'])->group(function(){
        Route::get('/error', [TakeController::class, 'error'])->name('error');
    });

Route::middleware(['islogin', 'checkRole:admin'])->group(function(){
    Route::get('/bukti', [TakeController::class, 'image'])->name('bukti');
    Route::get('/detail', [TakeController::class, 'detail'])->name('detail');
    Route::get('/dashboard', [TakeController::class, 'dashboard'])->name('dashboard');
    Route::delete('/dashboard/delete/{id}', [TakeController::class, 'destroy'])->name('delete');
Route::patch('/update/{id}', [TakeController::class, 'update'])->name('update');
Route::patch('/completed/{id}', [TakeController::class, 'updateCompleted'])->name('updateCompleted');
Route::patch('/tolak/{id}', [TakeController::class, 'updateRefuse'])->name('updateRefuse');
Route::patch('/profile/upload', [TakeController::class, 'imagebukti'])->name('bukti.upload');
});


Route::get('/logout', [TakeController::class, 'logout'])->name('logout');
Route::get('/downloadPDF', [TakeController::class, 'pdf'])->name('downloadpdf');

Route::middleware(['checkRole:user'])->group(function(){
   
    Route::get('/payment', [TakeController::class, 'payment'])->name('payment');
Route::post('/store', [TakeController::class, 'store'])->name('store');
});