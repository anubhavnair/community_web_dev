<style>
    .blog-img img {
        height: 300px;
        /* Adjust the height as needed */
        object-fit: cover;
        width: 100%;
    }

    .ellipsis {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        width: 200px;
        /* Adjust as needed */
        cursor: pointer;
    }

    .full-text {
        display: none;
    }
</style>
<!-- Carousel Start -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<div class="header-carousel owl-carousel">
    <div class="header-carousel-item">
        <img src="https://img2.sangam.com/assets/home/HomePage_Default_Final.webp" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container align-items-center py-4">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s"
                        style="animation-delay: 1s;">
                        <div class="text-start">
                            <!-- Added community icon -->
                            <h4 class="text-primary text-uppercase fw-bold mb-4">
                                <i class="fas fa-users"></i> Welcome to Sahu Samaj
                            </h4>
                            <!-- Added handshake icon -->
                            <h1 class="display-4 text-uppercase text-white mb-4">
                                <i class="fas fa-handshake"></i> Uniting the Proud Sahu Samaj Community
                            </h1>
                            <p class="mb-4 fs-5">Join hands with the vibrant and diverse Sahu Samaj, a community rooted
                                in rich traditions, culture, and values. Together, we empower each other to achieve
                                greater heights and foster a strong bond of unity.</p>
                            <div class="d-flex flex-shrink-0">
                                <!-- Added user-plus icon -->
                                <a class="btn btn-primary rounded-pill text-white py-3 px-5"
                                    href="<?= base_url() ?>user_registration">
                                    <i class="fas fa-user-plus"></i> Join Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-carousel-item">
        <img src="https://cdn.pixabay.com/photo/2019/09/05/04/39/dream-job-4453054_1280.jpg" class="img-fluid w-100"
            alt="Image">
        <div class="carousel-caption">
            <div class="container py-4">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s"
                        style="animation-delay: 1s;">
                        <div class="text-start">
                            <!-- Added community icon -->
                            <h4 class="text-primary text-uppercase fw-bold mb-4">
                                <i class="fas fa-users"></i> Welcome to Sahu Samaj
                            </h4>
                            <!-- Added handshake icon -->
                            <h1 class="display-4 text-uppercase text-white mb-4">
                                <i class="fas fa-handshake"></i> Uniting the Proud Sahu Samaj Community
                            </h1>
                            <p class="mb-4 fs-5">Join hands with the vibrant and diverse Sahu Samaj, a community rooted
                                in rich traditions, culture, and values. Together, we empower each other to achieve
                                greater heights and foster a strong bond of unity.</p>
                            <div class="d-flex flex-shrink-0">
                                <!-- Added user-plus icon -->
                                <a class="btn btn-primary rounded-pill text-white py-3 px-5"
                                    href="<?= base_url() ?>user_registration">
                                    <i class="fas fa-user-plus"></i> Join Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Carousel End -->


<!-- Feature Start -->
<!-- Feature Start -->


