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

Route::prefix('/usuario')->middleware('auth')->group(function () {
    Route::get('index', [UsuariosController::class, 'index'])->name('usuarios.index');

    Route::get('view', [UsuariosController::class, 'view'])->name('usuario.view');
});

Route::prefix('/adm')->middleware('auth')->group(function () {
    Route::post('/', [AdminsController::class, 'index']);

    Route::get('/add', [AdminsController::class, 'addFilme'])->name('adm.addFilme');

    Route::post('/add', [AdminsController::class, 'addFilmeSave'])->name('adm.addFilmeSave');

    // Route::get('/{filme}', [AdminsController::class, 'view'])->name('adm.view');

    Route::get('/edit/{filme}', [AdminsController::class, 'edit'])->name('adm.edit');

    Route::post('/edit/{filme}', [AdminsController::class, 'editSave'])->name('adm.editSave');

    Route::get('/delete/{filme}', [AdminsController::class, 'delete'])->name('adm.delete');

    Route::delete('/delete/{filme}', [AdminsController::class, 'deleteForReal'])->name('adm.deleteForReal');
});

Route::get('login', [LoginsController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('login', [LoginsController::class, 'login'])->name('login');
