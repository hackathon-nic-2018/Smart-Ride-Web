@extends('plantilla.main')

@section('contenido')

    <div class="row justify-content-center">
        <div class="col-md-6">

        </div>
        <div class="col-md-6 contenedor-form">

            <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

                <div class="md-form ">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    <label for="email" data-error="wrong">Email</label>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif       
                </div>

                <div class="md-form ">
                    <input id="contrasenia" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>
                    <label for="contrasenia" data-error="wrong">contraseña</label>
                    @if ($errors->has('contrasenia'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contrasenia') }}</strong>
                        </span>
                    @endif       
                </div>
                    
                <center>
                    <button class="btn mx-auto btn-reg-rojo" type="submit">Acceder</button> 
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <br>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif    
                </center>
                    
            </form>
            
        </div>
    </div>

@endsection
