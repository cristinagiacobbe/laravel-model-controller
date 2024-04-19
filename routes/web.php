<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/contacts', [PagesController::class, 'toContacts'])->name('contacts');
Route::get('/about', [PagesController::class, 'toAbout'])->name('about');
Route::get('/best', [PagesController::class, 'toBest'])->name('best');
Route::get('/worst', [PagesController::class, 'toWorst'])->name('worst');
