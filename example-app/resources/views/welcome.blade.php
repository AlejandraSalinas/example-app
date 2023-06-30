<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Prueba con laravel</title>
</head>
<body>
    <h1 class="text-center">CRUD con Laravel</h1>
    <hr>
    <br>
     <!-- Modal Crear-->
     <div class="modal fade" id="ModalCrear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                      <label for="nombres" class="form-label">Nombres</label>
                      <input type="text" class="form-control" name="nombres" id="nombres" aria-describedby="emailHelp">                                                  
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" id="apellidos" aria-describedby="emailHelp">                                                  
                    </div>
                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad</label>
                        <input type="number" class="form-control" name="edad" id="edad" aria-describedby="emailHelp">                                                  
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="number" class="form-control" name="telefono" id="telefono" aria-describedby="emailHelp">                                                  
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="text" class="form-control" name="correo" id="correo" aria-describedby="emailHelp">                                                  
                    </div>                                                
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Crear</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-start">
          <div class="col">
                <button type="submit" data-bs-toggle="modal" data-bs-target="#ModalCrear" class="btn btn-success">Crear Usuario</button>
                <table class="table table-striped table-bordered table-hover">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($sql as $item)                        
                            <tr>
                                <th>{{$item->id}}</th>
                                <td>{{$item->nombres}}</td>
                                <td>{{$item->apellidos}}</td>
                                <td>{{$item->edad}}</td>
                                <td>{{$item->telefono}}</td>
                                <td>{{$item->correo}}</td>
                                <td>
                                    <a href="" data-bs-toggle="modal" data-bs-target="#ModalEditar" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                
                                    <a href="" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash3"></i>
                                    </a>                                    
                                </td>                               
                                
                                <!-- Modal -->
                                <div class="modal fade" id="ModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modificar Usuario</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                  <label for="nombres" class="form-label">Nombres</label>
                                                  <input type="text" class="form-control" name="nombres" id="nombres" aria-describedby="emailHelp">                                                  
                                                </div>
                                                <div class="mb-3">
                                                    <label for="apellidos" class="form-label">Apellidos</label>
                                                    <input type="text" class="form-control" name="apellidos" id="apellidos" aria-describedby="emailHelp">                                                  
                                                </div>
                                                <div class="mb-3">
                                                    <label for="edad" class="form-label">Edad</label>
                                                    <input type="number" class="form-control" name="edad" id="edad" aria-describedby="emailHelp">                                                  
                                                </div>
                                                <div class="mb-3">
                                                    <label for="telefono" class="form-label">Teléfono</label>
                                                    <input type="number" class="form-control" name="telefono" id="telefono" aria-describedby="emailHelp">                                                  
                                                </div>
                                                <div class="mb-3">
                                                    <label for="correo" class="form-label">Correo</label>
                                                    <input type="text" class="form-control" name="correo" id="correo" aria-describedby="emailHelp">                                                  
                                                </div>                                                
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-primary">Modificar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </tr>
                        @endforeach                   
                    </tbody>
                </table>        
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>