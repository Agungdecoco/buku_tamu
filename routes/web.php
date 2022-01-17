<?php

use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\QueueController;
use App\Models\Consultant;
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

// Route::resource('home', QueueController::class);
Route::get('home', [QueueController::class, 'index'])->name('home');
Route::get('create', [QueueController::class, 'create'])->name('create');
Route::post('store', [QueueController::class, 'store'])->name('store');
Route::delete('queue-del/{id} ', [QueueController::class, 'destroy'])->name('queue-del');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
