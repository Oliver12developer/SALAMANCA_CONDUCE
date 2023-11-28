<?php

namespace App\Http\Controllers;

use App\Models\Conductores;
use Illuminate\Http\Request;

class ConductoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $conductores = Conductores::all();
        return view('conductores.index')->with('conductores', $conductores);
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
        $conductores = new Conductores();
        $conductores->nombre = $request-> get('nombre');
        $conductores->ap_paterno = $request-> get('ap_paterno');
        $conductores->ap_materno = $request-> get('ap_materno');
        $conductores->id_licencia = $request-> get('id_licencia');
        $conductores->edad = $request-> get('edad');
        $conductores->telefono = $request-> get('telefono');


        $conductores->save();

        return redirect('conductores');
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
        $conductor = Conductores::find($id);
        return view('conductores.index')->with('conductor', $conductor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $conductor = Conductores::find($id);

        $conductor->nombre = $request-> get('nombre');
        $conductor->ap_paterno = $request-> get('ap_paterno');
        $conductor->ap_materno = $request-> get('ap_materno');
        $conductor->id_licencia = $request-> get('id_licencia');
        $conductor->edad = $request-> get('edad');
        $conductor->telefono = $request-> get('telefono');

        if ($conductor->save()){
            return redirect('conductores');
        }else{
            return redirect('dashboard');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $conductor = Conductores::find($id);
        $conductor->delete();
        return redirect('conductores');
    }
}
