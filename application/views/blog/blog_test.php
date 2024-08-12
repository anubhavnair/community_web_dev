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
</style>

<div class="container ">
    <div class="grid my-5">
        <?php for ($i = 1; $i <= 10; $i++) {
            ?>


            <div class="grid-item ">
                <div class="vendor-main">
                    <div class="vendor">
                        <a href="success-story/details/7.html">
                            <img src="https://cdn.pixabay.com/photo/2024/05/24/19/06/bird-8785666_1280.jpg" alt=""
                                class="img-fluid mega-c1">
                        </a>
                        <hr>
                        <div class="c1-name">
                            <div class="d-flex justify-content-center align-items-center mt-3 gap-5">
                                <span class="d-flex flex-column align-items-center">

                                    <button class="btn btn-icon btn-sm btn-primary like-btn" type="button">
                                        <span class="btn-inner--icon"><i class="far fa-thumbs-up"></i></span>
                                    </button>
                                    <span>20+</span>
                                </span>
                                <span class="d-flex flex-column align-items-center">

                                    <button class="btn btn-icon btn-sm btn-primary share-btn" type="button">
                                        <span class="btn-inner--icon"><i class="fas fa-comment-alt"></i></span>
                                    </button>
                                    <span>30+</span>
                                </span>
                                <span>
                                    <button class="btn btn-icon btn-sm btn-primary share-btn" type="button">
                                        <span class="btn-inner--icon"><i class="fas fa-share-alt"></i></span>
                                    </button>
                                    <span>50+</span>
                                </span>

                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="c1-t1">
                        <p class="Poppins-Regular f-15 c1-t2">I first saw his profile on the recommendation list and he
                            instantly caught my eye. The way he had described everything in this profile, the attention to
                            details really impressed me. I then initiated the talk and we decided to meet after two months
                            of talking. In the first m....<a href="success-story/details/6.html"
                                class="mega-rm Poppins-Medium">Read More</a></p>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>


        <!-- Repeat other grid items similarly -->

    </div>
</div>