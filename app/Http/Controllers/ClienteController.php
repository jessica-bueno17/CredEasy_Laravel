<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use function Ramsey\Uuid\v1;

class ClienteController extends Controller
{
    
    public function index()
    {

        return view('cliente.index')
            ->with('clientes',Cliente::all());
    }

    public function create()
    {
        return view('cliente.cadastro');
    }

    
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $senha = $request->input('senha');
        $cpf = $request->input('cpf');
        $celular = $request->input('numeroTelefone');
        $profissao = $request->input('profissao');
        $renda = $request->input('renda');
        $endereco = $request->input('endereco');

        $cliente = new Cliente();

        $cliente->nome = $nome;
        $cliente->email = $email;
        $cliente->senha = $senha;
        $cliente->cpf = $cpf;
        $cliente->numeroTelefone = $celular;
        $cliente->profissao = $profissao;
        $cliente->renda = $renda;
        $cliente->endereco = $endereco;
        $cliente->tipo_usuario = "CLIENTE";

        $cliente->save();


        return redirect('/cliente');
    }

    /*
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        //
    }*/

    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function edit($id)
    {
        //
    }*/

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function update(Request $request, $id)
    {
        //
    }*/

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function destroy($id)
    {
        //
    }*/
}
