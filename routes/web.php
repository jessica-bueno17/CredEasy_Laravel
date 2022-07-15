<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmprestimoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

/* Route::{verbo http}('{sua rota}', {Código a ser executado}); */

Route::get('/cliente', [ClienteController::class,'index']);

Route::get('/cliente/cadastro', [ClienteController::class,'create']);

Route::post('/cliente/salvar', [ClienteController::class,'store']);

/* ROTAS EMPRESTIMOS */

Route::get('/emprestimo', [EmprestimoController::class,'index']);

Route::get('/emprestimo/solicitar', [EmprestimoController::class,'create']);

Route::post('/emprestimo/salvar', [EmprestimoController::class,'store']);