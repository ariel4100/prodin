<?php

namespace App\Http\Controllers;

use App\CategoriaDestacado;
use App\Informacion;
use App\ProductoDestacado;
use App\Slider;
use Illuminate\Http\Request;

class SeccionHomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('seccion', 'home')->get();
        $informacion = Informacion::first();
        $destacados = ProductoDestacado::all();
        $destacados2 = CategoriaDestacado::all();
        return view('page.home.index', compact('sliders', 'informacion', 'destacados','destacados2'));
    }
}
