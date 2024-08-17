<style>
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
<pre><?php echo $sender_id . $receiver_id; ?></pre> <!-- Corrected opening tag -->
<div id="chatroom" class="chatroom">
    <ul id="messages" class="messages"></ul>
    <div class="input-group">
        <input id="messageInput" class="form-control" autocomplete="off" placeholder="Type your message..." />
        <button id="sendBtn" class="btn btn-success">Send</button>
    </div>
</div>