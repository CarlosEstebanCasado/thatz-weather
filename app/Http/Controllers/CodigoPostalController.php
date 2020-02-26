<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodigoPostalController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function mostrarCodigoPostal($cp){
        return "Codigo Postal : {$cp}";
    }
}
