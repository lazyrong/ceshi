<?php 
$t_nick=$_COOKIE['v_nick'];
$t_name=$_COOKIE['v_name'];
$t_avatar=$_COOKIE['v_avatar'];
?>
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

  <script>
 $(document).ready(function() {
  $.mobile.ajaxLinksEnabled = false;
 });
</script>
  <?php 
require_once '../a_include/header_stat.php';
?>
<script>
var btn_enable = 1;
function on_submit()
{
	if(document.getElementById('name1').value=='')
	{
		alert('你的姓名不能为空！');
		document.getElementById('name1').focus();
		return false;
	}
	if(document.getElementById('name2').value=='')
	{
		alert('Ta的姓名不能为空！');
		document.getElementById('name2').focus();
		return false;
	}
	<?php if ($is_control_multi_click == 1) {?>
	if (btn_enable == 0) {
		return;
	} else {
		btn_enable = 0;
		$('#btn_submit_img').hide();$('#load_pic').show();
		setTimeout(function(){btn_enable = 1;$('#load_pic').hide();$('#btn_submit_img').show();},10000);
	}
	<?php }?>
	var form1=document.getElementById('form1');
	form1.submit();
}

</script>
</head>
<body  class="ui-overlay-c" style="cursor: auto; zoom: 1;">
	<div data-role="page" data-url="/" tabindex="0" style="min-height: 572px;">
	<div id="page_app" data-role="page_app" data-theme="a">
	<div data-role="content" >
	
			<div style="text-align: center;">
				<img src="<?=$app_list[$app_name]['logo']?>">
			</div>
			<form action="/xmyf/" method="post" id="form1" name="form1" >
			<div data-role="controlgroup" >
	            <label for="name1">
	                你的姓名：(*最多3字)
	            </label>
	            <input name="name1" id="name1" maxLength="3" size="3"  placeholder="你的姓名：(*最多3字)" value="<?=$_COOKIE['v_nick']?>" type="text">
	        </div>
			<div data-role="controlgroup" >
	            <label for="name2">
	                Ta的姓名：(*最多3字)
	            </label>
	            <input name="name2" id="name2" maxLength="3" size="3"  placeholder="Ta的姓名：(*最多3字)" value="" >
	        </div>
        
			<div style="text-align: center;" data-cid="image10" >
				<img src="<?=$static_file_path?>/imgs/share.gif" id="btn_submit_img" onclick="on_submit('');" >
				<img id='load_pic' src='http://app.qpic.cn/mblogpic/240dcbe326654d4738c8/460' style='display:none;'/>
			</div>
			<p style="text-align:center;margin-top:10px;">
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
    		break;
    }
    ?>
    </p>
			</form>
			
		</div>

<?php 
//require_once '../a_include/ad_mobile_20x5.php';
?>	
<?php 
require_once '../a_include/ad_app_down.php';
?>
<div>
        <br>
        <p style="text-align: center;">2013 &copy; Copyright 微测试</p>
        <br>
    </div>
    
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
