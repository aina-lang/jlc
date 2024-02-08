<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ClientAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        // toast('Your Post as been submited!','success');
        // Tentative d'authentification
        if (Auth::guard('client')->attempt($credentials)) {
            // Authentification réussie, régénération de la session et redirection
            $request->session()->regenerate();
            return redirect()->route('telepro.index');
        }

        // Tentative d'authentification échouée, vérification des raisons

        // Vérifier si l'email existe
        $user = Client::where('email', $credentials['email'])->first();

        if (!$user) {
            // Email inexistant
            Alert::alert('Erreur d\'authentification', 'L\'adresse e-mail fournie n\'existe pas.');
            return back();
        }

        // Vérifier si le mot de passe est incorrect
        if (!Hash::check($credentials['password'], $user->password)) {
            // Mot de passe incorrect
            Alert::alert('Erreur d\'authentification', 'Le mot de passe fourni est incorrect.');
            return back();
        }

        // Vérifier si le compte n'est pas confirmé
        if (!$user->is_confirmed) {
            // Compte non confirmé
            Alert::alert('Erreur d\'authentification', 'Le compte n\'a pas encore été confirmé.');
            return back();
        }

        // Si aucune des conditions ci-dessus n'est remplie, afficher un message générique
        Alert::alert('Erreur d\'authentification', 'Identifiants incorrects.');
        return back();
    }

    public function register(Request $request)
    {
        try {
            $data = $request->validate([
                'firstname' => ['required', 'string', 'max:255'],
                'lastname' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
                'phone_number' => ['required'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ], [
                'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
                'password.confirmed' => "Le mot de passe doit etre confirmer",
            ]);

            $data['password'] = Hash::make($data['password']);

            $user = Client::create($data);

            if ($user) {
                Alert::success('Inscription réussie', 'Votre compte a été créé avec succès.');
                Auth::guard('client')->login($user);
                return redirect()->intended('dashboard');
            } else {
                Alert::error('Erreur d\'inscription', 'Une erreur est survenue lors de la création du compte.');
                return back();
            }
        } catch (\Exception $e) {
            var_dump($e->getMessage());;
            exit;
        }
    }
}
