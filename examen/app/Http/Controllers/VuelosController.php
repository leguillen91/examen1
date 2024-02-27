<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vuelos;

class VuelosController extends Controller
{
    
    public function verVuelos(){

        return view('vuelos');
    }

    public function nuevoVuelo(){

        return view('nuevoVuelo');
    }


}
