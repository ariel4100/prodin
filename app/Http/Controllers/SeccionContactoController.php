<?php

namespace App\Http\Controllers;

use App\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SeccionContactoController extends Controller
{
    public function index(){
        $mensaje        = '';
        $seccion        = 'Contacto';
        $mensaje_previo = '¡Contáctanos!';
        $mapa           = Contacto::where('tipo', 'mapa')->first();
        $telefono_1     = Contacto::where('tipo', 'telefono_1')->first();
        $telefono_2     = Contacto::where('tipo', 'telefono_2')->first();
        $telefono_3     = Contacto::where('tipo', 'telefono_3')->first();
        $email          = Contacto::where('tipo', 'email')->first();
        $direccion      = Contacto::where('tipo', 'direccion')->first();
        return view('page.contacto.index', compact('mensaje', 'seccion', 'mensaje_previo', 'mapa', 'telefono_1', 'telefono_2', 'telefono_3', 'email', 'direccion'));
    }

    public function store(Request $request)
    {
        $data = array(['nombre'   => $request->get('nombre'),
            'apellido' => $request->get('apellido'),
            'email'    => $request->get('email'),
            'mensaje'  => $request->get('mensaje')]);
        Mail::send('page.contacto.email.contacto', $data[0], function($message){
            $dato = Contacto::where('tipo', 'email')->first();
            $message->subject('Te han enviado un mensaje desde la web');
            $message->to($dato->descripcion);
        }
        );

        return redirect()->back()->with('alert', '¡Gracias por contactarnos!');
    }

    public function show($id)
    {
        $producto       =  Producto::find($id);
        $mensaje        = 'Me intera el producto '.$producto->descripcion.'. Por favor contáctenme.';
        $seccion        = 'Contacto';
        $mensaje_previo = '¡Contáctanos!';
        return view('page.contacto.index', compact('mensaje', 'seccion', 'mensaje_previo'));
    }
}
