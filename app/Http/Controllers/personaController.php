<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\persona;

class personaController extends Controller
{

    public function index()
    {
        //trae los datos del modelo de la tabla personas
        $persona = persona::orderBy('nombres','asc')->paginate(10);

        return[
            'datos'=>$persona
        ];
    }

    public function first(){
        // 1. Mostrar los Hombres
        $first = Persona::where('genero', '=', 'm')->get();
        return [
            'datos' => $first
        ];
    }

    public function second(){
        // 2. Mostrar las Mujeres
        $second = Persona::where('genero', '=','f')->get();
        return[
            'datos' => $second
        ];
    }

    public function third(){
        // 3. Hombres mayores de edad y tipo persona 1
        $third = Persona::where('edad', '>=', '18')
        ->where('tipo_usuario', '=', '1')
        ->get();
        return [
            'datos' => $third
        ];
    }

    public function fourth(){
        // 4. Mostrar los nombres, apellidos, direccion y telefono
        $fourth = Persona::select('nombres', 'apellidos', 'direccion', 'telefono')
        ->get();
        return [
            'datos' => $fourth
        ];
    }

    public function fifth(){
        // 5. Mostrar hombres y mujeres
        $fifth = Persona::where('genero', '=', 'm')
        ->Orwhere('genero', '=', 'f')
        ->get();
        return [
            'datos' => $fifth
        ];
    }

    public function store(Request $request)
    {
      //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function desatroy($id)
    {
        //
    }

}
