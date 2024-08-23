@extends('index')

@section('content')

<form method="POST" action="{{ route('productos.guardar')}}">
@csrf
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="descripcion" required>
    <label for="floatingInput">Descripción</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="precio" required>
    <label for="floatingInput">Precio</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="stock" required>
    <label for="floatingInput">Stock</label>
  </div>

  <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com" min="0" max="1" name="pagaIsv" required>
    <label for="floatingInput">¿Paga ISV?</label>
  </div>
<hr>
  <input type="submit" value="¡CREAR!" class="form-control btn btn-success">
</form>

@endsection