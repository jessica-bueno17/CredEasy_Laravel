<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emprestimo;
use DateTime;


class EmprestimoController extends Controller
{

    public function index()
    {
        return view('emprestimo.index')
        ->with('emprestimos',Emprestimo::all());
    }

    public function create()
    {
        return view('emprestimo.solicitacao');
    }


   public function store(Request $request)
    {
        $valorEmprestimo = $request->input('valorEmprestimo');
        //$numeroParcelas = $request->input('numeroParcelas');
        
        $emprestimo = new Emprestimo();

        $emprestimo->valor = $valorEmprestimo;
        $emprestimo->valor_final = 0;
        $emprestimo->taxa_juros = 0;
        
        $date = now();
        $emprestimo->data_solicitacao = $date;

        //$emprestimo->data_quitacao = "";
        $emprestimo->status = "SOLICITADO";
        $emprestimo->cliente_cpf = "89889898989";

        $emprestimo->save();


        return redirect('/emprestimo');
    }

}
