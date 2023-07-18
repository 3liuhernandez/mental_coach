<?php

use App\Http\Controllers\Mail;
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
})->name('welcome');

Route::get('email_test', [Mail::class, "mail_test"])->name('email_test');
Route::post('email/contact', [Mail::class, "send_mail_contact"])->name("email.send");