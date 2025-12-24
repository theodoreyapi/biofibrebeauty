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

    <main class="dashboard-section py-5">
        <div class="container">
            <h2 class="title-main mb-4">Tableau de bord</h2>

            <div class="row g-3 mb-4">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon-circle bg-light-gold">
                            <i class="bi bi-graph-up-arrow text-gold"></i>
                        </div>
                        <div>
                            <small class="text-muted d-block">Revenus</small>
                            <span class="stat-value">2 190 F CFA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon-circle bg-light-orange">
                            <i class="bi bi-bag text-warning"></i>
                        </div>
                        <div>
                            <small class="text-muted d-block">En attente</small>
                            <span class="stat-value">1</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon-circle bg-light-blue">
                            <i class="bi bi-box-seam text-primary"></i>
                        </div>
                        <div>
                            <small class="text-muted d-block">Produits</small>
                            <span class="stat-value">6</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon-circle bg-light-red">
                            <i class="bi bi-people text-danger"></i>
                        </div>
                        <div>
                            <small class="text-muted d-block">Stock faible</small>
                            <span class="stat-value">0</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3 mb-5">
                <div class="col-md-4">
                    <a href="#" class="action-card">
                        <i class="bi bi-bag-check text-gold mb-3"></i>
                        <h4>Gérer les commandes</h4>
                        <p>1 commande(s)</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="action-card">
                        <i class="bi bi-box-seam text-gold mb-3"></i>
                        <h4>Gérer les produits</h4>
                        <p>6 produit(s)</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="action-card">
                        <i class="bi bi-graph-up text-gold mb-3"></i>
                        <h4>Gérer le stock</h4>
                        <p>0 alerte(s)</p>
                    </a>
                </div>
            </div>

            <div class="recent-orders-card">
                <h3 class="title-main h4 mb-4">Commandes récentes</h3>

                <div class="order-list-item">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <strong class="order-ref">ORD-1766447001747</strong>
                            <p class="mb-0 text-muted small">yapi theodore</p>
                        </div>
                        <div class="text-end">
                            <span class="text-gold fw-bold">2 190 F CFA</span>
                            <p class="mb-0 text-muted small">pending</p>
                        </div>
                    </div>
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
