<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MostrarCertificado extends Component
{
    public $certificado;
    
    public function render()
    {
        return view('livewire.mostrar-certificado');
    }
}
