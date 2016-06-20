<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title><?=$app_nick[$app_name]?></title>
<link rel="stylesheet" href="<?=$static_file_path?>/css/jquery.mobile-1.3.1.min.css">
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="http://libs.baidu.com/jquerymobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>

  <script>
 $(document).ready(function() {
  $.mobile.ajaxLinksEnabled = false;
 });
</script>
<?php 
require_once './../a_include/header_stat.php';
?>
  
</head>
<body  class="ui-overlay-c" style="cursor: auto;">
	<!-- Home -->
<div id="login_page" data-role="page" data-theme="c">

		<div data-role="header" data-theme="c">
			<a href="/" data-icon="home" data-ajax="false" class="ui-link">首页</a>
			<h3 ><?=$app_nick[$app_name]?></h3>
			<a href="/" data-icon="arrow-l" data-ajax="false" class="ui-link">返回</a>
		</div>
		
		<div data-role="content" >
			<div style="text-align: center;" data-cid="image1"
				class="codiqa-control">
				<img src="<?=$file_logo[$app_name]?>" >
			</div>
			<div data-cid="text1" style="">
				<p data-mce-style="text-align: center;" style="text-align: center;">
				<?=$app_intro?>
				</p>
			</div>
			<div data-cid="text1" style="">
				<p data-mce-style="text-align: center;" style="text-align: center;">
				<iframe src="http://open.qzone.qq.com/like?url=http%3A%2F%2Fuser.qzone.qq.com%2F2756830039&type=button&width=300&height=30&style=3" allowtransparency="true" scrolling="no" border="0" frameborder="0" style="width:400px;height:24px;border:none;overflow:hidden;"></iframe></div>
				</p>
			</div>
			<div style="text-align: center;" data-cid="image2">
			    <a class="ui-link" data-ajax="false" href="./test.php">
				<img src="<?=$static_file_path?>/imgs/enjoy_qq.png"	style="width: 170px; height: 32px">
				</a>
			</div>
			<div style="text-align: center;" data-cid="image3"
				class="codiqa-control">
				<img src="<?=$file_demo[$app_name]?>" width="80%" >
			</div>

           <div data-role="footer" data-theme="c">
			　 <h4>2013 &copy; Copyright 微测试</h4>
			　 <?php 
				require_once '../a_include/footer_stat.php';
			  ?>
			</div> 	
		</div>
	</div>
<?php 
require_once './../a_include/admobilebuttom.php';
?>
</body>
</html>
