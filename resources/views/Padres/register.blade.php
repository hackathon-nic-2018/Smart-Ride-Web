@extends('plantilla.main')

@section('title')
    Registro de padres
@endsection

@section('contenido') 
    <div class="row">
        <div class="col-md-6">
            <center>
                <br>
                <h3 class="title">Registrate</h3>
                
                <div class="img-ilustracion">
                
                </div>
            </center>

        </div>
        <div class="col-md-6">
            <div class="contenedor-form">
                <form action="{{ url('/registroPadres')}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                    <center>
                        <h6>
                            seleccione su foto
                        </h6>
                        <div class="file">
                            <input type="file" id="addfoto" name="imagen" required>
                            <output id="list"></output>
                        </div><br>
                    </center>

                    <div class="md-form ">
                        <input type="text" id="txt-name" class="form-control validate" name="name" required>
                        <label for="txt-name" data-error="wrong">Nombres</label>
                    </div>
                    
                    <div class="md-form ">
                        <input type="text" id="txt-apellido" class="form-control validate" name="apellidos" required>
                        <label for="txt-apellido" data-error="wrong" >Apellidos</label>
                    </div>
                    
                    <div class="md-form ">
                        <input type="text" id="txt-direccion" class="form-control validate" name="dir" required>
                        <label for="txt-direccion" data-error="wrong">Dirección</label>
                    </div>

                    <div class="md-form ">
                        <input type="text" id="txt-telefono" class="form-control validate" name="telefono" required>
                        <label for="txt-telefono" data-error="wrong">Teléfono</label>
                    </div>

                    <div class="md-form ">
                        <input type="text" id="txt-email" class="form-control validate" name="email" required>
                        <label for="txt-email" data-error="wrong">Email</label>
                    </div>

                    <div class="md-form ">
                        <input type="password" id="txt-password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }} validate" name="password" required>
                        <label for="txt-password" data-error="wrong">Contraseña</label>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <center>
                        <button class="btn mx-auto btn-reg-rojo" type="submit">Registrarse</button>      
                    </center>
                    
                </form>
            </div>
        </div>
    </div>
@endsection