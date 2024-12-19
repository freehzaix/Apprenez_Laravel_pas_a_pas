<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Location;
use App\Models\Vehicule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();

        return view('location.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        $vehicules = Vehicule::all();

        return view('location.add', compact('clients', 'vehicules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date_debut' => 'required',
            'date_fin' => 'required',
            'client_id' => 'required',
            'vehicule_id' => 'required',
        ]);

        $location = new Location();
        $location->date_debut = $request->date_debut;
        $location->date_fin = $request->date_fin;
        
        $date_debut = Carbon::parse($request->date_debut);
        $date_fin = Carbon::parse($request->date_fin);

        // Calcul de la différence en jours
        $difference = $date_debut->diffInDays($date_fin);

        // Si tu veux la différence en tant qu'entier
        $difference = (int) $difference;

        $location->prix_location = $difference * 5000;
        $location->client_id = $request->client_id;
        $location->vehicule_id = $request->vehicule_id;
        $location->save();

        return redirect()->route('location.index')->with('status', 'Votre location a bien été enregistré.');
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
