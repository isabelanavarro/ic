@extends('layouts.app_perfil')

@section('content')

<div class="textocs">
<br>
<h3>MEUS LIVROS  </h3><br>


<!--
@foreach($livro as $mostra)
<div class="card_livro">  
    
            
            TÍTULO   {{$mostra->namel}}<br>
            AUTOR {{$mostra->autor}}<br>
            EDITORA {{$mostra->editora}}<br>
            CATEGORIA {{$mostra->categoria}}<br>
            CLASSIFICAÇÃO {{$mostra->classificação}}<br>
            DESCRIÇÃO {{$mostra->descricao}}<br>
            CAPA {{$mostra->image}}<br>
            
    
            </div>
@endforeach-->






        

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
       
            
           


<div class="plaq2">
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
                            
                           
                            
                            
                            
                            
                        </div>
                    </div>

</div>
</div>

            @if($nums %3 == 0) 
            <div class="break"><br></div><br>
            @endif

           
        
           

            @endforeach
        
</div>
<a href="{{url('/altera_user', Auth::user()->id)}}"><button class="btn-primary7">ALTERAR MEU PERFIL</button></a>
        <a href="{{ url('/del_user', Auth::user()->id)}}"><button class="btn-primary7">EXCLUIR MEU PERFIL</button></a><br>
</div>     
       
        
        

    
@endsection