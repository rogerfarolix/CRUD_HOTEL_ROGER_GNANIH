<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Room;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoomCount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
        public function handle($request, Closure $next)
        {
            // Votre logique de vérification du nombre de chambres ici
            $roomCount = Room::count();
    
            // Si le nombre de chambres est inférieur à 3, redirigez l'utilisateur
            if ($roomCount < 3) {
                return redirect()->route('rooms.create')->with('error', 'Vous devez avoir au moins 3 chambres enregistrées.');
            }
    
            return $next($request);
        }
    
}
