<?php

namespace App\Http\Controllers;

use App\Models\Soportes;
use Illuminate\Http\Request;

class SoportesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $soportes = Soportes::all();
        return view('administracion.soporte')->with('soportes', $soportes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $soportes = Soportes::all();
        return view('welcome')->with('soportes', $soportes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $soportes = new Soportes();
        $soportes->nom_compania = $request-> get('nom_compania');
        $soportes->email_compania = $request->get('email_compania');
        $soportes->asunto = $request->get('asunto');
        $soportes->desc_problema = $request->get('desc_problema');

        $soportes->save();
        return redirect('soportes');
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
        $soporte = Soportes::find($id);
        return view('administracion.soporte')->with('soporte', $soporte);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $soporte = Soportes::find($id);
        $soporte->nom_compania = $request->get('nom_compania');
        $soporte->email_compania = $request->get('email_compania');
        $soporte->asunto = $request->get('asunto');
        $soporte->desc_problema = $request->get('desc_problema');

        if ($soporte->save()){
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
        $soporte = Soportes::find($id);
        $soporte->delete();
        return redirect('soportes');
    }
}
