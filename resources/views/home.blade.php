@extends('plantilla.main')

@section('title')
    Inicio
@endsection

@section('contenido') 

    <div class="row justify-content-center contenedor-principal">
        <div class="col-md-6 align-self-center">
            <img src="img/iphone.jpg" alt="" class="img-iphone">
        </div>
        <div class="col-md-6 align-self-center">
            <img src="img/logo.png" alt="Smart Ride" class="logo-home">

            <h3 class="title">¿Que es Smart Ride?</h3>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad aspernatur molestiae, similique nesciunt reprehenderit, assumenda illo corrupti nobis velit libero optio aut eius dolorum asperiores illum error adipisci amet reiciendis!
            </p>

            <a href="" class="btn ">Descárgala</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3 class="title title-center">¿Para que sirve?</h3>
        </div>
        
        <div class="col-md-6">
            <img src="img/logo.png" alt="" class="ico-p-q">

            <p class="txt-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis nesciunt vero fugit delectus deleniti. Ea exercitationem beatae maiores alias molestiae omnis, unde quam dicta nobis, hic commodi quos harum aut?
            </p>
        </div>
        <div class="col-md-6">
            <img src="img/logo.png" alt="" class="ico-p-q">
            <p class="txt-center">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium autem ducimus repellendus nisi doloremque consequuntur rerum omnis sed, fugit laudantium in delectus incidunt unde dolore officiis! Deleniti explicabo blanditiis repellendus?
            </p>
        </div>

        
        <div class="col-md-12">
            <h3 class="title title-center">¿Por qué hacemos esto?</h3>

            <p class="txt-center">
                Porque nos dimos cuenta que existe la necesidad en los padres y en los transportistas ya que asi como los padres desean saber el bien estar de sus hijos los transportistas tambien tienen el deseo y la necesidad de brindar un transporte agradable y seguro a sus usuarios. 
            </p>
        </div>
    </div>


@endsection