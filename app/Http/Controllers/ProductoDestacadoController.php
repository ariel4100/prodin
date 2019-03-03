<?php

namespace App\Http\Controllers;

use App\Producto;
use App\ProductoDestacado;
use Illuminate\Http\Request;

class ProductoDestacadoController extends Controller
{
    public function index()
    {
        $destacados = ProductoDestacado::orderBy('orden')->get();
        return view('adm.home.productosDestacados.index', compact('destacados'));
    }

    public function create()
    {
        $destacados = Producto::orderBy('orden')->get();
        return view('adm.home.productosDestacados.create', compact('destacados'));
    }

    public function edit($id)
    {
        $destacado  = ProductoDestacado::find($id);
        $destacados = Producto::orderBy('orden')->get();

        return view('adm.home.productosDestacados.edit', compact('destacado', 'destacados'));
    }

    public function store(Request $request)
    {
        $destacado = new ProductoDestacado();
        $destacado->producto_id = $request->producto_id;
        $destacado->orden = $request->orden;

        if($destacado->save())
            return redirect()->route('destacado.productos')->with('alert', "Registro almacenado exitósamente" );
        else
            return redirect()->route('destacado.productos')->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }

    public function update(Request $request, $id)
    {
        $destacado              = ProductoDestacado::find($id);
        $destacado->producto_id = $request->producto_id;
        $destacado->orden       = $request->orden;

        if($destacado->save())
            return redirect()->route('destacado.productos')->with('alert', "Registro almacenado exitósamente" );
        else
            return redirect()->route('destacado.productos')->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }
}
