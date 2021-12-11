<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
        <div class="row">
           <div class="col text-center">
               <h1 class="text-primary">
                   crear nueva persona
               </h1>
           </div>
        </div>
        <div class="row pt-3 pb-3">
            <div class ="col">
                <a href="{{ route('personas.index') }}" class="btn btn-primary">regresar al listado</a>
                </div>
           </div>
           <div class="row">
             @if(session("errors"))
             <h3>ocurrio un error</h3>
             @endif
            </div> 

        
        <div class="row">
            <div class="col">
            <form action="{{ route('personas.store') }}" method="POST" >
              @csrf
                 <div class="row d-flex justify-content-center">
                   <div class="col-sm-2">
                     <img src="" alt="" width="200px" heigth="200px" id="imagen" >
                     <input type="file"  name="input_imagen"  id="input_imagen" >
                     <textarea name="imagen" id="text_imagen" cols="30" rows="10" class="d-none">
</textarea>
                     
</div>
                  </div>  
                     <div class="form-group">
                     <label for="cedula">cedula</label>
                     <input type="text" class="form-control" id="cedula" name="cedula">
                     @error('cedula')
                     <span class="test-danger"><strong>{{$message}}</strong></span>
                     @enderror
                    </div>

                    <div class="form-group">
                     <label for="nombre">nombre</label>
                     <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>

                    <div class="form-group">
                     <label for="apellido">apellido</label>
                     <input type="text" class="form-control" id="apellido" name="apellido">
                    </div>

                    <div class="form-group">
                     <label for="direccion">direccion</label>
                     <input type="text" class="form-control" id="direccion" name="direccion">
                    </div>

                    <div class="form-group">
                     <label for="telefono">telefono</label>
                     <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
 
                    <button type="submit" class="btn btn-primary">crear</button>
            </form>
        </div>
     </div>
 </div> 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
      <script>
        var imagen = document.getElementById('imagen');
        var input_imagen = document.getElementById('input_imagen');
        var text_imagen = document.getElementById('text_imagen');

        imagen.addEventListener('click', function(){
          input_imagen.click();
        });

        input_imagen.addEventListener('change' , function(){
          var file= this.files[0];
          var sizebyte = this.files[0].size;
          var sizeKilobyte = parseInt(sizebyte / 1024);
          if (sizeKilobyte > 4096) {
            alert('la imagen exede el tamaño permitido de un 4 MB');

          }else{
            var reader = new FileReader();
            reader.onloadend = function(){
              document.getElementById("imagen").src= reader.result;
              text_imagen.value = reader.result;
            }
            reader.readAsDataURL(file);
          }
        });
        </script>
  </body>
</html>