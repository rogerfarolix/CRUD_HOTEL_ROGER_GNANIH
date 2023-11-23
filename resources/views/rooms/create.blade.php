
@extends('layouts.app')

@section('content')
    <h1>Créer une Chambre</h1>
    
    <!-- Ajoutez le formulaire de création ici -->
    <form action="{{ route('rooms.store') }}" method="post">
        @csrf

        <label for="hotel_name">Nom de l'hôtel:</label>
        <input type="text" id="hotel_name" name="hotel_name" required>

        <label for="hotel_description">Description de l'hôtel:</label>
        <textarea id="hotel_description" name="hotel_description"></textarea>

        <label for="room_name">Nom de la chambre:</label>
        <input type="text" id="room_name" name="room_name" required>

        <label for="price">Prix:</label>
        <input type="number" id="price" name="price" required>

        <label for="num_beds">Nombre de lits:</label>
        <input type="number" id="num_beds" name="num_beds" required>

        <label for="max_adults">Max d'adultes:</label>
        <input type="number" id="max_adults" name="max_adults">

        <label for="max_children">Enfants maximum autorisé:</label>
        <input type="number" id="max_children" name="max_children">

        <label for="attributes">Attributs (séparés par des virgules):</label>
        <input type="text" id="attributes" name="attributes">

        <label for="status">Statut:</label>
        <select id="status" name="status" required>
            <option value="Disponible">Disponible</option>
            <option value="Non disponible">Non disponible</option>
        </select>

        <!-- Ajoutez d'autres champs du formulaire ici -->

        <button type="submit">Enregistrer</button>
    </form>

    <a href="{{ route('rooms.index') }}">Retour à la liste des chambres</a>
@endsection
