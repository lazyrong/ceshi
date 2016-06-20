<?
require_once './global.inc.php';
require_once './a_cache/app_top.php';
$_COOKIE['v_appname'] = '';
setcookie('v_appname','', time()+3000, '/');

if (is_mobile()) {
require_once './index_mobile.php';
} else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>微测试 - 享受微测试乐趣！</title>
<meta name="description" content="微测试是一个基于腾讯微博的第三方应用平台，提供各种好玩、有趣的微博应用、心理测试应用，并且可以将测试结果发送到微博与好友们互动~" />
<meta name="keywords" content="微测试 趣味测试 微博应用 微测试网 趣味应用 好玩测试 有趣应用 应用平台 测试游戏 心理测试 小游戏 测试游戏 搞笑测试" />
<link rel="icon" target="_blank" href="<?=$static_file_path?>/imgs/favicon.ico" type="image/x-icon" />
<link target="_blank" href="<?=$static_file_path?>/css/index.css?2.13" rel="stylesheet" type="text/css" />
<?php 
require_once './a_include/header_stat.php';
?>
</head>

<body>
<div class="header">
  <div class="nav_item">
    <ul>
      <li><a class="vqu_logo" href="./">&nbsp;</a></li>
    </ul>
    <ul class="nav_r">
	  <li><a href="./fangyan.php">疯狂的方言</a></li>
	  <li><a href="./xingzuo.php">星座运势</a></li>
	  <li><a href="./xingge.php">性格测试</a></li>
	  <li><a href="./love.php">缘分爱情</a></li>
      <li><a href="./hot.php">热门测试</a></li>
    </ul>
  </div>
</div>
<!--/header-->
<div class="head_clear"></div>

  <div class="cont_box">
    <div class="head">
      <div class="h_left">
      <div id="hot_apps">
      <?php 
      foreach ($app_top_list as $top_app) {
      	if (!empty($app_list[$top_app])) {
      ?>
	    <a target="_blank" href="./<?=$top_app?>" title="<?=$app_list[$top_app]['title']?>，<?=$app_list[$top_app]['num']?>人在玩~"><img src="<?=$app_list[$top_app]['logo']?>" /></a>
      <?php 
		}
      }
      ?>
      </div>
       </div>
      <div class="h_right">
        <div class="title"> <span class="t1">热门测试</span> <span class="t2">使用人数</span> </div>
        <div class="list">
          <div class="ord">
            <table>
 <?php 
 	$idx = 0;
      foreach ($app_recommend_list as $top_app) {
      	if (!empty($app_list[$top_app])) {
      ?>
<tr height="23">
  <td width="210"><strong><?=$idx+1?>、</strong><a href="./<?=$top_app?>" target="_blank"><?=$app_list[$top_app]['title']?></a></td>
  <td align="right"><span><?=$app_list[$top_app]['num']?></span>人</td>
</tr>
      <?php 
      $idx++;
		}
		if ($idx == 9) {
			break;
		}
      }
      ?>
            </table>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <!--/head--> </div>

<?php 
require_once './a_include/ad960x90.php';
?>
    
 <div class="cont_box">
    <div id="all_apps">
      <ul>

      <?php 
      $idx = 0;
      foreach ($app_index_list as $index_app) {
      	if (!empty($app_list[$index_app])) {
      		$idx++;
      ?>
      <li> <a target="_blank" href="./<?=$index_app?>" title="<?=$app_list[$index_app]['title']?>，<?=$app_list[$index_app]['num']?>人在玩~"><img src="<?=$app_list[$index_app]['logo']?>" /></a> </li>
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
 <!-- <li> <a target="_blank" href="./" title="更多应用，敬请期待"><img src="http://app.qpic.cn/mblogpic/d6fdbb069d2cf694d96c/2000"  /></a> </li> -->
   <!--  <li> <a target="_blank" href="./" title="更多应用，敬请期待"><img src="http://app.qpic.cn/mblogpic/d6fdbb069d2cf694d96c/2000"  /></a> </li>   -->
      </ul>
    </div>
    <div class="clear"></div>

  </div><!--/cont_box--> 
<!--广告位：悬浮广告-->
<?php 
require_once './a_include/adfloat.php';
?>

<div class="cont_box footer">
<p> 2011 &copy; Copyright <a href="./">微测试</a>. All Rights Reserved | <a target="_blank" href="http://sae.sina.com.cn"><img src="http://static.sae.sina.com.cn/image/poweredby/117X12px.gif" /></a>
</p>
<?php 
require_once './a_include/footer_stat.php';
?>
</div><!--/footer-->

</body>
</html>
<?php 
}
?>
