@extends('plantilla.main')

@section('title')
    Inicio
@endsection

@section('contenido') 

    
    <div class="row justify-content-center contenedor-iphone">
        <div class="col-md-7 align-self-center ">
                
        </div>
        <div class="col-md-5 align-self-center section-desc">
            <img src="img/logo2.png" alt="Smart Ride" class="logo-home">

            <h3 class="title">¿Que es Smart Ride?</h3>
            <p>
                Es una herramienta que permite el control de las unidades de transporte escolar por medio de una aplicación web y móvil.
            </p>

            <a href="" class="btn btn-rojo">Descárgala</a>
        </div>
    </div>
    


    <div class="row">
        <div class="col-md-12">
            <h3 class="title title-center">¿Para que sirve?</h3>
        </div>
        
        <div class="col-md-4 mx-auto">
            <img src="img/Control de rutaldpi.png" alt="" class="ico-p-q">

            <p class="txt-center">
               Conocerás la ubicación de tus hijos desde que suben hasta que bajan del transporte escolar.
            </p>
        </div>
        <div class="col-md-4 mx-auto">
            <img src="img/datos_transportistaldpi.png" alt="" class="ico-p-q">
            <p class="txt-center">
                Conocerás los datos del transportista e incluso podras comunicarte con el a través de la platafoma.
            </p>
        </div>

        
        <div class="col-md-8 mx-auto">
            <h3 class="title title-center">¿Por qué hacemos esto?</h3>

            <p class="txt-center">
                Porque nos dimos cuenta que existe la necesidad en los padres y en los transportistas ya que asi como los padres desean saber el bien estar de sus hijos los transportistas tambien tienen el deseo y la necesidad de brindar un transporte agradable y seguro a sus usuarios. 
            </p>
        </div>
    </div>



    <div class="row">
        <div class="col-md-8 mx-auto">
            <h3 class="title title-center">Colegios Afiliados</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mx-auto">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> 
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-slider" src="img/marista.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-slider" src="img/colegio.png" alt="Second slide">
                    </div>
                     <div class="carousel-item">
                        <img class="d-block w-100 img-slider" src="img/herman.png" alt="Third slide">
                    </div> 
                </div>

            </div>
        </div>
        <br>
        <div class="col-md-12">
            <br>
        </div>
    </div>

@endsection