<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>

</head>
<body>



<script src="/Public/resource/global/plugins/jquery.min.js" type="text/javascript"></script>

<script>


    socket = new WebSocket("ws://42.159.225.230:2346");

    /* 绑定事件 */
    socket.onopen = function() {
//        $("#msg").html("连接成功...");
        console.log("连接成功");
    };


    socket.onerror = function() {
        console.log("错误");
    };

    socket.onclose = function() {
        console.log("关闭");
    };


</script>


</body>

</html>