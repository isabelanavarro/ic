@extends('layouts.app_perfil')

@section('content')

<div class="card_livro">
@foreach($livro as $mostra)
    
    
            
            TÍTULO   {{$mostra->namel}}<br>
            AUTOR {{$mostra->autor}}<br>
            EDITORA {{$mostra->editora}}<br>
            CATEGORIA {{$mostra->categoria}}<br>
            CLASSIFICAÇÃO {{$mostra->classificação}}<br>
            DESCRIÇÃO {{$mostra->descricao}}<br>
            CAPA {{$mostra->image}}<br>
            
    
    
@endforeach
</div>
@endsection 