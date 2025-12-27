@extends('layouts.master')

@section('content')
    <section class="login-section">
        <div class="container">
            <div class="login-card" data-aos="zoom-in">
                @include('layouts.status')

                <h2>Espace Client</h2>

                <form action="{{ url('custom-login') }}" method="POST" role="form">
                    @csrf
                    <div class="form-group-custom">
                        <label for="phone">Numéro de téléphone</label>
                        <div class="input-with-icon">
                            <div class="input-icon-wrapper">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <input type="tel" id="phone" class="form-control-custom" placeholder="+2250585831647"
                                name="login" required>
                        </div>
                    </div>

                    <button type="submit" class="btn-login">
                        Se connecter
                    </button>
                </form>

                <p class="login-footer-text">
                    Entrez votre numéro pour accéder à vos commandes
                </p>
            </div>
        </div>
    </section>
@endsection
