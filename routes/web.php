<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
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
    return view('index');
})->name('inicio');


Route::get('/productos', [ProductoController::class, 'mostrarProductos'])->name('productos.mostrar');

Route::get('/empleados', [EmpleadoController::class, 'mostrarEmpleados'])->name('empleados.mostrar');


Route::get('/proveedores', [ProveedorController::class, 'mostrarProveedores'])->name('proveedores.mostrar');


Route::post('/guardar/producto', [ProductoController::class, 'store'])->name('productos.guardar');

Route::post('/guardar/proveedor', [ProveedorController::class, 'store'])->name('proveedores.guardar');

Route::post('/guardar/empleado', [EmpleadoController::class, 'store'])->name('empleados.guardar');

Route::get('/crear/empleado', function () {
    return view('crear-empleados');
})->name('empleados.crear');

Route::get('/crear/proveedor', function () {
    return view('crear-proveedor');
})->name('proveedor.crear');

Route::get('/crear/producto', function () {
    return view('crear-producto');
})->name('producto.crear');

