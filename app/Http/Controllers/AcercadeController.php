<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcercadeController extends Controller
{
    public function index()
{
    return view('acercade', [
        'apellidos' => 'Tus apellidos',
        'nombres' => 'Tus nombres',
        'carrera' => 'Tu carrera',
        'nivel' => 'Tu nivel',
        'turno' => 'Tu turno',
    ]);
}
}
