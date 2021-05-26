@extends('layouts.main')

@section('title', $albuns->titulo)

@section('content')



<div class="col-md-10 offset-md-1 ">
    <div class="row">
        <div id="info-container" class="col-md-6">
      
            <h6>Album: {{$albuns->titulo}}, {{$albuns->ano}}</h6>
    
            <p class="album-faixa"></p>
        </div>
    </div>
</div>



<div  class="col-md-6 offset-md-3 conteudo" >
    <table class="table">
       


         
            <td>Nº</td>
            <td>Título</td>
            <td>Duração</td>

      
     
            @foreach($faixas as $faixa)
            <tr>
             @if($albuns->id == $faixa->album_id)
               
                <td>{{ $faixa->numero }} </td>
                <td>"{{ $faixa->nome }}"</td>
                <td>{{ $faixa->duracao }}</td>
             @endif
            </tr>
            @endforeach

       
    </table>
</div>


@endsection