<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="row g-4">
            <!-- Business Listings -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item">
                    <img src="https://www.corpnet.com/wp-content/uploads/2020/01/Business-Plan-Words-With-Red-Upward-Arrow.jpg"
                        class="img-fluid rounded w-100" alt="Business Listings">
                    <div class="feature-content p-4">
                        <div class="feature-content-inner">
                            <!-- Added briefcase icon -->
                            <i class="fas fa-briefcase fa-5x me-2 col-md-12 text-center text-white "></i>
                            <h4 class="text-white text-center fw-bold ">Business Listings</h4>
                            <p class="text-white">Showcase your business within the Sahu Samaj community and connect
                                with fellow members for potential collaborations and support.</p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Learn More <i
                                    class="fa fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Matrimonial Services -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item">
                    <img src="https://i.pinimg.com/originals/78/bf/fe/78bffe4e4cb0a6484d658eb0894947e0.jpg"
                        class="img-fluid rounded w-100" alt="Matrimonial Services">
                    <div class="feature-content p-4">
                        <div class="feature-content-inner">
                            <!-- Added heart icon -->
                            <b> <i class="fas fa-heart me-2 fa-5x text-center col-md-12 text-white "></i></b>
                            <h4 class="text-white text-center fw-bold">Matrimonial Services</h4>
                            <p class="text-white">Discover suitable matrimonial matches within the Sahu Samaj community,
                                fostering connections that honor our traditions and values.</p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Explore More <i
                                    class="fa fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Community Events -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <img src="https://cdn.pixabay.com/photo/2018/11/29/21/51/social-media-3846597_1280.png"
                        class="img-fluid rounded w-100" alt="Community Events">
                    <div class="feature-content p-4">
                        <div class="feature-content-inner">
                            <!-- Added calendar-alt icon -->
                            <i class="fas fa-calendar-alt me-2 text-center col-md-12 text-white fa-5x"></i>
                            <h4 class="text-white text-center fw-bold mt-2">Community Events</h4>
                            <p class="text-white">Participate in and showcase community events and initiatives,
                                strengthening bonds and celebrating our shared heritage.</p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Find Out More <i
                                    class="fa fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Feature End -->

<!-- About Start -->
<!-- About Sahu Samaj Start -->
<div class="container-fluid about pb-5">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">About Sahu Samaj</h4>
                    <h1 class="display-5 mb-4">Celebrating the Rich Heritage and Unity of Sahu Samaj</h1>
                    <p class="mb-5">Sahu Samaj is a vibrant community dedicated to preserving our rich cultural heritage
                        and fostering unity among its members. We are committed to supporting each other in various
                        aspects of life while celebrating our traditions and values.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3"><i class="fas fa-people-arrows fa-3x text-primary"></i></div>
                                <div>
                                    <h4>Cultural Events</h4>
                                    <p>Participate in and enjoy a variety of cultural events that showcase the beauty
                                        and traditions of Sahu Samaj.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3"><i class="fas fa-heart fa-3x text-primary"></i></div>
                                <div>
                                    <h4>Community Support</h4>
                                    <p>Engage in initiatives that provide support and assistance to members of the Sahu
                                        Samaj community.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3"><i class="fas fa-handshake fa-3x text-primary"></i></div>
                                <div>
                                    <h4>Collaborative Opportunities</h4>
                                    <p>Discover and create collaborative opportunities within the community to drive
                                        collective growth and success.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3"><i class="fas fa-graduation-cap fa-3x text-primary"></i></div>
                                <div>
                                    <h4>Educational Programs</h4>
                                    <p>Access various educational programs and resources designed to empower members of
                                        Sahu Samaj with knowledge and skills.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="position-relative rounded">
                    <div class="rounded" style="margin-top: 40px;">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="rounded mb-4">
                                    <img src="https://telisociety.com/wp-content/uploads/2023/03/333206620_6640908432590835_7125988540919382755_n.jpg"
                                        class="img-fluid rounded w-100" alt="Sahu Samaj Community">
                                </div>
                                <div class="row gx-4 gy-0">
                                    <div class="col-6">
                                        <div class="counter-item bg-primary rounded text-center p-4 h-100">
                                            <div class="counter-item-icon mx-auto mb-3">
                                                <i class="fas fa-users fa-3x text-white"></i>
                                            </div>
                                            <div class="counter-counting mb-3">
                                                <span class="text-white fs-2 fw-bold"
                                                    data-toggle="counter-up">10,000</span>
                                                <span class="h1 fw-bold text-white">+</span>
                                            </div>
                                            <h5 class="text-white mb-0">Active Members</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="counter-item bg-dark rounded text-center p-4 h-100">
                                            <div class="counter-item-icon mx-auto mb-3">
                                                <i class="fas fa-trophy fa-3x text-white"></i>
                                            </div>
                                            <div class="counter-counting mb-3">
                                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">50</span>
                                                <span class="h1 fw-bold text-white">+</span>
                                            </div>
                                            <h5 class="text-white mb-0">Community Achievements</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded bg-primary p-4 position-absolute d-flex justify-content-center"
                        style="width: 90%; height: 80px; top: -40px; left: 50%; transform: translateX(-50%);">
                        <h3 class="mb-0 text-white">Pride of the Sahu Samaj Community</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About End -->


