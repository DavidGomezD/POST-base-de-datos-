<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

//Aqui se encuentran las rutas del proyecto

Route::get('/', [EmpleadoController::class, 'index']);

Route::get('/proyecto1', [EmpleadoController::class, 'proyecto1']);

Route::post('/guardar', [EmpleadoController::class,'guardar']);

Route::delete('/borrar', [EmpleadoController::class,'borrar']);

Route::put('/actualizar', [EmpleadoController::class,'actualizar']);