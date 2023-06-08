<?php

namespace App\Models;
use App\Models\Modalidade;
use App\Models\Turno;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;

    protected $dates = ['inicia_tramite', 'termina_tramite'];

    protected $fillable = [
        'tipo_solicitud',
        'modalidade_id',
        'no_control',
        'especialidad',
        'turno_id',
        'nombre_alumno',
        'curp',
        'telefono',
        'correo',
        'folio_pago',
        'bachillerato_doc',
        'secundaria_doc',
        'nacimiento_doc',
        'curp_doc',
        'pago_doc',
        'imagen',
        'user_id'
    ];

    public function modalidade()
    {
        return $this->belongsTo(Modalidade::class);
    }

    public function turno()
    {
        return $this->belongsTo(Turno::class);
    }
}
