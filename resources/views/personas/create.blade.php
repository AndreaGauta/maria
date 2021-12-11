@extends('layouts.template')
@section('titulo','Crear Persona');
@section('contenido')
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
                    @error('nombre')
                     <span class="test-danger"><strong>{{$message}}</strong></span>
                     @enderror

                    <div class="form-group">
                     <label for="apellido">apellido</label>
                     <input type="text" class="form-control" id="apellido" name="apellido">
                    </div>
                    @error('apellido')
                     <span class="test-danger"><strong>{{$message}}</strong></span>
                     @enderror
                    <div class="form-group">
                     <label for="direccion">direccion</label>
                     <input type="text" class="form-control" id="direccion" name="direccion">
                    </div>
                    @error('direccion')
                     <span class="test-danger"><strong>{{$message}}</strong></span>
                     @enderror
                    <div class="form-group">
                     <label for="telefono">telefono</label>
                     <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
                    @error('telefono')
                     <span class="test-danger"><strong>{{$message}}</strong></span>
                     @enderror
                      
                    <button type="submit" class="btn btn-primary">crear</button>
                    <button type="button" id="btn-prueba" class="btn btn-primary">prueba</button>
            </form>
        </div>
     </div>
@endsection
@section('scripts')
<script src="{{ asset('js/scriptCrearPersonas.js')}}"></script>
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
@endsection