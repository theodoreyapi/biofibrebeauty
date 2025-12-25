@extends('layouts.master')

@section('content')
    <section class="product-details-section">
        <div class="container">
            <div class="breadcrumb-custom">
                <a href="{{ url('catalogue') }}"><i class="bi bi-arrow-left me-2"></i> Retour au catalogue</a>
            </div>

            <div class="row g-5">
                <div class="col-lg-6">
                    <img src="{{ $produits->image_produit == '' ? 'https://images.unsplash.com/photo-1519699047748-de8e457a634e?q=80&w=800' : $produits->image_produit }}"
                        alt="{{ $produits->nom_produit }}" class="main-product-img">
                    {{--  <div class="thumbnail-grid">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=200"
                            class="thumb-img active">
                        <img src="https://images.unsplash.com/photo-1580618672591-eb180b1a973f?q=80&w=200"
                            class="thumb-img">
                    </div> --}}
                </div>

                <div class="col-lg-6">
                    <div class="product-badge-group">
                        <span class="badge-detail vedette">Vedette</span>
                        <span class="badge-detail naturel">{{ $produits->nom_categorie }}</span>
                    </div>

                    <h1 class="product-title-detail">{{ $produits->nom_produit }}</h1>
                    <div class="product-price-detail">{{ number_format($produits->prix_produit, 0, ',', ' ') }} F CFA</div>

                    <button class="btn-add-large mb-4">
                        <i class="bi bi-bag-plus"></i> Ajouter au panier
                    </button>

                    <div class="product-description-box">
                        <h5 class="fw-bold mb-2">Description</h5>
                        <p class="text-muted">{{ $produits->description_produit }}</p>
                    </div>

                    <div class="product-specs">
                        <div class="spec-item">
                            <label>Longueur</label>
                            <span>{{ $produits->valeur_longueur }}</span>
                        </div>
                        <div class="spec-item">
                            <label>Couleur</label>
                            <span>{{ $produits->couleur_produit }}</span>
                        </div>
                    </div>

                    <div class="interested-card">
                        <h4>Intéressé(e) par ce produit ?</h4>
                        <p class="small text-muted mb-4">Contactez-nous pour plus d'informations ou pour passer
                            commande.</p>

                        <button class="btn-whatsapp-full">
                            <i class="bi bi-whatsapp"></i> Contacter sur WhatsApp
                        </button>

                        <div class="contact-options-grid">
                            <a href="#" class="btn-contact-outline">
                                <i class="bi bi-telephone"></i> Appeler
                            </a>
                            <a href="#" class="btn-contact-outline">
                                <i class="bi bi-envelope"></i> Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
