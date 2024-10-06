<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehicule.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero_plaque' => 'required',
            'marque' => 'required',
            'modele' => 'required',
            'couleur' => 'required',
        ]);

        $vehicule = new Vehicule();
        $vehicule->numero_plaque = $request->numero_plaque;
        $vehicule->marque = $request->marque;
        $vehicule->modele = $request->modele;
        $vehicule->couleur = $request->couleur;
        $vehicule->save();

        return redirect()->route('vehicule.create')->with('status', 'Le véhicule a bien été enregistré.');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
