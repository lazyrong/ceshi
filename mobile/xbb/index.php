<?php 
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../../global.inc.php';
require_once './../../a_cache/app_top.php';


if ($_COOKIE['v_o_t_'] && ($_REQUEST['act'] == 'view')) {
	header('Location:./view.php');
	exit;
}
$app_name='xbb2';
setcookie('v_appname',$app_name, time()+3000, '/');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>测测你是小爸爸里的谁</title>
<style type="text/css">
body,ul,li,dl,dt,dd{margin:0;padding:0;}
body{ background:url(../images/bg.png);background-size:16px 7px;padding-bottom:120px;}
.face{width:296px;height:251px;margin:18px auto 0 auto;background:url(../images/a.png) no-repeat; background-size:296px 251px;}
.face .a{ width:278px; margin:0 auto; padding-top:67px;}
.face img{border-radius:0px;}
.start{ text-align:center; padding-top:24px;}
</style>
<?php 
require_once '../../a_include/header_stat.php';
?>
</head>

<body>
<div class="face"><div class="a"><img src="imgs/show.jpg" width="278" height="174"></div></div>
<div class="start"><a href="./test.php"><img src="../images/start.png" width="243" height="59" alt="开始测试" title="开始测试"></a></div>
<div style="display:none;">

</div>
<?php 
require_once '../../a_include/footer_stat.php';
?>
<?php 
require_once './../../a_include/admobilebuttom.php';
?>
</body></html>