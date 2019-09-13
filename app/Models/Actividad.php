<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividades';

    protected $fillable = [
        'nombre_actividad',
        'archivo',
        'categoria',
        'tiempo',
        'orden',
        'clase_id',
        'estado'
    ];

    protected $hidden = ['created_at', 'updated_at'];
 
    protected $casts = [
        'archivo' => 'array',
    ];

    public function clase()
    {
        return $this->belongsTo('App\Models\Clase');
    }

    public function setNombreActividadAttribute($value)
    {
        $this->attributes['nombre_actividad'] = ucwords($value);
    }
    
}
