<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CaminhaoController;
use App\Http\Controllers\CarrosController;
use App\Http\Controllers\ListarCarrosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('welcome');
});
*/




Route::get('/',[HomeController::class,'MostrarHome'])->name('home');
Route::get('/editar-caminhao',[CaminhaoController::class,'MostrarEditarCaminhao'])->name('editar-caminhao');
Route::get('/cadastrar-caminhao',[CaminhaoController::class,'FormularioCadastro'])->name('cadastrar-caminhao');
Route::post('/cadastrar-caminhao',[CaminhaoController::class,'SalvarBanco'])->name('salvar-banco');
Route::get('/editar-carros',[CarrosController::class,'MostrarEditarCarros'])->name('editar-carros');
Route::get('/cadastrar-carros',[CarrosController::class,'FormularioCadastroCarros'])->name('cadastrar-carros');
Route::post('/cadastrar-carros',[CarrosController::class,'SalvarBancoCarros'])->name('salvar-banco-carros');


Route::delete('/editar-caminhao/{registrosCaminhoes}',[CaminhaoController::class,'ApagaBancoCaminhao'])->name('apagar-caminhao');

Route::delete('/editar-carro/{registrosCarros}',[CarrosController::class,'ApagaBancoCarro'])->name('apagar-carro');

Route::get('/alterar-caminhao/{registrosCaminhoes}',[CaminhaoController::class,'MostrarAlterarCaminhao'])->name('alterar-caminhao');
Route::get('/alterar-carro/{registrosCarros}',[CarrosController::class,'MostrarAlterarCarros'])->name('alterar-carro');
Route::get('/listarCarros',[ListarCarrosController::class,'MostrarlistarCarros'])->name('listarCarros');
Route::get('/listar-caminhao',[CaminhaoController::class,'MostrarCaminhao'])->name('listar-caminhao');
Route::put('/editar-caminhao/{registrosCaminhoes}',[CaminhaoController::class,'AlterarBancoCaminhao'])->name('alterar-banco-caminhao');
