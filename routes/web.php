<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\RolController;


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



// Route::get('/empresas', [EmpresaController::class, 'index']);
// Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresa.index');
// Route::get('/empresas/create', function () {
//     return view('create_empresa');
// })->name('empresa.create');
// Route::post('/empresas', [EmpresaController::class, 'store'])->name('empresa.store');

Route::get('/', function (){
    return view('home');
});

Route::post('/calculadora', [PruebaController::class, 'calcular'])->name('ruta_calculadora');
Route::get('/calculadora', [PruebaController::class, 'calcular'])->name('ruta_calculadora');

Route::get('/vision', [PruebaController::class, 'showVista1'])->name('vision');
Route::get('/mision', [PruebaController::class, 'mision'])->name('mision');
Route::get('/vision', [PruebaController::class, 'vision'])->name('vision');

Route::get('/productos/create', [ProductoController::class,'create'])->name('producto.create');
Route::post('/producto', [ProductoController::class, 'store'])->name('producto.store');
Route::get('/productos/index', [ProductoController::class, 'index'])->name('producto.index');

Route::get('/cargos/create', [CargoController::class, 'create'])->name('cargo.create');
Route::post('/cargos', [CargoController::class, 'store'])->name('cargo.store');
Route::get('/cargos/index', [CargoController::class, 'index'])->name('cargo.index');

Route::get('/contratos/create', [ContratoController::class, 'create'])->name('contrato.create');
Route::post('/contrato', [ContratoController::class, 'store'])->name('contrato.store');
Route::get('/contratos/index', [ContratoController::class, 'index'])->name('contrato.index');

Route::get('/roles/create', [RolController::class, 'create'])->name('rol.create');
Route::post('/roles', [RolController::class, 'store'])->name('rol.store');
Route::get('/roles/index', [RolController::class, 'index'])->name('rol.index');