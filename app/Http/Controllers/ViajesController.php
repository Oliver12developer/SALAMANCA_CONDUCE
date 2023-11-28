<?php

namespace App\Http\Controllers;

use App\Models\Viajes;
use Illuminate\Http\Request;

class ViajesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $viajes = Viajes::all();
        return view('administracion.viajes')->with('viajes', $viajes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $viajes = new Viajes();
        $viajes->conductor = $request-> get('conductor');
        $viajes->destino = $request-> get('destino');
        $viajes->costo = $request-> get('costo');
        $viajes->hora = $request-> get('hora');
        $viajes->fecha = $request-> get('fecha');


        $viajes->save();

        return redirect('viajes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $viaje = Viajes::find($id);
        return view('administracion.viajes')->with('viaje', $viaje);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $viaje = Viajes::find($id);

        $viaje->conductor = $request-> get('modelo');
        $viaje->destino = $request-> get('placa');
        $viaje->costo = $request-> get('costo');
        $viaje->hora = $request-> get('hora');
        $viaje->fecha = $request-> get('fecha');

        if ($viaje->save()){
            return redirect('viajes');
        }else{
            return redirect('dashboard');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $viaje = Viajes::find($id);
        $viaje->delete();
        return redirect('viajes');
    }
}
