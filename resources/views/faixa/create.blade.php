@extends('layouts.main')
@section('title', 'Criar conta')

@section('content')

<div >
<br><br>



    <form class="col-md-6 offset-md-3" action="/faixas" method="POST">
        @csrf
        <div class="form-group">
            <label for="numero">Numero</label>
            <input required type="text" class="form-control" id="numero" name="numero" placeholder="numero">
        </div>
        <br>
 
        <div class="form-group">
            <select  id="ddlViewBy" name="album_id" required>
                <option  value="" selected="selected">Album</option>
                @foreach($albuns as $album)
                <option  value="{{$album->id}}">{{$album->titulo}}</option>
                @endforeach
            </select>
        </div>
        <br>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input required type="text" class="form-control" id="nome" name="nome" placeholder="nome">
        </div>

        <div class="form-group">
            <label for="duracao">Duraçao</label>
            <input required type="text" class="form-control" id="duracao" name="duracao" placeholder="duracao">
        </div>
        <br>

        <input type="submit" onclick="mostrarNotificacaoSucesso('{{$msg}}')" class="btn btn-primary" value="Salvar" id="botao_salvar">

    </form>

</div>
@endsection