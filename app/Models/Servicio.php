<?php

namespace App\Models;
use App\Models\Especialidade;
use App\Models\Semestre;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $dates = ['inicia_servicio', 'termina_servicio'];

    protected $fillable = [
        'apaterno',
        'amaterno',
        'nombres_alumno',
        'domicilio',
        'colonia',
        'cp',
        'semestre_id',
        'especialidade_id',
        'inicia_servicio',
        'termina_servicio',
        'user_id'
    ];

    public function semestre()
    {
        return $this->belongsTo(Semestre::class);
    }

    public function especialidade()
    {
        return $this->belongsTo(Especialidade::class);
    }
    
}
