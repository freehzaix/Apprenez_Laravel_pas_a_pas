@extends('layouts.app')

@section('titlePage')
    Liste des clients
@endsection

@section('content')
    <div class="container">
        <h2 class="mt-5 mb-3">@yield('titlePage')</h2>

        <a href="{{ route('client.create') }}" class="btn btn-primary">Ajouter un client</a>

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <hr>
        <table class="table">
            <thead>
                <th>
                    <td>ID</td>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Adresse</td>
                    <td>Téléphone</td>
                    <td>Actions</td>
                </th>
            </thead>
            <tbody>
                @foreach ($clients as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nom }}</td>
                        <td>{{ $item->prenom }}</td>
                        <td>{{ $item->adresse }}</td>
                        <td>{{ $item->telephone }}</td>
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