<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

if ($_COOKIE['v_o_t_'] && ($_REQUEST['act'] == 'view')) {
	header('Location:./view.php');
exit;
}
$app_name='shh';
$t_nick=$_COOKIE['v_nick'];
$t_name=$_COOKIE['v_name'];
$t_avatar=$_COOKIE['v_avatar'];
$t_sex=$_COOKIE ['v_sex'];
setcookie('v_appname',$app_name, time()+3000, '/');

setcookie($app_name.'_score_key',uniqid(), time()+3000, '/');

if (is_mobile()) {
	require_once './index_mobile.php';
} else {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>上海话八级测试_微测试</title>
<link rel="icon" href="../file/imgs/favicon.ico" type="image/x-icon" />
<link href="../file/css/app.css" rel="stylesheet" type="text/css" />
<link href="../file/css/show-min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body{background:#EEEFEF;}
.main .head{height:168px;width:760px;overflow:hidden;}
.main .cont{height:170px;width:540px;padding-left:280px;padding-top:40px;background:url(imgs/head2.jpg) no-repeat;overflow:hidden;}
.main .cont ul{float:left;width:280px;}
.main .cont .btn{float:left;width:280px;padding-top:20px;padding-left:50px;}
.main .cont li{padding:10px 0;font-size:18px;font-family:"微软雅黑";color:#363636;}
.main .cont .txt{height:30px;line-height:30px;width:160px;padding:2px 5px;}
.main .cont li span{font-weight:bold;margin-right:5px;color:#FFFFFF}
.main .cont #b{margin-left:5px;}
.main .cont label{cursor:pointer;padding:0 30px 0 10px;font-weight:bold;color:#FFFFFF;}
.main .m_bottom{height:102px;width:760px;overflow:hidden;}
</style>

<?php 
require_once '../a_include/header_stat.php';
?>
</head>

<body>
<div class="header"> 
	<div class="c">
		<div class="logo"><a href="/" target="_blank"><img src="http://app.qpic.cn/mblogpic/3ad571c3942b830d9ee6/2000" height="30"></a></div>
		<div class="l">
			<ul>
				<li><a href="/">大家都在玩</a></li>
				<li><a href="/hot.php">热门测试</a></li>
				<li><a href="/love.php">缘分爱情</a></li>
				<li><a href="/fangyan.php">缘分爱情</a></li>
                <li><a href="/">更多应用</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="paneAllWrapper">
	<div class="paneLeftWrapper">
		<div style="background:url(imgs/pre.jpg) 0 0 no-repeat;" class="imageWrapper">		
			<div class="imageActionWrapper">
				<div class="titleDetail">上海话八级测试</div>
				<div class="titleDetailSC">回答20道题，得到结果哦</div>
				<a href="test.php" class="actionProcessButton">我要测试</a>
			</div>
		</div>
		<div class="actionWrapper">
			
		</div>	
	</div>
	<div class="clear"></div>	
</div>
<div style="display:none">
</div>

<?php 
require_once '../a_include/footer_stat.php';
?>
<?php 
require_once '../a_include/adfloat.php';
?>
</body></html>
<?php 
}
?>