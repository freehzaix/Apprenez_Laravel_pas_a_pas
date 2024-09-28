@extends('layouts.app')

@section('titlePage')
    Ajouter un client
@endsection

@section('content')
    <div class="container">
        <h2 class="mt-5 mb-3">@yield('titlePage')</h2>
        <form action="#" method="post">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="Nom du client">
              </div>
              <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" placeholder="Prénom du client">
              </div>
              <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" placeholder="Adresse du client">
              </div>
              <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="telephone" placeholder="Telephone du client">
              </div>
              <div class="mb-3">
                <button class="btn btn-primary" type="submit">Ajouter un client</button>
              </div>
        </form>
    </div>
@endsection