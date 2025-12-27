@extends('layouts.master')

@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-75">

                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <span class="badge-exclusive mb-3"><i class="bi bi-crown"></i> Collection Exclusive</span>
                    <h1 class="display-3 fw-bold title-main">
                        L'élégance <br> <span class="text-gold">au naturel</span>
                    </h1>
                    <p class="lead text-muted my-4">
                        Sublimez votre beauté avec notre collection premium de mèches. Qualité exceptionnelle,
                        confort absolu.
                    </p>
                    <div class="d-flex gap-3 mb-5">
                        <a href="{{ url('catalogue') }}" class="btn btn-dark-custom">Découvrir <i
                                class="bi bi-arrow-right"></i></a>
                        <a href="{{ url('contact') }}" class="btn btn-outline-custom">Nous contacter</a>
                    </div>

                    <div class="row g-4 stats-container">
                        <div class="col-4">
                            <h3 class="fw-bold m-0">500+</h3>
                            <small class="text-muted">Clientes satisfaites</small>
                        </div>
                        <div class="col-4 border-start">
                            <h3 class="fw-bold m-0">100%</h3>
                            <small class="text-muted">Qualité premium</small>
                        </div>
                        <div class="col-4 border-start">
                            <h3 class="fw-bold m-0">24h</h3>
                            <small class="text-muted">Livraison rapide</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 pos-relative" data-aos="fade-left" data-aos-duration="1200">
                    <div class="image-grid">
                        <div class="img-box main-img">
                            <img src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?q=80&w=800"
                                alt="Cheveux naturels" class="rounded-4 shadow">
                        </div>

                        <div class="card-float review-card p-3 rounded-4 shadow-sm" data-aos="zoom-in" data-aos-delay="400">
                            <div class="d-flex gap-1 mb-2">
                                <span class="heart-icon">❤️</span><span class="heart-icon">❤️</span><span
                                    class="heart-icon">❤️</span>
                                <small class="ms-2">+500 avis</small>
                            </div>
                            <div class="stars text-warning mb-1">★★★★★</div>
                            <p class="small mb-0 italic">"Qualité exceptionnelle !"</p>
                        </div>

                        <div class="card-float quality-card p-3 rounded-4 shadow-sm" data-aos="zoom-in"
                            data-aos-delay="600">
                            <div class="quality-icon mb-2">✨</div>
                            <h6 class="mb-0">Cheveux naturels</h6>
                            <small class="text-muted">100% qualité premium</small>
                        </div>

                        <div class="img-box secondary-img">
                            <img src="https://hellocoiffeur.com/wp-content/uploads/2023/06/image-667.png" alt="Nos bureaux"
                                class="rounded-4 shadow">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <br><br><br><br><br><br>
    <section class="features-section py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card text-center p-5 rounded-4 shadow-sm border-0 h-100">
                        <div class="icon-wrapper mb-4 mx-auto">
                            <i class="bi bi-stars"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Qualité Premium</h4>
                        <p class="text-muted mb-0">Cheveux naturels et synthétiques de haute qualité</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card text-center p-5 rounded-4 shadow-sm border-0 h-100">
                        <div class="icon-wrapper mb-4 mx-auto">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Garantie Satisfait</h4>
                        <p class="text-muted mb-0">Conseils personnalisés et service client dédié</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card text-center p-5 rounded-4 shadow-sm border-0 h-100">
                        <div class="icon-wrapper mb-4 mx-auto">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Livraison Express</h4>
                        <p class="text-muted mb-0">Expédition soignée partout dans le monde</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="products-section">
        <div class="container">
            <div class="text-center section-header" data-aos="fade-up">
                <span class="badge-trending mb-2">Best-sellers</span>
                <h2 class="title-main display-5 mb-3">Nos Produits Vedettes</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">
                    Découvrez notre sélection de mèches les plus populaires, choisies par nos clientes
                </p>
            </div>

            <div class="row g-4">
                @foreach ($produits as $produit)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="product-card shadow-sm">
                            <a href="{{ route('catalogue.show', Hashids::encode($produit->id_produit)) }}"
                                style="color: black; text-decoration: none;">
                                <div class="image-container">
                                    <span class="badge-overlay">Vedette</span>
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

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="{{ url('catalogue') }}" class="btn-view-all">Voir toute la collection <i
                        class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <section class="cta-section" data-aos="fade-up">
        <div class="container">
            <div class="cta-card">
                <span class="badge-help">Besoin d'aide ?</span>
                <h2>Notre équipe est à votre écoute</h2>
                <p>
                    Nos experts sont disponibles pour vous conseiller et vous accompagner dans
                    le choix de la mèche parfaite qui sublimera votre style.
                </p>

                <div class="cta-buttons">
                    <a href="{{ url('contact') }}" class="btn-contact-main">
                        Contactez-nous <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="tel:+41798376166" class="btn-phone-outline">
                        +41 79 837 61 66
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
