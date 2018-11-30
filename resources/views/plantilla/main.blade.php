<!DOCTYPE html>
<html lang="es">
<head>
    @include('plantilla.head')
</head>
<body>
    @include('plantilla.menu')
    <div id="app" class="container-fluid">
        
        @yield('contenido')
         
    </div>

    @include('plantilla.footer')


<script src="{{ mix('js/app.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/js/mdb.min.js"></script>

<script>
     function archivo(evt) {
            var files = evt.target.files; // FileList object
            
            //Obtenemos la imagen del campo "file". 
            for (var i = 0, f; f = files[i]; i++) {         
                //Solo admitimos imágenes.
                if (!f.type.match('image.*')) {
                        continue;
                }
            
                var reader = new FileReader();
                
                reader.onload = (function(theFile) {
                    return function(e) {
                    // Creamos la imagen.
                    document.getElementById("list").innerHTML = ['<img class="img-precargada" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                    };
                })(f);
        
                reader.readAsDataURL(f);
            }
        }
                    
        document.getElementById('addfoto').addEventListener('change', archivo, false);
</script>
</body>
</html>