<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\LoginsController;
use App\Http\Controllers\UsuariosController;

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

Route::prefix('/usuario')->middleware('auth', 'usuario')->group(function () {
    Route::get('index', [UsuariosController::class, 'index'])->name('usuarios.index');

    Route::get('view', [UsuariosController::class, 'view'])->name('usuario.view');
});

Route::prefix('/adm')->middleware('auth', 'admin')->group(function () {
    Route::get('/', [AdminsController::class, 'index'])->name('adm.index');

    Route::get('/add', [AdminsController::class, 'add'])->name('adm.add');

    Route::post('/add', [AdminsController::class, 'addSave'])->name('adm.addSave');

    Route::get('/addFilme', [AdminsController::class, 'addFilme'])->name('adm.addFilme');

    Route::post('/addFilme', [AdminsController::class, 'addFilmeSave'])->name('adm.addFilmeSave');

    // Route::get('/{filme}', [AdminsController::class, 'view'])->name('adm.view');

    Route::get('/edit/{filme}', [AdminsController::class, 'edit'])->name('adm.edit');

    Route::post('/edit/{filme}', [AdminsController::class, 'editSave'])->name('adm.editSave');

    Route::get('/delete/{filme}', [AdminsController::class, 'deleteFilme'])->name('adm.deleteFilme');

    Route::delete('/delete/{filme}', [AdminsController::class, 'deleteFilmeForReal'])->name('adm.deleteFilmeForReal');
});

Route::get('login', [LoginsController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('login', [LoginsController::class, 'login'])->name('login');
