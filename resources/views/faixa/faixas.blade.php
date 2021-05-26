@extends('layouts.main')

@section('title',' Discografia Tião Carreiro e Pardinho' )

@section('content')

<div class="container conteudo">
   <br>

   <table class="table">
      <thead>
         <tr>

            <th scope="col">ID</th>
            <th scope="col">NÚMERO</th>
            <th scope="col">NOME</th>
            <th scope="col">DURAÇÃO</th>
            <th scope="col" style="text-align: center;">OPÇÕES</th>

         </tr>
      </thead>
      <tbody>
         @foreach($faixas as $faixa)
         <tr>

            <td scope="row">{{$faixa->id}}</td>
            <td scope="row">{{ $faixa->numero }} </td>
            <td scope="row">{{ $faixa->nome }} </td>
            <td scope="row"> {{ $faixa->duracao }}</td>


            <td scope="row" class="icone">
               <a href="/faixa/edit/{{$faixa->id}}">
                  <ion-icon name="pencil"></ion-icon>
               </a>

               <form action="/faixas/{{$faixa->id}}" method="POST">
                  @csrf
                  @method('DELETE')


                  <button style="border: none; background: none;">
                     <ion-icon name='trash'></ion-icon>
                  </button>
               </form>
            </td>


         </tr>



         @endforeach
      </tbody>
   </table>
   <a href="/faixa/create">
      <ion-icon name="add-circle"></ion-icon>
      <h6 class="ion-icon">Adicionar Nova</h1>
   </a><br>
</div>
@endsection