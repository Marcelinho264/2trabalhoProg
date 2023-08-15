<?php

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

Route::prefix('/usuario')->middleware('auth')->group(function () {
    Route::get('', [UsuariosController::class, 'index'])->name('usuarios');

    Route::get('view', [UsuariosController::class, 'view'])->name('usuarios.view');
});


Route::prefix('/adm')->middleware('auth')->group(function () {
    Route::post('/', [ProdutosController::class, 'index']);

    Route::get('/add', [ProdutosController::class, 'add'])->name('adm.add');

    Route::post('/add', [ProdutosController::class, 'addSave'])->name('adm.addSave');

    Route::get('/{filme}', [ProdutosController::class, 'view'])->name('adm.view');

    Route::get('/edit/{filme}', [ProdutosController::class, 'edit'])->name('adm.edit');

    Route::post('/edit/{filme}', [ProdutosController::class, 'editSave'])->name('adm.editSave');

    Route::get('/delete/{filme}', [ProdutosController::class, 'delete'])->name('adm.delete');

    Route::delete('/delete/{filme}', [ProdutosController::class, 'deleteForReal'])->name('adm.deleteForReal');


});
