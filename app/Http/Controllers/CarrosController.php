<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Carros;

class CarrosController extends Controller
{
    public function FormularioCadastroCarros(){
        return view('cadastrarCarros');
    }

    public function MostrarEditarCarros(){
        $dadosCarros = Carros::all();
        return view('editarCarros');
        return view('editarCarros',['registrosCarros' => $dadosCarros]);
    }

    public function SalvarBancoCarros(Request $request){

    $dadosCarros = $request->validate([
    'modelo' => 'string|required',
    'marca' => 'string|required',
    'ano' => 'string|required',
    'cor' => 'string|required',
    'valor' => 'string|nullable'

    ]);

   Carros::create($dadosCarros);

    return Redirect::route('home');
}

}
