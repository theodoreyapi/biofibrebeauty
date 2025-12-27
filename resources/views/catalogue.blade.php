@extends('layouts.master')

@section('content')
    <header class="catalog-header">
        <div class="container">
            <h1 class="title-main display-4 mb-3">Notre Collection</h1>
            <p class="text-muted mb-0" style="max-width: 500px;">
                Découvrez notre sélection de mèches de qualité premium, en cheveux naturels et synthétiques.
            </p>
        </div>
    </header>

    <section class="catalog-content">
        <div class="container">

            <form method="GET" action="{{ route('catalogue.index') }}" class="filters-bar">
                <div class="filter-group">
                    <span class="filter-label">
                        <i class="bi bi-sliders me-2"></i> Filtres
                    </span>
                </div>

                <div class="filter-group">
                    <select name="categorie" class="custom-select" onchange="this.form.submit()">
                        <option value="">Toutes catégories</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id_categorie }}"
                                {{ request('categorie') == $categorie->id_categorie ? 'selected' : '' }}>
                                {{ $categorie->nom_categorie }}
                            </option>
                        @endforeach
                    </select>

                    <select name="longueur" class="custom-select" onchange="this.form.submit()">
                        <option value="">Toutes longueurs</option>
                        @foreach ($longueurs as $longueur)
                            <option value="{{ $longueur->id_longueur }}"
                                {{ request('longueur') == $longueur->id_longueur ? 'selected' : '' }}>
                                {{ $longueur->valeur_longueur }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>

            <p class="results-count">{{ $cumulProduits }} produit(s) trouvé(s)</p>

            <div class="row g-4 catalog-grid">
                @foreach ($produits as $produit)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="product-card shadow-sm">
                            <a href="{{ route('catalogue.show', Hashids::encode($produit->id_produit)) }}"
                                style="color: black; text-decoration: none;">
                                <div class="image-container">
                                    <span class="badge-catalog-vedette">Vedette</span>
                                    <img src="{{ $produit->image_produit == '' ? 'https://images.unsplash.com/photo-1519699047748-de8e457a634e?q=80&w=800' : $produit->image_produit }}"
                                        alt="{{ $produit->nom_produit }}">
                                </div>
                            </a>
                            <div class="product-info">
                                <a href="{{ route('catalogue.show', Hashids::encode($produit->id_produit)) }}"
                                    style="color: black; text-decoration: none;">
                                    <h3>{{ $produit->nom_produit }}</h3>
                                </a>
                                <p class="product-description">
                                    {{ \Illuminate\Support\Str::limit($produit->description_produit, 115) }}</p>
                                <div class="product-meta">
                                    <span class="meta-tag">{{ $produit->valeur_longueur }}</span>
                                    <span class="meta-sep">•</span>
                                    <span class="small text-muted">{{ $produit->couleur_produit }}</span>
                                </div>
                                <div class="product-footer">
                                    <span class="price">{{ number_format($produit->prix_produit, 0, ',', ' ') }} F
                                        CFA</span>
                                    @if ($produit->stock_produit > 0)
                                        <button class="btn-add-cart"
                                            onclick="addToCart(
                                            '{{ $produit->id_produit }}',
                                            '{{ $produit->nom_produit }}',
                                            '{{ $produit->prix_produit }}',
                                            '{{ $produit->image_produit }}'
                                        )">
                                            <i class="bi bi-bag-plus me-2"></i> Ajouter
                                        </button>
                                    @else
                                        <button disabled class="btn btn-secondary">Rupture de stock</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
