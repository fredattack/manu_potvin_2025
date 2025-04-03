<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Log;

class RecaptchaMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Vérifie que le token existe
        if (!$request->has('recaptcha_token')) {
            return redirect()->back()->withErrors(['captcha' => 'Le captcha est requis.']);
        }

        // Valide le token reCAPTCHA avec l'API Google
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => config('app.recaptcha.secret_key'),
            'response' => $request->input('recaptcha_token'),
            'remoteip' => $request->ip()
        ]);


        $responseData = $response->json();

        Log::info('ReCAPTCHA response', [
            'response' => $responseData,
            'request'  => $request->all(),
        ]);
        // Score minimum pour considérer la requête valide
        $minScore = 0.5;

        // Validation du résultat Google
        if (!$responseData['success'] || ($responseData['score'] ?? 0) < $minScore) {
            return redirect()->back()->withErrors(['captcha' => 'Votre action a été identifiée comme suspecte, veuillez réessayer.']);
        }

        return $next($request);
    }
}
