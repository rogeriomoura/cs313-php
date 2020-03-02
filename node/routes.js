const fs = require('fs');

const requestHandler = (req, res) => {
    const url = req.url;
    const method = req.method;
    if (url === '/') {
        res.write('<html>');
        res.write('<head><title>Enter Name</title></head>');
        res.write('<body><h1>Please enter the text bellow: </h1>')
        res.write('<div><form action="/process" method="POST">First Name: <input name="first" type="text"><br>');
        res.write('Last Name: <input name="last" type="text"><br><br>')
        res.write('<button type="submit">Send</button></form></div>');
        res.write('</body></html>');
        return res.end();
    }
    
    if (url === '/process' && method === 'POST') {
        const body = [];
        req.on('data', (chunck) => {
            body.push(chunck);
        });
        return req.on('end', () => {
            const parsedBody = Buffer.concat(body).toString();
            const message = parsedBody.split('=')[1];
            exports.last = parsedBody.split('=')[2];
            exports.first = message.split('&')[0];
            
            res.statusCode = 302;
            res.setHeader('Location', '/display');

            return res.end();
        });
    }

    if (url === '/display') {
        res.write('<html>');
        res.write('<head><title>Display Name</title></head>');
        res.write('<body><h1>This is the text you entered: </h1>');
        res.write('<div><p>First Name: ' + exports.first + '</p>');
        res.write('<p>Last Name: ' + exports.last + '</p></div>');
        res.write('</body></html>');
        return res.end();
    }
};


exports.handler =  requestHandler;