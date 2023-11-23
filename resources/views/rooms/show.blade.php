<!-- resources/views/rooms/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Détails de la Chambre</h1>
    
    <h2>{{ $room->room_name }}</h2>
    <p>{{ $room->hotel_name }}</p>
    <p>{{ $room->price }}</p>
    <p>{{ $room->num_beds }} lits</p>
    <p>Max d'adultes: {{ $room->max_adults }}</p>
    <p>Enfants maximum autorisés: {{ $room->max_children }}</p>
    <p>Attributs: {{ $room->attributes }}</p>
    <p>Statut: {{ $room->status }}</p>
    <!-- Ajoutez d'autres informations de la chambre ici -->

    <a href="{{ route('rooms.edit', $room->id) }}">Modifier</a>

    <!-- Ajoutez un formulaire de suppression ici -->
    <form action="{{ route('rooms.destroy', $room->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>

    <a href="{{ route('rooms.index') }}">Retour à la liste des chambres</a>
@endsection
