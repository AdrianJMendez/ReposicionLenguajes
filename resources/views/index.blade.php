<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EXAMEN REPOSICIÓN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
      body {
        background-color: #d0ba91;
        color: #2c2721;
      }
      .navbar {
        background-color: #66513c;
      }
      .navbar-brand, .nav-link {
        color: #ffffff !important;
      }
      .btn-custom {
        background-color: #967f5f;
        color: #ffffff;
        border: none;
      }
      .btn-custom:hover {
        background-color: #66513c;
      }
      footer {
        background-color: #2c2721;
        color: #ffffff;
      }
    </style>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('inicio') }}">Inicio</a>
      </div>
    </nav>

    <div class="container mt-4">
      <div class="row">
      </div>
      <div class="row text-center">
        <div class="col-md-4 mb-3">
          <a href="{{ route('productos.mostrar') }}" class="btn btn-custom btn-lg">Productos</a>
        </div>
        <div class="col-md-4 mb-3">
          <a href="{{ route('empleados.mostrar') }}" class="btn btn-custom btn-lg">Empleados</a>
        </div>
        <div class="col-md-4 mb-3">
          <a href="{{ route('proveedores.mostrar') }}" class="btn btn-custom btn-lg">Proveedores</a>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          @yield('content')
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
