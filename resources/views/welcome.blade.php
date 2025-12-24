<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioFibreBeauty - L'élégance au naturel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ URL::asset('style.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4">
        <div class="container">
            <a class="navbar-brand logo" href="#">BioFibre<span>Beauty</span></a>
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Catalogue</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
            <div class="d-flex align-items-center gap-3 nav-icons">
                <small><i class="bi bi-telephone"></i> 01 23 45 67 89</small>
                <i class="bi bi-person"></i>
                <button class="btn position-relative" type="button" data-bs-toggle="modal"
                    data-bs-target="#addProductModal">
                    <i class="bi bi-bag"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-gold">1</span>
                </button>
            </div>
        </div>
    </nav>
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold">Votre Panier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="offcanvas-body">
                            <div class="cart-item-container mb-4">
                                <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 position-relative">
                                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=100"
                                        class="cart-img rounded-3" alt="Produit">

                                    <div class="flex-grow-1">
                                        <h6 class="mb-0 fw-bold small">Perruque Bob Courte</h6>
                                        <p class="text-gold fw-bold mb-2 small">190 F CFA</p>

                                        <div class="qty-selector d-flex align-items-center gap-2">
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle">-</button>
                                            <span class="fw-bold">1</span>
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle">+</button>
                                        </div>
                                    </div>

                                    <button
                                        class="btn btn-sm text-danger position-absolute top-50 end-0 translate-middle-y me-2">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="offcanvas-footer p-4 border-top">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted fw-bold">Total</span>
                                <span class="text-gold fs-5 fw-bold">190 F CFA</span>
                            </div>
                            <a href="checkout.html" class="btn btn-dark-custom w-100 py-3 rounded-3 fw-bold">
                                Commander
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="offcanvas" aria-hidden="true">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title fw-bold" id="cartDrawerLabel">Votre Panier</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
            <div class="cart-item-container mb-4">
                <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 position-relative">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=100"
                        class="cart-img rounded-3" alt="Produit">

                    <div class="flex-grow-1">
                        <h6 class="mb-0 fw-bold small">Perruque Bob Courte</h6>
                        <p class="text-gold fw-bold mb-2 small">190 F CFA</p>

                        <div class="qty-selector d-flex align-items-center gap-2">
                            <button class="btn btn-sm btn-outline-secondary rounded-circle">-</button>
                            <span class="fw-bold">1</span>
                            <button class="btn btn-sm btn-outline-secondary rounded-circle">+</button>
                        </div>
                    </div>

                    <button class="btn btn-sm text-danger position-absolute top-50 end-0 translate-middle-y me-2">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="offcanvas-footer p-4 border-top">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted fw-bold">Total</span>
                <span class="text-gold fs-5 fw-bold">190 F CFA</span>
            </div>
            <a href="checkout.html" class="btn btn-dark-custom w-100 py-3 rounded-3 fw-bold">
                Commander
            </a>
        </div>
    </div>

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-75">

                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <span class="badge-exclusive mb-3"><i class="bi bi-crown"></i> Collection Exclusive</span>
                    <h1 class="display-3 fw-bold title-main">
                        L'élégance <br> <span class="text-gold">au naturel</span>
                    </h1>
                    <p class="lead text-muted my-4">
                        Sublimez votre beauté avec notre collection premium de perruques. Qualité exceptionnelle,
                        confort absolu.
                    </p>
                    <div class="d-flex gap-3 mb-5">
                        <a href="#" class="btn btn-dark-custom">Découvrir <i class="bi bi-arrow-right"></i></a>
                        <a href="#" class="btn btn-outline-custom">Nous contacter</a>
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

                        <div class="card-float review-card p-3 rounded-4 shadow-sm" data-aos="zoom-in"
                            data-aos-delay="400">
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
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=600"
                                alt="Nos bureaux" class="rounded-4 shadow">
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
                        <p class="text-muted mb-0">Expédition soignée partout au Sénégal</p>
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
                    Découvrez notre sélection de perruques les plus populaires, choisies par nos clientes
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="product-card shadow-sm">
                        <div class="image-container">
                            <span class="badge-overlay">Vedette</span>
                            <img src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?q=80&w=800"
                                alt="Perruque Lace Front">
                        </div>
                        <div class="product-info">
                            <h3>Perruque Lace Front Ondulée</h3>
                            <p class="product-description">Perruque lace front en cheveux naturels avec ondulations
                                douces. Densité 150%, longueur 18 pouces. Idéale pour ...</p>
                            <div class="product-meta">
                                <span class="meta-tag">long</span>
                                <span class="meta-sep">•</span>
                                <span class="small text-muted">Noir naturel</span>
                            </div>
                            <div class="product-footer">
                                <span class="price">250 F CFA</span>
                                <button class="btn-add-cart"><i class="bi bi-bag-plus me-2"></i>Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-card shadow-sm">
                        <div class="image-container">
                            <span class="badge-overlay">Vedette</span>
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=800"
                                alt="Perruque Bob">
                        </div>
                        <div class="product-info">
                            <h3>Perruque Bob Courte</h3>
                            <p class="product-description">Coupe bob moderne et sophistiquée. Cheveux naturels de
                                qualité premium, facile à entretenir.</p>
                            <div class="product-meta">
                                <span class="meta-tag">court</span>
                                <span class="meta-sep">•</span>
                                <span class="small text-muted">Châtain foncé</span>
                            </div>
                            <div class="product-footer">
                                <span class="price">190 F CFA</span>
                                <button class="btn-add-cart"><i class="bi bi-bag-plus me-2"></i>Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="product-card shadow-sm">
                        <div class="image-container">
                            <span class="badge-overlay">Vedette</span>
                            <img src="https://images.unsplash.com/photo-1595475038784-bbe4766e9afa?q=80&w=800"
                                alt="Perruque Full Lace">
                        </div>
                        <div class="product-info">
                            <h3>Perruque Full Lace Longue</h3>
                            <p class="product-description">Perruque full lace luxueuse, 24 pouces. Attachement possible
                                en queue de cheval. Cheveux vierges 100%.</p>
                            <div class="product-meta">
                                <span class="meta-tag">long</span>
                                <span class="meta-sep">•</span>
                                <span class="small text-muted">Noir ébène</span>
                            </div>
                            <div class="product-footer">
                                <span class="price">350 F CFA</span>
                                <button class="btn-add-cart"><i class="bi bi-bag-plus me-2"></i>Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="#" class="btn-view-all">Voir toute la collection <i
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
                    le choix de la perruque parfaite qui sublimera votre style.
                </p>

                <div class="cta-buttons">
                    <a href="#" class="btn-contact-main">
                        Contactez-nous <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="tel:+221771234567" class="btn-phone-outline">
                        +221 77 123 45 67
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="main-footer">
        <div class="container">
            <div class="row g-4">

                <div class="col-lg-4 col-md-6">
                    <a href="#" class="footer-brand">BioFibreBeauty</a>
                    <p class="footer-description">
                        Votre destination pour des perruques de qualité premium.
                        Cheveux naturels et synthétiques.
                    </p>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Contactez-nous</h5>
                    <ul class="footer-contact-list">
                        <li>
                            <i class="bi bi-telephone"></i>
                            <a href="tel:0123456789">01 23 45 67 89</a>
                        </li>
                        <li>
                            <i class="bi bi-envelope"></i>
                            <a href="mailto:contact@BioFibreBeauty.fr">contact@BioFibreBeauty.fr</a>
                        </li>
                        <li>
                            <i class="bi bi-whatsapp"></i>
                            <a href="#">WhatsApp</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h5 class="footer-title">Adresse</h5>
                    <ul class="footer-contact-list">
                        <li>
                            <i class="bi bi-geo-alt"></i>
                            <span>123 Avenue des Champs-Élysées<br>75008 Paris, France</span>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="footer-bottom">
                <p class="mb-0">© 2024 BioFibreBeauty. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
</body>

</html>
