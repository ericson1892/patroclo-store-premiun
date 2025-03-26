<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() {
        $categorias = Categoria::all();
        return view('categorias', compact('categorias'));
    }
    public function filtrar($id)
    {
        $categoria = Categoria::with('subcategorias')->findOrFail($id);
        return view('subcategorias.index', compact('subcategorias'));
    }
}
