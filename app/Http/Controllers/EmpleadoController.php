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

    public function index(){
        return view('welcome');
    }

    public function proyecto1(){

        $empleados = App\Models\EmpleadoModel::all();

        return view('proyecto1', compact('empleados'));
    }

    public function guardar(Request $request){

        //return $request->all();

        $datos = new  App\Models\EmpleadoModel;

        $datos -> nombre = $request -> nombre;
        $datos -> apaterno = $request -> apaterno;
        $datos -> amaterno = $request -> amaterno;

        $datos->save();

        return back()->with('mensaje', 'Datos Guardados');

    }

}