<!-- Service Start -->
<!-- Our Service Start -->
<div class="container-fluid service py-5">
    <div class="container service-section py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Services</h4>
            <h1 class="display-5 text-white mb-4">Explore Our Community Services</h1>
            <p class="mb-0 text-white">At Sahu Samaj, we offer a range of services designed to support and enrich our
                community members. From cultural events to educational programs, discover how we can assist and engage
                with you.</p>
        </div>
        <div class="row g-4">
            <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>
            <div class="col-md-10 col-lg-8 col-xl-8 wow fadeInUp" data-wow-delay="0.2s">
                <!-- Removed the days div -->
            </div>
            <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item p-4">
                    <div class="service-content">
                        <div class="mb-4">
                            <i class="fas fa-users fa-4x text-primary"></i>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Community Gatherings</a>
                        <p class="mb-0">Join us for community gatherings that celebrate our traditions and foster
                            connections among members.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item p-4">
                    <div class="service-content">
                        <div class="mb-4">
                            <i class="fas fa-book fa-4x text-primary"></i>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Educational Workshops</a>
                        <p class="mb-0">Participate in workshops and educational programs designed to enhance knowledge
                            and skills within our community.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item p-4">
                    <div class="service-content">
                        <div class="mb-4">
                            <i class="fas fa-handshake fa-4x text-primary"></i>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Support Services</a>
                        <p class="mb-0">Access various support services, including counseling and assistance for members
                            in need.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="service-item p-4">
                    <div class="service-content">
                        <div class="mb-4">
                            <i class="fas fa-calendar-alt fa-4x text-primary"></i>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Event Planning</a>
                        <p class="mb-0">Plan and organize community events with our support, from festivals to cultural
                            celebrations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service End -->



<!-- Attractions Start -->
<div class="container-fluid attractions py-5">
    <div class="container attractions-section py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">JOBS</h4>
            <h1 class="display-5 text-white mb-4">Explore Our Community Job List</h1>
            <p class="text-white mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci
                facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="owl-carousel attractions-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="attractions-item wow fadeInUp" data-wow-delay="0.2s">
                <img src="uploads/landing_img/person-1.jpeg" class="img-fluid rounded w-100" alt="">
                <a href="#" class="attractions-name">Roller Coaster</a>
            </div>
            <div class="attractions-item wow fadeInUp" data-wow-delay="0.4s">
                <img src="uploads/landing_img/person-2.jpeg" class="img-fluid rounded w-100" alt="">
                <a href="#" class="attractions-name">Carousel</a>
            </div>
            <div class="attractions-item wow fadeInUp" data-wow-delay="0.6s">
                <img src="uploads/landing_img/person-3.jpeg" class="img-fluid rounded w-100" alt="">
                <a href="#" class="attractions-name">Arcade Game</a>
            </div>
            <div class="attractions-item wow fadeInUp" data-wow-delay="0.8s">
                <img src="uploads/landing_img/person-4.jpeg" class="img-fluid rounded w-100" alt="">
                <a href="#" class="attractions-name">Hanging Carousel</a>
            </div>
            <div class="attractions-item wow fadeInUp" data-wow-delay="1s">
                <img src="uploads/landing_img/person-5.jpeg" class="img-fluid rounded w-100" alt="">
                <a href="#" class="attractions-name">Carousel</a>
            </div>
        </div>
    </div>
</div>
<!-- Attractions End -->

