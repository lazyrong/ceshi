<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
<meta content="width=device-width, minimum-scale=1, maximum-scale=1,initial-scale=1.0, user-scalable=no" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<base href=".">
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>微测试</title>
<!-- 统计代码 -->
<?php 
require_once './a_include/header_stat.php';
?>
</head>
<body  class="ui-overlay-c" style="cursor: auto; zoom: 1;">

<div data-role="page">
<div data-role="page_index" id="page_index">
	<div data-role="header">
		<h3 >微测试</h3>
	</div>

	<div data-role="content">
	<ul data-role="listview" data-divider-theme="a" data-inset="true">
	 <li data-role="list-divider" >热门测试</li>
      <?php 
      $idx = 0;
      foreach ($app_top_list as $hot_app) {
      	if (!empty($app_list[$hot_app])) {
      		$idx++;
      ?>
      <li data-theme="d" data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div" data-icon="arrow-r" data-iconpos="right">
      <a href="./<?=$hot_app?>"><img class="act_img" src="<?=$app_list[$hot_app]['logo']?>"></a>
      </li>
      <?php 
		}
      }
      ?>
	</ul>
	
	<ul data-role="listview" data-divider-theme="a" data-inset="true">
	 <li data-role="list-divider" >全部测试</li>
      <?php 
      $idx = 0;
      foreach ($app_index_list as $hot_app) {
      	if (!empty($app_list[$hot_app])) {
      		$idx++;
      ?>
      <li>
      <a href="./<?=$hot_app?>" data-ajax="false"><?=$app_list[$hot_app]['title']?></a>
      </li>
      <?php 
		}
      }
      ?>
	</ul>
	</div> <!--/content-->
    <div>
        <br>
        <p style="text-align: center;">2016 &copy; Copyright 微测试</p>
        <br><br><br>
    </div>
			
	<!--/footer-->

</div> <!--/page-->	
</div>
<?php 
require_once './a_include/admobilebuttom.php';
?>

<?php 
require_once './a_include/footer_stat.php';
?>
</body></html>