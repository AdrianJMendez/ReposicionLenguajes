@extends('index')


@section('content')



<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Descripción</th>
        <th scope="col">Precio</th>
        <th scope="col">Stock</th>
        <th scope="col">Paga ISV</th>
      </tr>
    </thead>
    <tbody>
      @foreach ( $productos as $producto )
  

      <tr>
        <th scope="row">{{$producto['Id']}}</th>
        <td>{{$producto['descripcion']}}</td>
        <td>{{$producto['precio']}}</td>
        <td>{{$producto['stock']}}</td>
        <td>{{$producto['pagaIsv']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a href="{{ route('producto.crear') }}" style="text-decoration: none;">
    <button type="button">CREAR PRODUCTO</button>
  </a>


@endsection

