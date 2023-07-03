<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Crear Usuario</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Atrás</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('usuarios.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <strong>Nombres</strong>
                        <input type="text" name="nombres" class="form-control">
                        @error('nombres')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <strong>Apellidos</strong>
                        <input type="text" name="apellidos" class="form-control">
                        @error('apellidos')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <strong>Edad</strong>
                        <input type="number" name="edad" class="form-control">
                        @error('edad')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <strong>Teléfono</strong>
                        <input type="number" name="telefono" class="form-control">
                        @error('telefono')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary ml-3">Guardar</button>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</body>

</html>
