@extends('layouts.app')

@section('title', 'Liste des étudiants')

@section('content')
    <h1>Liste des étudiants</h1>
    <p>
    <ol>
        @foreach ($etudiants as $ligne)
            <li>{{ $ligne }}</li>
        @endforeach
    </ol>
    </p>
@endsection
