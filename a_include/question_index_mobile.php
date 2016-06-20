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
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="http://libs.baidu.com/jquerymobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/header_stat.php';
?>
</head>
<body  class="ui-overlay-c" style="cursor: auto; zoom: 1;">
	<div data-role="page" data-url="/" tabindex="0" style="min-height: 572px;">
	<div id="page_app" data-role="page_app" data-theme="a">
	<div data-role="content" >
		<?php 
		if (!empty($app_list[$app_name]['logo'])) {
		?>
			<div style="text-align: center;">
				<img src="<?=$app_list[$app_name]['logo']?>" >
			</div>
			<?php 
		}
			?>
			<div style="text-align: center;">
				<p style="text-align: center;">
				<?=$app_list[$app_name]['title']?>
				<br/>
				<?=$app_intro?>
				</p>
			</div>
			<div style="text-align: center;margin-buttom:40px;" data-cid="image2">
			    <a class="ui-link" data-ajax="false" href="/<?=$app_name?>/test.php">
				<img src="/file/imgs/start.png" >
				</a>
			</div>
		
	</div>	
<?php 
//require_once dirname ( dirname ( __FILE__) ).'/a_include/ad_mobile_20x5.php';
?>
<?php 
//require_once dirname ( dirname ( __FILE__) ).'/a_include/ad_app_down.php';
?>
    <div>
        <br>
        <p style="text-align: center;">2013 &copy; Copyright 微测试</p>
        <br><br><br>
    </div>
	
	　 <?php 
	require_once '../a_include/footer_stat.php';
	?>
</div>
</div>

<?php 
//require_once './../a_include/admobilebuttom.php';
?>
</body>
</html>
