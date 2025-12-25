@extends('layouts.master')

@section('content')
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
                            <a href="tel:+41798376166" class="fw-bold text-dark">+41 79 837 61 66</a>
                        </div>

                        <div class="contact-item">
                            <h5><i class="bi bi-envelope"></i> Email</h5>
                            <small>Écrivez-nous, nous répondons sous 24h</small>
                            <a href="mailto:contact@biofibrebeauty.com">contact@BioFibreBeauty.com</a>
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
                            <p>Mon adresse Schlosshofstrasse<br>42 8400 Winterthour</p>
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
@endsection
