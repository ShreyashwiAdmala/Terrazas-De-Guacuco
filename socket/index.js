var express = require('express');

var app = express();
var http = require('http').Server(app);
var io = require('socket.io')(http,{cors:{
    origin:"*"
}});

var mysql = require('mysql');
require('dotenv').config();

var moment = require('moment');

var sockets={}

var mysqlConnection = mysql.createConnection({
    host:'127.0.0.1',
    port:'3306',
    user:'sxg1710',
    password:'terrazasDeGuacucoWDM',
    database:'laravel',
})

mysqlConnection.connect((err) => {
    if(err) {
        console.error('Error connecting to MySQL database: ' + err.stack);
        return;
    }
        // throw err;
    console.log("Db connected successfully!!!")
});

io.on('connection',function(socket){
    if(!sockets[socket.handshake.query.user_name]){
        sockets[socket.handshake.query.user_name] = [];
    }
    sockets[socket.handshake.query.user_name].push(socket);
    socket.broadcast.emit('connectedUser',socket.handshake.query.user_name);

    mysqlConnection.query('select * from registers', function(err,res){
        if(err){
            throw err;
        }
        console.log("User Connected",socket.handshake.query.user_name);
    });

    socket.on('send_message',function(data){
        for(var index in sockets[data.senderName]){
            sockets[data.senderName][index].emit('recieve_message',data);
        }
        for(var index in sockets[data.recieverName]){
            sockets[data.recieverName][index].emit('recieve_message',data);
        }
        mysqlConnection.query(`INSERT INTO chat_databases (senderName, recieverName, message,idCheck) values ('${data.senderName}','${data.recieverName}','${data.message}','${data.idCheck}')`,function(err,res){
            if(err)
                throw err;

            console.log("Message sent");
        })
    })
    socket.on('disconnected',function(err){
        socket.broadcast.emit('disconnectedUser',socket.handshake.query.user_name);
        mysqlConnection.query('select * from registers', function(err,res){
            if(err){
                throw err;
            }
            console.log("User Disconnected",socket.handshake.query.user_name);
        });
    });
});

http.listen(3000);


