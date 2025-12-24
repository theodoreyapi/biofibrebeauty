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

    <section class="admin-login-wrapper">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="admin-card" data-aos="fade-up">
                <div class="admin-header">
                    <i class="bi bi-lock"></i>
                    <h1>Administration</h1>
                </div>

                <form action="#">
                    <div class="form-group-pin">
                        <input type="password" class="pin-input" placeholder="Code PIN" maxlength="4"
                            inputmode="numeric">
                    </div>

                    <button type="submit" class="btn-admin-submit">
                        Accéder
                    </button>
                </form>

                <div class="admin-footer-hint">
                    Code par défaut: 1234
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
</body>

</html>
