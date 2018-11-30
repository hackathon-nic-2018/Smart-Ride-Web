@extends('plantillaperfil.main')

@section('title')
    Perfil
@endsection

@section('contenido')
    
    <div class="row">
        <div class="col-md-10 mx-auto">
            <img src="../../img/perfil/{{Auth::user()->foto}}" class="img-responsive user-image1" alt="User Image">
            <p class="txt-users">{{ Auth::user()->name }}</p>
        </div>
    </div>


    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card content-card1" style="width: 20rem;">
                <div class="card-1">
                    <img src="../../img/ruta actualldpi.png" alt="" class="img-ico">
                </div>
                <h3 class="title-blanco">Ruta actual</h3>

                <a href="" class="btn-footer btn-center">Ver más</a>
            </div>
        </div>

        <div class="col-md-5 mx-auto">
            <div class="card content-card2" style="width: 20rem;">
                <div class="card-2">
                    <img src="../../img/transportistaldpi.png" alt="" class="img-ico">
                </div> 
                <h3 class="title-blanco">Ruta actual</h3>

                <a href="" class="btn-footer btn-center">Ver más</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mx-auto">
            <a href="" class="btn-register btn-center">Registrar Estudiantes</a>

        </div>
        <br>
        <br>
        <br>
        <div class="row"></div>
    </div>
@endsection