<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\Facades\Hashids;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = DB::table('produits')
            ->join('categories', 'produits.categorie_id', '=', 'categories.id_categorie')
            ->join('longueurs', 'produits.longueur_id', '=', 'longueurs.id_longueur')
            ->select('produits.*', 'categories.nom_categorie', 'longueurs.valeur_longueur');

        if (request()->filled('categorie')) {
            $query->where('produits.categorie_id', request('categorie'));
        }

        if (request()->filled('longueur')) {
            $query->where('produits.longueur_id', request('longueur'));
        }

        $produits = $query
            ->orderBy('produits.created_at', 'desc')
            ->get();

        $cumulProduits = $produits->count();

        $categories = DB::table('categories')->get();
        $longueurs = DB::table('longueurs')->get();

        return view('catalogue', compact(
            'produits',
            'cumulProduits',
            'categories',
            'longueurs'
        ));

        return view('catalogue', compact('produits', 'cumulProduits', 'categories', 'longueurs'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $decoded = Hashids::decode($id);

        if (empty($decoded)) {
            abort(404);
        }

        $id = $decoded[0];

        $produits = DB::table('produits')
            ->join('categories', 'produits.categorie_id', '=', 'categories.id_categorie')
            ->join('longueurs', 'produits.longueur_id', '=', 'longueurs.id_longueur')
            ->where('produits.id_produit', $id)
            ->select('produits.*', 'categories.nom_categorie', 'longueurs.valeur_longueur')
            ->first();

        return view('detail-article', compact('produits'));
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
