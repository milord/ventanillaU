<?php

namespace App\Http\Livewire;

use App\Models\Especialidade;
use App\Models\Grupo;
use App\Models\Semestre;
use App\Models\Turno;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearJustificante extends Component
{
    public $nombre;
    public $semestre;
    public $grupo;
    public $especialidade;
    public $turno;
    public $dias_laborales;
    public $inicia_ausencia;
    public $termina_ausencia;
    public $motivo_inasistencia;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        'nombre' => 'required|string',
        'semestre' => 'required|string',
        'grupo' => 'required|string',
        'especialidade' => 'required|string',
        'turno' => 'required|string',
        'dias_laborales' => 'required',
        'inicia_ausencia' => 'required',
        'termina_ausencia' => 'required',
        'motivo_inasistencia' => 'required',
        'imagen' => 'required|image|max:1024'
    ];

    public function crearJustificante()
    {
        $datos = $this->validate();

        //Almacenar imagen
        $imagen = $this->imagen->store('public/justificantes');
        $nombre_imagen = str_replace('public/justificantes/', '', $imagen);

        //dd($nombre_imagen);

        //Crear justificante

        //Crear un mensaje

        //Redireccionar al usuario

    }

    public function render()
    {
        //Consultar DB
        $semestres = Semestre::all();
        $grupos = Grupo::all();
        $especialidades = Especialidade::all();
        $turnos = Turno::all();

        
        return view('livewire.crear-justificante', [
            'semestres' => $semestres,
            'grupos' => $grupos,
            'especialidades' => $especialidades,
            'turnos' => $turnos,
            
        ]);
    }
}
