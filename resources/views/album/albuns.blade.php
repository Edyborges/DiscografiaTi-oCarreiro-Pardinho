@extends('layouts.main')

@section('title',' Discografia Tião Carreiro e Pardinho' )

@section('content')
<br>
<div class="container conteudo">
   <table class="table">
      <thead>
         <tr>
            <th scope="col">TÍTULO</th>
            <th scope="col">ANO</th>
            <th scope="col" style="text-align: center;">DETALHES</th>
            <th scope="col" style="text-align: center;">EDITAR</th>
            <th scope="col" style="text-align: center;">EXCLUIR</th>
         </tr>
      </thead>
      <tbody>
         @foreach($albuns as $album)
         <tr>
            <td scope="row">{{ $album->titulo }} </td>
            <td scope="row"> {{ $album->ano }}</td>

            <td scope="row" class="icone">
               <div class="col col-md-4"> <a href="/album/{{$album->id}}" style="background-color: red;">
                     <ion-icon name="information-circle"></ion-icon>
                  </a></div>
            </td>

            <td>
               <div class="col col-md-4"> <a href="/album/edit/{{$album->id}}">
                     <ion-icon name="pencil"></ion-icon>
                  </a></div>
            </td>
            <td>
               <div class="col col-md-4" style=" margin-left: 90px;">
                  <form action="/albuns/{{$album->id}}" method="POST">
                     @csrf
                     @method('DELETE')

                     <button onclick="mostrarNotificacaoSucesso('{{$msg}}' )" style="background: none; border: none;">
                        <ion-icon name='trash'></ion-icon>
                     </button>
                  </form>
               </div>
            </td>








         </tr>
         @endforeach


      </tbody>
   </table>

   <a href="/album/create">
      <ion-icon name="add-circle"></ion-icon>
      <h6 class="ion-icon">Adicionar Novo</h1>
   </a><br>



</div>


@endsection