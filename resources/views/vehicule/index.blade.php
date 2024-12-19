@extends('layouts.app')

@section('titlePage')
    Liste des véhicules
@endsection

@section('content')
    <div class="container">
        <h2 class="mt-5 mb-3">@yield('titlePage')</h2>
        <a href="{{ route('vehicule.create') }}" class="btn btn-primary"> Ajouter un véhicule </a>
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
                    <th>Numero matricule</th>
                    <th>Marque</th>
                    <th>Modèle</th>
                    <th>Couleur</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehicules as $item)
                    <tr>
                        <td> {{ $item->id }} </td>
                        <td> {{ $item->numero_plaque }} </td>
                        <td> {{ $item->marque }} </td>
                        <td> {{ $item->modele }} </td>
                        <td> {{ $item->couleur }} </td>
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