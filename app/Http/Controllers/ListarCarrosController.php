<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarCarrosController extends Controller
{
    public function MostrarListarCarros()
    {
        return view('listarCarros');
    }
}
