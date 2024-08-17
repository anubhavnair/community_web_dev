<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        var sender_id = <?php echo json_encode($this->session->userdata('login')); ?>;
        var receiver_id = <?php echo json_encode($matrimonial_profile['uid']); ?>;

        function sendMessage() {
            var messageText = $('#messageInput').val().trim();
            console.log('Sending message:', messageText);
            if (messageText !== '') {
                // Get the current time for the message
                var currentTime = new Date().toLocaleTimeString();

                // Construct the message object
                var messageData = {
                    sender_id: sender_id,
                    receiver_id: receiver_id,
                    message: messageText,
                    time: currentTime
                };

                // Send the message to the server using AJAX
                $.ajax({
                    url: '<?= base_url() ?>/matrimonialcontrollers/MatriMonialController/saveMessage',
                    type: 'POST',
                    data: messageData,
                    success: function (response) {
                        // Parse response if necessary
                        if (typeof response === "string") {
                            response = JSON.parse(response);
                        }
                        console.log('Message saved:', response);
                        if (response.status === 'success') {
                            // Create the message element
                            var messageElement = $('<li>')
                                .addClass('message sender')
                                .attr('data-time', currentTime)
                                .text(messageText);

                            // Append the message to the chat
                            $('#messages').append(messageElement);

                            // Clear the input field
                            $('#messageInput').val('');

                            // Scroll to the bottom of the chat
                            $('#messages').scrollTop($('#messages')[0].scrollHeight);
                        } else {
                            console.error('Error saving message:', response.message);
                        }
                    },
                    error: function (error) {
                        console.error('Error saving message:', error);
                    }
                });
            }
        }

        // Send message on button click
        $('#sendBtn').click(function () {
            sendMessage();
        });

        // Send message on pressing the Enter key
        $('#messageInput').keydown(function (event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Prevent form submission if within a form
                sendMessage();
            }
        });

        // Fetch and display previous messages using AJAX
        var offset = 0; // Initial offset for pagination

        function fetchMessages(loadOlder = false) {
            $.ajax({
                url: '<?= base_url() ?>/matrimonialcontrollers/MatriMonialController/getMessages/' + receiver_id + '?offset=' + offset,
                type: 'GET',
                success: function (response) {
                    // Parse response if necessary
                    if (typeof response === "string") {
                        response = JSON.parse(response);
                    }

                    if (Array.isArray(response)) {
                        if (loadOlder) {
                            // Prepend older messages to the chat window
                            var messages = $('#messages');
                            response.reverse().forEach(function (msg) {
                                var messageText = msg.message;
                                var messageElement;
                                if (msg.sender_id === receiver_id) {
                                    messageElement = $('<li>')
                                        .addClass('message receiver')
                                        .attr('data-time', msg.time)
                                        .text(messageText);
                                } else {
                                    messageElement = $('<li>')
                                        .addClass('message sender')
                                        .attr('data-time', msg.time)
                                        .text(messageText);
                                }
                                messages.prepend(messageElement);
                            });
                        } else {
                            // Clear existing messages before appending new ones
                            $('#messages').empty();
                            response.reverse().forEach(function (msg) {
                                var messageText = msg.message;
                                var messageElement;
                                if (msg.sender_id === receiver_id) {
                                    messageElement = $('<li>')
                                        .addClass('message receiver')
                                        .attr('data-time', msg.time)
                                        .text(messageText);
                                } else {
                                    messageElement = $('<li>')
                                        .addClass('message sender')
                                        .attr('data-time', msg.time)
                                        .text(messageText);
                                }
                                $('#messages').append(messageElement);
                            });
                            $('#messages').scrollTop($('#messages')[0].scrollHeight);
                        }

                        // Update offset for pagination
                        offset += response.length;
                    } else {
                        console.error('Invalid response format:', response);
                    }
                },
                error: function (error) {
                    console.error('Error fetching messages:', error);
                }
            });
        }

        fetchMessages();

        // Scroll event to load older messages
        $('#messages').on('scroll', function () {
            if ($(this).scrollTop() === 0) {
                // User has scrolled to the top
                fetchMessages(true);
            }
        });
    });
</script>