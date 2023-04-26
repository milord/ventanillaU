<?php

use App\Http\Controllers\JustificanteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TramiteController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/tramites', [TramiteController::class, 'index'])->middleware(['auth', 'verified'])->name('tramites.index');
/*Route::get('/tramites/create', [TramiteController::class, 'create'])->middleware(['auth', 'verified'])->name('tramites.create');*/

Route::get('/justificantes', [JustificanteController::class, 'index'])->middleware(['auth', 'verified'])->name('justificantes.index');
Route::get('/justificantes/create', [JustificanteController::class, 'create'])->middleware(['auth', 'verified'])->name('justificantes.create');
Route::get('/justificantes/{justificante}/edit', [JustificanteController::class, 'edit'])->middleware(['auth', 'verified'])->name('justificantes.edit');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
