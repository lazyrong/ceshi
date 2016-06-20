<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, minimum-scale=1, maximum-scale=1,initial-scale=1.0, user-scalable=no" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title><?=$app_list[$app_name]['title']?></title>
<link rel="stylesheet" href="<?=$static_file_path?>/css/jquery.mobile-1.3.1.min.css">
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
		<p style="text-align: center;color:rgb(173,74,33)">
			有人说：人的一生要遇到四种人，第一个是自己，第二个是最爱你的人，第三个是你最爱的人，第四个是共度一生的人。生活是现实的，后面的三个人往往不会是同一个人。那么，你会如何抉择呢？
		</p>
		<p style="text-align: center;color:rgb(231,0,107)">
				情景：Y和B从小就认识，但不是很熟，后来上了大学时考入同一座城市，因为是老乡彼此常常相互照应，不论念书时还是放假回乡，都会常在一起玩，后来就相爱了。感情成熟后顺利结了婚，并且婚后感情一直很好，没有任何不愉快。可是一次偶然的机会，Y发现B出轨了，第三者是B曾经追求过的但遭到拒绝的对象，他们再一次校友聚会上重遇，时空变换居然让他们互生情愫，渐渐走到了一起......
		</p>
			<div style="text-align: center;margin-buttom:10px;" data-cid="image2">
			    <a class="ui-link" data-ajax="false" href="/jccs/test.php">
				<img src="../file/imgs/start.png" >
				</a>
			</div>
			<br />
		</div>

<?php 
//require_once '../a_include/ad_mobile_20x5.php';
?>
<?php 
require_once '../a_include/ad_app_down.php';
?>
		<div>
			<br />
			<p style="text-align: center;">2013 &copy; Copyright 微测试</p>
			<br />
		</div>
	</div>
	
<div role="navigation" class="ui-footer ui-footer-fixed ui-bar-a ui-navbar ui-mini" data-cid="tabbar1" data-role="tabbar" data-iconpos="top" data-theme="a">
    <ul class="ui-grid-c">
    
    <li class="ui-block-a"><a data-inline="true" data-iconpos="top" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" class="ui-link ui-btn ui-btn-up-a ui-btn-inline ui-btn-icon-left" href="/hot.php" data-ajax="false" data-transition="none" data-theme="a" data-icon="star"><span class="ui-btn-inner"><span class="ui-btn-text">热门</span><span class="ui-icon ui-icon-home ui-icon-shadow">&nbsp;</span></span></a></li>
    
    <li class="ui-block-b"><a data-inline="true" data-iconpos="top" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" class="ui-link ui-btn ui-btn-up-a ui-btn-inline ui-btn-icon-left" href="/love.php" data-ajax="false" data-transition="none" data-theme="a" data-icon="star"><span class="ui-btn-inner"><span class="ui-btn-text">缘分</span><span class="ui-icon ui-icon-star ui-icon-shadow">&nbsp;</span></span></a></li>
    
    <li class="ui-block-c"><a data-inline="true" data-iconpos="top" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" class="ui-link ui-btn ui-btn-up-a ui-btn-inline ui-btn-icon-left" href="/xingge.php" data-ajax="false" data-transition="none" data-theme="a" data-icon="star"><span class="ui-btn-inner"><span class="ui-btn-text">性格</span><span class="ui-icon ui-icon-star ui-icon-shadow">&nbsp;</span></span></a></li>
    
    <li class="ui-block-d"><a data-inline="true" data-iconpos="top" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" class="ui-link ui-btn ui-btn-inline ui-btn-icon-left ui-btn-up-a" href="/xingzuo.php" data-ajax="false" data-transition="none" data-theme="a" data-icon="star"><span class="ui-btn-inner"><span class="ui-btn-text">星座</span><span class="ui-icon ui-icon-star ui-icon-shadow">&nbsp;</span></span></a></li>
    
    </ul>
</div>
	</div>
	
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/footer_stat.php';
?>
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/admobilebuttom.php';
?>
</body>
</html>
