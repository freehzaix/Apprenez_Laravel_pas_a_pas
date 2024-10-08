@extends('layouts.app')

@section('titlePage')
    Ajouter un véhicule
@endsection

@section('content')
    <div class="container">
        <h2 class="mt-5 mb-3">@yield('titlePage')</h2>
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('vehicule.store') }}" method="post">
          @csrf
            <div class="mb-3">
                <label for="numero_plaque" class="form-label">Numéro de la plaque</label>
                <input type="text" class="form-control @error('numero_plaque') is-invalid @enderror" 
                name="numero_plaque" id="numero_plaque" placeholder="Numéro de la plaque">
              </div>
              <div class="mb-3">
                <label for="marque" class="form-label">Marque</label>
                <input type="text" class="form-control @error('marque') is-invalid @enderror" 
                name="marque" id="marque" placeholder="Marque du véhicule">
              </div>
              <div class="mb-3">
                <label for="modele" class="form-label">Modèle</label>
                <input type="text" class="form-control @error('modele') is-invalid @enderror" 
                name="modele" id="modele" placeholder="Modèle du véhicule">
              </div>
              <div class="mb-3">
                <label for="couleur" class="form-label">Couleur</label>
                <input type="text" class="form-control @error('couleur') is-invalid @enderror" 
                name="couleur" id="couleur" placeholder="Couleur du véhicule">
              </div>
              <div class="mb-3">
                <button class="btn btn-primary" type="submit">Ajouter un véhicule</button>
              </div>
        </form>
    </div>
@endsection