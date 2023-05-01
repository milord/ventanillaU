<?php

namespace App\Models;
use App\Models\Especialidade;
use App\Models\Grupo;
use App\Models\Semestre;
use App\Models\Turno;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Justificante extends Model
{
    use HasFactory;

    protected $dates = ['inicia_ausencia', 'termina_ausencia'];

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

    public function semestre()
    {
        return $this->belongsTo(Semestre::class);
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    public function especialidade()
    {
        return $this->belongsTo(Especialidade::class);
    }

    public function turno()
    {
        return $this->belongsTo(Turno::class);
    }
}