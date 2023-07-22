<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MostrarServicio extends Component
{
    public $servicio;
    
    public function render()
    {
        return view('livewire.mostrar-servicio');
    }
}
