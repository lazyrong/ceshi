<!DOCTYPE html>
<html>
<head>
<base href=".">
<meta charset="utf-8">
<meta content="width=device-width, minimum-scale=1, maximum-scale=1,initial-scale=1.0, user-scalable=no" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title><?=$app_list[$app_name]['title']?></title>
<link rel="stylesheet" href="<?=$static_file_path?>/css/jquery.mobile-1.3.1.min.css">
<style type="text/css">
.start{ text-align:center; padding-top:24px;}
</style>
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="http://libs.baidu.com/jquerymobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/header_stat.php';
?>
  
</head>
<body  class="ui-overlay-c" style="cursor: auto; zoom: 1;">
	<div data-role="page" data-url="/" tabindex="0" style="min-height: 572px;">
	<div id="page_app" data-role="page_app" data-theme="a">
	<div data-role="header" data-theme="a">
		<a href="/" data-icon="home" data-ajax="false" class="ui-link">首页</a>
		<h3 ><?=$app_list[$app_name]['title']?></h3>
		<a href="/" data-icon="arrow-l" data-ajax="false" class="ui-link">返回</a>
	</div>
	<div data-role="content" >
			<div style="">
				<p style="text-align: center;font-size:20px;">
				<?=$app_list[$app_name]['title']?>
				</p>
				<p style="text-align: center;">
				<?=$app_intro?>
				</p>
			</div>
			<div class="start">
	<a href="/nsns/test.php?sex=1" data-ajax="false"><img src="imgs/bt1.gif" width="124" height="36"></a>
	<a href="/nsns/test.php?sex=2" data-ajax="false"><img src="imgs/bt2.gif" width="122" height="36" style="margin-left:10px;"></a>
</div>
		</div>
<br />
<?php 
//require_once '../a_include/ad_mobile_20x5.php';
?>
<?php 
require_once '../a_include/ad_app_down.php';
?>
   <div>
        <br>
        <p style="text-align: center;">2013 &copy; Copyright 微测试</p>
        <br><br><br>
    </div>
    
</div>
<div role="navigation" class="ui-footer ui-footer-fixed ui-bar-a ui-navbar ui-mini" data-cid="tabbar1" data-role="tabbar" data-iconpos="top" data-theme="a">
    <ul class="ui-grid-c">
    <li class="ui-block-a"><a data-inline="true" data-iconpos="top" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" class="ui-link ui-btn ui-btn-up-a ui-btn-inline ui-btn-icon-left" href="/" data-ajax="false" data-transition="none" data-theme="a" data-icon="star"><span class="ui-btn-inner"><span class="ui-btn-text">全部</span><span class="ui-icon ui-icon-home ui-icon-shadow">&nbsp;</span></span></a></li>
    <li class="ui-block-b"><a data-inline="true" data-iconpos="top" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" class="ui-link ui-btn ui-btn-up-a ui-btn-inline ui-btn-icon-left" href="/love.php" data-ajax="false" data-transition="none" data-theme="a" data-icon="star"><span class="ui-btn-inner"><span class="ui-btn-text">缘分</span><span class="ui-icon ui-icon-star ui-icon-shadow">&nbsp;</span></span></a></li>
    <li class="ui-block-c"><a data-inline="true" data-iconpos="top" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" class="ui-link ui-btn ui-btn-up-a ui-btn-inline ui-btn-icon-left" href="/xingge.php" data-ajax="false" data-transition="none" data-theme="a" data-icon="star"><span class="ui-btn-inner"><span class="ui-btn-text">性格</span><span class="ui-icon ui-icon-star ui-icon-shadow">&nbsp;</span></span></a></li>
    <li class="ui-block-d"><a data-inline="true" data-iconpos="top" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" class="ui-link ui-btn ui-btn-inline ui-btn-icon-left ui-btn-up-a" href="/xingzuo.php" data-ajax="false" data-transition="none" data-theme="a" data-icon="star"><span class="ui-btn-inner"><span class="ui-btn-text">星座</span><span class="ui-icon ui-icon-star ui-icon-shadow">&nbsp;</span></span></a></li>
    </ul>
</div>
</div>
　 <?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/footer_stat.php';
?>
</div>
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/admobilebuttom.php';
?>
</body>
</html>
		
