<?php

namespace App\Http\Controllers;

use App\TemperaturaTop5Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dnsimmons\OpenWeather\OpenWeather;

class CodigoPostalController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function mostrarCodigoPostal(Request $request)
    {

        $codigoPostal = $request->input('codigoPostal');

        $weather = new OpenWeather();
        $current = $weather->getCurrentWeatherByPostal("{$codigoPostal},es",'metric');
        $forecast = $weather->getForecastWeatherByPostal("{$codigoPostal},es",'metric');
        //dd($forecast);

        $temperaturas = TemperaturaTop5Model::all();


        return view('resultado', compact('temperaturas', 'codigoPostal', 'current', 'forecast'));
    }
}
