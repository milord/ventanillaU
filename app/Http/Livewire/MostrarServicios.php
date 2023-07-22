<?php

namespace App\Http\Livewire;
use App\Models\Servicio;
use Livewire\Component;

class MostrarServicios extends Component
{
    protected $listeners = ['eliminarServicio'];

    public function eliminarServicio (Servicio $servicio)
    {
        $servicio->delete();
    }

    public function render()
    {
        $servicios = Servicio::where('user_id', auth()->user()->id)
                                ->orderBy('created_at', 'asc')
                                ->paginate(10);

        return view('livewire.mostrar-servicios', [
            'servicios' => $servicios
        ]);
    }
}
