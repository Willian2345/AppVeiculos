<?php

namespace App\Http\Controllers;

use Illuminate\Http\Redirect;
use Illuminate\Http\Request;
use APP\Models\Caminhao;

class CaminhaoController extends Controller
{
    public function FormularioCadastro(){
        return view('cadastrarCaminhao');
    }

    public function Editar(){
        return view('editarCaminhao');
    }

    public function SalvarBanco(Request $request){

    $dadosCaminhao = $request->validate([
    'modelo' => 'string|required',
    'marca' => 'string|required',
    'ano' => 'string|required',
    'cor' => 'string|required',
    'valor' => 'string|nullable',

    ]);

    Caminhao::create($dadosCaminhao);

    return Redirect::route('home');
}

}
