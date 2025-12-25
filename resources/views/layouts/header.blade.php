<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4">
    <div class="container">
        <a class="navbar-brand logo" href="{{ url('/') }}">BioFibre<span>Beauty</span></a>
        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('catalogue') }}">Catalogue</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Contact</a></li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-3 nav-icons">
            <small><i class="bi bi-telephone"></i> +41 79 837 61 66</small>
            <a href="{{ url('commande') }}" class="btn position-relative">
                <i class="bi bi-person"></i>
            </a>
            <button class="btn position-relative" data-bs-toggle="modal"
                data-bs-target="#addProductModal">
                <i class="bi bi-bag"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-gold">1</span>
            </button>
        </div>
    </div>
</nav>

<div class="modal fade" id="addProductModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold">Votre Panier</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form>
                    <div class="offcanvas-body">
                        <div class="cart-item-container mb-4">
                            <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 position-relative">
                                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=100"
                                    class="cart-img rounded-3" alt="Produit">

                                <div class="flex-grow-1">
                                    <h6 class="mb-0 fw-bold small">Perruque Bob Courte</h6>
                                    <p class="text-gold fw-bold mb-2 small">190 F CFA</p>

                                    <div class="qty-selector d-flex align-items-center gap-2">
                                        <button class="btn btn-sm btn-outline-secondary rounded-circle">-</button>
                                        <span class="fw-bold">1</span>
                                        <button class="btn btn-sm btn-outline-secondary rounded-circle">+</button>
                                    </div>
                                </div>

                                <button
                                    class="btn btn-sm text-danger position-absolute top-50 end-0 translate-middle-y me-2">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="offcanvas-footer p-4 border-top">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted fw-bold">Total</span>
                            <span class="text-gold fs-5 fw-bold">190 F CFA</span>
                        </div>
                        <a href="checkout.html" class="btn btn-dark-custom w-100 py-3 rounded-3 fw-bold">
                            Commander
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
