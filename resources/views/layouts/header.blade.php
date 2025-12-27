<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4">
    <div class="container">
        <a class="navbar-brand logo" href="{{ url('/') }}">Diamond<span>Curly</span></a>
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
            <button class="btn position-relative" data-bs-toggle="modal" data-bs-target="#addProductModal">
                <i class="bi bi-bag"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-gold">
                    {{ count(session('panier', [])) }}
                </span>
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

                    </div>

                    <div class="offcanvas-footer p-4 border-top">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted fw-bold">Total</span>
                            <span class="text-gold fs-5 fw-bold">190 F CFA</span>
                        </div>
                        <a href="{{ route('checkout') }}" class="btn btn-dark-custom w-100 py-3 rounded-3 fw-bold">
                            Commander
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function addToCart(id, nom, prix, image) {
        fetch("{{ route('panier.ajouter') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    id,
                    nom,
                    prix,
                    image
                })
            })
            .then(res => res.json())
            .then(data => {
                document.querySelector('.badge').innerText = data.count;
                loadCart();
                new bootstrap.Modal(document.getElementById('addProductModal')).show();
            });
    }

    function loadCart() {
        fetch("{{ route('panier.index') }}")
            .then(res => res.json())
            .then(cart => {
                let html = '';
                let total = 0;

                Object.values(cart).forEach(item => {
                    total += item.prix * item.quantite;

                    html += `
<div class="cart-item-container mb-3">
    <div class="d-flex gap-3 p-3 bg-light rounded-4">
        <img src="${item.image}" class="cart-img rounded-3">

        <div class="flex-grow-1">
            <h6 class="fw-bold small">${item.nom}</h6>
            <p class="text-gold fw-bold">${item.prix} F CFA</p>

            <div class="d-flex gap-2">
                <button type="button"
                    class="btn btn-sm btn-outline-secondary rounded-circle"
                    onclick="updateQty('${item.id}', ${item.quantite - 1})">−</button>

                <span class="fw-bold">${item.quantite}</span>

                <button type="button"
                    class="btn btn-sm btn-outline-secondary rounded-circle"
                    onclick="updateQty('${item.id}', ${item.quantite + 1})">+</button>
            </div>
        </div>

        <button type="button"
            onclick="removeItem('${item.id}')"
            class="btn btn-sm text-danger">
            <i class="bi bi-trash"></i>
        </button>
    </div>
</div>`;
                });

                document.querySelector('.offcanvas-body').innerHTML = html;
                document.querySelector('.text-gold.fs-5').innerText = total + ' F CFA';
            });
    }

    function updateQty(id, qty) {
        if (qty < 1) return;

        fetch("{{ route('panier.update') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                id,
                quantite: qty
            })
        }).then(loadCart);
    }

    function removeItem(id) {
        fetch(`/panier/supprimer/${id}`, {
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            }
        }).then(loadCart);
    }

    document.addEventListener('DOMContentLoaded', loadCart);
</script>
