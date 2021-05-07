<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Albuns;
use App\Models\Faixas;
use Illuminate\Console\Scheduling\Event;

class AlbumController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function getAlbuns(){
        
        $albuns = Albuns::all();
        return view('album.albuns',['albuns'=>$albuns]);

    }

 

    public function create()
    {
       
        return view('album.create');
    }

    public function update()
    {
      
        return view('album.update');
    }

    public function store(Request $request) {
        $album = new Albuns();

        $album->titulo = $request->titulo;
        $album->ano = $request->ano;

        $album->save();
        return redirect('/album/albuns');
    }

    public function show($id){
        $album =  Albuns::findOrFail($id);
        $faixas = Faixas::all();

        return view('album.show', ['album' => $album,'faixas'=> $faixas]);
    }
}
