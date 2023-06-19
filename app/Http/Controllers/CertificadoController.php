<?php

namespace App\Http\Controllers;

use App\Models\Certificado;
use Illuminate\Http\Request;

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
