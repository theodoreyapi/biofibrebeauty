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

    <header class="contact-header">
        <div class="container">
            <h1 class="title-main display-4 mb-3">Contactez-nous</h1>
            <p class="text-muted mb-0">Notre équipe est à votre disposition pour répondre à toutes vos questions.</p>
        </div>
    </header>

    <section class="contact-container">
        <div class="container">
            <div class="row g-4 justify-content-center">

                <div class="col-lg-5" data-aos="fade-right">
                    <div class="info-card">
                        <div class="contact-item">
                            <h5><i class="bi bi-telephone"></i> Téléphone</h5>
                            <small>Appelez-nous pour un conseil personnalisé</small>
                            <a href="tel:0123456789" class="fw-bold text-dark">01 23 45 67 89</a>
                        </div>

                        <div class="contact-item">
                            <h5><i class="bi bi-envelope"></i> Email</h5>
                            <small>Écrivez-nous, nous répondons sous 24h</small>
                            <a href="mailto:contact@BioFibreBeauty.fr">contact@BioFibreBeauty.fr</a>
                        </div>

                        <div class="contact-item">
                            <h5><i class="bi bi-whatsapp"></i> WhatsApp</h5>
                            <small>Messagerie instantanée pour une réponse rapide</small>
                            <button class="btn-whatsapp-contact">Démarrer une conversation</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    <div class="info-card">
                        <div class="contact-item">
                            <h5><i class="bi bi-geo-alt"></i> Adresse</h5>
                            <p>123 Avenue des Champs-Élysées<br>75008 Paris, France</p>
                        </div>

                        <div class="contact-item">
                            <h5><i class="bi bi-clock"></i> Horaires</h5>
                            <table class="schedule-table">
                                <tr>
                                    <td>Lundi - Vendredi</td>
                                    <td>9h00 - 19h00</td>
                                </tr>
                                <tr>
                                    <td>Samedi</td>
                                    <td>10h00 - 18h00</td>
                                </tr>
                                <tr>
                                    <td>Dimanche</td>
                                    <td class="text-danger">Fermé</td>
                                </tr>
                            </table>
                        </div>

                        <p class="visit-note">
                            Visite sur rendez-vous uniquement. Contactez-nous pour planifier votre venue.
                        </p>
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
