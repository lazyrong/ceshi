<?
require_once './global.inc.php';
require_once './a_cache/app_top.php';
$_COOKIE['v_appname'] = '';
setcookie('v_appname','', time()+3000, '/');
if (is_mobile()) {
require_once './hot_mobile.php';
} else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>热门测试 - 微测试 - 享受微测试乐趣！</title>
<meta name="description" content="微测试是一个基于腾讯微博的第三方应用平台，提供各种好玩、有趣的微博应用、心理测试应用，并且可以将测试结果发送到微博与好友们互动~" />
<meta name="keywords" content="微测试 趣味测试 微博应用 微测试网 趣味应用 好玩测试 有趣应用 应用平台 测试游戏 心理测试 小游戏 测试游戏 搞笑测试" />
<link rel="icon" target="_blank" href="<?=$static_file_path?>/imgs/favicon.ico" type="image/x-icon" />
<link target="_blank" href="<?=$static_file_path?>/css/global.css?2.13" rel="stylesheet" type="text/css" />
<?php 
require_once './a_include/header_stat.php';
?>
</head>

<body>
<div class="header">
  <div class="nav_item">
    <ul>
      <li><a class="vqu_logo" href="./"></a></li>
	  <li><a href="./hot.php">热门测试</a></li>
	  <li><a href="./love.php">缘分爱情</a></li>
	  <li><a href="./xingzuo.php">星座运势</a></li>
	  <li><a href="./xingge.php">性格测试</a></li>
	  <li><a href="./fangyan.php">疯狂的方言</a></li>
    </ul>
    <ul class="nav_r">
<?
if(islogined()) {
	$avatar=cookie('v_avatar');
	$nick=cookie('v_nick');
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
 <div class="cont_box">
    <div id="all_apps">
      <ul>
      
      <?php 
      $idx = 0;
      foreach ($app_hot_list as $hot_app) {
      	if (!empty($app_list[$hot_app])) {
      		$idx++;
      ?>
      <li> <a target="_blank" href="./<?=$hot_app?>" title="<?=$app_list[$hot_app]['title']?>，<?=$app_list[$hot_app]['num']?>人在玩~"><img src="<?=$app_list[$hot_app]['logo']?>" /></a> </li>
      <?php 
		}
      }
      $leftitem = $idx % 4;
      if ($leftitem) {
      	$rank_num=0;
      	while($rank_num< 4 - $leftitem) {
      	?>
      	<li> <a target="_blank" href="/" title="更多应用，敬请期待"><img src="http://app.qpic.cn/mblogpic/d6fdbb069d2cf694d96c/2000"  /></a> </li>
      	<?
      	$rank_num++;
      	}
      }
      ?>
      </ul>
    </div>
    <div class="clear"></div>

  </div><!--/cont_box--> 
<?php 
require_once './a_include/ad960x90.php';
?>
  
<!-- 广告位：悬浮广告 -->
<?php 
require_once './a_include/adfloat.php';
require_once './footer.php';
}
?>