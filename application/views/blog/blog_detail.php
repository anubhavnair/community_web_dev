<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


<style>
    .post-details {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 1rem;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .post-title {
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .post-meta {
        color: #888;
        font-size: 0.9rem;
        margin-bottom: 20px;
    }

    .post-images {
        width: 100%;

        margin: 0 auto;


    }


    .item {

        display: flex;
        justify-content: center;
        align-items: center;

        width: 50%;
        margin: 0 auto;

    }

    .item img {

        width: 100vw;


    }

    .post-content {
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .post-actions .actions {
        display: flex;
        justify-content: flex-start;

        align-items: center;
    }

    .action-item {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .btn-icon {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #007bff;
        color: #fff;
        transition: transform 0.3s ease, background-color 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .btn-icon:hover {
        transform: scale(1.1);
        background-color: #0056b3;
    }
</style>
<?php

$image_urls = explode(",", $blog->image_url);

?>
<div class="container my-3">
    <div class="post-details">

        <p class="post-meta">
            <span>Published on :<b><?= date('M-d-Y', strtotime($blog->created_at)); ?></b></span>
        </p>

        <!-- Owl Carousel for Multiple Images -->

        <div class="post-images owl-carousel owl-theme">

            <?php foreach ($image_urls as $image_url) {
                ?>
                <div class="item">
                    <img src="/uploads/blog_images/<?= $image_url ?>" alt="Post Image 1" class="img-fluid">
                </div>
                <?php
            } ?>



            <!-- Add more images as needed -->
        </div>


        <div class="post-content mt-4 text-center">
            <p class='fs-5'><?= $blog->content ?></p>
        </div>

        <div class="post-actions mt-4">
            <div class="actions d-flex justify-content-start gap-5 align-items-center">
                <span class="action-item d-flex flex-column align-items-center">
                    <button class="btn btn-icon btn-sm btn-primary like-btn" type="button">
                        <span class="btn-inner--icon"><i class="far fa-thumbs-up"></i></span>
                    </button>
                    <span>100+</span>
                </span>
                <span class="action-item d-flex flex-column align-items-center">
                    <button class="btn btn-icon btn-sm btn-primary comment-btn" type="button">
                        <span class="btn-inner--icon"><i class="fas fa-comment-alt"></i></span>
                    </button>
                    <span>50+</span>
                </span>
                <span class="action-item d-flex flex-column align-items-center">
                    <button class="btn btn-icon btn-sm btn-primary share-btn" type="button">
                        <span class="btn-inner--icon"><i class="fas fa-share-alt"></i></span>
                    </button>
                    <span>30+</span>
                </span>
            </div>
        </div>

        <!-- Comments Section -->
        <div class="post-comments mt-5">
            <hr>

            <h3>Comments</h3>
            <hr>

            <ul class="list-unstyled ">
                <li class="media mb-4 border border-primary p-5">


                    <div class="media-body">
                        <h5 class="mt-0 mb-1">John Doe</h5>
                        <p>This is a sample comment text. It's a thoughtful comment on the post.</p>
                        <small class="text-muted">Posted on: August 14, 2024, 3:00 PM</small>
                    </div>
                </li>

                <!-- Add more comments as needed -->
            </ul>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,                // Enables infinite loop
            margin: 10,                // Margin between items
            dots: true,                // Show pagination dots
            autoplay: false,            // Automatically play the carousel
            autoplayTimeout: 2000,     // Time between slides (3 seconds)
            autoplayHoverPause: true,  // Pause on hover
            smartSpeed: 800,           // Transition speed (800ms)
            responsive: {
                0: {
                    items: 1           // Number of items for screen width 0-599px
                },
                600: {
                    items: 1        // Number of items for screen width 600-999px
                },
                1000: {
                    items: 1     // Number of items for screen width 1000px and above
                }
            }
        });
    });


</script>