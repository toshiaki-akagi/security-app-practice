<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');  // お問い合わせフォーム画面表示
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit'); // お問い合わせ内容送信
