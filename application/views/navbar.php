<div class="container-fluid nav-bar sticky-top px-4 py-2 py-lg-0">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="/" class="navbar-brand p-0">
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
                <a href="<?= base_url() ?>" class="nav-item nav-link active">
                    <i class="fas fa-home me-2"></i>Home
                </a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fas fa-briefcase me-2"></i>Job
                    </a>
                    <div class="dropdown-menu m-0">
                        <a href="<?= base_url() ?>job" class="dropdown-item">
                            <i class="fas fa-list me-2"></i>All Listed Jobs
                        </a>
                        <a href="<?= base_url() ?>job_listing_form" class="dropdown-item">
                            <i class="fas fa-plus me-2"></i>Post a Job
                        </a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fas fa-building me-2"></i>Business
                    </a>
                    <div class="dropdown-menu m-0">
                        <a href="<?= base_url() ?>business" class="dropdown-item">
                            <i class="fas fa-list me-2"></i>All Listed Businesses
                        </a>
                        <a href="<?= base_url() ?>business_listing_form" class="dropdown-item">
                            <i class="fas fa-plus me-2"></i>Post a Business
                        </a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fas fa-heart me-2"></i>Matrimonial
                    </a>
                    <div class="dropdown-menu m-0">
                        <a href="<?= base_url() ?>matrimonial_form" class="dropdown-item">
                            <i class="fas fa-user-plus me-2"></i>Register
                        </a>
                        <a href="<?= base_url() ?>matrimonial" class="dropdown-item">
                            <i class="fas fa-search me-2"></i>Search
                        </a>
                    </div>
                </div>
                <a href="<?= base_url('blog') ?>" class="nav-item nav-link">
                    <i class="fas fa-blog me-2"></i>Blog
                </a>
                <a href="#contact_info" class="nav-item nav-link">
                    <i class="fas fa-envelope me-2"></i>Contact
                </a>
            </div>
            <div class="team-icon d-none d-xl-flex justify-content-center me-3">
                <?php if (!($this->session->userdata('login'))): ?>
                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
                <a href="<?= base_url() ?>/user_registration" class="btn btn-primary rounded-pill py-2 px-4 flex-shrink-0">
                    <i class="fas fa-user-plus me-2"></i>Register
                </a>
                <a href="<?= base_url('login') ?>" class="btn btn-primary rounded-pill py-2 px-4 m-2 flex-shrink-0">
                    <i class="fas fa-sign-in-alt me-2"></i>Login
                </a>
                <?php else: ?>
                    <a href="<?= base_url('logout') ?>" class="btn btn-primary rounded-pill py-2 px-4 m-2 flex-shrink-0">
                        <i class="fas fa-sign-out-alt me-2"></i>Logout
                    </a>
                <?php endif; ?>
            </div>
        </nav>
    </div>
