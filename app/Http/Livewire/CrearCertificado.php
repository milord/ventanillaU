<?php

namespace App\Http\Livewire;

use App\Models\Certificado;
use App\Models\Modalidade;
use App\Models\Turno;
use Livewire\Component;
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
    public $bachillerato_doc;
    public $secundaria_doc;
    public $nacimiento_doc;
    public $curp_doc;
    public $pago_doc;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        'tipo_solicitud' => 'required|string',
        'modalidade' => 'required|string',
        'no_control' => 'required',
        'especialidad' => 'required|string',
        'turno' => 'required|string',
        'nombre_alumno' => 'required|string',
        'curp' => 'required',
        'telefono' => 'required',
        'correo' => 'required|string',
        'folio_pago' => 'required',
        'bachillerato_doc' => 'required|boolean',
        'secundaria_doc' => 'required|boolean',
        'nacimiento_doc' => 'required|boolean',
        'curp_doc' => 'required|boolean',
        'pago_doc' => 'required|boolean',
        'imagen'=> 'image|max:1024'

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

        'tipo_solicitud' => $datos['tipo_solicitud'],
        'modalidade_id' => $datos['modalidade'],
        'no_control' => $datos['no_control'],
        'especialidad' => $datos['especialidad'],
        'turno_id' => $datos['turno'],
        'nombre_alumno' => $datos['nombre_alumno'],
        'curp' => $datos['curp'],
        'telefono' => $datos['telefono'],
        'correo' => $datos['correo'],
        'folio_pago' => $datos['folio_pago'],
        'bachillerato_doc' => $datos['bachillerato_doc'],
        'secundaria_doc' => $datos['secundaria_doc'],
        'nacimiento_doc' => $datos['nacimiento_doc'],
        'curp_doc' => $datos['curp_doc'],
        'pago_doc' => $datos['pago_doc'],
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
