<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Justificante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_alumno',
        'nombre_tutor',
        'telefono_tutor',
        'semestre_id',
        'grupo_id',
        'especialidade_id',
        'turno_id',
        'dias_laborales',
        'inicia_ausencia',
        'termina_ausencia',
        'motivo_inasistencia',
        'imagen',
        'user_id'
    ];
}
