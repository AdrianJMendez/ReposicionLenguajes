<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    

     public function mostrarProveedores(){

        $proveedores = Proveedor::All();
        return view('proveedores', compact('proveedores'));
     }

     public function guardarProveedor(Request $request){
         

      $proveedor=  New Proveedor();

      $proveedor->Id_proveedor = $request->Id_proveedor;
      $proveedor->nombre = $request->nombre;
      $proveedor->fechaRegistro = $request->fechaRegistro;
      $proveedor->teléfono = $request->teléfono;
      $proveedor->correo = $request->correo;
      $proveedor->save();

      return redirect()->route('proveedores.mostrar');

   }
}
