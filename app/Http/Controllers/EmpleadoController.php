<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function store(Request $request){
         

        $empleado=  New Empleado();

        $empleado->Id_préstamo = $request->Id_préstamo;
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->fechaIngreso = $request->fechaIngreso;
        $empleado->salario = $request->salario;
        $empleado->save();

        return redirect()->route('empleados.mostrar');

     }

     public function mostrarEmpleados(){

        $empleados = Empleado::All();
        return view('empleados', compact('empleados'));
     }

}
