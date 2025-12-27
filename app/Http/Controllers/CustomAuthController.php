<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Commandes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function customLogin(Request $request)
    {
        $roles = [
            'login' => 'required',
        ];
        $customMessages = [
            'login.required' => "Veuillez saisir votre numéro de téléphone.",
        ];

        $request->validate($roles, $customMessages);

        $credentials = $request->only('login');
        $user = Clients::where('telephone', $credentials['login'])->first();

        if ($user) {

            Auth::login($user);

            return redirect()->intended('index');
        } else {
            return back()->withErrors(['Numéro de téléphone incorrect.']);
        }
    }

    public function dashboard()
    {
        if (Auth::check()) {

            $commandes = Commandes::join('produits', 'commandes.produit_id', '=', 'produits.id_produit')
                ->select('commandes.*', 'produits.nom_produit', 'produits.image_produit')
                ->where('client_id', Auth::guard('client')->user()->id_client)->get();

            return view('commande', compact('commandes'));
        } else {
            return view('login');
        }
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
}
