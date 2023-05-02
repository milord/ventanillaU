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
        $pdf = PDF::loadview('justificantes.show', ['justificante'=>$justificante]);
        return $pdf->download('justificante.pdf');
        
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
