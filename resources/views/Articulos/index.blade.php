<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Libros</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@endif
<body class="bg-light">
    @include('partials.nav')

    <div class="container py-5">
        <h2 class="text-center mb-4">Coleccionables</h2>

        <!-- Contenedor centrado con Bootstrap -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Producto</th>
                        <th>Serie o pelicula</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articulos as $articulo)
                        <tr>
                            <td>{{ $articulo->Nombre }}</td>
                            <td>{{ $articulo->serie_o_pelicula}}</td>
                            <td>{{ $articulo->descripcion }}</td>
                            <td>${{ $articulo->precio }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('articulos.edit', parameters: $articulo->id) }}" class="btn btn-primary btn-sm me-2">Ver Mas</a>

                                <a href="{{ route('articulos.edit', parameters: $articulo->id) }}" class="btn btn-warning btn-sm me-2">Editar</a>
                                <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este articulo?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
