@extends('layouts.main')

@section('title',' Discografia Tião Carreiro e Pardinho' )

@section('content')







<div class="container conteudo">


<a class="link" href="/faixa/create"><img src="/img/novo.png" alt="icone">Nova Faixa</a><br>


 <br>

   <table class="table">
      <thead>
         <tr>
            
            <th scope="col">ID</th>
            <th scope="col">NÚMERO</th>
            <th scope="col">NOME</th>
            <th scope="col">DURAÇÃO</th>
            <th scope="col">Detalhes</th>
            <th scope="col">Editar Faixa</th>
         </tr>
      </thead>
      <tbody>
         @foreach($faixas as $faixa)
         <tr>

            <td scope="row">{{$faixa->id}}</td>
            <td scope="row">{{ $faixa->numero }} </td>
            <td scope="row">{{ $faixa->nome }} </td>
            <td scope="row"> {{ $faixa->duracao }}</td>
            <td scope="row" class="icone"> <form action="/faixas/{{$faixa->id}}" method="POST">
                  @csrf
                  @method('DELETE')

                  <button class="btn btn-primary"><img src="/img/btn_detalhe.png" alt="icone"></button>
               </form></td>
            <td scope="row" class="icone" ><img src="/img/editar.png" alt=""></td>
          
         </tr>
         @endforeach
      </tbody>
   </table>
   
</div>
@endsection