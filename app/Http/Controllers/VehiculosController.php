<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculos;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $vehiculos = Vehiculos::all();
        return view('vehiculos.index')->with('vehiculos', $vehiculos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Vehiculos.Index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehiculos = new Vehiculos();
        $vehiculos->modelo = $request-> get('modelo');
        $vehiculos->placa = $request-> get('placa');

        $vehiculos->save();

        return redirect('vehiculos');


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
        $vehiculo = Vehiculos::find($id);
        return view('vehiculos.index')->with('vehiculo', $vehiculo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vehiculo = Vehiculos::find($id);

        $vehiculo->modelo = $request-> get('modelo');
        $vehiculo->placa = $request-> get('placa');

        if ($vehiculo->save()){
            return redirect('soportes');
        }else{
            return redirect('dashboard');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehiculo = Vehiculos::find($id);
        $vehiculo->delete();
        return redirect('soportes');
    }
}
