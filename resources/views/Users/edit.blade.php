<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>Editar Laravel</title>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Editar Usuario</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('usuarios.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('usuarios.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <strong>Nombres</strong>
                        <input type="text" name="nombres" value="{{ $user->nombres }}"
                            class="form-control">
                        @error('nombres')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>                
                <div class="col-6">
                    <div class="form-group">
                        <strong>Apellidos</strong>
                        <input type="text" name="apellidos" value="{{ $user->apellidos }}"
                            class="form-control">
                        @error('apellidos')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <strong>Edad</strong>
                        <input type="number" name="edad" class="form-control"
                            value="{{ $user->edad }}">
                        @error('edad')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <strong>Teléfono</strong>
                        <input type="number" name="telefono" class="form-control"
                            value="{{ $user->telefono }}">
                        @error('telefono')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div>
                    <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</body>

</html>