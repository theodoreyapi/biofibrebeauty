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

    <main class="order-management-section py-5">
        <div class="container">
            <div class="d-flex align-items-center mb-4">
                <a href="#" class="text-dark me-3"><i class="bi bi-arrow-left"></i></a>
                <h2 class="title-main mb-0 h3">Gestion des commandes</h2>
            </div>

            <div class="order-detail-card p-4">
                <div class="d-flex justify-content-between align-items-start mb-4">
                    <h5 class="order-id-title">ORD-1766447001747</h5>

                    <div class="dropdown">
                        <button class="btn btn-status-dropdown dropdown-toggle" type="button"
                            data-bs-toggle="dropdown">
                            En attente
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">
                            <li><a class="dropdown-item active" href="#"><i class="bi bi-check2 me-2"></i>En
                                    attente</a></li>
                            <li><a class="dropdown-item" href="#">Payé</a></li>
                            <li><a class="dropdown-item" href="#">Expédié</a></li>
                            <li><a class="dropdown-item" href="#">Livré</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-6">
                        <p class="text-muted small mb-1">Client</p>
                        <div class="customer-info">
                            <strong>yapi theodore</strong><br>
                            <span class="text-secondary small">0585831647</span><br>
                            <span class="text-secondary small">Pas d'adresse</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted small mb-1">Livraison</p>
                        <div class="delivery-info">
                            <strong>Centre-ville</strong><br>
                            <span class="text-secondary small">Frais: 2 000 F CFA</span>
                        </div>
                    </div>
                </div>

                <hr class="divider">

                <div class="articles-section mt-4">
                    <p class="text-muted small mb-3">Articles</p>
                    <div class="order-item-badge d-inline-flex align-items-center p-2">
                        <img src="path/to/your/image.jpg" alt="Perruque" class="item-thumb-sm me-2">
                        <div class="item-details">
                            <span class="d-block small fw-bold">Perruque Bob Courte</span>
                            <span class="text-muted x-small">x1</span>
                        </div>
                    </div>
                </div>

                <hr class="divider mt-5">

                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span class="text-muted small">22/12/2025 23:43:21</span>
                    <span class="total-price-lg">2 190 F CFA</span>
                </div>
            </div>
        </div>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
</body>

</html>
