<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Especialidade;
use App\Models\Modalidade;
use App\Models\Turno;

class CrearCertificado extends Component
{
    public $modalidade;
    public $tipoSolicitud = 'Duplicado';
    public $nombre_alumno;
    public $telefono;
    public $correo;
    public $bachillerato;
    public $secundaria;
    public $nacimiento;
    public $curp;
    public $pago;

    protected $rules = [
        'modalidade' => 'required|string',
        'nombre_alumno' => 'required|string',
        'telefono' => 'required',
        'correo' => 'required|string',
        'bachillerato' => 'required|string',
        'secundaria' => 'required',
        'nacimiento' => 'required',
        'curp' => 'required',
        'pago' => 'required'

    ];

    public function render()
    {
        // Consultar DB
        $modalidades = Modalidade::all();
        return view('livewire.crear-certificado', [
            'modalidades' => $modalidades
        ]);
    }
}
