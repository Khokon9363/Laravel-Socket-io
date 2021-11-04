<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel + Socket io</title>
         <!-- Styles -->
         <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                text-align: center;
            }
        </style>
    </head>
    <body>
        
        <h1>Laravel + Socket io</h1>
        
        <button id="notify">Notify !!</button>

    <script src="https://cdn.socket.io/4.0.1/socket.io.min.js" integrity="sha384-LzhRnpGmQP+lOvWruF/lgkcqD+WDVt9fU3H4BWmwP5u5LTmkUGafMcpZKNObVMLU" crossorigin="anonymous"></script>
    <script>
        const IP_ADDRESS = 'localhost'
        const SOCKET_PORT = '3000'

        const socket = io(`${IP_ADDRESS}:${SOCKET_PORT}`)
              socket.on('connection')
    </script>

    <script>
        // Send an event to the server
        document.querySelector('#notify').onclick = () => {
            const message = 'This will be a dynamic content !!'
            socket.emit('sendEventToServer', message)
        }

        // Receive an event from the server
        socket.on('sendEventToClient', (message) => {
            alert('Look at your console !!')
            console.log(message)
        })
    </script>
    
    </body>
</html>