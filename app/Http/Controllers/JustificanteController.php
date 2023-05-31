<?php

namespace App\Http\Controllers;

use App\Models\Justificante;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class JustificanteController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('justificantes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('justificantes.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Justificante $justificante)
    {
        return view('justificantes.show', [
            'justificante' => $justificante
        ]);
    }

    public function report($id)
    {
        $justificante = Justificante::find($id);
        $data = ['justificante' => $justificante];
        
        // pasando la cabecera y el pie de página al método loadView
        $pdf = PDF::loadView('justificantes.pdf', compact('justificante'));

        $nombre_alumno = $justificante->nombre_alumno; 
        $id = str_pad($justificante->id, 2, '0', STR_PAD_LEFT); 

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
    public function edit(Justificante $justificante)
    {
        
        $this->authorize('update', $justificante);
        
        return view('justificantes.edit', [
            'justificante' => $justificante
        ]);
    
    }

}
