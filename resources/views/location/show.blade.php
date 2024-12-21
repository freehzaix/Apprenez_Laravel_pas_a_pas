@extends('layouts.app')

@section('titlePage')
    Modifier la location
@endsection

@section('content')
    <div class="container">
        <h2 class="mt-5 mb-3">@yield('titlePage')</h2>
        <form action="{{ route('location.update', $location->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="date_debut" class="form-label">Date de début</label>
                <input type="date" class="form-control" name="date_debut" value="{{ $location->date_debut }}" id="date_debut" placeholder="Date de début">
            </div>
            <div class="mb-3">
                <label for="date_fin" class="form-label">Date de fin</label>
                <input type="date" class="form-control" name="date_fin" value="{{ $location->date_fin }}" id="date_fin" placeholder="Date de fin">
            </div>
            <div class="mb-3">
                <label for="client" class="form-label">Client</label>
                <select class="form-control" name="client_id" id="client"> 
                    <option value="">Choisir un client</option>
                    @foreach ($clients as $item)
                        <option value="{{ $location->client_id }}" selected> {{ $location->clients->nom }} </option>
                        <option value="{{ $item->id }}"> {{ $item->nom }} </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="vehicule" class="form-label">Véhicule</label>
                <select class="form-control" name="vehicule_id" id="vehicule"> 
                    <option value="">Choisir un vehicule</option>
                    @foreach ($vehicules as $item)
                        <option value="{{ $location->vehicule_id }}" selected> {{ $location->vehicules->numero_plaque }} {{ $location->vehicules->marque }} {{ $location->vehicules->modele }} {{ $location->vehicules->couleur }}</option>
                        <option value="{{ $item->id }}"> {{ $item->numero_plaque }}, {{ $item->marque }} {{ $item->modele }} {{ $item->couleur }} </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Modifier la location</button>
            </div>
        </form>
    </div>
@endsection
