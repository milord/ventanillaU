<?php

namespace App\Models;
use App\Models\Especialidade;

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
        'cp',
        'especialidade_id',
        'inicia_servicio',
        'termina_servicio',
        'user_id'
    ];

    public function especialidade()
    {
        return $this->belongsTo(Especialidade::class);
    }
    
}
