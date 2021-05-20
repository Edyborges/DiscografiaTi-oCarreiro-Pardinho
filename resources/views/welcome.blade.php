@extends('layouts.main')
@section('title',' Discografia Tião Carreiro & Pardinho' )

@section('content')



<div class="container conteudo" >

   @if($search)
   <p>Buscando por: {{$search}}</p>
   @else
  
  
   @endif
   <form action="/" method="GET">
      <div class="row">
         <div class="col-md-10">
            <input type="text" name="search" id="search" name="search" class="form-control radius" placeholder="Digite uma palavra chave">
         </div>

         <div class="col-md-2">
            <button onsubmit="mostrarNotificacao('Mensagem:','{{$msg}}' )" class="btn btn-primary radius">Procurar</button>
         </div>
      </div>
   </form>
   <br>
 

   @if($search)

   @foreach($faixas as $faixa)



   @foreach($albuns as $album)

   @if($album->id == $faixa->album_id)

   <h6>Album: {{$album->titulo}}, {{$album->ano}}</h6>

   <table class="table">
      <tr>
         <th>Nº</th>
         <th>Faixa</th>
      </tr>

      <tr>
         <td>{{$faixa->numero}}</td>
         <td>{{$faixa->nome}}</td>
      </tr>
   </table>

   @endif
   @endforeach

   @foreach($faixas as $faixa)



   @endforeach
   @endforeach

   @if(count($faixas)== 0)
   <p>Não há faixa com essa palavra chave</p>
   @endif

</div>



@endif
@endsection