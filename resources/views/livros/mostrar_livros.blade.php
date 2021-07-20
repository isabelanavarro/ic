@extends('layouts.app_cad_livros')



@section('content')
<div class="textocs">
<br>
<h3>LIVROS</h3>
</div>

<form method="POST" action="{{ route('livros.pesquisa') }}" class="filtros">
            <button class="p" disabled>Filtrar por:</button>
            @csrf
            <input placeholder="Nome da obra" class="form-control" type="text" name="nome">
            <input placeholder="Autor" class="form-control" type="text" name="autor">
            <input placeholder="Categoria" type="text" class="form-control" name="categoria">
            <select name="classificação" class="select-control">
                <option value="" selected>Classificação</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <button type="submit" class="btn btn-primary">
                {{ __('PESQUISAR') }}
            </button>

        </form>

<!--    <tr> adicionar barra de pesquisa e botao de alugar
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>CIDADE</th>
                <th>NÚMERO</th>
                <th>FOTO</th>
                <th></th>
                <th></th>
            </tr>-->
       
            
            <div class="card_livro">   
            @foreach($livro as $mostra)
   
            {{$mostra->users_id}}

            <img src="{{ url("storage/{$mostra->image}") }}"  style="max-width=100px;">

            TÍTULO   {{$mostra->namel}}<br>
            AUTOR {{$mostra->autor}}<br>
            EDITORA {{$mostra->editora}}<br>
            CATEGORIA {{$mostra->categoria}}<br>
            CLASSIFICAÇÃO {{$mostra->classificação}}<br>
            DESCRIÇÃO {{$mostra->descricao}}<br>
            CAPA {{$mostra->image}}<br>
            <a href="{{ url('/alugar', $mostra->users_id)}}"><button class="btn btn-primary">quero alugar</button></a>
    
    @endforeach
    </div>
        
     
        
       
        
        

    
@endsection