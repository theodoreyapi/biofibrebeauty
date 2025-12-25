@extends('layouts.master')

@section('content')

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

@endsection
