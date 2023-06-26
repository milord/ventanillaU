<?php

namespace App\Http\Controllers;

use App\Models\Constancia;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ConstanciaController extends Controller
{
    public function index()
    {
        return view('constancias.index');
    }
}
