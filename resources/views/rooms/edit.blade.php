<!-- resources/views/rooms/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Modifier la Chambre</h1>
    
    <!-- Ajoutez le formulaire de modification ici -->
    <form action="{{ route('rooms.update', $room->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="hotel_name">Nom de l'hôtel:</label>
        <input type="text" id="hotel_name" name="hotel_name" value="{{ $room->hotel_name }}" required>

        <label for="hotel_description">Description de l'hôtel:</label>
        <textarea id="hotel_description" name="hotel_description">{{ $room->hotel_description }}</textarea>

        <label for="room_name">Nom de la chambre:</label>
        <input type="text" id="room_name" name="room_name" value="{{ $room->room_name }}" required>

        <label for="price">Prix:</label>
        <input type="number" id="price" name="price" value="{{ $room->price }}" required>

        <label for="num_beds">Nombre de lits:</label>
        <input type="number" id="num_beds" name="num_beds" value="{{ $room->num_beds }}" required>

        <label for="max_adults">Max d'adultes:</label>
        <input type="number" id="max_adults" name="max_adults" value="{{ $room->max_adults }}">

        <label for="max_children">Enfants maximum autorisé:</label>
        <input type="number" id="max_children" name="max_children" value="{{ $room->max_children }}">

        <label for="attributes">Attributs (séparés par des virgules):</label>
        <input type="text" id="attributes" name="attributes" value="{{ $room->attributes }}">

        <label for="status">Statut:</label>
        <select id="status" name="status" required>
            <option value="Disponible" {{ $room->status == 'Disponible' ? 'selected' : '' }}>Disponible</option>
            <option value="Non disponible" {{ $room->status == 'Non disponible' ? 'selected' : '' }}>Non disponible</option>
        </select>

        <!-- Ajoutez d'autres champs du formulaire ici -->

        <button type="submit">Mettre à jour</button>
    </form>

    <a href="{{ route('rooms.index') }}">Retour à la liste des chambres</a>
@endsection
