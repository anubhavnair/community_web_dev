<script src="https://cdn.socket.io/4.0.0/socket.io.min.js"></script>

<script>
    $(document).ready(function () {
        var socket = io('http://localhost:3000');

        var sender_id = <?php echo json_encode($this->session->userdata('login')); ?>;
        // Replace with actual sender ID
        var receiver_id = <?php echo json_encode($matrimonial_profile['uid']); ?>; // Replace with actual receiver ID
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

                // Send the message to the server
                socket.emit('chat message', messageData);

                // Append the message to the chat as a sender's message
                // var messageElement = $('<li>').addClass('message sender').attr('data-time', currentTime).text(messageText);
                // $('#messages').append(messageElement);

                // Clear the input field
                $('#messageInput').val('');

                // Scroll to the bottom of the chat
                $('#messages').scrollTop($('#messages')[0].scrollHeight);
            }
        }

        // Send message on button click
        $('#sendBtn').click(function () {
            console.log('h')
            sendMessage();
        });

        // Send message on pressing the Enter key
        $('#messageInput').keydown(function (event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Prevent form submission if within a form
                sendMessage();
            }
        });

        socket.on('chat message', function (msg) {
            var messageText = msg.message;
            var messageElement;

            if (msg.sender_id === receiver_id) {
                messageElement = $('<li>').addClass('message receiver').attr('data-time', msg.time).text(messageText);
            } else {
                messageElement = $('<li>').addClass('message sender').attr('data-time', msg.time).text(messageText);
            }

            $('#messages').append(messageElement);
            $('#messages').scrollTop($('#messages')[0].scrollHeight);
        });

    });
</script>