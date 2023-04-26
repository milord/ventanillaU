<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Especialidade;
use App\Models\Grupo;
use App\Models\Semestre;
use App\Models\Turno;
use App\Models\Justificante;

class EditarJustificante extends Component
{
    public $nombre_alumno;
    public $nombre_tutor;
    public $telefono_tutor;
    public $semestre_id;
    public $grupo_id;
    public $especialidade_id;
    public $turno_id;
    public $dias_laborales;
    public $inicia_ausencia;
    public $termina_ausencia;
    public $motivo_inasistencia;
    public $imagen;

    protected $rules = [
        'nombre_alumno' => 'required|string',
        'nombre_tutor' => 'required|string',
        'telefono_tutor' => 'required',
        'semestre' => 'required|string',
        'grupo' => 'required|string',
        'especialidade' => 'required|string',
        'turno' => 'required|string',
        'dias_laborales' => 'required',
        'inicia_ausencia' => 'required',
        'termina_ausencia' => 'required',
        'motivo_inasistencia' => 'required'
    ];

    public function mount(Justificante $justificante)
    {
        $this->nombre_alumno = $justificante->nombre_alumno;
        $this->nombre_tutor = $justificante->nombre_tutor;
        $this->telefono_tutor = $justificante->telefono_tutor;
        $this->semestre = $justificante->semestre_id;
        $this->grupo = $justificante->grupo_id;
        $this->especialidade = $justificante->especialidade_id;
        $this->turno = $justificante->turno_id;
        $this->dias_laborales = $justificante->dias_laborales;
        $this->inicia_ausencia = $justificante->inicia_ausencia;
        $this->termina_ausencia = $justificante->termina_ausencia;
        $this->motivo_inasistencia = $justificante->motivo_inasistencia;
        $this->imagen = $justificante->imagen;

    }

    public function editarJustificante()
    {
        $datos = $this->validate();

        // Si hay una nueva imagen

        // Encontrar la vacante a editar

        // Asignar los valores

        //Guardar la vacante

        // redireccionar
    }

    public function render()
    {   
        //Consultar DB
        $semestres = Semestre::all();
        $grupos = Grupo::all();
        $especialidades = Especialidade::all();
        $turnos = Turno::all();

        return view('livewire.editar-justificante', [
            'semestres' => $semestres,
            'grupos' => $grupos,
            'especialidades' => $especialidades,
            'turnos' => $turnos
        ]);
    }
}
