<?php
;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$app_list[$app_name]['title']?> - 微测试网站 -vceshi.net</title>
<link rel="shortcut icon" href="<?=$static_file_path?>/imgs/favicon.ico" />
<link rel="icon" href="<?=$static_file_path?>/imgs/favicon.ico" type="image/x-icon" />
<link href="<?=$static_file_path?>/css/global.css?2.14" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://cbjs.baidu.com/js/m.js"></script>
<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/header_stat.php';
?>
</head>

<body>
<div class="header">
  <div class="nav_item">
    <ul>
      <li><a class="vqu_logo" href="../"></a></li>
	  <li><a href="../hot.php">热门测试</a></li>
	  <li><a href="../love.php">缘分爱情</a></li>
	  <li><a href="../xingzuo.php">星座运势</a></li>
	  <li><a href="../xingge.php">性格测试</a></li>
	  <li><a href="../fangyan.php">疯狂的方言</a></li>
    </ul>
    <ul class="nav_r">
<?
if(islogined())
{
	$avatar=$_COOKIE['v_avatar'];
	$nick=$_COOKIE['v_nick'];
	$nick=mb_substr($nick, 0, 5, 'utf-8');
	$nick_len=mb_strlen($nick,'UTF8');

	echo "<li><a href=\"./login.php?id=logout\">退出</a></li>";
	echo '<li><a href="">'.$nick.' 您好！ </a></li>';
	echo "<li><img src=\"".$avatar."\" style=\"width:25px;height:25px;margin:0 auto;padding:5px 5px;\"/></li>";
}
else
{echo '<li><a href="">您好，欢迎来到微测试！</a></li>';}
?>
    </ul>
  </div>
</div>
<!--/header-->
<div class="head_clear"></div>