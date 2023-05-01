<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MostrarJustificante extends Component
{
    public $justificante;
    
    public function render()
    {
        return view('livewire.mostrar-justificante');
    }
}