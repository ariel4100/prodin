<?php

namespace App\Http\Controllers;

use App\Informacion;
use App\Slider;
use Illuminate\Http\Request;

class SeccionHomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('seccion', 'home')->get();
        $informacion = Informacion::first();

        return view('page.home.index', compact('sliders', 'informacion', 'destacados'));
    }
}
