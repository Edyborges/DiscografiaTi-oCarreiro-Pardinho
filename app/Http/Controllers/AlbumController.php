<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Albuns;

class AlbumController extends Controller
{
    public function index()
    {
    

        $albuns = Albuns::all();
      
        return view('album/albuns',['albuns'=>$albuns]);
    }

 

    public function create()
    {
       
        return view('album.create');
    }

    public function update()
    {
      
        return view('album.update');
    }
}
