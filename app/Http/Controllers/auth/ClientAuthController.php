<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Tentative d'authentification
        if (Auth::attempt($credentials)) {
            // Authentification réussie, régénération de la session et redirection
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        // Tentative d'authentification échouée, vérification des raisons

        // Vérifier si l'email existe
        $user = Client::where('email', $credentials['email'])->first();

        if (!$user) {
            // Email inexistant
            return back()->withErrors([
                'email' => 'L\'adresse e-mail fournie n\'existe pas.',
            ])->onlyInput('email');
        }

        // Vérifier si le mot de passe est incorrect
        if (!Hash::check($credentials['password'], $user->password)) {
            // Mot de passe incorrect
            return back()->withErrors([
                'password' => 'Le mot de passe fourni est incorrect.',
            ])->onlyInput('email');
        }

        // Vérifier si le compte n'est pas confirmé
        if (!$user->is_confirmed) {
            // Compte non confirmé
            return back()->withErrors([
                'email' => 'Le compte n\'a pas encore été confirmé.',
            ])->onlyInput('email');
        }

        // Si aucune des conditions ci-dessus n'est remplie, afficher un message générique
        return back()->withErrors([
            'email' => 'Identifiants incorrects.',
        ])->onlyInput('email');
    }
}
