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

    <section class="account-section">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <h2 class="title-main m-0">Mon Compte</h2>
                <button class="btn-logout">
                    <i class="bi bi-box-arrow-right"></i> Déconnexion
                </button>
            </div>

            <div class="account-grid">
                <aside class="account-card" data-aos="fade-right">
                    <h3><i class="bi bi-person"></i> Mon Profil</h3>

                    <div class="profile-info-item">
                        <label>Téléphone</label>
                        <p>0585831647</p>
                    </div>

                    <div class="profile-info-item">
                        <label>Nom</label>
                        <p class="text-muted italic">Non renseigné</p>
                    </div>

                    <div class="profile-info-item">
                        <label>Adresse</label>
                        <p class="text-muted italic">Non renseigné</p>
                    </div>

                    <button class="btn-outline-modify">Modifier</button>
                </aside>

                <main class="account-card" data-aos="fade-left">
                    <h3><i class="bi bi-box-seam"></i> Mes Commandes</h3>

                    <div class="order-item">
                        <div class="order-header">
                            <div>
                                <span class="order-id">ORD-1766447001747</span>
                                <span class="order-date">22/12/2025</span>
                            </div>
                            <span class="status-badge">En attente</span>
                        </div>

                        <div class="order-content">
                            <div class="d-flex align-items-center gap-3">
                                <img src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?q=80&w=100"
                                    class="order-img" alt="Produit">
                                <small class="text-muted">1 article(s)</small>
                            </div>
                            <span class="order-total">2 190 F CFA</span>
                        </div>
                    </div>

                </main>
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
