const express = require('express');
const cors = require("cors");
const app = express();
const http = require('http');
const { Server } = require('socket.io');

//start changes by ahsan
// const fs = require('fs');
//
// var options = {
//     cert:    fs.readFileSync('/etc/letsencrypt/live/theguide.us/fullchain.pem'),
//     key:   fs.readFileSync('/etc/letsencrypt/live/theguide.us/privkey.pem')
// };

// let server = http.createServer(app);
// const  server = http.createServer(options,app);
//end changes by ahsan

//console.log(server);

const server = http.createServer(app);

const io = new Server(server, {
    cors: {
        origin: '*',
        methods: ['GET', 'POST']
    },
    path: '/socket.io'
});

const Port = 5000;

app.get('/', (req, res) => {
    res.send('socket server is listening on here')
});

// //Whenever someone connects this gets executed
io.on('connection', socket => {
    socket.on('event', () => {
        socket.emit('event_ack', { message: 'you got connected', status: 200 })
    });
    socket.onAny((eventName, ...args) => {
        socket.broadcast.emit(`${eventName}_ack`, ...args)
    })
});

server.listen(Port, () => {
    console.log('listening on *:' + Port)
});