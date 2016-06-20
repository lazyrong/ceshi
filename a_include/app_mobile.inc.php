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
<!-- Home -->
<?
if(!islogined()) {
?>
			<div>
				<p style="text-align: center;">
				<?=$app_intro?>
				</p>
			</div>
			<div style="text-align: center;" >
			    <a class="ui-link" data-ajax="false" href="/<?=$app_name?>/login.php?id=q&app=<?=$app_name?>">
				<img src="<?=$static_file_path?>/imgs/enjoy_qq.png"	style="width: 170px; height: 32px; margin-bottom:6px;">
				</a>
			</div>
			<?php 
//require_once dirname ( dirname ( __FILE__) ).'/a_include/ad234x60.php';
?>
			<div>
				<p style="text-align: center;">要登陆后才能测试哦~~</p>
			</div>
<?php 
} else {
	$t_nick=$_COOKIE['v_nick'];
	$t_name=$_COOKIE['v_name'];
	$t_avatar=$_COOKIE['v_avatar'];
?>
<script>
var btn_enable = 1;
function my_on_submit(A) {
	var B = document.getElementById("my_nick").value;
	if (B == "") {
		alert("名字不能为空哦~~");
		document.getElementById("my_nick").focus();
		return false
	}
	if (B.length > 7) {
		alert("名字超过6个字了哦~");
		document.getElementById("my_nick").focus();
		return false
	}
	on_submit(A, B)
}
function on_submit(A, C) {
	document.getElementById("t_name").value = A;
	document.getElementById("t_nick").value = C;
	<?php if ($is_control_multi_click == 1) {?>
	if (btn_enable == 0) {
		return;
	} else {
		btn_enable = 0;
		$('#btn_submit_img').hide();$('#load_pic').show();
		setTimeout(function(){btn_enable = 1;$('#load_pic').hide();$('#btn_submit_img').show();},10000);
	}
	<?php }?>
	var B = document.getElementById("form1");
	B.submit()
}
</script>
	<?php 
//require_once dirname ( dirname ( __FILE__) ).'/a_include/ad_app_down.php';
?>
			<div data-role="controlgroup" >
	            <label for="my_nick">
	                请输入名字(最多六个字):
	            </label>
	            <input name="my_nick" id="my_nick"  placeholder="请输入名字(最多六个字)" value="<?=$t_nick?>" type="text">
	        </div>
        
			<div style="text-align: center;" >
				<a href="javascript:void(0);" class="ui-link" data-ajax="false" onclick="my_on_submit('<?=$t_name?>');">
				<img src="<?=$static_file_path?>/imgs/share.gif" id="btn_submit_img"  >
				</a>
				<img id='load_pic' src='http://app.qpic.cn/mblogpic/240dcbe326654d4738c8/460' style='display:none;'/>
			</div>
			<form action="/<?=$app_name?>/" method="post" id="form1" name="form1" style="font-size:14px; color:#666;text-align:center;">
			<input type="hidden" id="t_name" name="t_name" />
			<input type="hidden" id="t_nick" name="t_nick" />
			 <?php 
    switch ($at_fans_mode) {
    	case 1:
    		echo '<input type="hidden" id="invite" name="invite" value="1" />';
    		break;
    	case 2:
    		echo '<input type="checkbox" id="invite" name="invite" value="1" checked /><span style="color:#cccccc;font-size:12px;">邀请好友试试</span>';
    		break;
    	case 3:
    		echo '<input type="checkbox" id="invite" name="invite" value="1"  /><span style="color:#cccccc;font-size:12px;">邀请好友试试</span>';
    		break;
    	case 4:
    		break;
    	default:
    		echo '<input type="checkbox" id="invite" name="invite" value="0" checked /><span style="color:#cccccc;font-size:12px;">邀请好友试试</span>';
    		break;
    }
    ?>
			</form>
<?php 
}
?>

</div>
<?php 
//require_once dirname ( dirname ( __FILE__) ).'/a_include/ad234x60.php';
?>
    <div>
        <br>
        <p style="text-align: center;">2013 &copy; Copyright 微测试</p>
        <br><br><br>
    </div>
</div>
</div>
　 <?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/footer_stat.php';
?>
</div>
<?php 
//require_once dirname ( dirname ( __FILE__) ).'/a_include/admobilebuttom.php';
?>
</body>
</html>
