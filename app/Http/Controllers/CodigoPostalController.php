<?php

namespace App\Http\Controllers;

use App\TemperaturaTop5Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dnsimmons\OpenWeather\OpenWeather;
use Illuminate\Database\QueryException;

class CodigoPostalController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function mostrarCodigoPostal(Request $request)
    {
        //Recoge por GET el codigo postal introducido por el usuario
        $codigoPostal = $request->input('codigoPostal');

        //Creamos el Objeto OpenWeather para obtener los resultados de la API
        $weather = new OpenWeather();
        $current = $weather->getCurrentWeatherByPostal("{$codigoPostal},es", 'metric');
        $forecast = $weather->getForecastWeatherByPostal("{$codigoPostal},es", 'metric');
        //dd($current);

        //Si el codigo postal no existe devolvemos la vista de la home
        if ($current == false && $forecast == false) {
            return view('index');
        }

        try {
            //Guardar nuevo registro
            $this->store($current, $forecast, $codigoPostal);
        } catch (QueryException $e) {
            //Actualizar registro
            $this->update($current, $forecast, $codigoPostal);
        }

        //Muestra top5 Temperaturas provisionales
        $temperaturas = $this->showTop5();


        return view('resultado', compact('temperaturas', 'codigoPostal', 'current', 'forecast'));
    }

    //Función que guarda un nuevo registro en la base de datos
    public function store($current, $forecast, $codigoPostal)
    {
        $registro = new TemperaturaTop5Model;

        $registro->city = $current["weather_location_name"];

        $registro->cp = $codigoPostal;

        $registro->actual_temp = $current["weather_condition_temp"];

        $registro->save();
    }

    //Función que sobreescribe los datos de las temperaturas de cada ciudad
    public function update($current, $forecast, $codigoPostal)
    {
        $registro = TemperaturaTop5Model::find(1);

        $registro->city = $current["weather_location_name"];

        $registro->cp = $codigoPostal;

        $registro->actual_temp = $current["weather_condition_temp"];

        $registro->save();
    }

    //Función que muestera el top5 de temperaturas más bajas
    public function showTop5(){
        
        $temperaturas = TemperaturaTop5Model::orderBy('actual_temp','ASC')->limit(5)->get();

        return $temperaturas;
    }
}
