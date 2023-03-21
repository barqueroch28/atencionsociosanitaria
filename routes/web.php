<?php
use App\Http\Controllers\HomeController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/politica-de-privacidad', [HomeController::class, 'privacity'])->name('privacity');
Route::get('/cookies', [HomeController::class, 'cookies'])->name('cookies');

//FORMULARIO
Route::post('/form-contacto', [HomeController::class, 'form'])->name('form');
Route::post('/session', [HomeController::class, 'session'])->name('session');