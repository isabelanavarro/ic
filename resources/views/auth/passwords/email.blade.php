@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card2">
                <br>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
             @endif
                <div class="card-header">{{ __('ESQUECI MINHA SENHA!') }}</div>
<br>
                <div class="card-body">


                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Digite seu e-mail:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<br><br>
                        
                                <button type="submit" class="btn btn-primary9">
                                    {{ __('Enviar solicitação') }}
                                </button>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
