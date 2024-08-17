<style>
    .profile-header {
        background-color: #f8f9fa;
        padding-top: 20px;
        border-bottom: 2px solid #dee2e6;
    }

    .profile-img {
        max-width: 200px;
        border-radius: 10px;
    }

    .profile-info {
        margin-bottom: 20px;
    }

    .profile-info h5 {
        margin-bottom: 10px;
    }

    .profile-info p {
        margin-bottom: 5px;
    }

    .chat-icon {
        position: fixed;
        bottom: 20px;
        left: 20px;
        font-size: 24px;
        background-color: #007bff;
        color: #fff;
        border-radius: 50%;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        cursor: pointer;
    }

    .chat-icon a {
        color: #fff;
        text-decoration: none;
    }

    .chat-icon:hover {
        background-color: #0056b3;
    }

    .chatroom {
        max-width: 600px;
        margin: 0 auto;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 10px;
        background-color: #f9f9f9;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .messages {
        list-style-type: none;
        padding: 0;
        margin: 0;
        max-height: 400px;
        overflow-y: auto;
    }

    .message {
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 10px;
        max-width: 75%;
        clear: both;
    }

    .message.sender {
        background-color: #dcf8c6;
        float: right;
        text-align: right;
    }

    .message.receiver {
        background-color: #fff;
        float: left;
        text-align: left;
        border: 1px solid #ccc;
    }

    .input-group {
        display: flex;
        margin-top: 10px;
    }

    .form-control {
        flex: 1;
        padding: 10px;
        border-radius: 0;
    }

    .btn {
        border-radius: 0;
        padding: 10px 20px;
    }
</style>
<div class="container-fluid">
    <div class="row">

        <!-- Profile Details -->
        <div class="profile-info col-md-9">
            <!-- <h2>Profile Details</h2> -->
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo $matrimonial_profile['description']; ?></p>
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>Date of Birth</th>
                                <td><?php echo date('d-m-Y', strtotime($matrimonial_profile['dob'])); ?></td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td><?php echo $matrimonial_profile['gender'] == 'M' ? 'Male' : 'Female'; ?></td>
                            </tr>
                            <tr>
                                <th>Height</th>
                                <td><?php echo $matrimonial_profile['height']; ?></td>
                            </tr>
                            <tr>
                                <th>Weight</th>
                                <td><?php echo $matrimonial_profile['weight']; ?></td>
                            </tr>
                            <tr>
                                <th>Mother Tongue</th>
                                <td><?php echo $matrimonial_profile['mother_tongue']; ?></td>
                            </tr>
                            <tr>
                                <th>Gotram</th>
                                <td><?php echo $matrimonial_profile['gotram']; ?></td>
                            </tr>
                            <tr>
                                <th>Zodiac</th>
                                <td><?php echo $matrimonial_profile['zodiac']; ?></td>
                            </tr>
                            <tr>
                                <th>Education</th>
                                <td><?php echo $matrimonial_profile['education']; ?></td>
                            </tr>
                            <tr>
                                <th>Occupation</th>
                                <td><?php echo $matrimonial_profile['job_occupation']; ?></td>
                            </tr>
                            <tr>
                                <th>Employee In</th>
                                <td><?php echo $matrimonial_profile['employee_in_id']; ?></td>
                            </tr>
                            <tr>
                                <th>Salary</th>
                                <td><?php echo $matrimonial_profile['salary']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="chat-icon btn btn-primary" data-bs-toggle="modal" data-bs-target="#chatModal">
                        Open Chat <i class="fas fa-comments"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profile Header -->
        <div class="profile-header col-md-3">

            <div class="profile-header text-center">
                <h1><?php echo $matrimonial_profile['user_name']; ?></h1>
                <img src="<?php echo base_url('uploads/' . $matrimonial_profile['user_profile_pic']); ?>"
                    alt="Profile Picture" class="profile-img">
                <p class="lead"><?php echo $matrimonial_profile['age']; ?> years old</p>
            </div>
            <div class="">
                <h5>Contact Information</h5>
                <p><strong>Email:</strong> <?php echo $matrimonial_profile['user_email']; ?></p>
                <p><strong>Mobile:</strong> <?php echo $matrimonial_profile['user_mobile']; ?></p>
                <p><strong>Address:</strong> <?php echo $matrimonial_profile['user_address']; ?></p>
                <p><strong>City:</strong> <?php echo $matrimonial_profile['city']; ?></p>
                <p><strong>State:</strong> <?php echo $matrimonial_profile['state']; ?></p>
                <p><strong>Pincode:</strong> <?php echo $matrimonial_profile['user_pincode']; ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Chat Modal -->
<div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="chatModalLabel">Chat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Chat content goes here -->
                <div id="chatroom" class="chatroom">
                    <ul id="messages" class="messages"></ul>
                    <div class="input-group">
                        <input id="messageInput" class="form-control" autocomplete="off"
                            placeholder="Type your message..." />
                        <button id="sendBtn" class="btn btn-success">Send</button>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send</button>
            </div> -->
        </div>
    </div>
</div>