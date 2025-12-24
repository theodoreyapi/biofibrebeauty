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

    <header class="catalog-header">
        <div class="container">
            <h1 class="title-main display-4 mb-3">Notre Collection</h1>
            <p class="text-muted mb-0" style="max-width: 500px;">
                Découvrez notre sélection de perruques de qualité premium, en cheveux naturels et synthétiques.
            </p>
        </div>
    </header>

    <section class="catalog-content">
        <div class="container">

            <div class="filters-bar">
                <div class="filter-group">
                    <span class="filter-label"><i class="bi bi-sliders me-2"></i> Filtres</span>
                </div>

                <div class="filter-group">
                    <select class="custom-select">
                        <option>Toutes catégories</option>
                        <option>Lace Front</option>
                        <option>Full Lace</option>
                        <option>Synthétique</option>
                    </select>
                    <select class="custom-select select-gold">
                        <option>Toutes longueurs</option>
                        <option>Court</option>
                        <option>Moyen</option>
                        <option>Long</option>
                    </select>
                </div>
            </div>

            <p class="results-count">6 produits trouvés</p>

            <div class="row g-4 catalog-grid">

                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="product-card shadow-sm">
                        <div class="image-container">
                            <span class="badge-catalog-vedette">Vedette</span>
                            <img src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?q=80&w=800" alt="Lace Front">
                        </div>
                        <div class="product-info">
                            <h3>Perruque Lace Front Ondulée</h3>
                            <p class="product-description">Perruque lace front en cheveux naturels avec ondulations douces. Densité 150%, longueur 18 pouces. Idéale pour u...</p>
                            <div class="product-meta">
                                <span class="meta-tag">long</span>
                                <span class="meta-sep">•</span>
                                <span class="small text-muted">Noir naturel</span>
                            </div>
                            <div class="product-footer">
                                <span class="price">250 F CFA</span>
                                <button class="btn-add-cart">Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="product-card shadow-sm">
                        <div class="image-container">
                            <span class="badge-catalog-vedette">Vedette</span>
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=800" alt="Bob">
                        </div>
                        <div class="product-info">
                            <h3>Perruque Bob Courte</h3>
                            <p class="product-description">Coupe bob moderne et sophistiquée. Cheveux naturels de qualité premium, facile à entretenir.</p>
                            <div class="product-meta">
                                <span class="meta-tag">court</span>
                                <span class="meta-sep">•</span>
                                <span class="small text-muted">Châtain foncé</span>
                            </div>
                            <div class="product-footer">
                                <span class="price">190 F CFA</span>
                                <button class="btn-add-cart">Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-card shadow-sm">
                        <div class="image-container">
                            <span class="badge-catalog-vedette">Vedette</span>
                            <img src="https://images.unsplash.com/photo-1595475038784-bbe4766e9afa?q=80&w=800" alt="Full Lace">
                        </div>
                        <div class="product-info">
                            <h3>Perruque Full Lace Longue</h3>
                            <p class="product-description">Perruque full lace luxueuse, 24 pouces. Attachement possible en queue de cheval. Cheveux vierges 100%.</p>
                            <div class="product-meta">
                                <span class="meta-tag">long</span>
                                <span class="meta-sep">•</span>
                                <span class="small text-muted">Noir ébène</span>
                            </div>
                            <div class="product-footer">
                                <span class="price">350 F CFA</span>
                                <button class="btn-add-cart">Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="product-card shadow-sm">
                        <div class="image-container">
                            <img src="https://images.unsplash.com/photo-1559599101-f09722fb4948?q=80&w=800" alt="Synthétique">
                        </div>
                        <div class="product-info">
                            <h3>Perruque Synthétique Bouclée</h3>
                            <p class="product-description">Boucles volumineuses et définies. Fibre synthétique haute qualité résistante à la chaleur.</p>
                            <div class="product-meta">
                                <span class="meta-tag">moyen</span>
                                <span class="meta-sep">•</span>
                                <span class="small text-muted">Auburn</span>
                            </div>
                            <div class="product-footer">
                                <span class="price">100 F CFA</span>
                                <button class="btn-add-cart">Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="product-card shadow-sm">
                        <div class="image-container">
                            <img src="https://images.unsplash.com/photo-1580618672591-eb180b1a973f?q=80&w=800" alt="Lisse">
                        </div>
                        <div class="product-info">
                            <h3>Perruque Lisse Moyenne</h3>
                            <p class="product-description">Perruque lisse classique, parfaite pour un usage quotidien. Cheveux naturels de qualité.</p>
                            <div class="product-meta">
                                <span class="meta-tag">moyen</span>
                                <span class="meta-sep">•</span>
                                <span class="small text-muted">Noir naturel</span>
                            </div>
                            <div class="product-footer">
                                <span class="price">200 F CFA</span>
                                <button class="btn-add-cart">Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-card shadow-sm">
                        <div class="image-container">
                            <img src="https://images.unsplash.com/photo-1576134833214-72993856d47d?q=80&w=800" alt="Ombré">
                        </div>
                        <div class="product-info">
                            <h3>Perruque Ombré Blonde</h3>
                            <p class="product-description">Effet ombré du noir au blond. Style tendance et moderne. Cheveux naturels.</p>
                            <div class="product-meta">
                                <span class="meta-tag">long</span>
                                <span class="meta-sep">•</span>
                                <span class="small text-muted">Ombré noir-blond</span>
                            </div>
                            <div class="product-footer">
                                <span class="price">280 F CFA</span>
                                <button class="btn-add-cart">Ajouter</button>
                            </div>
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
