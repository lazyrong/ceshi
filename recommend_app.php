<?
session_start();
require_once './a_cache/app_top.php';
$act = $_REQUEST['act'];
$app = $_REQUEST['app'];
$c = new SaeCounter();

$kv=new SaeKV();
$rs = $kv->init();
$recommend_app_list = (array) $kv->get('now_recommend_app');
if (!$recommend_app_list) {
	$recommend_app_list = array();
}

if ($act=='initcnt') {
	foreach ($app_list as $appname => $hot_app) {
		if ($c->get("app_result_count_".$appname)) {
			$c->remove("app_result_count_".$appname);
		} else {
			//$c->create("app_result_count_".$appname, 0);
		}
	}
	header ( 'Location:./recommend_app.php' );
	exit ();
}
if ($act == 'recommend' && $app) {
	if (!in_array($app, $recommend_app_list) && $app_list[$app]) {
		$recommend_app_list[] = $app;
	}
	$kv->set('now_recommend_app', $recommend_app_list);
	header ( 'Location:./recommend_app.php' );
	exit ();
}
if ($act == 'unrecommend' && $app) {
	if (in_array($app, $recommend_app_list) && $app_list[$app]) {
		$key = array_search($app, $recommend_app_list);
		if ($key !== NULL && $key !== false) {
			unset($recommend_app_list[$key]);
		}
	}
	$kv->set('now_recommend_app', $recommend_app_list);
	header ( 'Location:./recommend_app.php' );
	exit ();
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>配置测试 - 微测试 - 享受微测试乐趣！</title>
<meta name="description" content="微测试是一个基于腾讯微博的第三方应用平台，提供各种好玩、有趣的微博应用、心理测试应用，并且可以将测试结果发送到微博与好友们互动~" />
<meta name="keywords" content="微测试 趣味测试 微博应用 微测试网 趣味应用 好玩测试 有趣应用 应用平台 测试游戏 心理测试 小游戏 测试游戏 搞笑测试" />
<link rel="icon" target="_blank" href="./file/imgs/favicon.ico" type="image/x-icon" />
<link target="_blank" href="./file/css/global.css?2.13" rel="stylesheet" type="text/css" />
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
    </ul>
  </div>
</div>
<!--/header-->
<div class="head_clear"></div>

 <div class="cont_box">
    <div id="all_apps">
     <table border="1">
     <caption>应用列表</caption>
     <thead>
     <tr><th>LOGO</th><th>标题</th><th>测试数(<a href="?act=initcnt">清除</a>)</th><th>推广状态</th><th>操作</th></tr>
     </thead>
     <tbody>
     <?php 
     foreach ($app_list as $appname => $hot_app) {
     	echo '<tr>';
     	
     	if ($hot_app['logo']) {
     	echo '<td><img src="'.$hot_app['logo'].'"></td>';
     	} else {
     	echo '<td><img src="http://app.qpic.cn/mblogpic/4a2af0ed5f96e16ff036/460"></td>';
     	}
     	echo '<td><a href="./'.$appname.'" target="_blank">'.$hot_app['title'].'</a></td>';
     	$cnt = $c->get("app_result_count_".$appname);
     	if ($cnt) {
     		echo '<td>'.$c->get("app_result_count_".$appname).'</td>';
     	} else {
     		echo '<td>0</td>';
     	}
     	if (in_array($appname, $recommend_app_list)) {
     	echo '<td><font color="red">正在推广...</font></td>';
     	echo '<td><a href="?act=unrecommend&app='.$appname.'">取消推广</a></td>';
     	} else {
     		echo '<td>不在推广列表中</td>';
     		echo '<td><a href="?act=recommend&app='.$appname.'">设为推广</a></td>';
     	}
     	echo '</tr>';
     }
     ?>
     </tbody>
     </table>
    </div>
    <div class="clear"></div>

  </div><!--/cont_box--> 
<?php 
require_once './footer.php';
?>