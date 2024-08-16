<style>
    .add-box-cstm {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .add-box-cstm h4 {
        font-size: 24px;
        font-weight: 600;
        color: #333;
        margin-bottom: 30px;
    }

    .ni-input {
        width: 100%;
        height: 50px;
        padding: 10px 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        color: #333;
    }

    .ni-input[type="textarea"],
    .ni-input[placeholder="Caption"] {
        min-height: 200px;
        padding: 15px;
        font-size: 16px;
        line-height: 1.5;
        border-radius: 5px;
        resize: vertical;
        /* resize:none; */
        /* Allows vertical resizing */
    }

    .ni-input:focus {
        outline: none;
        border-color: #007bff;
    }

    .add-input {
        margin-bottom: 20px;
    }


    .add-w-btn {
        background: #007bff;
        color: #fff;
        width: 100%;
        height: 50px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    .add-w-btn:hover {
        background: #0056b3;
    }

    /* Styling for the image preview container */
    #image-preview {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 20px;
        gap: 10px;
    }

    #image-preview img {
        width: 150px;
        /* Set a uniform width */
        height: 150px;
        /* Set a uniform height */
        object-fit: cover;
        /* Ensure the image covers the space */
        border-radius: 10px;
        /* Rounded corners for a modern look */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        /* Add a subtle shadow */
        transition: transform 0.2s ease;
        /* Smooth hover effect */
        cursor: pointer;
        /* Change cursor to pointer on hover */
    }

    #image-preview img:hover {
        transform: scale(1.05);
        /* Slight zoom on hover */
    }

    .ni-input[type="textarea"] {
        height: 500px !important;
        /* or any ther height you prefer */
    }
</style>

<?php if ($this->session->flashdata('added_blog')): ?>
    <script>
        swal("Created..!", "Blog Created Successfully..", 'success');

    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('error_blog')): ?>

    <script>
        swal("Oops...!", "There are sometimes wrong Please Try after some time", 'error');
    </script>
<?php endif; ?>

<section class="section bg-light mt-5">
    <div class="col-md-12">
        <button class="btn btn-primary mx-5 my-3 p-2" id="SlideToggleBtn">Add Blog+</button>

    </div>
    <div class="container" id="add_blog">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="add-box-cstm ">
                        <!-- <h4 class="text-center mb-4">Add Blog</h4> -->
                        <form class="add-box-2" id="add_blog" action="/add_blog" method='post'
                            enctype="multipart/form-data">
                            <div class="add-input">
                                <div class="form-group">
                                    <input type="file" class="ni-input" name="blog_image[]" id="blog_image" required
                                        multiple />

                                </div>
                            </div>
                            <!-- Container to hold the image previews -->
                            <div id="image-preview" class="row"></div>

                            <div class="add-input">
                                <div class="form-group">

                                    <textarea class="ni-input" name="blog_caption" placeholder="Caption"
                                        required  resize="none"></textarea>
                                        
                                </div>
                            </div>

                            <div class="add-input">
                                <div class="form-group">
                                    <input type="submit" class="add-w-btn" value="Add Blog">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal to view selected image -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img id="modalImage" src="" alt="Selected Image" class="img-fluid" style="border-radius: 10px;">
            </div>

        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('#add_blog').hide();
        $('#SlideToggleBtn').on("click", function () {
            $('#add_blog').slideToggle();
        });

        // Preview images 
        $('#blog_image').on('change', function () {
            var previewContainer = $('#image-preview');
            previewContainer.empty(); // Clear previous previews
            var files = this.files;

            $.each(files, function (i, file) {
                // Ensure the file is an image
                if (file.type.startsWith('image/')) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        var img = $('<img>').attr('src', e.target.result)
                            .addClass('img-thumbnail img-fluid') // Bootstrap class for styling the preview
                            .css({
                                'width': '150px',   // Uniform width
                                'height': '150px',  // Uniform height
                                'object-fit': 'cover', // Ensure the image covers the space nicely
                                'border-radius': '10px', // Rounded corners for a polished look
                                'box-shadow': '0px 4px 8px rgba(0, 0, 0, 0.1)', // Subtle shadow
                                'margin': '10px',
                                'cursor': 'pointer', // Change cursor to pointer on hover
                                'transition': 'transform 0.2s ease' // Smooth hover effect
                            });
                        img.on('click', function () {
                            $('#modalImage').attr('src', e.target.result);
                            $('#imageModal').modal('show');
                        });
                        previewContainer.append(img);
                    };

                    reader.readAsDataURL(file);
                }
            });
        });
    });



</script>