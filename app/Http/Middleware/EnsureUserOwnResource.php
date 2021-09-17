<?php

namespace App\Http\Middleware;

use App\Models\Apartment;
use Closure;
use Illuminate\Http\Request;

class EnsureUserOwnResource
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $apartment = $request->route()->parameter('apartment');
        if (auth()->user() == null) {
            return redirect()->route('login')->with(['type' => 'warning', 'message' => 'Devi effettuare il login prima di poter modificare un appartamento']);
        }
        if (auth()->user()->id != $apartment->id_user)
            return redirect()->route('apartment.index')->with(['type' => 'warning', 'message' => 'Non sei il proprietario di questo appartamento, accesso non autorizzato.']);
        return $next($request);
    }
}
