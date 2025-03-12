<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($articulo) ? 'Editar Articulo' : 'Añadir nuevo articulo' }} - Todos tus articulos</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-light">
    @include('partials.nav')

    <div class="container py-5">
        <h1 class="text-3xl font-semibold mb-4 text-center">{{ isset($articulo) ? 'Editar Articulo' : 'Añadir nuevo articulo' }}</h1>

        <div class="card mx-auto shadow-lg" style="max-width: 500px;">
            <div class="card-body">
                <form action="{{ isset($articulo) ? route('articulos.update', $articulo->id) : route('articulos.store') }}" method="POST">
                    @csrf
                    @if (isset($articulo))
                        @method('PUT') 
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                   
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Título</label>
                        <input type="text" id="Nombre" name="Nombre" class="form-control" value="{{ old('Nombre', $articulo->Nombre ?? '') }}" required>
                    </div>

                    
                    <div class="mb-3">
                        <label for="serie_o_pelicula" class="form-label">Serie o Pelicula</label>
                        <input type="text" id="serie_o_pelicula" name="serie_o_pelicula" class="form-control" value="{{ old('serie_o_pelicula', $articulo->serie_o_pelicula ?? '') }}" required>
                    </div>

                   
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea id="descripcion" name="descripcion" class="form-control" required>{{ old('descripcion', $articulo->descripcion ?? '') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" id="precio" name="precio" class="form-control" value="{{ old('precio', $articulo->precio ?? '') }}" required>
                    </div>

                 
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">
                            {{ isset($articulo) ? 'Actualizar articulo' : 'Guardar Articulo' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
