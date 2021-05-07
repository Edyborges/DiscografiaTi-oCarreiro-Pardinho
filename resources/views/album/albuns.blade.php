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
            <th scope="col">TÍTULO</th>
            <th scope="col">ANO</th>
            <th scope="col">OPÇÕES</th>
         </tr>
      </thead>
      <tbody>
         @foreach($albuns as $album)
         <tr>

            <td scope="row">{{$album->id}}</td>
            <td scope="row">{{ $album->titulo }} </td>
            <td scope="row"> {{ $album->ano }}</td>
            <td scope="row"> <a href="/album/{{$album->id}}">Detalhes do Album</a></td>

         </tr>
         @endforeach


      </tbody>
   </table>

</div>
@endsection