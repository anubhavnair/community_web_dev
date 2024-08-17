const express = require("express");
const http = require("http");
const socketIo = require("socket.io");
const cors = require("cors");
const axios = require("axios");

const app = express();
const server = http.createServer(app);
const io = socketIo(server, {
    transports: ['websocket', 'polling'],
    cors: {
        origin: 'http://localhost', // Replace with your actual front-end URL
        methods: ['GET', 'POST']
    }
});

const corsOptions = {
	origin: "http://localhost", // Replace with your actual front-end URL
	methods: ["GET", "POST"],
	allowedHeaders: ["Content-Type"],
};

app.use(cors(corsOptions));

io.on("connection", (socket) => {
	console.log("A user connected");

	socket.on("disconnect", () => {
		console.log("User disconnected");
	});

	socket.on("chat message", (msg) => {
        console.log("Received message:", msg); // Log the received message
        
        if (!msg.sender_id || !msg.receiver_id || !msg.message) {
            console.error("Invalid data received:", msg);
            socket.emit('error', { status: 'error', message: 'Invalid data' });
            return;
        }
        
        io.emit("chat message", msg);
    
        axios.post(
            "http://localhost/community_web_dev/index.php/matrimonialcontrollers/MatriMonialController/saveMessage",
            {
                sender_id: msg.sender_id,
                receiver_id: msg.receiver_id,
                message: msg.message,
            }
        )
        .then((response) => {
            console.log("Message saved:", response.data);
        })
        .catch((error) => {
            console.error(
                "Error saving message:",
                error.response ? error.response.data : error.message
            );
        });
    });
    
	axios
		.get(
			"http://localhost/community_web_dev/matrimonialcontrollers/MatriMonialController/getMessages"
		)
		.then((response) => {
			response.data.forEach((msg) => {
				socket.emit("chat message", msg);
			});
		})
		.catch((error) => {
			console.error("Error fetching messages:", error);
		});

	socket.on("disconnect", () => {
		console.log("User disconnected");
	});
});

server.listen(3000, () => {
	console.log("Socket.IO server running on port 3000");
});
