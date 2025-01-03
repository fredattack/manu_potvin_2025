<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForceWwwMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if( app()->environment() === 'local') {
            return $next($request);
        }


         $host = $request->getHost();

        // Vérifie si "www" est manquant
        if (strpos($host, 'www.') !== 0) {
            $newHost = 'www.' . $host;
            $url = $request->getScheme() . '://' . $newHost . $request->getRequestUri();

            return redirect($url, 301);
        }

        return $next($request);
    }
}
