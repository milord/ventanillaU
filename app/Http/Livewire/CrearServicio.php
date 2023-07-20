<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Especialidade;
use App\Models\Servicio;

class CrearServicio extends Component
{
    public $apaterno;
    public $amaterno;
    public $nombres_alumno;
    public $domicilio;
    public $cp;
    public $especialidade;
    public $inicia_servicio;
    public $termina_servicio;

    protected $rules = [
        'apaterno' => 'required|string',
        'amaterno' => 'required|string',
        'nombres_alumno' => 'required|string',
        'domicilio' => 'required|string',
        'cp' => 'required',
        'especialidade' => 'required|string',
        'inicia_servicio' => 'required',
        'termina_servicio' => 'required' 
    ];

    public function crearServicio()
    {
        $datos = $this->validate();

        //Crear Pasante
        Servicio::create([
            'apaterno' => $datos['apaterno'],
            'amaterno' => $datos['amaterno'],
            'nombres_alumno' => $datos['nombres_alumno'],
            'domicilio' => $datos['domicilio'],
            'cp' => $datos['cp'],
            'especialidade_id'=> $datos['especialidade'],
            'inicia_servicio'=> $datos['inicia_servicio'],
            'termina_servicio'=> $datos['termina_servicio'],
            'user_id' => auth()->user()->id
        ]);

        //Crear un mensaje
        session()->flash('mensaje', 'Los datos del pasante se han guardado correctamente');

        //Redireccionar al usuario
        return redirect()->route('servicios.index');
    }

    public function render()
    {
        //Consultar DB
        $especialidades = Especialidade::all();

        return view('livewire.crear-servicio', [
            'especialidades' => $especialidades
        ]);
        
    }
}