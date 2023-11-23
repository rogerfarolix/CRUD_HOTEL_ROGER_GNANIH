<!-- resources/views/dashboard.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="mb-4">
                        <a href="{{ route('rooms.index') }}" class="text-blue-500 hover:underline">Liste des Chambres</a>
                    </div>

                    <div class="mb-4">
                        <a href="{{ route('rooms.create') }}" class="text-blue-500 hover:underline">Créer une Chambre</a>
                    </div>

                    {{-- Ajoutez d'autres liens vers vos pages de gestion des chambres ici --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