<!-- Gallery Start -->
<div class="container-fluid gallery pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Gallery</h4>
            <h1 class="display-5 mb-4">Moments of Sahu Samaj Events</h1>
            <p class="mb-0">Explore the vibrant moments and memorable events of Sahu Samaj captured through our gallery.
                From community celebrations to cultural festivals, see the essence of our shared heritage and unity.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="gallery-item">
                    <img src="https://teliindia.in/images/Gaya_Sahu_samaj_Bhamashah_Jayanti.jpg"
                        class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="https://th.bing.com/th/id/OIP.gljqo5eUWNCcMGczNfywrAHaE6?rs=1&pid=ImgDetMain"
                            class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-1"><i
                                class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="gallery-item">
                    <img src="https://th.bing.com/th/id/OIP.QkMVSP7ZF-scNkT2ZbBXRwHaEK?rs=1&pid=ImgDetMain"
                        class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="https://teliindia.in/images/Guna_district_Sahu_Samaj_shaadi.jpg"
                            class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-2"><i
                                class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="gallery-item">
                    <img src="https://teliindia.in/images/Guna_district_Sahu_Samaj_shaadi.jpg"
                        class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="uploads/landing_img/gallery-3.jpg" class="btn btn-light btn-lg-square rounded-circle"
                            data-lightbox="Gallery-3"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="gallery-item">
                    <img src="https://i.ytimg.com/vi/4uXYWXxPqtk/hqdefault.jpg" class="img-fluid rounded w-100 h-100"
                        alt="">
                    <div class="search-icon">
                        <a href="uploads/landing_img/gallery-4.jpg" class="btn btn-light btn-lg-square rounded-circle"
                            data-lightbox="Gallery-4"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="gallery-item">
                    <img src="https://images.bhaskarassets.com/web2images/521/2023/08/15/14bhilai-pullout-pg9-0_deb8c24e-e8b2-4bb0-86ba-ab1ea6fbd793-large.jpg"
                        class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="uploads/landing_img/gallery-5.jpg" class="btn btn-light btn-lg-square rounded-circle"
                            data-lightbox="Gallery-5"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="gallery-item">
                    <img src="https://teliindia.in/Teli_Samaj_news_Image.php?ano=1441&Image=Chhabra_Sahu_Samaj_samuhik_Vivah_Sammelan_Sampanna.jpg"
                        class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="uploads/landing_img/gallery-6.jpg" class="btn btn-light btn-lg-square rounded-circle"
                            data-lightbox="Gallery-6"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gallery End -->

<style>
    #more-description {
        display: none;
    }

    #read-more {
        color: #007bff;
        text-decoration: none;
        cursor: pointer;
    }

    #read-more:hover {
        text-decoration: underline;
    }
</style>
<!-- Job Start -->
<div class="container-fluid blog pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Career Opportunities</h4>
            <h1 class="display-5 mb-4">Explore Employment Opportunities in Sahu Samaj</h1>
            <p class="mb-0">Discover a range of job opportunities within our Sahu Samaj community. We are committed to
                supporting our members by providing access to various career paths and professional growth. Explore the
                latest job openings and find your next career opportunity with us.</p>
        </div>

        <div class="owl-carousel owl-theme">

            <?php foreach ($job_list as $job) { ?>
                <div class="item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <a href="#">
                                <img src="uploads/job_listing/<?= $job['job_image'] ?>" class="img-fluid w-100 rounded-top"
                                    alt="<?= $job['job_title'] ?>">
                            </a>
                            <div class="blog-category py-2 px-4"><?= $job['job_category'] ?></div>
                            <div class="job-content blog-date"><span> Salary:</span> <?= $job['job_minimum_salary'] ?> -
                                <?= $job['job_maximum_salary'] ?>
                            </div>
                        </div>
                        <div class="blog-content job-content p-4">
                            <a href="#" class="h4 d-inline-block mb-4"><?= $job['job_type'] ?></a>
                            <p class="mb-1"><span><?= $job['job_city'] ?>, <?= $job['job_country'] ?></span></p>
                            <p class="mb-1"><span>Education:</span> <?= $job['job_education_level'] ?></p>
                            <p class="mb-1"><span>Experience:</span> <?= $job['job_experience'] ?></p>
                            <p class="mb-1"><span>Email:</span> <?= $job['job_email'] ?></p>
                            <p class="mb-1"><span>Contact:</span> <?= $job['job_number'] ?></p>
                            <p class="mb-1"><span>Shift:</span> <?= $job['job_shift'] ?></p>
                            <a href="<?= $job['job_website'] ?>" class="mb-1"><span>Website</span></a>
                            <div id="content" class="mb-1 ellipsis" onclick="toggleText()"><?= $job['job_description'] ?>
                            </div>
                            <div id="full-content" class="mb-1 full-text "><?= $job['job_description'] ?></div>

                            <!-- <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i
                                    class="fas fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>


            <?php } ?>
        </div>
    </div>
