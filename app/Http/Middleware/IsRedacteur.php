<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsRedacteur
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
        // dd($request->route());
        $articleUserId = $request->route()->parameters()["article"]->user_id;
        if(Auth::user()->id == $articleUserId || Auth::check() && Auth::id()== 1){
            return $next($request);
        }
        else{
            return redirect()->back()->withErrors("Vous n'avez pas accès à cette partie du site!");
        }
    }
}
