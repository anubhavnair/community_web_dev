<style>
    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
        scroll-behavior: smooth;
        grid-auto-flow: dense;
        grid-auto-rows: min-content;
    }

    .grid-item {

        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 1rem;
        height: fit-content;
    }

    .grid-item:hover {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        transform: scale(1.01);

    }

    .vendor-main {
        padding: 15px;
    }

    .vendor img {
        width: 100%;
        height: auto;

        object-fit: cover;
        border-radius: 1rem;
    }

    .c1-t1 {
        margin-top: 10px;
    }

    @media (min-width: 768px) {
        .grid-item:nth-child(4n) {
            grid-column: span 2;
            grid-row: span 2;
            /* height: fit-content; */

        }
    }

    /* General button styles */
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

    /* Hover effect */
    .btn-icon:hover {
        transform: scale(1.1);
        background-color: #0056b3;
    }

    /* Button icon styles */
    .btn-inner--icon {
        font-size: 18px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
    }

    /* Active effect (click effect) */
    .btn-icon:active {
        transform: scale(0.95);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .img-count {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 5px 10px;
        border-radius: 1rem;
        font-size: 14px;
        display: block;

    }

    .img-count:hover {
        /* display: none;
         */
        background-color: transparent;
        border: none;
    }
</style>

<div class="container ">

    <div class="grid my-5">

        <!-- share modal  -->
        <div class="modal fade " id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
            <div class="modal-dialog d-flex justify-content-center align-items-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="shareModalLabel">Share this Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-center gap-3">
                        <!-- Social Media Icons -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u=YOUR_BLOG_URL" target="_blank"
                            class="btn btn-primary">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=YOUR_BLOG_URL" target="_blank"
                            class="btn btn-info">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=YOUR_BLOG_URL" target="_blank"
                            class="btn btn-secondary">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?text=YOUR_BLOG_URL" target="_blank"
                            class="btn btn-success">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php if (count($blogs) > 0) {

            foreach ($blogs as $blog) {
                $uid = $this->session->userdata('login');
                $blog_id = $blog['post_id'];
                $caption = $blog['content'];
                $images = $blog['image_url'];
                $likes = $blog['post_likes'];
                $likedstatus = false;
                if (!empty($likes)) {

                    $likes_arr = explode(',', $likes);
                    if (count($likes_arr) > 0) {
                        if (in_array($uid, $likes_arr)) {
                            $likedstatus = true;
                        }
                    }
                }


                $like_count = $likes ? count(array_filter(explode(',', $likes))) : 0;


                $images = explode(',', $images);

                ?>

                <div class="grid-item ">
                    <div class="vendor-main">
                        <div class="vendor">
                            <div>

                                <img src="/uploads/blog_images/<?= $images[0]; ?>" alt="" class="img-fluid mega-c1">
                                <div class="img-count bg-info"><b><?= count($images) - 1; ?>+</b></div>
                            </div>
                            <hr>
                            <div class="c1-name">
                                <div class="d-flex justify-content-center align-items-center mt-3 gap-5">
                                    <span class="d-flex flex-column align-items-center">

                                        <?php if ($likedstatus) { ?>
                                            <button class="btn btn-icon btn-sm btn-primary like-btn bg-danger" type="button"
                                                data-id="<?= $blog_id; ?>">
                                                <span class="btn-inner--icon"><i class="far fa-thumbs-up"></i></span>
                                            </button>
                                        <?php } else {
                                            ?>
                                            <button class="btn btn-icon btn-sm btn-primary like-btn " type="button"
                                                data-id="<?= $blog_id; ?>">
                                                <span class="btn-inner--icon"><i class="far fa-thumbs-up"></i></span>
                                            </button>
                                            <?php
                                        } ?>


                                        <span><?= $like_count ?></span>

                                    </span>
                                    <span class="d-flex flex-column align-items-center">

                                        <a href="blog_details/<?= $blog_id; ?>"
                                            class="btn btn-icon btn-sm btn-primary share-btn">
                                            <span class="btn-inner--icon"><i class="fas fa-comment-alt"></i></span>
                                        </a>
                                        <span>50+</span>
                                    </span>

                                    <span class="action-item d-flex flex-column align-items-center">
                                        <button class="btn btn-icon btn-sm btn-primary share-btn" type="button"
                                            data-bs-toggle="modal" data-bs-target="#shareModal">
                                            <span class="btn-inner--icon"><i class="fas fa-share-alt"></i></span>
                                        </button>
                                        <span style="visibility: hidden;">&nbsp;</span>
                                    </span>

                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="c1-t1">
                            <p class="Poppins-Regular f-15 c1-t2"><?= $blog['content']; ?><br /><a
                                    href="blog_details/<?= $blog_id; ?>" class="mega-rm Poppins-Medium">Read
                                    More</a></p>
                        </div>
                    </div>
                </div>

                <?php
            }


        } else { ?>

            <h1>There is No Post yet..</h1>
        <?php } ?>

    </div>
</div>

<script>


    $(document).on('click', '.like-btn', function () {
        var $this = $(this);
        var dataId = $(this).attr('data-id');

        $.ajax({
            url: '<?= base_url(); ?>increaseLike',
            type: 'POST',
            data: { id: dataId },
            success: function (response) {
                if (response == 'liked') {

                    $this.css('background-color', '#e91e63');
                    window.location.reload();
                }
                if (response == 'disliked') {
                    $this.css('background-color', '#007bff');
                    window.location.reload();
                    // alert(response);
                }

            }
        });

    });

</script>