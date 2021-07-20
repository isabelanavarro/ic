@extends('layouts.app_aluga')

@section('content')

<div class="card3">
<form action="{{ url('/update_user', $user->id)}}" method="POST" enctype="multipart/form-data" class="form-cad"> 
    <br><br>
<div class="form-group">

<h4>Alteração de perfil</h4>
        {{ csrf_field() }}  <!--  disable -->
<br>
        <input type="text" disabled="disabled" class="form-control cad-tam" name="name" placeholder="Nome:" value="{{ $user->name }}">
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
   
    <br>
   <br>
    
    <br>

</form>
</div>

@endsection