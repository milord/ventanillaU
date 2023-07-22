<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('servicios.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicios.create');
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
    public function show(Servicio $servicio) //Modelo Servicio
    {
        return view('servicios.show', [
            'servicio' => $servicio
        ]);

    }

    public function report($id)
    {
        $servicio = Servicio::find($id);
        $data = ['servicio' => $servicio];
        
        // pasando la cabecera y el pie de página al método loadView
        $pdf = PDF::loadView('servicios.pdf', compact('servicio'));

        $nombres_alumno = $servicio->nombres_alumno; 
        $id = str_pad($servicio->id, 2, '0', STR_PAD_LEFT); 

        // Configurando el tamaño del papel y la orientación 
        $pdf->getDomPDF()->setPaper('letter', 'portrait');

        return $pdf->download( $id . '-' . $nombres_alumno . '.pdf');
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicio $servicio)
    {
        //Autorizado a través del Policy
        $this->authorize('update', $servicio);

        return view('servicios.edit', [
            'servicio' => $servicio
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
