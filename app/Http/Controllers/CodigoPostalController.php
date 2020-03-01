<?php

namespace App\Http\Controllers;

use App\TemperaturaTop5Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CodigoPostalController extends Controller
{
    public function index()
    {
        return view('index');
    }

    
    public function mostrarCodigoPostal(Request $request){

        $codigoPostal = $request->input('codigoPostal');

        //dd($codigoPostal);

        $temperaturas = TemperaturaTop5Model::all();
        

        return view('resultado', compact('temperaturas'));
    }
}
