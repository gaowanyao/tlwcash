<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title></title>

    <script src='//cdn.bootcss.com/socket.io/1.3.7/socket.io.js'></script>
    <script>
        // 如果服务端不在本机，请把127.0.0.1改成服务端ip
        var socket = io('ws://42.159.225.230:2346');
        // 当连接服务端成功时触发connect默认事件
        socket.on('connect', function(){
            console.log('connect success');
            console.log('connect success');
        });

        socket.on('con', function(data){
            socket.emit("co",data);
            console.log(data);
        });

        //        监听socket断开与重连。
        socket.on('disconnect', function() {
            console.log("与服务其断开");
        });


        socket.on('reconnect', function() {
            console.log("重新连接到服务器");
        });
    </script>

</head>
<body>

<div id="sse">
    <a >运行 WebSocket</a>
</div>

</body>
</html>