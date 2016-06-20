<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title><?=$app_list[$app_name]['title']?></title>
<style type="text/css">
body,ul,li,dl,dt,dd{margin:0;padding:0;}
body{ background:url(../file/imgs/mobile/bg.png);background-size:16px 7px;padding-bottom:120px;}
.face{width:296px;height:251px;margin:18px auto 0 auto;background:url(../file/imgs/mobile/a.png) no-repeat; background-size:296px 251px;}
.face .a{ width:278px; margin:0 auto; padding-top:67px;}
.face img{border-radius:0px;}
.start{ text-align:center; padding-top:24px;}
</style>
<?php 
require_once './../a_include/header_stat.php';
?>
</head>

<body>
<div class="face"><div class="a"><img src="./imgs/show.jpg" width="278" height="174"></div></div>
<div class="start"><a href="./test.php"><img src="../file/imgs/mobile/start.png" width="243" height="59" alt="开始测试" title="开始测试"></a></div>
<br/>
<?php 
//require_once '../a_include/ad_mobile_20x5.php';
?>
<?php 
require_once '../a_include/ad_app_down.php';
?>
<?php 
require_once './../a_include/footer_stat.php';
?>
<?php 
require_once './../a_include/admobilebuttom.php';
?>
</body></html>