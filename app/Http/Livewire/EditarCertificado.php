<?php

namespace App\Http\Livewire;

use App\Models\Turno;
use App\Models\Modalidade;
use App\Models\Certificado;
use Livewire\Component;
use Livewire\WithFileUploads;


class EditarCertificado extends Component
{
    //Atributos
    public $certificado_id;
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
    public $imagen_nueva;

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
        'imagen_nueva' => 'nullable|image|max:1024',

    ];

    public function mount(Certificado $certificado)
    {
        $this->certificado_id = $certificado->id;
        $this->tipo_solicitud = $certificado->tipo_solicitud;
        $this->modalidade = $certificado->modalidade_id;
        $this->no_control = $certificado->no_control;
        $this->especialidad = $certificado->especialidad;
        $this->turno = $certificado->turno_id;
        $this->nombre_alumno = $certificado->nombre_alumno;
        $this->curp = $certificado->curp;
        $this->telefono = $certificado->telefono;
        $this->correo = $certificado->correo;
        $this->folio_pago = $certificado->folio_pago;
        $this->bachillerato_doc = $certificado->bachillerato_doc;
        $this->secundaria_doc = $certificado->secundaria_doc;
        $this->nacimiento_doc = $certificado->nacimiento_doc;
        $this->curp_doc = $certificado->curp_doc;
        $this->pago_doc = $certificado->pago_doc;
        $this->imagen = $certificado->imagen;

    }

    public function editarCertificado()
    { //$datos tiene la información del formulario
        $datos = $this->validate();

    // Si hay una nueva imagen
        if($this->imagen_nueva) {
            $imagen = $this->imagen_nueva->store('public/certificados');
            $datos['imagen'] = str_replace('public/certificados/', '', $imagen);
        }

        // Encontrar el certificado a editar 
        // $certificado tiene la información guardada en la base de datos
        $certificado = Certificado::find($this->certificado_id);

        // Asignar los valores
        $certificado->tipo_solicitud = $datos['tipo_solicitud'];
        $certificado->modalidade_id = $datos['modalidade'];
        $certificado->no_control = $datos['no_control'];
        $certificado->especialidad = $datos['especialidad'];
        $certificado->turno_id = $datos['turno'];
        $certificado->nombre_alumno = $datos['nombre_alumno'];
        $certificado->curp = $datos['curp'];
        $certificado->telefono = $datos['telefono'];
        $certificado->correo = $datos['correo'];
        $certificado->folio_pago = $datos['folio_pago'];
        $certificado->bachillerato_doc = $datos['bachillerato_doc'];
        $certificado->secundaria_doc = $datos['secundaria_doc'];
        $certificado->nacimiento_doc = $datos['nacimiento_doc'];
        $certificado->curp_doc = $datos['curp_doc'];
        $certificado->pago_doc = $datos['pago_doc'];
        $certificado->imagen = $datos['imagen'] ?? $certificado->imagen;

        //Guardando el certificado
        $certificado->save(); 

        //Redireccionando
        session()->flash('mensaje', 'La solicitud de Certificado se actualizó Correctamente');

        return redirect()->route('certificados.index');


    }

    public function render()
    {
        // Consultar DB
        $modalidades = Modalidade::all();
        $turnos = Turno::all();
        
        return view('livewire.editar-certificado',[
            'modalidades' => $modalidades,
            'turnos' => $turnos
        ]);
    }
}
