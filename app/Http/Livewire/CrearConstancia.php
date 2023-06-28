<?php

namespace App\Http\Livewire;

use App\Models\Constancia;
use App\Models\Especialidade;
use App\Models\Grupo;
use App\Models\Semestre;
use App\Models\Turno;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearConstancia extends Component
{
    public $apaterno;
    public $amaterno;
    public $nombres_alumno;
    public $no_control;
    public $nss;
    public $semestre;
    public $especialidade;
    public $grupo;
    public $area_estudios;
    public $ciclo_escolar;
    public $periodo_escolar;
    public $turno;
    public $primavera;
    public $invierno;
    public $carnaval;
    public $findecurso;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        'apaterno'  => 'required|string',
        'amaterno'  => 'required|string',
        'nombres_alumno'  => 'required|string',
        'no_control'  => 'required|string',
        'nss'  => 'required|string',
        'semestre'  => 'required|string',
        'especialidade'  => 'required|string',
        'grupo'  => 'required|string',
        'area_estudios'  => 'required|string',
        'ciclo_escolar'  => 'required|string',
        'periodo_escolar'  => 'required|string',
        'turno'  => 'required|string',
        'primavera'  => 'required|string',
        'invierno'  => 'required|string',
        'carnaval'  => 'required|string',
        'findecurso'  => 'required|string',
        'imagen' => 'required|image|max:1024'

    ];

    public function create()
    {
        $datos = $this->validate();

        //Almacenar imagen
        $imagen = $this->imagen->store('public/constancias');
        $datos['imagen'] = str_replace('public/constancias/', '', $imagen);

        Constancia::create([
            'apaterno' => $datos['apaterno'],
            'amaterno' => $datos['amaterno'],
            'nombres_alumno' => $datos['nombres_alumno'],
            'no_control' => $datos['no_control'],
            'nss' => $datos['nss'],
            'semestre' => $datos['semestre'],
            'especialidade' => $datos['especialidade'],
            'grupo' => $datos['grupo'],
            'area_estudios' => $datos['area_estudios'],
            'ciclo_escolar' => $datos['ciclo_escolar'],
            'periodo_escolar' => $datos['periodo_escolar'],
            'turno' => $datos['turno'],
            'primavera' => $datos['primavera'],
            'invierno' => $datos['invierno'],
            'carnaval' => $datos['carnaval'],
            'findecurso' => $datos['findecurso'],
            'imagen'=> $datos['imagen'],
            'user_id' => auth()->user()->id
        ]);

        //Crear un mensaje
        session()->flash('mensaje', 'La constancia se ha creado con éxito');

        //Redireccionar al usuario
        return redirect()->route('constancias.index');
    }

    public function render()
    {
        //Consultar DB
        $semestres = Semestre::all();
        $grupos = Grupo::all();
        $especialidades = Especialidade::all();
        $turnos = Turno::all();

        return view('livewire.crear-constancia', [
            'semestres' => $semestres,
            'grupos' => $grupos,
            'especialidades' => $especialidades,
            'turnos' => $turnos
            
        ]);
    }
}
