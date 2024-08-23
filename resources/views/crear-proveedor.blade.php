@extends('index')

@section('content')

<form method="POST" action="{{ route('proveedores.guardar')}}">
@csrf
<div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com" name="Id_proveedor">
    <label for="floatingInput">Id Proveedor</label>
  </div>
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="nombre">
    <label for="floatingPassword">Nombre</label>
  </div>
  <div class="form-floating">
    <input type="date" class="form-control" id="floatingPassword" placeholder="Password" name="fechaRegistro">
    <label for="floatingPassword">Fecha de Registro</label>
  </div>
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="teléfono">
    <label for="floatingPassword">Número de Teléfono</label>
  </div>

  <div class="form-floating">
    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="correo">
    <label for="floatingPassword">Correo</label>
  </div>

<hr>
  <input type="submit" value="¡CREAR!" class="form-control btn btn-success">
</form>

@endsection