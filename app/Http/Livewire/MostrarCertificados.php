<?php

namespace App\Http\Livewire;

use App\Models\Certificado;
use Livewire\Component;

class MostrarCertificados extends Component
{
    protected $listeners = ['eliminarCertificado'];

    public function eliminarCertificado( Certificado $certificado)
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
