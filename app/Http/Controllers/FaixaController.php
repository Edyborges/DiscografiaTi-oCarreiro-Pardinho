<?php

namespace App\Http\Controllers;

use App\Models\Albuns;
use Illuminate\Http\Request;

use App\Models\Faixas;



class FaixaController extends Controller

{


    public function getFaixas()
    {
        $msg="ererere";
        $search = request('search');
        $pageTitle = 'FAIXAS';
        $albuns = Albuns::all();


        if ($search) {

            $faixas = Faixas::where([
                ['nome', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $faixas = Faixas::all();
        }



        return view('faixa.faixas', ['faixas' => $faixas, "pageTitle" => $pageTitle, 'search' => $search, 'albuns'=>$albuns, "msg"=>$msg]);
    }

    public function create()
    {
        $msg="Faixa adicionada com sucesso mnmmnmn";
        $faixas = Faixas::all();
        $albuns = Albuns::all();
        $pageTitle = "CADASTRAR FAIXA";
        return view('faixa.create', ['pageTitle' => $pageTitle, 'albuns' => $albuns, 'faixas'=>$faixas, "msg"=>$msg]);
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

    public function destroy($id){
        Faixas::findOrFail($id)->delete();
        return redirect('/faixa/faixas')->with('msg', 'Faixa excluíd com sucesso!');
    }
}
