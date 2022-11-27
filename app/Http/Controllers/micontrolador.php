<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class micontrolador extends Controller
{
    public function vista2()
    {
        return view('vista2');
    }

    public function vista3()
    {
        return view('vista3');
    }

    public function registrarcarros()
    {
        return view('registrarcarros');
    }
    public function guardarcarros(Request $request)
    {
        $carros = new Carro;
        $carros->modelo=$request->input('modelo');
        $carros->marca=$request->input('marca');
        $carros->color=$request->input('color');
        $carros->duenio=$request->input('duenio');
        $carros->save();

        return redirect()->route('registrarcarros');
    }
    public function consultarcarros(){
        $carros = Carro::all();
        return view('layouts.consulta', compact('carros'));
    }

    public function eliminarcarros($id){
        $carro=Carro::find($id);
        $carro->delete();
        return redirect()->route('consultarcarros');

    }
    public function muestracarro($id){
        $carros=Carro::find($id);
        return view('layouts.muestracarro', compact('carros'));
    }
    public function editarcarros(Request $request, $id){
            $carros=Carro::find($id);
            
            $carros->nombre=$request->input('marca');
            $carros->genero=$request->input('modelo');
            $carros->editorial=$request->input('color');
            $carros->save();
            return redirect()->route('consultarcarros');

    }
}
