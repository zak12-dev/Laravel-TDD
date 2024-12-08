@extends('layouts.app')

@section('content')
    <h1>Liste des Chirps</h1>
    <ul>
        @foreach ($chirps as $chirp)
            <li>{{ $chirp->message }}</li>
        @endforeach
    </ul>
@endsection
