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
</body>
</html>