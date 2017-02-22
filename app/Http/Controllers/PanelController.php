<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PanelController extends Controller
{
    
    public function index()
    {
        return view('panel.index');
    }
}
