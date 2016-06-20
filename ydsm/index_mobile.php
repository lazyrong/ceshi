<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title><?=$app_list[$app_name]['title']?></title>
<style type="text/css">
body,ul,li,dl,dt,dd{margin:0;padding:0;}
body{ background:url(../file/imgs/mobile/bg.png);background-size:16px 7px;padding-bottom:120px;}
.face{width:296px;height:184px;margin:18px auto 0 auto;background:url(../file/imgs/mobile/a.png) no-repeat;background-size:296px 251px;padding-top:67px;}
.face .cont{width:258px;height:136px;padding:38px 0 0 20px;margin:0 auto;background:url(imgs/show.jpg) no-repeat;background-size:278px 174px;}
.face .cont ul{float:left;width:258px;height:54px;}
.face .cont li{float:left;width:46px;height:54px;}
.face .cont a{width:46px;height:54px;float:left;}
.face .cont .txt{height:26px;line-height:26px;width:120px;padding:0 2px;}
.face .cont li span{font-weight:bold;margin-right:10px;color:#2b2b2b;}
.face .cont label{cursor:pointer;margin:0 10px 0 10px;font-weight:bold;color:#2b2b2b;}
.start{ text-align:center; padding-top:24px;}

</style>
<script>
function goUrl(v){
	window.location="view.php?score="+v;
}
</script>

</head>

<body>
<div class="face">
   <div class="cont">
   		<ul>
			<li><a href="#" onclick="goUrl(1);"></a></li>
			<li><a href="#" onclick="goUrl(2);"></a></li>
			<li><a href="#" onclick="goUrl(3);"></a></li>
			<li><a href="#" onclick="goUrl(4);"></a></li>
			<li><a href="#" onclick="goUrl(5);"></a></li>
		</ul>
		<ul>
			<li><a href="#" onclick="goUrl(1);"></a></li>
			<li><a href="#" onclick="goUrl(2);"></a></li>
			<li><a href="#" onclick="goUrl(3);"></a></li>
			<li><a href="#" onclick="goUrl(4);"></a></li>
			<li><a href="#" onclick="goUrl(5);"></a></li>
		</ul>
   </div>
</div><!--/face-->


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