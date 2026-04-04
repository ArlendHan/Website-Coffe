<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Arlend Barista</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/bootstrap-icons.css" rel="stylesheet">

    <link href="../css/vegas.min.css" rel="stylesheet">

    <link href="../css/tooplate-barista.css" rel="stylesheet">
</head>

<body>

    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="">
                    <img src="../images/coffee-beans.png" class="navbar-brand-image img-fluid" alt="Barista Cafe Template">
                    Arlend Barista
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="?url=dashboard">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="?url=barista">Barista</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="?url=menu">Menu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="?url=review">Reviews</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="?url=contact">Contact</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <section class="container" style="margin: 10rem 3rem;">
            <div class="row rounded-3 shadow-lg bg-white">
                <div class="col-12 p-3">
                    <?php
                    include 'koneksi.php';

                    error_reporting(0);
                    $url = $_GET['url'];
                    $pages = [
                        "dashboard" => "dashboard.php",
                        "contact" => "contact.php",
                        "barista" => "barista.php",
                        "tambah_barista" => "tambah_barista.php",
                        "hapus_barista" => "hapus_barista.php",
                        "edit_barista" => "edit_barista.php",
                        "menu" => "menu.php",
                        "tambah_menu" => "tambah_menu.php",
                        "hapus_menu" => "hapus_menu.php",
                        "edit_menu" => "edit_menu.php",
                        "review" => "review.php",
                        "tambah_testi" => "tambah_testi.php",
                        "hapus_contact" => "hapus_contact.php",
                        "hapus_review" => "hapus_review.php",
                        "edit_review" => "edit_review.php"
                    ];

                    if ($url !== "") {
                        if (array_key_exists($url, $pages)) {
                            include $pages[$url];
                        } else {
                            include 'dashboard.php';
                        }
                    } else {
                        include 'dashboard.php';
                    }
                    ?>
                </div>
            </div>
        </section>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 me-auto">
                        <em class="text-white d-block mb-4">Where to find us?</em>

                        <strong class="text-white">
                            <i class="bi-geo-alt me-2"></i>
                            Kota Medan, Sumatera Utara, Indonesian
                        </strong>

                        <ul class="social-icon mt-4">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-whatsapp">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
                        <em class="text-white d-block mb-4">Contact</em>

                        <p class="d-flex mb-1">
                            <strong class="me-2">Phone:</strong>
                            <a href="tel: 895 4183 29356" class="site-footer-link">
                                (62)
                                895 4183 29356
                            </a>
                        </p>

                        <p class="d-flex">
                            <strong class="me-2">Email:</strong>

                            <a href="mailto:arlendcwisnot@gmail.com" class="site-footer-link">
                                arlendcwisnot
                            </a>
                        </p>
                    </div>


                    <div class="col-lg-5 col-12">
                        <em class="text-white d-block mb-4">Opening Hours.</em>

                        <ul class="opening-hours-list">
                            <li class="d-flex">
                                Monday - Friday
                                <span class="underline"></span>

                                <strong>10:00 - 15:00</strong>
                            </li>

                            <li class="d-flex">
                                Saturday
                                <span class="underline"></span>

                                <strong>15:00 - 20:30</strong>
                            </li>

                            <li class="d-flex">
                                Sunday
                                <span class="underline"></span>

                                <strong>Closed</strong>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-8 col-12 mt-4">
                        <p class="copyright-text mb-0">Copyright © Arlend Barista
                            : <a rel="sponsored" href="https://www.instagram.com/arlend1871?igsh=MWxldGZjaWoxcHR6Yg==" target="_blank">Instagram</a></p>
                    </div>
                </div>
        </footer>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/click-scroll.js"></script>
    <script src="../js/vegas.min.js"></script>
    <script src="../js/custom.js"></script>

</body>

</html>