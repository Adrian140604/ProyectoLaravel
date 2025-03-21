<!-- Barra de navegación con Bootstrap -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('articulos.index') }}">Articulos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('articulos.create') }}">Añadir articulos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  