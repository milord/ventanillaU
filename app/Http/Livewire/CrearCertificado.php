<?php

namespace App\Http\Livewire;

use App\Models\Certificado;
use Livewire\Component;
use App\Models\Modalidade;
use App\Models\Turno;
use Livewire\WithFileUploads;

class CrearCertificado extends Component
{
    public $tipo_solicitud;
    public $modalidade;
    public $no_control;
    public $especialidad;
    public $turno;
    public $nombre_alumno;
    public $curp;
    public $telefono;
    public $correo;
    public $folio_pago;
    public $bachillerato;
    public $secundaria;
    public $nacimiento;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        'tipo_solicitud' => 'required|string',
        'modalidade' => 'required|string',
        'no_control' => 'required',
        'especialidad' => 'required|string',
        'turno' => 'turno|string',
        'nombre_alumno' => 'required|string',
        'curp' => 'required',
        'telefono' => 'required',
        'correo' => 'required|string',
        'folio_pago' => 'required',
        'bachillerato' => 'required|string',
        'secundaria' => 'required',
        'nacimiento' => 'required',
        'imagen'=> 'required|image|max:1024'

    ];

    public function crearCertificado()
    {
        $datos = $this->validate(); //Valida con las reglas definidas arriba

        //Almacenar pago
        $imagen = $this->imagen->store('public/certificados');
        $datos['imagen'] = str_replace('public/certificados/', '', $imagen);

        //dd($nombre_imagen);

        //Crear solicitud de certificado
        Certificado::create([

        'tipo_solicitud' => 'required|string',
        'modalidade' => 'required|string',
        'no_control' => 'required',
        'especialidad' => 'required|string',
        'turno' => 'turno|string',
        'nombre_alumno' => 'required|string',
        'curp' => 'required',
        'telefono' => 'required',
        'correo' => 'required|string',
        'folio_pago' => 'required',
        'bachillerato' => 'required|string',
        'secundaria' => 'required',
        'nacimiento' => 'required',
        'imagen'=> $datos['imagen'],
        'user_id' => auth()->user()->id
            
        ]);

        //Crear un mensaje
        session()->flash('mensaje', 'La solicitud de certificado se ha creado con éxito');

        //Redireccionar al usuario
        return redirect()->route('certificados.index');

    }

    public function render()
    {
        // Consultar DB
        $modalidades = Modalidade::all();
        $turnos = Turno::all();

        return view('livewire.crear-certificado', [
            'modalidades' => $modalidades,
            'turnos' => $turnos
        ]);
    }
}
