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

    <main class="section-soft py-5">
        <div class="container">

            <div class="d-flex align-items-center mb-4">
                <a href="#" class="text-dark me-3">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <h2 class="h3 mb-0">Gestion du stock</h2>
            </div>

            <div class="row g-4">

                <!-- CARD -->
                <div class="col-lg-4 col-md-6">
                    <div class="card-soft p-3">
                        <div class="d-flex gap-3">
                            <img src="path/to/perruque.jpg" class="img-square" alt="">
                            <div class="flex-grow-1">
                                <h6 class="fw-semibold mb-1">Perruque Full Lace Longue</h6>
                                <p class="text-gold fw-bold small mb-3">350 F CFA</p>

                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-box text-muted small"></i>
                                    <input type="number" class="input-unit" value="10">
                                    <span class="text-muted small">unités</span>
                                </div>
                            </div>
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
