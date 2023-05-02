<?php

namespace App\Http\Livewire;

use App\Models\Especialidade;
use App\Models\Grupo;
use App\Models\Semestre;
use App\Models\Turno;
use App\Models\Justificante;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class EditarJustificante extends Component
{
    public $justificante_id;
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
    public $imagen_nueva;

    use WithFileUploads;

    protected $rules = [
        'nombre_alumno' => 'required|string',
        'nombre_tutor' => 'required|string',
        'telefono_tutor' => 'required',
        'semestre_id' => 'required|string',
        'grupo_id' => 'required|string',
        'especialidade_id' => 'required|string',
        'turno_id' => 'required|string',
        'dias_laborales' => 'required',
        'inicia_ausencia' => 'required',
        'termina_ausencia' => 'required',
        'motivo_inasistencia' => 'required',
        'imagen_nueva' => 'nullable|image|max:1024',
    ];

    public function mount(Justificante $justificante)
    {
        $this->justificante_id = $justificante->id;
        $this->nombre_alumno = $justificante->nombre_alumno;
        $this->nombre_tutor = $justificante->nombre_tutor;
        $this->telefono_tutor = $justificante->telefono_tutor;
        $this->semestre = $justificante->semestre_id;
        $this->grupo = $justificante->grupo_id;
        $this->especialidade = $justificante->especialidade_id;
        $this->turno = $justificante->turno_id;
        $this->dias_laborales = $justificante->dias_laborales;
        $this->inicia_ausencia = Carbon::parse( $justificante->inicia_ausencia )->format('Y-m-d');
        $this->termina_ausencia = Carbon::parse( $justificante->termina_ausencia )->format('Y-m-d');
        $this->motivo_inasistencia = $justificante->motivo_inasistencia;
        $this->imagen = $justificante->imagen;

    }

    public function editarJustificante()
    {   //$datos tiene la información del formulario
        $datos = $this->validate();

        // Si hay una nueva imagen
        if($this->imagen_nueva) {
            $imagen = $this->imagen_nueva->store('public/justificantes');
            $datos['imagen'] = str_replace('public/justificantes/', '', $imagen);
        }

        // Encontrar la vacante a editar 
        // $justificante tiene la información guardada en la base de datos
        $justificante = Justificante::find($this->justificante_id);

        // Asignar los valores
      
        $justificante->nombre_alumno = $datos['nombre_alumno'];
        $justificante->nombre_tutor = $datos['nombre_tutor'];
        $justificante->telefono_tutor = $datos['telefono_tutor'];
        $justificante->semestre_id = $datos['semestre'];
        $justificante->grupo_id = $datos['grupo'];
        $justificante->especialidade_id = $datos['especialidade'];
        $justificante->turno_id = $datos['turno'];
        $justificante->dias_laborales = $datos['dias_laborales'];
        $justificante->inicia_ausencia = $datos['inicia_ausencia'];
        $justificante->termina_ausencia = $datos['termina_ausencia'];
        $justificante->motivo_inasistencia = $datos['motivo_inasistencia'];
        $justificante->imagen = $datos['imagen'] ?? $justificante->imagen;
//        $justificante->entregado = $datos['entregado'];

        // Guardar la Justificante
        $justificante->save();

        // redireccionar
        session()->flash('mensaje', 'El Justificante se actualizó Correctamente');

        return redirect()->route('justificantes.index');

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
