<!-- resources/views/rooms/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Liste des Chambres</h1>
    
    <!-- Ajouter un lien pour créer une nouvelle chambre -->
    <a href="{{ route('rooms.create') }}" class="btn btn-primary">Créer une Chambre</a>

    <!-- Afficher la liste des chambres -->
    @foreach($rooms as $room)
        <div>
            <h2>{{ $room->room_name }}</h2>
            <p>{{ $room->hotel_name }}</p>
            <p>{{ $room->price }}</p>
            <!-- Ajoutez d'autres informations de la chambre ici -->
            <a href="{{ route('rooms.show', $room->id) }}">Voir détails</a>
        </div>
    @endforeach
@endsection
