<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $table = 'clases';

    protected $fillable = [
        'nombre_clase',
        'orden',
        'horario',
        'curso_id',
        'estado'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'estado' => 'boolean',
    ];

    protected $appends = ['list_actividad', 'info_curso'];


    public function actividades()
    {
        return $this->hasMany('App\Models\Actividad');
    }

    public function curso()
    {
        return $this->belongsTo('App\Models\Curso');
    }

    public function getListActividadAttribute()
    {
        return $this->actividades;
    }

    public function getInfoCursoAttribute()
    {
        return $this->curso;
    }



}