</div>

<!-- Job End -->



<!-- Business Start -->
<div class="container-fluid blog pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Business Opportunities</h4>
            <h1 class="display-5 mb-4">Discover New Ventures in Sahu Samaj</h1>
            <p class="mb-0">Explore exciting business opportunities and ventures within our Sahu Samaj community. We are
                dedicated to fostering entrepreneurship and supporting our members in launching and growing their
                businesses. Find out about the latest business prospects and connect with fellow entrepreneurs.</p>
        </div>
        <div class="owl-carousel owl-theme">

            <?php foreach ($business_list as $business) { ?>
                <div class="item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <a href="#">
                                <img src="uploads/business_listing/<?= $business['business_image'] ?>"
                                    class="img-fluid w-100 rounded-top" alt="<?= $business['company_name'] ?>">
                            </a>
                            <div class="blog-category py-2 px-4"><?= $business['business_category'] ?></div>
                            <div class="blog-date job-content"><span>Time :</span> <?= $business['opening_time'] ?> -
                                <?= $business['closing_time'] ?>
                            </div>
                        </div>
                        <div class="blog-content job-content p-4">
                            <a href="#" class="h4 d-inline-block mb-4"><span><?= $business['company_name'] ?></span></a>
                            <p class="mb-1"><span><?= $business['city'] ?>     <?= $business['pin_code'] ?>,
                                    <?= $business['country'] ?></span></p>
                            <p class="mb-1"><span>Address 1</span>: <?= $business['address_1'] ?></p>
                            <p class="mb-1"><span>Address 2</span>: <?= $business['address_2'] ?></p>
                            <p class="mb-1"><span>Email:</span> <?= $business['email_address'] ?></p>
                            <p class="mb-1"><span>Contact:</span> <?= $business['phone_number'] ?></p>
                            <p class="mb-1"><span>fax:</span> <?= $business['fax'] ?></p>
                            <a href="<?= $business['website'] ?>" class="mb-1"><span>Website</span></a>
                            <!-- <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i
                                    class="fas fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>


            <?php } ?>
        </div>
    </div>
</div>

<!-- Business End -->


