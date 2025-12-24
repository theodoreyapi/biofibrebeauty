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
            <a class="navbar-brand logo" href="#">Luxe<span>Perruques</span></a>
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
                <i class="bi bi-bag"></i>
            </div>
        </div>
    </nav>

    <section class="product-details-section">
        <div class="container">
            <div class="breadcrumb-custom">
                <a href="#"><i class="bi bi-arrow-left me-2"></i> Retour au catalogue</a>
            </div>

            <div class="row g-5">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1200"
                        class="main-product-img" alt="Perruque Bob Courte">
                    <div class="thumbnail-grid">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=200"
                            class="thumb-img active">
                        <img src="https://images.unsplash.com/photo-1580618672591-eb180b1a973f?q=80&w=200"
                            class="thumb-img">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="product-badge-group">
                        <span class="badge-detail vedette">Vedette</span>
                        <span class="badge-detail naturel">naturelle</span>
                    </div>

                    <h1 class="product-title-detail">Perruque Bob Courte</h1>
                    <div class="product-price-detail">190 F CFA</div>

                    <button class="btn-add-large mb-4">
                        <i class="bi bi-bag-plus"></i> Ajouter au panier
                    </button>

                    <div class="product-description-box">
                        <h5 class="fw-bold mb-2">Description</h5>
                        <p class="text-muted">Coupe bob moderne et sophistiquée. Cheveux naturels de qualité premium,
                            facile à entretenir.</p>
                    </div>

                    <div class="product-specs">
                        <div class="spec-item">
                            <label>Longueur</label>
                            <span>Court</span>
                        </div>
                        <div class="spec-item">
                            <label>Couleur</label>
                            <span>Châtain foncé</span>
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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
</body>

</html>
