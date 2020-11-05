<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\EmpleadoModel;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models;
use App;

class EmpleadoController extends Controller
{
    //Aqui estan las funcionalidades de las rutas

    //Muestra la plantilla de inicio
    public function index(){
        return view('welcome');
    }

    //Muestra la plantilla proyecto1 
    public function proyecto1(){

        $empleados = App\Models\EmpleadoModel::all();

        return view('proyecto1', compact('empleados'));
    }

    //Guarda los datos
    public function guardar(Request $request){

        //return $request->all();

        $datos = new  App\Models\EmpleadoModel;

        $datos -> nombre = $request -> nombre;
        $datos -> apaterno = $request -> apaterno;
        $datos -> amaterno = $request -> amaterno;

        $datos->save();

        return back()->with('mensaje', 'Datos Guardados');

    }

    //Borra los datos 
    public function borrar(Request $request){
        //En $datos se guardara la fila
        //El $request -> id es el id que se ingreso en el formulario

        //Busca la fila con el id que ingreso el usuario 
        $datos = EmpleadoModel::find($request -> id);
        
        //Borra los datos de la fila que buscaste 
        $datos->delete();
    
        //Regresa al formulario
        return back()->with('mensaje', 'Datos Eliminados');
    }

    //Actualiza datos 
    public function actualizar(Request $request){

        //Busca el campo con el siguiente id
        $datos = EmpleadoModel::find($request -> id);

        //Actualiza la tabla con el id que buscaste
        $datos -> update([
            //campos de la fila -> actualizar(con los datos que ingreso el usuario)
            'nombre' => $request->input('nombre'),
            'apaterno' => $request->input('apaterno'),
            'amaterno' => $request->input('amaterno'),
        ]);

        //Regresa al formulario
        return back()->with('mensaje', 'Datos Actualizados');
    }

}
