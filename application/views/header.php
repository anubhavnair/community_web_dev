<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Community Site</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- <base href="<?= base_url() ?>"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/landing_assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/landing_assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="assets/landing_assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/landing_assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar sticky-top px-4 py-2 py-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="" class="navbar-brand p-0">
                <img src="https://pathideamultiskill.com/images/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="<?= base_url() ?>home" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="<?= base_url() ?>job" class="nav-item nav-link">Jobs</a>
                    <a href="<?= base_url() ?>business" class="nav-item nav-link">Business</a>

                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <a href="blog.html" class="nav-item nav-link">Blog</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= base_url() ?>job_listing_form" class="dropdown-item">+ Post a Job</a>
                            <a href="<?= base_url() ?>business_listing_form" class="dropdown-item">+ Post a Business</a>

                            <a href="feature.html" class="dropdown-item">Our Feature</a>
                            <a href="gallery.html" class="dropdown-item">Our Gallery</a>
                            <a href="attraction.html" class="dropdown-item">Attractions</a>
                            <a href="package.html" class="dropdown-item">Ticket Packages</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="team-icon d-none d-xl-flex justify-content-center me-3">
                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <a href="<?= base_url() ?>/user_registration"
                    class="btn btn-primary rounded-pill py-2 px-4 flex-shrink-0">Register</a>

                <a href="<?= base_url() ?>/login"
                    class="btn btn-primary rounded-pill py-2 px-4 m-2 flex-shrink-0">Login</a>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->