<?php

namespace App\Http\Livewire;

use App\Models\Certificado;
use Livewire\Component;

class MostrarCertificados extends Component
{
    protected $listeners = ['eliminarCertificado']; //Escucha los eventos que están ocurriendo

    public function eliminarCertificado( Certificado $certificado) //Método eliminarCertificado
    {
        $certificado->delete();
    }

    public function render()
    {
        $certificados = Certificado::where('user_id', auth()->user()->id)
                                    ->orderBy('created_at', 'asc')
                                    ->paginate(10);
        return view('livewire.mostrar-certificados', [
            'certificados' => $certificados
        ]);
    }
}