<!-- Team Start -->
<div class="container-fluid team pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Committee</h4>
            <h1 class="display-5 mb-4">Meet Our Esteemed Sahu Samaj Committee Members</h1>
            <p class="mb-0">Our Sahu Samaj committee is dedicated to serving our community with integrity and
                commitment. Get to know the individuals who are leading our initiatives and working towards the
                betterment of our society. Each member brings unique skills and passion to our collective mission.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item p-4">
                    <div class="team-content">
                        <div class="d-flex justify-content-between border-bottom pb-4">
                            <div class="text-start">
                                <h4 class="mb-0">Anil Kumar Sahu</h4>
                                <p class="mb-0">Chairperson</p>
                            </div>
                            <div>
                                <img src="uploads/landing_img/team-1.jpg" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="Anil Kumar">
                            </div>
                        </div>
                        <div class="team-icon rounded-pill my-4 p-3">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <p class="text-center mb-0">Anil Kumar is committed to leading our community with vision and
                            dedication. Under his leadership, we aim to enhance our collective welfare and strengthen
                            our community bonds.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item p-4">
                    <div class="team-content">
                        <div class="d-flex justify-content-between border-bottom pb-4">
                            <div class="text-start">
                                <h4 class="mb-0">Sunita Sahu</h4>
                                <p class="mb-0">Secretary</p>
                            </div>
                            <div>
                                <img src="uploads/landing_img/team-2.jpg" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="Sunita Sharma">
                            </div>
                        </div>
                        <div class="team-icon rounded-pill my-4 p-3">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <p class="text-center mb-0">Sunita Sharma plays a crucial role in organizing and coordinating
                            events, ensuring that our committee’s activities run smoothly and effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item p-4">
                    <div class="team-content">
                        <div class="d-flex justify-content-between border-bottom pb-4">
                            <div class="text-start">
                                <h4 class="mb-0">Ravi Sahu</h4>
                                <p class="mb-0">Treasurer</p>
                            </div>
                            <div>
                                <img src="uploads/landing_img/team-3.jpg" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="Ravi Patel">
                            </div>
                        </div>
                        <div class="team-icon rounded-pill my-4 p-3">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <p class="text-center mb-0">Ravi Patel is responsible for managing the financial aspects of our
                            committee, ensuring transparency and proper allocation of resources.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Testimonials</h4>
            <h1 class="display-5 text-white mb-4">Members Reviews</h1>
            <p class="text-white mb-0">We are proud to share the thoughts of our valued members. Their satisfaction and
                trust inspire us to keep striving for excellence.
            </p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
            <div class="testimonial-item p-4">
                <p class="text-white fs-4 mb-4">The community here is amazing. The support and camaraderie among members
                    make it feel like a true family.</p>
                <div class="testimonial-inner">
                    <div class="testimonial-img">
                        <img src="uploads/landing_img/testimonial-1.jpg" class="img-fluid" alt="Image">
                        <div class="testimonial-quote btn-lg-square rounded-circle"><i
                                class="fa fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="ms-4">
                        <h4>Ravi Sahu</h4>
                        <p class="text-start text-white">Software Engineer</p>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item p-4">
                <p class="text-white fs-4 mb-4">Being a part of this community has been a game-changer for me. The
                    opportunities to connect and grow are endless.</p>
                <div class="testimonial-inner">
                    <div class="testimonial-img">
                        <img src="uploads/landing_img/testimonial-2.jpg" class="img-fluid" alt="Image">
                        <div class="testimonial-quote btn-lg-square rounded-circle"><i
                                class="fa fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="ms-4">
                        <h4>Anjali Sahu</h4>
                        <p class="text-start text-white">Entrepreneur</p>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item p-4">
                <p class="text-white fs-4 mb-4">This platform has truly allowed me to expand my network and gain
                    valuable insights from fellow members.</p>
                <div class="testimonial-inner">
                    <div class="testimonial-img">
                        <img src="uploads/landing_img/testimonial-3.jpg" class="img-fluid" alt="Image">
                        <div class="testimonial-quote btn-lg-square rounded-circle"><i
                                class="fa fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="ms-4">
                        <h4>Amit Sahu</h4>
                        <p class="text-start text-white">Consultant</p>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial End -->
<script>
    function toggleText() {
        var ellipsis = document.getElementById("content");
        var fullText = document.getElementById("full-content");

        if (fullText.style.display === "none") {
            fullText.style.display = "block";
            ellipsis.style.display = "none";
        } else {
            fullText.style.display = "none";
            ellipsis.style.display = "block";
        }
    }
</script>