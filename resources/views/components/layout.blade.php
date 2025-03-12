<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articulos</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-light">

    @include('partials.nav')
    
 
    
    <section class="container py-12 my-5">
        <h2 class="h3 font-semibold text-center mb-4">Articulos destacados</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-4">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('https://imgs.search.brave.com/_XK62ZcvNLvp1xNSlGVRiFy2jqDg2pcbUwpKFebpqkM/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9wcmV2/aWV3LnJlZGQuaXQv/aGV4cDZmYXRuMHQ5/MS5qcGc_d2lkdGg9/NjQwJmNyb3A9c21h/cnQmYXV0bz13ZWJw/JnM9MmRmYmQ2ZTM3/YjAxYjRkYjk2Yjlj/M2JjZDAyODMxNWU4/MGU1ZTA1Mw') }}" class="card-img-top" alt="Libro 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Articulo 1</h5>
                        <p class="card-text text-muted">Producto:Funko pop</p>
                        <a href="#" class="btn btn-link text-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('https://static.posters.cz/image/1300/posters/la-casa-de-papel-i101932.jpg') }}" class="card-img-top" alt="Libro 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Posters</h5>
                        <p class="card-text text-muted">Poster de la casa de papel</p>
                        <a href="#" class="btn btn-link text-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('https://imgs.search.brave.com/E1qiPk281gP1XarptVqo9I6Z0wu3z3330dnNQjXASEU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZW5lcy4yMG1pbnV0/b3MuZXMvZmlsZXMv/aW1hZ2VfNjQwX2F1/dG8vdXBsb2Fkcy9p/bWFnZW5lcy8yMDIz/LzA1LzEwL2VsLWFu/aWxsby11bmljby1l/bi1lbC1zZW5vci1k/ZS1sb3MtYW5pbGxv/cy5qcGVn') }}" class="card-img-top" alt="Libro 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Coleccionable</h5>
                        <p class="card-text text-muted">Anillo señor de los anillos</p>
                        <a href="#" class="btn btn-link text-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    
</body>
</html>
