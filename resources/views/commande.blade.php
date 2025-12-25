@extends('layouts.master')

@section('content')
    <section class="account-section">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <h2 class="title-main m-0">Mon Compte</h2>
                <a href="{{ url('logout') }}" class="btn-logout">
                    <i class="bi bi-box-arrow-right"></i> Déconnexion
                </a>
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
@endsection
