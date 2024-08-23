@extends('index')


@section('content')



    

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id Préstamo</th>
        <th scope="col">nombre</th>
        <th scope="col">Fecha de Registro</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Correo</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($proveedores as $proveedor)
      <tr>
        <th scope="row">{{$proveedor['Id_proveedor']}}</th>
        <td>{{$proveedor['nombre']}}</td>
        <td>{{$proveedor['fechaRegistro']}}</td>
        <td>{{$proveedor['teléfono']}}</td>
        <td>{{$proveedor['correo']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a href="{{ route('proveedor.crear') }}" style="text-decoration: none;">
    <button type="button">CREAR PROVEEDOR</button>
  </a>



@endsection