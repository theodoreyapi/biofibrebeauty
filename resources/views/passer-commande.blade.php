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
                                <input type="tel" class="input-checkout" name="telephone" required
                                    placeholder="+2250585831647" value="{{ Auth::guard('client')->user()->telephone ?? '' }}">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label-sm">Nom complet *</label>
                                <input type="text" class="input-checkout" name="nom" required
                                    placeholder="Votre nom complet" value="{{ Auth::guard('client')->user()->nom_complet ?? '' }}">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label-sm">Adresse de livraison</label>
                                <input type="text" class="input-checkout" name="adresse" placeholder="Votre adresse" value="{{ Auth::guard('client')->user()->adresse ?? '' }}">
                            </div>
                        </div>
                    </div>

                    {{-- <div class="checkout-card" data-aos="fade-up">
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
                            <div class="option-item livraison-option active" data-frais="2000">
                                <div class="radio-custom">
                                    <i class="bi bi-record-circle-fill"></i> Centre-ville
                                </div>
                                <span class="fw-bold">2 000 F CFA</span>
                            </div>
                            <div class="option-item livraison-option" data-frais="3500">
                                <div class="radio-custom">
                                    <i class="bi bi-circle"></i> Banlieue proche
                                </div>
                                <span class="fw-bold">3 500 F CFA</span>
                            </div>
                        </div>
                    </div> --}}

                    <div class="checkout-card" data-aos="fade-up">
                        <h3><i class="bi bi-credit-card"></i> Mode de paiement</h3>

                        <div class="payment-tabs">
                            <div class="payment-tab active" data-type="mobile">📱 Mobile Money</div>
                            <div class="payment-tab" data-type="card">💳 Carte bancaire</div>
                        </div>

                        <div class="payment-grid" id="mobile-payments">
                            <div class="payment-method-card active" data-method="orange">
                                <span>Orange Money</span>
                            </div>
                            <div class="payment-method-card" data-method="mtn">
                                <span>MTN Money</span>
                            </div>
                            <div class="payment-method-card" data-method="wave">
                                <span>Wave</span>
                            </div>
                        </div>
                        <div class="payment-grid d-none" id="card-payment">
                            <div class="payment-method-card active">
                                <span>Visa / Mastercard</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checkout-right">
                    <div class="checkout-card summary-card" data-aos="fade-left">
                        <h3>Récapitulatif</h3>

                        @foreach ($panier as $item)
                            <div class="d-flex gap-3 mb-3 align-items-center">
                                <img src="{{ $item['image'] }}" width="60">
                                <div>
                                    <strong>{{ $item['nom'] }}</strong>
                                </div>
                                <div class="ms-auto">
                                    {{ number_format($item['prix'], 0, ',', ' ') }} F
                                </div>
                            </div>
                            <div class="summary-row">
                                <span class="text-muted">Qté</span>
                                <span class="fw-bold">{{ $item['quantite'] }}</span>
                            </div>
                            <div class="summary-row">
                                <span class="text-muted">Sub-total</span>
                                <span class="fw-bold">{{ number_format($item['prix'] * $item['quantite'], 0, ',', ' ') }}
                                    F</span>
                            </div>
                        @endforeach

                        <div class="summary-total summary-row">
                            <span>Total</span>
                            <span style="color: var(--gold);">{{ number_format($subtotal, 0, ',', ' ') }} F CFA</span>
                        </div>

                        <button class="btn-pay" onclick="submitOrder()">Payer</button>
                        {{-- <p class="text-center small text-muted mt-3">Vous recevrez les instructions de paiement par SMS
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let livraison = 2000;
        let subtotal = {{ $subtotal }};
        let paiement = 'orange';

        function updateTotal() {
            const total = subtotal + livraison;
            document.getElementById('livraisonPrice').innerText = livraison + ' F CFA';
            document.getElementById('totalPrice').innerText = total + ' F CFA';
            document.querySelector('.btn-pay').innerText = 'Payer ' + total + ' F CFA';
        }

        // LIVRAISON
        document.querySelectorAll('.livraison-option').forEach(el => {
            el.addEventListener('click', () => {
                document.querySelectorAll('.livraison-option').forEach(o => o.classList.remove('active'));
                el.classList.add('active');
                livraison = parseInt(el.dataset.frais);
                updateTotal();
            });
        });

        // ONGLET PAIEMENT
        document.querySelectorAll('.payment-tab').forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('.payment-tab').forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                document.getElementById('mobile-payments').classList.toggle('d-none', tab.dataset.type !==
                    'mobile');
                document.getElementById('card-payment').classList.toggle('d-none', tab.dataset.type !==
                    'card');
            });
        });

        // MÉTHODE
        document.querySelectorAll('.payment-method-card').forEach(card => {
            card.addEventListener('click', () => {
                document.querySelectorAll('.payment-method-card').forEach(c => c.classList.remove(
                    'active'));
                card.classList.add('active');
                paiement = card.dataset.method;
            });
        });

        updateTotal();
    </script>

    <script>
        function submitOrder() {

            const telephone = document.querySelector('[name=telephone]').value;
            const nom = document.querySelector('[name=nom]').value;
            const adresse = document.querySelector('[name=adresse]')?.value ?? null;

            fetch("{{ route('commande.store') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        telephone: telephone,
                        nom: nom,
                        adresse: adresse,
                        mode_paiement: paiement
                    })
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        alert("✅ Commande enregistrée avec succès !");
                        window.location.href = "/";
                    } else {
                        alert("❌ " + (data.error ?? "Erreur lors de la commande"));
                    }
                })
                .catch(err => {
                    console.error(err);
                    alert("Veuillez saisir vos informations.");
                });
        }
    </script>
@endsection
