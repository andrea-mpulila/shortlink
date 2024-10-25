<?php

use App\Http\Controllers\LinkController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LinkController::class, 'create']);
Route::resource('phones',UserController::class);
Route::post('/store', [LinkController::class, 'store'])->name('link.store');
Route::get('/{shortUrl}', [LinkController::class, 'show'])->name('link.show');

