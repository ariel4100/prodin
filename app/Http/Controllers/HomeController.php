<?php

namespace App\Http\Controllers;

use App\Informacion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('adm.home.index',compact('informacion'));
    }

    public function indexInformacion()
    {
        $informacion = Informacion::first();
        return view('adm.home.informacion.index',compact('informacion'));
    }

    public function editInformacion($id)
    {
        $informacion = Informacion::find($id);
        return view('adm.home.informacion.edit',compact('informacion'));
    }

    public function update(Request $request,$id)
    {
        $informacion = Informacion::find($id);

        if ($request->hasFile('file_image'))
        {
            $file = $request->file('file_image');
            $imagename = uniqid().'_'.$file->getClientOriginalName();
            if (!file_exists('images/home'))
            {
                mkdir('images/home',0777,true);
            }
            $file->move('images/home',$imagename);
        }else{
            $imagename = "no-image.jpg";
        }

        $informacion->titulo1 = $request->titulo1;
        $informacion->titulo4 = $request->titulo4;

        if($informacion->save())
            return redirect()->route('home.info')->with('alert', "Registro actualizado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }
}
