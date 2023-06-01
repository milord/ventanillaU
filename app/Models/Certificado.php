<?php

namespace App\Models;
use App\Models\Modalidade;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;

    protected $dates = ['inicia_tramite', 'termina_tramite'];

    protected $fillable = [
        'modalidade_id',
    ];

    public function modalidade()
    {
        return $this->belongsTo(Modalidade::class);
    }
}
