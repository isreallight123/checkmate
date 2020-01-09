var http = require('http');

var server = http.createServer(function onRequest(req, res) {
    res.writeHead(200, {'Content-Type': 'text/plain'});
    res.write('this is a test');
    res.end();
}).listen(8000);


// var express = require('express');
// var path = require('path');
// var open = require('open');

// var port = 3000;
// var app = express();

// app.get('/', function(req, res) {
//     res.send("hello");
//     // res.sendFile(path.join(__dirname, '../index.php'));
// });

// app.listen(port, function(err) {
//     if(err) {
//         console.log(err);
//     } else {
//         open('http://localhost:' +  port);
//     }
// })