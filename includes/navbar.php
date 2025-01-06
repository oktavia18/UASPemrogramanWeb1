<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Gradient Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-gradient-brown {
            background: linear-gradient(90deg, #8B4513, #F5DEB3); /* Gradasi dari coklat ke cream */
        }

        .navbar-light .navbar-brand,
        .navbar-light .nav-link {
            color: #fff; /* Warna teks putih agar kontras dengan gradasi */
        }

        .navbar-light .nav-link:hover {
            color: #FFD700; /* Warna emas saat hover */
        }

        .btn-outline-soft {
            color: #fff;
            border-color: #fff;
        }

        .btn-outline-soft:hover {
            background-color: #F5DEB3;
            color: #8B4513;
            border-color: #F5DEB3;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-gradient-brown" data-bs-theme="light">
        <div class="container">
            <a class="navbar-brand" href="?page=home">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=makanan">Makanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=minuman">Minuman</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=about">About Us</a></li>
                            <li><a class="dropdown-item" href="?page=contact">Contact</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li><a class="btn btn-outline-soft" href="?page=login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>
</html>
