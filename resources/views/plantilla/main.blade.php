<!DOCTYPE html>
<html lang="es">
<head>
    @include('plantilla.head')
</head>
<body>
    @include('plantilla.menu')
    <div id="app" class="container">
        
        @yield('contenido')
         
    </div>

    @include('plantilla.footer')


<script src="{{ mix('js/app.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/js/mdb.min.js"></script>
</body>
</html>