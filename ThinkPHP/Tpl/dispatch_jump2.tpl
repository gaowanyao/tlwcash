<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>Document</title>
    <script src="<?php echo C('home_js') ?>/jquery-1.7.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo C('home_css') ?>/tipDialog.css"/>
    <script type="text/javascript" src="<?php echo C('home_js') ?>/tipDialog.js"></script>



</head>
<body style="">
<?php if(isset($message)) {?>
<script>
$(function(){
tipDialog('<?php echo $message ?>','ok','',3);
setTimeout(function(){
window.location='<?php echo($jumpUrl); ?>';
},3000);
            })
        </script>
<?php }else{ ?>
<script>
    $(function(){
        tipDialog('<?php echo $error ?>','error','',3);
        setTimeout(function(){
            window.location='<?php echo($jumpUrl); ?>';
        },3000);
    })
</script>
<?php } ?>
</body>
</html>


