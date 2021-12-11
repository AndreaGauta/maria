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
                   listado de libros de {{ $persona->nombre }} {{ $persona->apellido }}

               </h1>
           </div>
        </div>
        <div class="row pt-3 pb-3">
            <div class="col">
                <a href="{{ route('personas.index') }}" class="btn btn-success">Regresar a personas</a>
            </div>  
            <div class ="col">
               <a href="{{ route('libros.create',['persona_id' => $persona->id]) }}" class="btn btn-primary">Crear nuevo libro</a>
                </div>
           </div>
        
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>nombre</td>
                            <td>genero</td>
                            <td>N paginas</td>
                            <td>Registro</td>
                            <td>año</td>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($libros) > 0)
                        @foreach ($libros as $libro)
                        <tr>
                            <td>{{ $libro->id}}</td>
                            <td>{{ $libro->nombre}}</td>
                            <td>{{ $libro->genero}}</td>
                            <td>{{ $libro->Npaginas}}</td>
                            <td>{{ $libro->resgistro }}</td>
                            <td>{{ $libro->año}}</td>
                            <td>

                                <div class="row">
                                    <div class="col">
                                        <a href="#">Detalle</a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('libros.edit',['libro' => $libro->id]) }}"class="btn btn-warning ">Editar</a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('libros.delete',['libro' => $libro->id]) }}"class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                            <tr>
                              <td colspan="5">   
                                  esta personas no tiene libro registrados
                                </td>  
                            </tr>
                                 @endif
                    </tbody>
                </table>
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
  </body>
</html>