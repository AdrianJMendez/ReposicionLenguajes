@extends('index')


@section('content')



    

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id Préstamo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Fecha de Ingreso</th>
        <th scope="col">Salario</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
      <tr>
        <th scope="row">{{$empleado['Id_préstamo']}}</th>
        <td>{{$empleado['nombre']}}</td>
        <td>{{$empleado['apellido']}}</td>
        <td>{{$empleado['fechaIngreso']}}</td>
        <td>{{$empleado['salario']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a href="{{ route('empleados.crear') }}" style="text-decoration: none;">
    <button type="button">CREAR EMPLEADO</button>
  </a>


@endsection