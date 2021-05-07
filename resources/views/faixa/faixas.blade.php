@extends('layouts.main')

@section('title',' Discografia Tião Carreiro e Pardinho' )

@section('content')







<div class="container" id="b">

   <div id="search-container">
      <p>Digite uma palavra chave</p>
      <form action="">
         <div class="row">
            <div class="col-md-10">
               <input type="text" name="" id="search" name="search" class="form-control" placeholder="buscca">
            </div>

            <div class="col-md-2">
               <button class="btn btn-primary">Buscar</button>
            </div>
         </div>
      </form>
   </div>

   <div id="events-container" class="com-md-12">

   </div>

   <table class="table">
      <thead>
         <tr>
            
            <th scope="col">ID</th>
            <th scope="col">NÚMERO</th>
            <th scope="col">NOME</th>
            <th scope="col">DURAÇÃO</th>
         </tr>
      </thead>
      <tbody>
         @foreach($faixas as $faixa)
         <tr>

            <td scope="row">{{$faixa->id}}</td>
            <td scope="row">{{ $faixa->numero }} </td>
            <td scope="row">{{ $faixa->nome }} </td>
            <td scope="row"> {{ $faixa->duracao }}</td>
          
         </tr>
         @endforeach

      </tbody>
   </table>

</div>
@endsection