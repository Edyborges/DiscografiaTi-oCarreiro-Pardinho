@extends('layouts.main')

@section('title',' ALBUNS' )

@section('content')
<br>
<div class=" conteudo">


  
  
   <table class="table">
      <thead>
         <tr>


            <th scope="col">Título</th>
            <th scope="col">Ano</th>

            <th scope="col" style="text-align: center;">Opções</th>
           

         </tr>
      </thead>
      <tbody>
         @foreach($albuns as $album)
         <tr>
            <td scope="row">{{ $album->titulo }} </td>
            <td scope="row"> {{ $album->ano }}</td>
       
            <td scope="row">
            <a href="/edit/{{$album->id}}"> <ion-icon name="pencil"></ion-icon></a> 
               <form action="/albuns/{{$album->id}}" method="POST">
                  @csrf
                  @method('DELETE')

                  <button style="border: none; background: none;" onclick="mostrarNotificacaoSucesso('{{$msg}}' )" ><ion-icon name='trash'></ion-icon></button>
               </form>
            </td>

         </tr>
         @endforeach


      </tbody>
   </table>

  <a href="/album/create"> <ion-icon name="add-circle"></ion-icon> <h6 class="ion-icon">Adicionar Novo</h1></a><br>



</div>


@endsection