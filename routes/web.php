<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\BarangController;

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


Route::resource('barang', BarangController::class);





Route::get('/index', [MailController::class, 'index'])->name('index');
Route::get('/sendmail', [MailController::class, 'send_email'])->name('kirim.email');
Route::post('/submit-form', [MailController::class, 'submitForm'])->name('submit.form');


