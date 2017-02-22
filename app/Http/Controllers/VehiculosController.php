<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VehiculosController extends Controller
{
    public function detalles(){

        return view('vehiculos.detalles');

    }
}
