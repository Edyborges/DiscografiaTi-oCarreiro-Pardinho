@extends('layouts.main')
@section('title', 'Criar conta')

@section('content')

<div id="b" class="col-md-6 offset-md-3">

<p>Cadastrar Faixa</p>

    <form action="/faixas" method="POST">
    @csrf
        <div class="form-group">
            <label for="numero">Numero</label>
            <input type="text" class="form-control" id="numero" name="numero" placeholder="numero">
        </div>

        <div class="form-group">
            <label for="album_id">Album</label>
            <input type="text" class="form-control" id="album_id" name="album_id" placeholder="album">
        </div>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="nome">
        </div>

        <div class="form-group">
            <label for="duracao">Duraçao</label>
            <input type="text" class="form-control" id="duracao" name="duracao" placeholder="duracao">
        </div>
        <br>

        <input type="submit" class="btn btn-primary" value="Salvar" id="botao_salvar">

    </form>

</div>
@endsection