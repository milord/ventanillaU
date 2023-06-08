<?php

namespace App\Http\Livewire;

use App\Models\Turno;
use Livewire\Component;
use App\Models\Modalidade;

class EditarCertificado extends Component
{
    public function render()
    {
        // Consultar DB
        $modalidades = Modalidade::all();
        $turnos = Turno::all();
        
        return view('livewire.editar-certificado',[
            'modalidades' => $modalidades,
            'turnos' => $turnos
        ]);
    }
}
