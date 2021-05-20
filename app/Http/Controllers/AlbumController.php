<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Albuns;
use App\Models\Faixas;
use App\Models\PageTitle;
use App\public\js\script;


class AlbumController extends Controller
{



    public function index()
    {
        $search = request('search');
        $pageTitle = 'FAIXAS';
        $albuns = Albuns::all();
        $msg = "Não há nenhum album cadastrado para adicionar faixas. Favor cadastrar pelo menos um album !";



        if ($search) {

            $faixas = Faixas::where([
                ['nome', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $faixas = Faixas::all();
        }

        $pageTitle = "DISCOGRAFIA";
        return view('welcome', ['pageTitle' => $pageTitle, 'faixas' => $faixas, "search" => $search, "albuns" => $albuns, "msg" => $msg]);
    }

    public function getAlbuns()
    {

        $faixas = Faixas::all();
        $msg =  "Album excluído com sucesso !";
        $msgNull = "Não há nenhum album cadastrado para adicionar faixas. Favor cadastrar pelo menos um album !";
        $pageTitle = "ALBUNS";
        $albuns = Albuns::all();

        return view('album.albuns', ['albuns' => $albuns, 'pageTitle' => $pageTitle, "msgNull" => $msgNull, "msg" => $msg, 'faixas' => $faixas]);
    }

   public function edit($id){
       $albuns = Albuns::findOrFail($id);
       return view('album.edit', ['albuns'=>$albuns]);
   }


    public function create()
    {
        $msg = "Album adicionado com sucesso!";
        $albuns = Albuns::all();
        $pageTitle = "CADASTRAR ALBUM";
        return view('album.create', ['pageTitle' => $pageTitle, 'albuns' => $albuns, "msg" => $msg]);
    }

    public function update(Request $request )
    {
        Albuns::findOrFail($request->id)->update($request->all());
        return redirect('/album/albuns');
       
    }

    public function store(Request $request)
    {
        $album = new Albuns();

        $album->titulo = $request->titulo;
        $album->ano = $request->ano;


        $album->save();
        return redirect('/album/albuns');
    }

    public function detalhe_album($id)
    {

        $pageTitle = "DETALHES DO ALBUM";
        $album =  Albuns::findOrFail($id);
        $faixas = Faixas::all();

        return view('album.detalhe_album', ['album' => $album, 'faixas' => $faixas, 'pageTitle' => $pageTitle]);
    }

    public function destroy($id)
    {
        Albuns::findOrFail($id)->delete();
        return redirect('/album/albuns');
    }

   
}
