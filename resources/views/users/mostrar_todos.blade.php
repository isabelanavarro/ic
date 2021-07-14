@extends('layouts.app_alt_exclui')



@section('content')
<div class="titulo">
<br>
<h3>USUÁRIOS - controle de administrador</h3>
</div>

    <div class="tab">

        
    
        <table class="table table-striped table-red">
            <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>CIDADE</th>
                <th>NÚMERO</th>
                <th>FOTO</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
           
            @foreach($user as $user)
            <div class="linhas">
            <tbody>
                
            <tr>
             <td>{{$user->id}}</td>
             <td>{{$user->name}}</td>
             <td>{{$user->email}}</td>
             <td>{{$user->cidade}}</td>
             <td>{{$user->numero}}</td>
             <td>{{$user->foto}}</td>
             <td>
             <a href="{{url('/altera_user', $user->id)}}"><button class="btn-altm">Alterar</button></a><br>
        <a href="{{ url('/del_user', $user->id)}}"><button class="btn-excluim">Excluir</button></a><td>
             </tr>
            </tbody>

        
</div>
        @endforeach
          
        </table>
        
       
        
        

    </div>
@endsection