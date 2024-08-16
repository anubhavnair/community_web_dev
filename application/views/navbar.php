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
            <a href="/" class="navbar-brand p-0 ">
                <style>
                    .sticky-top .navbar-light .navbar-brand img {
                        max-height: 100px;
                    }
                </style>
                <img src="/uploads/landing_img/community_site_logo.jpg" alt="Logo" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="<?= base_url() ?>" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <!-- <a href="<?= base_url() ?>job" class="nav-item nav-link">Jobs</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Job</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= base_url() ?>job" class="dropdown-item">
                                <i class="fas fa-briefcase me-2"></i> All Listed Jobs
                            </a>
                            <a href="<?= base_url() ?>job_listing_form" class="dropdown-item">
                                <i class="fas fa-plus me-2"></i> Post a Job
                            </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Business</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= base_url() ?>business" class="dropdown-item">
                                <i class="fas fa-briefcase me-2"></i> All Listed Businesses
                            </a>
                            <a href="<?= base_url() ?>business_listing_form" class="dropdown-item">
                                <i class="fas fa-plus me-2"></i> Post a Business
                            </a>

                        </div>
                    </div>
                    <!-- <a href="<?= base_url() ?>business" class="nav-item nav-link">Business</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Matrimonial</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= base_url() ?>matrimonial_form" class="dropdown-item">Register</a>
                            <a href="<?= base_url() ?>matrimonial" class="dropdown-item">Search</a>
                        </div>
                    </div>
                    <a href='#' class="nav-item nav-link">Service</a>
                    <a href="<?= base_url('blog') ?>" class="nav-item nav-link">Blog</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= base_url() ?>job_listing_form" class="dropdown-item">+ Post a Job</a>
                            <a href="<?= base_url() ?>business_listing_form" class="dropdown-item">+ Post a Business</a>
                            <a href="<?= base_url('blog') ?>" class="dropdown-item">Blogging</a>

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
                    <?php if (!($this->session->userdata('login'))): ?>

                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                    <a href="<?= base_url() ?>/user_registration"
                        class="btn btn-primary rounded-pill py-2 px-4 flex-shrink-0">Register</a>

                    <a href="<?= base_url('login') ?>"
                        class="btn btn-primary rounded-pill py-2 px-4 m-2 flex-shrink-0">Login</a>


                <?php else: ?>
                    <a href="<?= base_url('logout') ?>"
                        class="btn btn-primary rounded-pill py-2 px-4 m-2 flex-shrink-0">Logout</a>

                <?php endif; ?>






            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->