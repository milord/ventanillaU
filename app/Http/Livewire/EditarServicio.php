<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Servicio;
use App\Models\Semestre;
use App\Models\Especialidade;
use Illuminate\Support\Carbon;

class EditarServicio extends Component
{   
    //Atributos
    public $servicio_id;
    public $apaterno;
    public $amaterno;
    public $nombres_alumno;
    public $domicilio;
    public $colonia;
    public $cp;
    public $semestre;
    public $especialidade;
    public $inicia_servicio;
    public $termina_servicio;

    protected $rules = [
        'apaterno' => 'required|string',
        'amaterno' => 'required|string',
        'nombres_alumno' => 'required|string',
        'domicilio' => 'required|string',
        'colonia' => 'required|string',
        'cp' => 'required',
        'semestre' => 'required',
        'especialidade' => 'required',
        'inicia_servicio' => 'required',
        'termina_servicio' => 'required' 
    ];

    public function mount(Servicio $servicio) //Modelo Servicio, instancia $servicio
    {
        $this->servicio_id = $servicio->id;
        $this->apaterno = $servicio->apaterno;
        $this->amaterno = $servicio->amaterno;
        $this->nombres_alumno = $servicio->nombres_alumno;
        $this->domicilio = $servicio->domicilio;
        $this->colonia = $servicio->colonia;
        $this->cp = $servicio->cp;
        $this->semestre = $servicio->semestre_id;
        $this->especialidade = $servicio->especialidade_id;
        $this->inicia_servicio = Carbon::parse( $servicio->inicia_ausencia )->format('Y-m-d');
        $this->termina_servicio = Carbon::parse( $servicio->termina_ausencia )->format('Y-m-d');
    }

    public function editarServicio()
    {
        $datos = $this->validate();

        //Encontrar el servicio a editar
        $servicio = Servicio::find($this->servicio_id);

        //Asignar valores
        $servicio->apaterno = $datos['apaterno'];
        $servicio->amaterno = $datos['amaterno'];
        $servicio->nombres_alumno = $datos['nombres_alumno'];
        $servicio->domicilio = $datos['domicilio'];
        $servicio->colonia = $datos['colonia'];
        $servicio->cp = $datos['cp'];
        $servicio->semestre = $datos['semestre'];
        $servicio->especialidade_id = $datos['especialidade'];
        $servicio->inicia_servicio = $datos['inicia_servicio'];
        $servicio->termina_servicio = $datos['termina_servicio'];

        //Guardar el servicio
        $servicio->save();

        //Redireccionar
        session()->flash('mensaje', 'Los datos del pasante se actualizaron correctamente');

        return redirect()->route('servicios.index');
    }

    public function render()
    {
        //Consultar DB
        $semestres = Semestre::all();
        $especialidades = Especialidade::all();
        
        return view('livewire.editar-servicio', [
            'semestres' => $semestres,
            'especialidades' => $especialidades
        ]);
    }
}