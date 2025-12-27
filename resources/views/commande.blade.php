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
                        <p>{{ Auth::guard('client')->user()->telephone }}</p>
                    </div>

                    <div class="profile-info-item">
                        <label>Nom</label>
                        <p class="text-muted italic">{{ Auth::guard('client')->user()->nom_complet ?? 'Non renseigné' }}</p>
                    </div>

                    <div class="profile-info-item">
                        <label>Adresse</label>
                        <p class="text-muted italic">{{ Auth::guard('client')->user()->adresse ?? 'Non renseigné' }}</p>
                    </div>

                    <button class="btn-outline-modify">Modifier</button>
                </aside>

                <main class="account-card" data-aos="fade-left">
                    <h3><i class="bi bi-box-seam"></i> Mes Commandes</h3>

                    @forelse($commandes as $commande)
                        <div class="order-item">
                            <div class="order-header">
                                <div>
                                    <span class="order-id">
                                        ORD-{{ $commande->id_commande }}
                                    </span>
                                    <span class="order-date">
                                        {{ $commande->created_at->format('d/m/Y') }}
                                    </span>
                                    <span class="order-id">
                                        {{ $commande->nom_produit }}
                                    </span>
                                </div>
                                @if ($commande->statut_commande == 'pending')
                                    <span class="status-badge">
                                        En attente
                                    </span>
                                @elseif ($commande->statut_commande == 'completed')
                                    <span class="status-success text-success">
                                        Livrer
                                    </span>
                                @elseif ($commande->statut_commande == 'paid')
                                    <span class="badge bg-info text-white">
                                        Payer
                                    </span>
                                @else
                                    <span class="status-red text-danger">
                                        Annuler
                                    </span>
                                @endif
                            </div>

                            <div class="order-content">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ $commande->image_produit }}" class="order-img" alt="Produit">

                                    <small class="text-muted">
                                        {{ $commande->quantite }} article(s)
                                    </small>
                                </div>

                                <span class="order-total">
                                    {{ number_format($commande->montant_produit, 0, ',', ' ') }} F CFA
                                </span>
                            </div>
                        </div>
                    @empty
                        <p class="text-muted">Aucune commande enregistrée.</p>
                    @endforelse
                </main>

            </div>
        </div>
    </section>
@endsection
