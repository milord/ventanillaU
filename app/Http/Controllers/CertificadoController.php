<?php

namespace App\Http\Controllers;

use App\Models\Certificado;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CertificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('certificados.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('certificados.create'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificado $certificado)
    {
        return view('certificados.show', [
            'certificado' => $certificado
        ]);
    }

    public function report($id)
    {
        $certificado = Certificado::find($id);
        $data = ['certificado' => $certificado];
        
        // pasando la cabecera y el pie de página al método loadView
        $pdf = PDF::loadView('certificados.pdf', compact('certificado'));

        $nombre_alumno = $certificado->nombre_alumno; 
        $id = str_pad($certificado->id, 2, '0', STR_PAD_LEFT); 

        // Configurando el tamaño del papel y la orientación 
        $pdf->getDomPDF()->setPaper('letter', 'portrait');

        return $pdf->download( $id . '-' . $nombre_alumno . '.pdf');
        
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificado $certificado)
    {
        //autenticando en el Policy
        $this->authorize('update', $certificado);
        
        return view('certificados.edit', [
            'certificado' => $certificado
        ]);
    
    }

    //Se eliminaron las funciones store, update y destroy ya se usamos Livewire para eso
    
}
