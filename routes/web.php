<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SubcategoriaController;
use App\Models\Categoria;

Route::get('/', function () { return view('welcome'); });

Route::get('/categorias', [CategoriaController::class,'index'])->name('categorias.index');
Route::get('/subcategorias', [SubcategoriaController::class,'index'])->name('subcategorias.index');
Route::get('/marcas', [MarcaController::class,'index'])->name('marcas.index');
Route::get('/productos', [ProductoController::class,'index'])->name('productos.index');
/* Route::get('/categorias/{id}', [CategoriaController::class, 'filtrar'])->name('subcategorias.index'); */