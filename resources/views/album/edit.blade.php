@extends('layouts.main')

@section('title', 'CRIAR ALBUM')

@section('content') 

<div  >

<br>
    <form class="col-md-6 offset-md-3" action="/album/update/{{$albuns->id}}"  method="POST" >
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titulo">Título</label>
            <input   type="text" class="form-control" id="titulo" name="titulo" placeholder="título" value="{{$albuns->titulo}}" >
        </div>
      

        <div class="form-group">
            <label for="ano">Ano</label>
            <input   type="text" class="form-control" id="ano" name="ano" placeholder="ano"value="{{$albuns->ano}}">
        </div>
        <br>
        <input type="submit"  class="btn btn-primary" value="Salvar" id="botao_salvar"  >



    </form>

</div>
@endsection