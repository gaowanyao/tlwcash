<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <title>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</title>
    <meta name="author" content="阿耀王子">
</head>
<body>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<p>测试scrollTop--随滚动条距离顶部的高度body显示不同的颜色</p>
<script>
    setInterval(function () {
        var scrollTop=document.body.scrollTop; //开始值为0
        console.log(scrollTop);
//        随滚动条距离顶部的高度不同，显示的背景颜色也是不同的
        if(scrollTop < 100){
            document.body.style.background = "white";
        }else if(scrollTop < 200){
            document.body.style.background = "red";
        }else  if(scrollTop < 300){
            document.body.style.background = "orange";
        }else  if(scrollTop < 400){
            document.body.style.background = "yellow";
        }else  if(scrollTop < 500){
            document.body.style.background = "green";
        }else if(scrollTop < 600){
            document.body.style.background = "cyan";
        }else if(scrollTop < 700){
            document.body.style.background = "blue";
        }else if(scrollTop < 800){
            document.body.style.background = "purple";
        }else{
            document.body.style.background = "black";
        }
    },600);
</script>
</body>
</html>