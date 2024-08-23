@extends('index')

@section('content')

<form method="POST" action="{{ route('empleados.guardar')}}">
@csrf
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="Id_préstamo">
    <label for="floatingInput">Id Préstamo</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="nombre">
    <label for="floatingInput">Nombre</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="apellido">
    <label for="floatingInput">Apellido</label>
  </div>

  <div class="form-floating mb-3">
    <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com" min="0" max="1" name="fechaIngreso">
    <label for="floatingInput">Fecha de Ingreso</label>
  </div>


  <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com" name="salario">
    <label for="floatingInput">Salario</label>
  </div>
<hr>
  <input type="submit" value="¡CREAR!" class="form-control btn btn-success">
</form>

@endsection