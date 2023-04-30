<?php

namespace App\Http\Livewire;

use App\Models\Justificante;
use Livewire\Component;

class MostrarJustificantes extends Component
{   
    protected $listeners = ['eliminarJustificante'];

    public function eliminarJustificante( Justificante $vacante )
    {
        $vacante->delete();
    }

    public function render()
    {
        $justificantes= Justificante::where('user_id', auth()->user()->id)->paginate(10);

        return view('livewire.mostrar-justificantes', [
            'justificantes' => $justificantes
        ]);
    }
}
