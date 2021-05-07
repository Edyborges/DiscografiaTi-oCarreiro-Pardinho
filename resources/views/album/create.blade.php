@extends('layouts.main')
@section('title', 'Criar conta')

@section('content')

<div id="b" class="col-md-6 offset-md-3">

<p>Cadastrar álbum</p>

    <form action="/albuns" method="POST">
    @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="título">
        </div>

        <div class="form-group">
            <label for="ano">Ano</label>
            <input type="text" class="form-control" id="ano" name="ano" placeholder="ano">
        </div>
        <br>

        <input type="submit" class="btn btn-primary" value="Salvar" id="botao_salvar">

    </form>

</div>
@endsection