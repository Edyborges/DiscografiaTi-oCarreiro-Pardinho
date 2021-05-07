<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Faixas;



class FaixaController extends Controller
{
    public function getFaixas()
    {

        $faixas = Faixas::all();
        return view('faixa.faixas', ['faixas' => $faixas]);
    }

    public function create()
    {
        return view('faixa.create');
    }



    public function store(Request $request)
    {
        $faixa = new Faixas();
        $faixa->nome = $request->nome;
        $faixa->numero = $request->numero;       
        $faixa->duracao = $request->duracao;
        $faixa->album_id = $request->album_id;
     
        $faixa->save();
        return redirect('/faixa/faixas');

       
    }
}
