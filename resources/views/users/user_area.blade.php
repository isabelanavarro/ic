@extends('layouts.app_perfil')

@section('content')


    <form action="" method="POST" enctype="multipart/form-data" class="form-cad"> 
        <div class="card4">  
        <div class="form-group">
        <br><br>
        <h4>Perfil</h4>
        <br><br>
                {{ csrf_field() }} 
        
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
            
            <br>
            
            <button type="submit" class="btn btn-primary"> 
                            
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <div class="btn_logout">
                                {{ __('Logout') }}
                                </div>
                            </a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
            </button>
        
        </div>
        </form>        
        <br>
                        
@endsection                   
                            
                        
