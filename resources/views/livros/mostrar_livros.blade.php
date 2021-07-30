@extends('layouts.app_cad_livros')

@section('content')
<div class="textocs">
<br>
<h3>EXPLORAR </h3><br>
</div><br>



<form method="POST" action="{{ route('livros.pesquisa') }}" class="filtros">
            <button class="p" disabled>Filtrar por:</button>&nbsp;
            @csrf
            <input placeholder="Nome da obra" class="form-control2" type="text" name="nome">&nbsp;
            <input placeholder="Autor" class="form-control2" type="text" name="autor">&nbsp;
            <input placeholder="Categoria" type="text" class="form-control2" name="categoria">&nbsp;
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
            </select>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary7">
                {{ __('PESQUISAR') }}
            </button>

        </form><br><br><br>

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
       
            
           

<br>
<div class="plaq">
        <?php $nums=0; ?>
        @foreach($livro as $mostra)

            <?php $nums+=1; ?>
            

            <div class="fundomaq">
            <div class="card_livro">   
                    <div class="alinhar">
                        <div class="tit">    
                            <div class="cols">CAPA</div>     
                            <div class="cols">TÍTULO:</div>
                            <div class="cols">AUTOR:</div>
                            <div class="cols">EDITORA:</div>
                            <div class="cols">CATEGORIA:</div>
                            <div class="cols">CLASSIFICAÇÃO:</div>
                            <div class="cols">DESCRIÇÃO:</div>
                            

                        </div>
                    
                        <div class="inf">
                            <div class="lin">
                                <img src="{{  url('storage/'.$mostra->image) }}"/>
                               
                             </div>
                            <div class="lin">{{$mostra->namel}}</div>
                            <div class="lin">{{$mostra->autor}}</div>
                            <div class="lin">{{$mostra->editora}}</div>
                            <div class="lin">{{$mostra->categoria}}</div>
                            <div class="lin">{{$mostra->classificação}}</div>
                            <div class="lin">{{$mostra->descricao}}</div>
                            
                           <br>
                            
                            <a href="{{ url('/alugar', $mostra->users_id)}}"><button class="btn btn-primarya">ALUGAR</button></a>
                            <br>
                            
                        </div>
                    </div>

</div>
</div>

            @if($nums %3 == 0) 
            <div class="break"><br></div><br>
            @endif

           
            
           

            @endforeach
        
</div>
@endsection