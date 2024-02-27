<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoAsiento;

class TipoAsientoController extends Controller
{
    

    public function index(){

        return view('tiposAsientos');
    }


    public function iragregarTipoAsiento(){

        return view('agregarAsiento');
    }
}



