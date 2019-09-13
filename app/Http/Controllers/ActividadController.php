<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;

class ActividadController extends Controller
{
    public function index()
    {
        $actividad = Actividad::all();
        return $actividad;
        //return csrf_token();
    }

    public function store(Request $request)
    {
      $archivo['nombre_archivo'] = $request->nombre_archivo;
      $archivo['tipo_archivo'] = $request->tipo_archivo;
      $archivo['extension'] = $request->extension;
      $archivo['ruta'] = $request->ruta;

      $actividad['nombre_actividad'] = $request->nombre_actividad;
      $actividad['archivo'] = $archivo;
      $actividad['categoria'] = $request->categoria;
      $actividad['tiempo'] = $request->tiempo;
      $actividad['orden'] = $request->orden;
      $actividad['clase_id'] = $request->clase_id;
      $actividad['estado'] = $request->estado;

      $insert = Actividad::create($actividad);

      return  $insert;    
    }
}
