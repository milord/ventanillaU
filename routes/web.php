<?php

use App\Http\Controllers\CertificadoController;
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
Route::get('/justificantes/{justificante}/show', [JustificanteController::class, 'show'])->middleware(['auth', 'verified'])->name('justificantes.show');
Route::get('/justificantes/{justificante}/report', [JustificanteController::class, 'report'])->middleware(['auth', 'verified'])->name('justificante.report');

Route::get('/certificados', [CertificadoController::class, 'index'])->middleware(['auth', 'verified'])->name('certificados.index');
Route::get('/certificados/create', [CertificadoController::class, 'create'])->middleware(['auth', 'verified'])->name('certificados.create');
Route::get('/certificados/{certificado}/edit', [CertificadoController::class, 'edit'])->middleware(['auth', 'verified'])->name('certificados.edit');
Route::get('/certificados/{certificado}/show', [CertificadoController::class, 'show'])->middleware(['auth', 'verified'])->name('certificados.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
