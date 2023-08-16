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
    Route::get('/', [UsuariosController::class, 'indexUsuario'])->name('usuarios.index');

    Route::get('view', [UsuariosController::class, 'viewUsuario'])->name('usuario.view');
});

Route::prefix('/adm')->middleware('auth', 'admin')->group(function () {
    Route::get('/', [AdminsController::class, 'index'])->name('adm.index');

    Route::get('add/usuario', [AdminsController::class, 'addUsuario'])->name('adm.addUsuario');

    Route::post('add/usuario', [AdminsController::class, 'addUsuarioSave'])->name('adm.addUsuarioSave');

    Route::get('add/filme', [AdminsController::class, 'addFilme'])->name('adm.addFilme');

    Route::post('add/filme/', [AdminsController::class, 'addFilmeSave'])->name('adm.addFilmeSave');

    Route::get('edit/filme/{filme}', [AdminsController::class, 'editFilme'])->name('adm.editFilme');

    Route::post('edit/filme/{filme}', [AdminsController::class, 'editFilmeSave'])->name('adm.editFilmeSave');

    Route::get('edit/usuario/{usuario}', [AdminsController::class, 'editUsuario'])->name('adm.editUsuario');

    Route::post('edit/usuario/{usuario}', [AdminsController::class, 'editUsuarioSave'])->name('adm.editUsuarioSave');

    Route::get('delete/filme/{filme}', [AdminsController::class, 'deleteFilme'])->name('adm.deleteFilme');

    Route::delete('delete/filme/{filme}', [AdminsController::class, 'deleteFilmeForReal'])->name('adm.deleteFilmeForReal');

    Route::get('delete/usuario/{usuario}', [AdminsController::class, 'deleteUsuario'])->name('adm.deleteUsuario');

    Route::delete('delete/usuario/{usuario}', [AdminsController::class, 'deleteUsuarioForReal'])->name('adm.deleteUsuarioForReal');
});

Route::get('login', [LoginsController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('login', [LoginsController::class, 'login'])->name('login');
