<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use PhpParser\Node\Expr\New_;

class ProductoController extends Controller
{
    
     public function store(Request $request){
         

        $producto =  New Producto();

        $producto->descripcion = $request->descripcion;
        $producto->stock = $request->stock;
        $producto->precio = $request->precio;
        $producto->pagaIsv = $request->pagaIsv;
        $producto->save();

        return redirect()->route('productos.mostrar');

     }

     public function mostrarProductos(){

        $productos = Producto::All();
        return view('productos', compact('productos'));
     }

}
