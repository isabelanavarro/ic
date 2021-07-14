@extends('layouts.app_alt_exclui')

@section('content')



<div class="card3">
<form action="{{ url('/update_user', $user->id)}}" method="POST" enctype="multipart/form-data" class="form-cad"> 
    <br><br>
<div class="form-group">

<h4>Alteração de perfil</h4>
        {{ csrf_field() }} 
<br>
        <input type="text" class="form-control cad-tam" name="name" placeholder="Nome:" value="{{ $user->name }}">
    </div>
    <br>
    <div class="form-group">

        <input type="text" class="form-control cad-tam" name="email" placeholder="Email:" value="{{ $user->email }}" disabled>
    </div>
    <br>
    <div class="form-group">

        <input type="text" class="form-control cad-tam" name="cidade" placeholder="cidade:" value="{{ $user->cidade }}">
    </div>
    <br>
    <div class="form-group">

        <input type="number" class="form-control cad-tam" name="numero" placeholder="número:" value="{{ $user->numero }}">
    </div>
    <br>
    <div class="form-group">

        <input type="file" class="form-control cad-tam" name="funcao" placeholder="foto:" value="{{ $user->foto }}">
    </div>
    <br>
   <br>
    <div class="form-group">
        <p class="cad-sen-p">Confirme a senha:</p><input id="password" type="password" placeholder="Senha:" class="form-control tam" name="password" required>
    </div>
    <br>
    <div id="botao">
        <input type="submit" name="botao" value="Alterar" class="btn btn-primary" />
    </div>

</form>
</div>

@endsection