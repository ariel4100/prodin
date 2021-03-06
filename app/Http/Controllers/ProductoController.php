<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use App\ProductoDestacado;
use App\ProductoRelacionados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $relacionados = Producto::orderBy('orden')->get();
        return view('adm.productos.create', compact('familias','relacionados'));
    }
    public function store(Request $request)
    {
        $producto  = new Producto();
        if ($request->hasFile('file_image'))
        {
            $file = $request->file('file_image');
            $imagename = uniqid().'_'.$file->getClientOriginalName();
            if (!file_exists('images/productos'))
            {
                mkdir('images/productos',0777,true);
            }
            $file->move('images/productos',$imagename);
        }else{
            $imagename = "no-image.jpg";
        }

        if ($request->hasFile('file_plano'))
        {
            $file = $request->file('file_plano');
            $imagenameplano = uniqid().'_'.$file->getClientOriginalName();
            if (!file_exists('images/productos/plano'))
            {
                mkdir('images/productos/plano',0777,true);
            }
            $file->move('images/productos/plano',$imagenameplano);
        }else{
            $imagenameplano = "no-image.jpg";
        }

        if($request->file('file_ficha')!=null){

            $ruta                 = 'productos';
            $path                 = Storage::putFileAs($ruta, $request->file('file_ficha'),'producto'.'.'.$request->file('file_ficha')->getClientOriginalExtension());
            $rutaNombre           = 'producto'.'.'.$request->file('file_ficha')->getClientOriginalExtension();
            $producto->file_ficha = $rutaNombre;

        }
        /*if($request->file('file_ficha')!=null){

            $ruta                 = 'productos';
            $path                 = Storage::putFileAs($ruta, $request->file('file_ficha'),'producto'.'.'.$request->file('file_ficha')->getClientOriginalExtension());
            $rutaNombre           = 'producto'.'.'.$request->file('file_ficha')->getClientOriginalExtension();
            $producto->file_ficha = $rutaNombre;

        }*/


        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->caracteristicas = $request->caracteristicas;
        $producto->especificaciones = $request->especificaciones;
        $producto->link_mercadolibre = $request->link_mercadolibre;
        $producto->categoria_id = $request->categoria_id;
        $producto->subcategoria_id = $request->subcategoria_id;
        $producto->orden = $request->orden;
        $producto->file_image = $imagename;
        $producto->file_plano = $imagenameplano;
        $producto->save();

        $p = Producto::all();
        $idUltimo = $p->last();
        if ($request->get('relacionados')) {
            foreach ($request->get('relacionados') as $item) {
                //var_dump($item);
                ProductoRelacionados::create([
                    'producto_id' => $item,
                    'producto' => $idUltimo->id,
                ]);
            }
        }

        //Producto Destacado
        if ($request->destacado)
        {
            $destacado = new ProductoDestacado();
            $destacado->producto_id = $idUltimo->id;
            $destacado->orden = $request->orden;
            $destacado->save();
        }

        return redirect()->route('productos.index')->with('alert', "Registro almacenado exitósamente" );

    }
    public function edit($id)
    {
        $producto = Producto::find($id);
        $familias = Categoria::all();
        $productos = Producto::where('categoria_id', $producto->categoria_id)->orderBy('orden')->get();
        $relacionados = ProductoRelacionados::where('producto',$id)->orderBy('orden')->get();
        return view('adm.productos.edit', compact('familias', 'producto','productos','relacionados'));
    }
    public function update(Request $request, $id)
    {
        $producto  = Producto::find($id);


        //Producto Destacado
        if ($request->destacado)
        {
            $destacado = ProductoDestacado::where('producto_id',$id)->first();
            if ($destacado)
            {
                $destacado->delete();
            }

            $destacado = new ProductoDestacado();
            $destacado->producto_id = $id;
            $destacado->orden = $request->orden;
            $destacado->save();
        }else{
            $destacado = ProductoDestacado::where('producto_id',$id)->first();
            if ($destacado)
            {
                $destacado->delete();
            }
        }


        if ($request->hasFile('file_image'))
        {
            $file = $request->file('file_image');
            $imagename = uniqid().'_'.$file->getClientOriginalName();
            if (!file_exists('images/productos'))
            {
                mkdir('images/productos',0777,true);
            }
            $file->move('images/productos',$imagename);
        }else{
            $imagename = $producto->file_image;
        }

        if ($request->hasFile('file_plano'))
        {
            $file = $request->file('file_plano');
            $imagenameplano = uniqid().'_'.$file->getClientOriginalName();
            if (!file_exists('images/productos/plano'))
            {
                mkdir('images/productos/plano',0777,true);
            }
            $file->move('images/productos/plano',$imagenameplano);
        }else{
            $imagenameplano = $producto->file_plano;
        }
        if($request->file('file_ficha')!=null){

            $ruta                 = 'productos';
            $path                 = Storage::putFileAs($ruta, $request->file('file_ficha'),'producto'.$id.'.'.$request->file('file_ficha')->getClientOriginalExtension());
            $rutaNombre           = 'producto'.$id.'.'.$request->file('file_ficha')->getClientOriginalExtension();
            $producto->file_ficha = $rutaNombre;

        }
        /*if($request->file('file_ficha')!=null){

            $ruta                 = 'productos';
            $path                 = Storage::putFileAs($ruta, $request->file('file_ficha'),'producto'.'.'.$request->file('file_ficha')->getClientOriginalExtension());
            $rutaNombre           = 'producto'.'.'.$request->file('file_ficha')->getClientOriginalExtension();
            $producto->file_ficha = $rutaNombre;

        }*/

        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->caracteristicas = $request->caracteristicas;
        $producto->especificaciones = $request->especificaciones;
        $producto->link_mercadolibre = $request->link_mercadolibre;
        $producto->categoria_id = $request->categoria_id;
        $producto->subcategoria_id = $request->subcategoria_id;
        $producto->orden = $request->orden;
        $producto->file_image = $imagename;
        $producto->file_plano = $imagenameplano;
        $producto->save();

        if ($request->get('relacionados')){
            $prore = ProductoRelacionados::where('producto',$id)->get();
            foreach ($prore as $p) {
                $p->delete();
            }
            foreach ($request->get('relacionados') as $item) {
                ProductoRelacionados::create([
                    'producto_id' => $item,
                    'producto' => $id,
                ]);
            }
        }


        return redirect()->route('productos.index')->with('alert', "Registro almacenado exitósamente" );
    }
    public function destroy($id)
    {
        $producto = Producto::find($id);

        if($producto->delete())
            return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar eliminar el registro" );
    }


    //por categoria
    public function byCategory($id){
        $byCategory = Producto::where('categoria_id',$id)->select('id','nombre')->get();
        return response()->json($byCategory);
    }
}
