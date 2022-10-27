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

   public function MostrarEditarCaminhao(Request $request){
       $dadosCaminhao = Caminhaos::query();
       $dadosCaminhao->when($request->marca,function($query, $vl){
        $query->where('marca','like','%' .$vl);

       });

       $dadosCaminhao = $dadosCaminhao->get();
       //dd($dadosCaminhao)
        return view('editarCaminhao',['registrosCaminhao' => $dadosCaminhao]);
    }

    public function SalvarBanco(Request $request){

    $dadosCaminhao = $request->validate([
    'modelo' => 'string|required',
    'marca' => 'string|required',
    'ano' => 'string|required',
    'cor' => 'string|required',
    'valor' => 'string|required'

    ]);

   Caminhaos::create($dadosCaminhao);

    return Redirect::route('home');
}

public function ApagaBancoCaminhao(Caminhaos $registrosCaminhoes){
   //dd($registrosCaminhoes);
   $registrosCaminhoes->delete();

   return Redirect::route('editar-caminhao');


}
public function MostrarAlterarCaminhao(Caminhaos $registrosCaminhoes){
    return view('alterarCaminhao',['registrosCaminhoes' => $registrosCaminhoes]);

}

public function AlterarBancoCaminhao(Caminhaos $registrosCaminhoes, Request  $request){
  $banco = $request->validate([
    'modelo' => 'string|required',
    'marca' => 'string|required',
    'ano' => 'string|required',
    'cor' => 'string|required',
    'valor' => 'string|required'

    ]);

    $registrosCaminhoes->fill($banco);
    $registrosCaminhoes->save();

    return Redirect::route('editar-caminhao');

    
}


}
