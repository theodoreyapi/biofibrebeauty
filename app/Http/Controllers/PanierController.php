<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function index()
    {
        return response()->json(session('panier', []));
    }

    public function ajouter(Request $request)
    {
        $panier = session()->get('panier', []);

        $id = $request->id;

        if (isset($panier[$id])) {
            $panier[$id]['quantite']++;
        } else {
            $panier[$id] = [
                'id' => $id,
                'nom' => $request->nom,
                'prix' => $request->prix,
                'image' => $request->image,
                'quantite' => 1
            ];
        }

        session()->put('panier', $panier);

        return response()->json([
            'success' => true,
            'count' => count($panier),
            'panier' => $panier
        ]);
    }

    public function update(Request $request)
    {
        $panier = session('panier');

        if (isset($panier[$request->id])) {
            $panier[$request->id]['quantite'] = $request->quantite;
            session()->put('panier', $panier);
        }

        return response()->json($panier);
    }

    public function supprimer($id)
    {
        $panier = session('panier');
        unset($panier[$id]);
        session()->put('panier', $panier);

        return response()->json($panier);
    }
}
