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


   @foreach($albuns as $albun)
   <p>{{ $albun->nome }} -- {{ $albun->ano }} </p>


   @endforeach


</div>



@endsection