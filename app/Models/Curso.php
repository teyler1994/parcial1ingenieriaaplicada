<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';

    protected $fillable = [
        'nombre_curso',
        'descripcion'
    ];
    

    protected $hidden = ['created_at', 'updated_at'];

    protected $appends = ['curso_id'];

    public function clases()
    {
        return $this->hasMany('App\Models\Clase');
    }

    public function getCursoIdAttribute()
    {
        return "Codigo: {$this->id} - Curso: {$this->nombre_curso}";
    }
}
