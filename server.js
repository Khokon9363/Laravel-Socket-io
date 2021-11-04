const express = require('express')

const app = express()

const server = require('http').createServer(app)

const io = require('socket.io')(server, {
    cors: {origin: "*"}
})

io.on('connection', (socket) => {
    console.log('New connection !!')

    // Receive and event from the client
    socket.on('sendEventToServer', (message) => {
        console.log(message)

        // Broadcast another event to the client
        socket.broadcast.emit('sendEventToClient', message)
    })
    
    socket.on('disconnect', (socket) => {
        console.log('Disconnect !!')
    })
})

server.listen(3000, () => {
    console.log(`Server running !!`)
})