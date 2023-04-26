<?php

namespace App\Http\Controllers;

use App\Models\Justificante;
use Illuminate\Http\Request;

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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Justificante $justificante)
    {
        //
        return view('justificantes.edit', [
            'justificante' => $justificante
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
