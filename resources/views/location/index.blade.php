@extends('layouts.app')

@section('titlePage')
    Liste des locations
@endsection

@section('content')
    <div class="container">
        <h2 class="mt-5 mb-3">@yield('titlePage')</h2>
        <a href="{{ route('location.create') }}" class="btn btn-primary"> Ajouter une location </a>
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
        <hr>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Durée de location</th>
                    <th>Prix</th>
                    <th>Client</th>
                    <th>Véhicule</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($locations as $item)
                    <tr>
                        <td> {{ $item->id }} </td>
                        <td> {{ ($item->date_fin - $item->date_debut)  }} </td>
                        <td> {{ $item->prix_location }} </td>
                        <td> {{ $item->clients->nom }} {{ $item->clients->prenom }} </td>
                        <td> {{ $item->vehicules->numero_plaque }} </td>
                        <td> 
                            <a href="#" class="btn btn-info">Modifier</a>
                            <a href="#" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>   
                @endforeach
            </tbody>
        </table>

    </div>
@endsection