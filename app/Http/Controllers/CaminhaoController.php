<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Caminhaos;

class CaminhaoController extends Controller
{
    public function FormularioCadastro(){
        return view('cadastrarCaminhao');
    }

   public function MostrarEditarCaminhao(){
       $dadosCaminhao = Caminhaos::all();
       //dd($dadosCaminhao)
        return view('editarCaminhao',['registrosCaminhao' => $dadosCaminhao]);
    }

    public function SalvarBanco(Request $request){

    $dadosCaminhao = $request->validate([
    'modelo' => 'string|required',
    'marca' => 'string|required',
    'ano' => 'string|required',
    'cor' => 'string|required',
    'valor' => 'string|nullable'

    ]);

   Caminhaos::create($dadosCaminhao);

    return Redirect::route('home');
}

}
