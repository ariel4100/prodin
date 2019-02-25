<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Galeria;
use App\Producto;
use Illuminate\Http\Request;

class SeccionProductoController extends Controller
{
    public function index(){
        $familias = Categoria::orderBy('orden')->get();
        $seccion = 'Productos';

        return view('page.productos.index', compact('familias', 'seccion'));
    }

    public function listar($id){
        $familias = Categoria::orderBy('orden')->get();
        $productos = Producto::where('categoria_id', $id)->get();

        return view('page.productos.listar', compact('familias','productos'));
    }

    public function show($id){
        $producto = Producto::find($id);
        $familias = Categoria::orderBy('orden')->get();
        $galeria = Galeria::where('producto_id',$id)->orderBy('orden')->get();
        return view('page.productos.show', compact('producto','familias','galeria'));
    }
}
