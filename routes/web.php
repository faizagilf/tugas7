<?php

use App\Http\Controllers\CustomerController;
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

Route::get('/', function () {
    return view('welcome');
});

// Mahasiswa
Route::prefix('customer')->group(function(){
    Route::get('/',[CustomerController::class,'index'])->name('customers.index');
    Route::get('/take/{customer}',[CustomerController::class,'take'])->name('customers.take');
    Route::post('/take/{customer}', [CustomerController::class, 'takeStore'])->name('customers.takeStore');
});

// Pivot
Route::get('/mobil',[CustomerController::class,'mobil'])->name('mobil');
