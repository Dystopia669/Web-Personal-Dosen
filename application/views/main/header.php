<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Personal Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Personal - v4.7.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="<?= $this->uri->segment(1) == 'home' ? '' : 'header-top' ?>">
        <div class="container">

            <h1><a href="index.html">Wiwit AB Bantul</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            <h2>I'm a passionate <span>Dosen Universitas Amikom</span> from Yogyakarta</h2>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link <?= $this->uri->segment(1) == 'home' ? 'active' : '' ?>" href="<?= site_url('home') ?>">Home</a></li>
                    <li><a class="nav-link <?= $this->uri->segment(1) == 'about' ? 'active' : '' ?>" href="<?= site_url('about') ?>">About</a></li>
                    <li><a class="nav-link <?= $this->uri->segment(1) == 'resume' ? 'active' : '' ?> " href="<?= site_url('resume') ?> ">Resume</a></li>
                    <li><a class="nav-link <?= $this->uri->segment(1) == 'service' ? 'active' : '' ?>" href="<?= site_url('service') ?>">Services</a></li>
                    <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link <?= $this->uri->segment(1) == 'contact' ? 'active' : '' ?> " href="<?= site_url('contact') ?>">Contact</a></li>
                    <li>
                        <button type="button" class="btn btn-success">Login</button>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/wiwit_ab/?hl=en" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

        </div>
    </header><!-- End Header -->