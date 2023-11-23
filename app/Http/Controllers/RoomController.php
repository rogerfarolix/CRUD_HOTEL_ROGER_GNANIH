<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function show($id)
    {
        $room = Room::findOrFail($id);
        return view('rooms.show', compact('room'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'hotel_name' => 'required|string|max:255',
            'hotel_description' => 'nullable|string',
            'room_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'num_beds' => 'required|integer|min:1',
            'max_adults' => 'nullable|integer|min:0',
            'max_children' => 'nullable|integer|min:0',
            'attributes' => 'nullable|array',
            'status' => 'required|in:Disponible,Non disponible',
        ]);
        

        Room::create($request->all());

        return redirect()->route('rooms.index')->with('success', 'Chambre enregistrée avec succès.');
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hotel_name' => 'required|string|max:255',
            'hotel_description' => 'nullable|string',
            'room_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'num_beds' => 'required|integer|min:1',
            'max_adults' => 'nullable|integer|min:0',
            'max_children' => 'nullable|integer|min:0',
            'attributes' => 'nullable|array',
            'status' => 'required|in:Disponible,Non disponible',
        ]);
        

        $room = Room::findOrFail($id);
        $room->update($request->all());

        return redirect()->route('rooms.index')->with('success', 'Informations de la chambre mises à jour avec succès.');
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
    
        return redirect()->route('rooms.index')->with('success', 'Chambre supprimée avec succès.');
    }
    
    public function __construct()
    {
        $this->middleware('check.room.count')->only('destroy');
    }
    

}
