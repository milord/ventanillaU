<?php

namespace App\Http\Livewire;

use App\Models\Especialidade;
use App\Models\Grupo;
use App\Models\Semestre;
use App\Models\Turno;
use App\Models\Justificante;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearJustificante extends Component
{
    public $nombre_alumno;
    public $nombre_tutor;
    public $telefono_tutor;
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
        'motivo_inasistencia' => 'required',
        'imagen' => 'required|image|max:1024'
    ];

    public function crearJustificante()
    {
        $datos = $this->validate();

        //Almacenar imagen
        $imagen = $this->imagen->store('public/justificantes');
        $datos['imagen'] = str_replace('public/justificantes/', '', $imagen);

        //dd($nombre_imagen);

        //Crear justificante
        Justificante::create([
            'nombre_alumno'=> $datos['nombre_alumno'],
            'nombre_tutor' => $datos['nombre_tutor'],
            'telefono_tutor' => $datos['telefono_tutor'],
            'semestre_id'=> $datos['semestre'],
            'grupo_id'=> $datos['grupo'],
            'especialidade_id'=> $datos['especialidade'],
            'turno_id'=> $datos['turno'],
            'dias_laborales'=> $datos['dias_laborales'],
            'inicia_ausencia'=> $datos['inicia_ausencia'],
            'termina_ausencia'=> $datos['termina_ausencia'],
            'motivo_inasistencia'=> $datos['motivo_inasistencia'],
            'imagen'=> $datos['imagen'],
            'user_id' => auth()->user()->id
        ]);

        //Crear un mensaje
        session()->flash('mensaje', 'El justificante se ha creado con éxito');

        //Redireccionar al usuario
        return redirect()->route('dashboard');

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
            'turnos' => $turnos
            
        ]);
    }
}
