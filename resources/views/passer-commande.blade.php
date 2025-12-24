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

    <section class="checkout-section">
        <div class="container">
            <h2 class="title-main mb-5">Finaliser la commande</h2>

            <div class="checkout-grid">
                <div class="checkout-left">

                    <div class="checkout-card" data-aos="fade-up">
                        <h3><i class="bi bi-person-lines-fill"></i> Vos informations</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label-sm">Téléphone *</label>
                                <input type="tel" class="input-checkout" value="+221 77 123 45 67">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label-sm">Nom complet *</label>
                                <input type="text" class="input-checkout" placeholder="Votre nom">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label-sm">Adresse de livraison</label>
                                <input type="text" class="input-checkout" placeholder="Votre adresse">
                            </div>
                        </div>
                    </div>

                    <div class="checkout-card" data-aos="fade-up">
                        <h3><i class="bi bi-truck"></i> Mode de livraison</h3>

                        <div class="option-item active">
                            <div class="radio-custom">
                                <i class="bi bi-record-circle-fill text-dark"></i>
                                <span><i class="bi bi-geo-alt me-2"></i> Par zone</span>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="radio-custom">
                                <i class="bi bi-circle"></i>
                                <span><i class="bi bi-speedometer2 me-2"></i> Par distance (500 F CFA/km)</span>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="radio-custom">
                                <i class="bi bi-circle"></i>
                                <span><i class="bi bi-shop me-2"></i> Retrait en boutique (Gratuit)</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <p class="form-label-sm">Sélectionnez votre zone</p>
                            <div class="option-item active bg-light border-0">
                                <div class="radio-custom"><i class="bi bi-record-circle-fill"></i> Centre-ville</div>
                                <span class="fw-bold">2 000 F CFA</span>
                            </div>
                            <div class="option-item bg-light border-0">
                                <div class="radio-custom"><i class="bi bi-circle"></i> Banlieue proche</div>
                                <span class="fw-bold">3 500 F CFA</span>
                            </div>
                        </div>
                    </div>

                    <div class="checkout-card" data-aos="fade-up">
                        <h3><i class="bi bi-credit-card"></i> Mode de paiement</h3>

                        <div class="payment-tabs">
                            <div class="payment-tab active"><i class="bi bi-phone me-1"></i> Mobile Money</div>
                            <div class="payment-tab"><i class="bi bi-credit-card-2-front me-1"></i> Carte bancaire</div>
                        </div>

                        <div class="payment-grid">
                            <div class="payment-method-card active">
                                <div class="dot-icon" style="background: #ff6600;"></div>
                                <span class="small fw-bold">Orange Money</span>
                            </div>
                            <div class="payment-method-card">
                                <div class="dot-icon" style="background: #ffcc00;"></div>
                                <span class="small fw-bold">MTN Mobile Money</span>
                            </div>
                            <div class="payment-method-card">
                                <div class="dot-icon" style="background: #2196f3;"></div>
                                <span class="small fw-bold">Wave</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checkout-right">
                    <div class="checkout-card summary-card" data-aos="fade-left">
                        <h3>Récapitulatif</h3>

                        <div class="d-flex gap-3 mb-4 align-items-center">
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=100"
                                class="rounded" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <p class="mb-0 fw-bold" style="font-size: 0.9rem;">Perruque Bob Courte</p>
                                <small class="text-muted">Qté: 2</small>
                            </div>
                            <div class="ms-auto fw-bold" style="font-size: 0.9rem;">380 F CFA</div>
                        </div>

                        <div class="summary-row">
                            <span class="text-muted">Sous-total</span>
                            <span class="fw-bold">380 F CFA</span>
                        </div>
                        <div class="summary-row">
                            <span class="text-muted">Livraison</span>
                            <span class="fw-bold">2 000 F CFA</span>
                        </div>

                        <div class="summary-total summary-row">
                            <span>Total</span>
                            <span style="color: var(--gold);">2 380 F CFA</span>
                        </div>

                        <button class="btn-pay">Payer 2 380 F CFA</button>
                        <p class="text-center small text-muted mt-3">Vous recevrez les instructions de paiement par SMS
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
