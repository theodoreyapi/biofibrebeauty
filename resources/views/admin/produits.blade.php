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
        </div>
    </nav>

    <main class="product-management-section py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="d-flex align-items-center">
                    <a href="#" class="text-dark me-3"><i class="bi bi-arrow-left"></i></a>
                    <h2 class="title-main mb-0 h3">Gestion des produits</h2>
                </div>
                <button class="btn btn-dark-custom btn-sm" data-bs-toggle="modal" data-bs-target="#addProductModal">
                    <i class="bi bi-plus-lg me-2"></i>Ajouter
                </button>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="admin-product-card">
                        <div class="image-wrapper">
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1200"
                                alt="Produit" class="admin-product-img">
                        </div>
                        <div class="p-3">
                            <h5 class="fw-bold mb-1">Perruque Bob Courte</h5>
                            <p class="text-gold fw-bold mb-1">190 F CFA</p>
                            <p class="text-muted small mb-3">naturelle • court</p>
                            <div class="d-flex gap-2">
                                <button class="btn btn-outline-secondary w-100 btn-sm">
                                    <i class="bi bi-pencil-square me-2"></i>Modifier
                                </button>
                                <button class="btn btn-danger-soft btn-sm px-3">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="addProductModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold">Ajouter un produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="mb-3">
                            <label class="form-label-sm">Nom</label>
                            <input type="text" class="input-checkout border-gold-focus" placeholder="Nom du produit">
                        </div>
                        <div class="mb-3">
                            <label class="form-label-sm">Description</label>
                            <textarea class="input-checkout" rows="3"></textarea>
                        </div>
                        <div class="row g-3">
                            <div class="col-6">
                                <label class="form-label-sm">Prix (FCFA)</label>
                                <input type="number" class="input-checkout" value="0">
                            </div>
                            <div class="col-6">
                                <label class="form-label-sm">Couleur</label>
                                <input type="text" class="input-checkout">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-6">
                                <label class="form-label-sm">Catégorie</label>
                                <select class="input-checkout">
                                    <option>Cheveux Naturels</option>
                                    <option>Synthétiques</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="form-label-sm">Longueur</label>
                                <select class="input-checkout">
                                    <option>Moyen</option>
                                    <option>Court</option>
                                    <option>Long</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label-sm">URL de l'image</label>
                            <input type="text" class="input-checkout" placeholder="https://...">
                        </div>
                        <button type="submit" class="btn btn-dark-custom w-100 py-3 mt-2">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>

</body>

</html>
