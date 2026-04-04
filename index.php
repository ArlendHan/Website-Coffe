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

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/vegas.min.css" rel="stylesheet">

    <link href="css/tooplate-barista.css" rel="stylesheet">
</head>

<body>

    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="">
                    <img src="images/coffee-beans.png" class="navbar-brand-image img-fluid" alt="Barista Cafe Template">
                    Arlend Barista
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Our Menu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Reviews</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contact</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-12 mx-auto">
                        <em class="small-text">welcome to Arlend Barista</em>

                        <h1>Cafe LEND</h1>

                        <p class="text-white mb-4 pb-lg-2">
                            your <em>favourite</em> coffee daily lives.
                        </p>

                        <a class="btn custom-btn custom-border-btn smoothscroll me-3" href="#section_2">
                            Our Story
                        </a>

                        <a class="btn custom-btn smoothscroll me-2 mb-2" href="#section_3"><strong>Check Menu</strong></a>
                    </div>

                </div>
            </div>

            <div class="hero-slides"></div>
        </section>


        <section class="about-section section-padding" id="section_2">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-12">
                        <div class="ratio ratio-1x1">
                            <video autoplay="" loop="" muted="" class="custom-video" poster="">
                                <source src="videos/pexels-mike-jones-9046237.mp4" type="video/mp4">

                                Your browser does not support the video tag.
                            </video>

                            <div class="about-video-info d-flex flex-column">
                                <h4 class="mt-auto">We Started Since 2009.</h4>

                                <h4>Best Cafe in Medan Area.</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">

                        <h2 class="text-white mb-3">Cafe LEND</h2>

                        <p class="text-white">This cafe could be the start of your journey.</p>

                        <p class="text-white">This cafe is run by a friendly and generous man, Mr. Arlend. It's a testament to the drinks that are currently popular among young people..</p>

                        <a href="#barista-team" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Meet Baristas</a>
                    </div>

                </div>
            </div>
        </section>


        <section class="barista-section section-padding section-bg" id="barista-team">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                        <em class="text-white">Creative Baristas</em>

                        <h2 class="text-white">Meet People</h2>
                    </div>

                    <?php
                    include 'admin/koneksi.php';
                    $query = mysqli_query($koneksi, "SELECT * FROM barista");
                    while ($data_barista = mysqli_fetch_array($query)) { ?>
                        <div class="col-lg-3 col-md-6 col-12 mb-4">
                            <div class="team-block-wrap">
                                <div class="team-block-info d-flex flex-column">
                                    <div class="d-flex mt-auto mb-3">
                                        <h4 class="text-white mb-0"><?= $data_barista['nama'] ?></h4>

                                        <p class="badge ms-4"><em><?= $data_barista['jabatan'] ?></em></p>
                                    </div>

                                    <p class="text-white mb-0"><?= $data_barista['keterangan'] ?></p>
                                </div>

                                <div class="team-block-image-wrap">
                                    <img src="admin/image/barista/<?= $data_barista['foto'] ?>" class="team-block-image img-fluid" alt="Foto">
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>


        <section class="menu-section section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <div class="menu-block-wrap">
                            <div class="text-center mb-4 pb-lg-2">
                                <em class="text-white">Delicious Menu</em>
                                <h4 class="text-white">Breakfast</h4>
                            </div>

                            <?php
                            include 'admin/koneksi.php';
                            $query = mysqli_query($koneksi, "SELECT * FROM menu WHERE kategori='Breakfast'");
                            while ($data_menu = mysqli_fetch_array($query)) {
                            ?>
                                <div class="menu-block">
                                    <div class="d-flex">
                                        <h6><?= $data_menu['nama'] ?></h6>

                                        <span class="underline"></span>

                                        <strong class="ms-auto">Rp <?= number_format((int)$data_menu['harga'], 0, ',', '.') ?></strong>
                                    </div>

                                    <div class="border-top ">
                                        <small><?= $data_menu['keterangan'] ?></small>
                                    </div><br>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="menu-block-wrap">
                            <div class="text-center mb-4 pb-lg-2">
                                <em class="text-white">Favourite Menu</em>
                                <h4 class="text-white">Coffee</h4>
                            </div>

                            <?php
                            include 'admin/koneksi.php';
                            $query = mysqli_query($koneksi, "SELECT * FROM menu WHERE kategori='Coffe'");
                            while ($data_menu = mysqli_fetch_array($query)) {
                            ?>
                                <div class="menu-block">
                                    <div class="d-flex">

                                        <h6><?= $data_menu['nama'] ?></h6>

                                        <span class="underline"></span>

                                        <strong class="ms-auto">Rp <?= number_format((int)$data_menu['harga'], 0, ',', '.') ?></strong>
                                    </div>

                                    <div class="border-top mb-3">
                                        <small><?= $data_menu['keterangan'] ?></small>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>


        <section class="reviews-section section-padding section-bg" id="section_4">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                        <em class="text-white">Reviews by Customers</em>

                        <h2 class="text-white">Testimonials</h2>
                    </div>

                    <?php
                    include 'admin/koneksi.php';
                    $query = mysqli_query($koneksi, "SELECT * FROM review");
                    foreach ($query as $revi) {
                    ?>
                        <div class="">
                            <div class="mb-2">
                                <div class="timeline-content">
                                    <div class="reviews-block">
                                        <div class="reviews-block-image-wrap d-flex align-items-center">
                                            <img src="admin/image/pelanggan/<?= $revi['foto'] ?>" class="reviews-block-image img-fluid" alt="">

                                            <div class="">
                                                <h6 class="text-white mb-0"><?= $revi['nama'] ?></h6>
                                                <em class="text-white"> Customers</em>
                                            </div>
                                        </div>

                                        <div class="reviews-block-info">
                                            <p><?= $revi['keterangan'] ?><?= $revi['keterangan'] ?></p>

                                            <div class="d-flex border-top pt-3 mt-4">
                                                <strong class="text-white"><?= $revi['rating'] ?> <small class="ms-2">Rating</small></strong>

                                                <div class="reviews-group ms-auto">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                </div>
        </section>


        <section class="contact-section section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h2 class="text-white mb-4 pb-lg-2">Contact</h2>
                    </div>

                    <div class="col-lg-6 col-12">
                        <form action="" method="post" class="custom-form contact-form" role="form">

                            <div class="row">

                                <div class="col-lg-6 col-12">
                                    <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>

                                    <input type="text" name="name" id="name" class="form-control" required="">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="email" class="form-label">Email Address</label>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" required="">
                                </div>

                                <div class="col-12">
                                    <label for="message" class="form-label">How can we help?</label>

                                    <textarea name="message" rows="4" class="form-control" id="message" placeholder="Message" required=""></textarea>

                                </div>
                            </div>

                            <div class="col-lg-5 col-12 mx-auto mt-3">
                                <button type="submit" class="form-control" name="kirim">Send Message</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6 col-12 mx-auto mt-5 mt-lg-0 ps-lg-5">
                        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d63717.38243689456!2d98.6722!3d3.5952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sid!2sid!4v1712140000000!5m2!1sid!2sid&maptype=satellite" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/vegas.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>

<?php

include 'admin/koneksi.php';

if (isset($_POST['kirim'])) {
    $nama = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $keterangan = htmlspecialchars($_POST['message']);

    $query = mysqli_query($koneksi, "INSERT INTO contact (nama, email, keterangan) VALUES ('$nama','$email','$keterangan')");
    if ($query == 1) {
        echo "<script>
        alert('Pesan Terkirim');
        window.location.assign('index.php');
        </script>";
    }
}

?>