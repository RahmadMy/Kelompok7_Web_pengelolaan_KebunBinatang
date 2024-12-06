<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: url('IMG/forest.jpg'); background-size: 1800px; background-position: center;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #28a745;">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="IMG/pawprint.png" alt="Logo" style="height: 20px; width: 20px;">
            </a>

            <!-- Toggler Button (For mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=tng_kami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pengurus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hewan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kandang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <?php
                $page=isset($_GET['p']) ? $_GET['p'] : 'home';
                if ($page=='home') include 'Home.php';
                if ($page=='tng_kami') include 'tentangKami.php';
        ?>
    <!-- Link Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>