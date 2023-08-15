<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;

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
    Route::get('', [UsuariosController::class, 'index'])->name('usuarios');

    Route::get('view', [UsuariosController::class, 'view'])->name('usuarios.view');
});

Route::prefix('/adm')->group(function () {
    Route::post('/', [AdminsController::class, 'index']);

    Route::get('/add', [AdminsController::class, 'add'])->name('adm.add');

    Route::post('/add', [AdminsController::class, 'addSave'])->name('adm.addSave');

    Route::get('/{filme}', [AdminsController::class, 'view'])->name('adm.view');

    Route::get('/edit/{filme}', [AdminsController::class, 'edit'])->name('adm.edit');

    Route::post('/edit/{filme}', [AdminsController::class, 'editSave'])->name('adm.editSave');

    Route::get('/delete/{filme}', [AdminsController::class, 'delete'])->name('adm.delete');

    Route::delete('/delete/{filme}', [AdminsController::class, 'deleteForReal'])->name('adm.deleteForReal');
});
