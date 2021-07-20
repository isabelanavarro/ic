@extends('layouts.app')

@section('content')

<div class="home_1">
    <br><br>
    <h5>COMEÇE JÁ! CADASTRE A SUA ÚLTIMA OBRA LIDA. </h5><br>
    <h7>procure emitir uma opinião que ajude os outros leitores!</h7>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
            <br>
            <div class="textocs">
               <h4>CADASTRO DE LIVROS</h4>

               </div>
<br><br>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ url('/cadastro_livros') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="namel" class="col-md-4 col-form-label text-md-right">{{ __('TÍTULO') }}</label>
                            
                            <div class="col-md-6">
                                <input id="namel" type="text" class="form-control @error('namel') is-invalid @enderror" name="namel" value="{{ old('namel') }}" required autocomplete="namel" autofocus>

                                @error('namel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="autor" class="col-md-4 col-form-label text-md-right">{{ __('AUTOR') }}</label>
                           
                            <div class="col-md-6">
                                <input id="autor" type="text" class="form-control @error('autor') is-invalid @enderror" name="autor" value="{{ old('autor') }}" required autocomplete="autor">

                                @error('autor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="editora" class="col-md-4 col-form-label text-md-right">{{ __('EDITORA') }}</label>
                            
                            <div class="col-md-6">
                                <input id="editora" type="text" class="form-control @error('editora') is-invalid @enderror" name="editora" value="{{ old('editora') }}" required autocomplete="editora" autofocus>

                                @error('editora')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 

                                <br>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="categoria" class="col-md-4 col-form-label text-md-right">{{ __('CATEGORIA') }}</label>
                            
                            <div class="col-md-6">
                                <input id="categoria" type="text" class="form-control @error('categoria') is-invalid @enderror" name="categoria" value="{{ old('categoria') }}" required autocomplete="categoria" autofocus>

                                @error('categoria')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="classificação" class="col-md-4 col-form-label text-md-right">{{ __('AVALIAÇÃO -> 0-10') }} </label>
                            
                            <div class="col-md-6">
                                <input id="classificação" type="number" maxlength="2" class="form-control @error('classificação') is-invalid @enderror" name="classificação" value="{{ old('classificação') }}" required autocomplete="classificação" autofocus>

                                @error('classificação')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 

                                <br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descricao" class="col-md-4 col-form-label text-md-right">{{ __('DESCRIÇÃO') }}</label>
                            
                            <div class="col-md-6">
                                <input id="descricao" type="text" class="form-control @error('descricao') is-invalid @enderror" name="descricao" value="{{ old('descricao') }}" required autocomplete="descricao" autofocus>

                                @error('descricao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 

                                <br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('CAPA') }}</label>
                            
                            <div class="col-md-6">
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"  >

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <br>
                            </div>
                        </div>

                        

                        <br><br>
                        
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                           


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection