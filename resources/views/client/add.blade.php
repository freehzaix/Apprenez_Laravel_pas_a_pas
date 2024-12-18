@extends('layouts.app')

@section('titlePage')
    Ajouter un client
@endsection

@section('content')
    <div class="container">
        <h2 class="mt-5 mb-3">@yield('titlePage')</h2>
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('client.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom') }}" placeholder="Nom du client">
              </div>
              <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="prenom" name="prenom" value="{{ old('prenom') }}" placeholder="Prénom du client">
              </div>
              <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control @error('adresse') is-invalid @enderror" id="adresse" name="adresse" value="{{ old('adresse') }}" placeholder="Adresse du client">
              </div>
              <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="telephone" name="telephone" value="{{ old('telephone') }}" placeholder="Telephone du client">
              </div>
              <div class="mb-3">
                <button class="btn btn-primary" type="submit">Ajouter un client</button>
              </div>
        </form>
    </div>
@endsection