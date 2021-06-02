<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class ClientMiddleware
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

      if(Auth::check() && Auth::user()->isban){

        $banned = Auth::user()->isban == "1" ;
        Auth::logout() ;

        if($banned == 1){
            $message = 'Votre compte a été banni, veuillez contacter administrateur.' ;
        }

        return redirect()->route('login')
                    ->with('status', $message)
                    ->withErrors(['email'=>'Votre compte a été banni, veuillez contacter administrateur .'])
                      ;
      }  
        return $next($request);
    }
}
