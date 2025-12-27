<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Commandes;
use App\Models\Paiements;
use App\Models\Produits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::check()) {
            return view('login');
        }

        $commandes = Commandes::join('produits', 'commandes.produit_id', '=', 'produits.id_produit')
            ->select('commandes.*', 'produits.nom_produit', 'produits.image_produit')
            ->where('client_id', Auth::guard('client')->user()->id_client)->get();

        return view('commande', compact('commandes'));
    }

    public function checkout()
    {
        $panier = session('panier', []);
        $subtotal = collect($panier)->sum(fn($p) => $p['prix'] * $p['quantite']);

        return view('passer-commande', compact('panier', 'subtotal'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'telephone' => 'required',
            'nom' => 'required',
            'adresse' => 'nullable',
            'mode_paiement' => 'required'
        ]);

        $panier = session('panier', []);

        if (empty($panier)) {
            return response()->json([
                'success' => false,
                'error' => 'Panier vide'
            ]);
        }

        DB::beginTransaction();

        try {

            // 👤 CLIENT
            $client = Clients::firstOrCreate(
                ['telephone' => $request->telephone],
                ['nom_complet' => $request->nom]
            );

            foreach ($panier as $item) {

                // 🔒 VERROUILLAGE PRODUIT
                $produit = Produits::where('id_produit', $item['id'])
                    ->lockForUpdate()
                    ->first();

                if (!$produit) {
                    throw new \Exception("Produit introuvable");
                }

                // ❌ STOCK INSUFFISANT
                if ($produit->stock_produit < $item['quantite']) {
                    throw new \Exception(
                        "Stock insuffisant pour {$produit->nom_produit}. Stock restant : {$produit->stock_produit}, allez-y dans votre panier pour ajuster la quantité."
                    );
                }

                $montantProduit = $item['prix'] * $item['quantite'];

                // 📦 COMMANDE
                $commande = Commandes::create([
                    'montant_livraison' => 0,
                    'montant_produit' => $montantProduit,
                    'prix_unitaire' => $item['prix'],
                    'quantite' => $item['quantite'],
                    'adresse_livraison' => $request->adresse,
                    'zone' => null,
                    'mode_paiement' => $request->mode_paiement,
                    'statut_commande' => 'pending',
                    'client_id' => $client->id_client,
                    'produit_id' => $produit->id_produit,
                ]);

                // 💳 PAIEMENT
                Paiements::create([
                    'montant_paiement' => $montantProduit,
                    'mode_paiement' => $request->mode_paiement,
                    'statut_paiement' => 'pending',
                    'commande_id' => $commande->id_commande
                ]);

                // 📉 DÉCRÉMENT DU STOCK
                $produit->decrement('stock_produit', $item['quantite']);
            }

            DB::commit();
            session()->forget('panier');

            return response()->json([
                'success' => true,
                'message' => 'Commande enregistrée avec succès'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
