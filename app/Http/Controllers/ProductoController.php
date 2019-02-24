<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::orderBy('orden')->get();
        //$productos = Producto::orderBy('orden')->orderBy('familia_id')->get();
        return view('adm.productos.index', compact('productos'));
    }
    public function create()
    {
        $familias = Categoria::orderBy('orden')->get();

        return view('adm.productos.create', compact('familias'));
    }
    public function store(Request $request)
    {
        $producto  = new Producto();
        if ($request->hasFile('file_plano'))
        {
            $file = $request->file('file_plano');
            $imagename = uniqid().'_'.$file->getClientOriginalName();
            if (!file_exists('images/productos/plano'))
            {
                mkdir('images/productos/plano',0777,true);
            }
            $file->move('images/productos/plano',$imagename);
        }else{
            $imagename = "no-image.jpg";
        }


        /*if($request->file('file_ficha')!=null){

            $ruta                 = 'productos';
            $path                 = Storage::putFileAs($ruta, $request->file('file_ficha'),'producto'.'.'.$request->file('file_ficha')->getClientOriginalExtension());
            $rutaNombre           = 'producto'.'.'.$request->file('file_ficha')->getClientOriginalExtension();
            $producto->file_ficha = $rutaNombre;

        }*/

        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->link_mercadolibre = $request->link_mercadolibre;
        $producto->categoria_id = $request->categoria_id;
        $producto->orden = $request->orden;
        if($producto->save())
            return redirect()->route('productos.index')->with('alert', "Registro almacenado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar almacenar el registro" );


    }
    public function edit($id)
    {
        $producto    = Producto::find($id);
        //$familias    = Familia::where('nivel', '<=', '1')->orderBy('orden')->get();

        $familias = Familia::all();
        return view('adm.productos.edit', compact('familias', 'producto'));
    }
    public function update()
    {

    }
    public function destroy($id)
    {
        $producto = Producto::find($id);

        if($producto->delete())
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
    }
}
