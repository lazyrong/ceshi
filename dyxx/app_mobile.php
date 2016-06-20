<?php 
	$t_nick=$_COOKIE['v_nick'];
	$t_name=$_COOKIE['v_name'];
	$t_avatar=$_COOKIE['v_avatar'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
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
 var current_i=0;
 var i30_ischecked=0;
 var btn_enable = 1;
 $(function()
 {
 	$('.question_item').click(function() {
 		current_i++;
 		$('#count').html(current_i);
 		$(this).parents('.question').hide(300);
 		$(this).parents('.question').next().show(300);
 	});
 	
 	$('.question_last_item').click(function() {
 		if(i30_ischecked==0)
 		{
 			current_i++;
 			$('#count').html(current_i);
 		}
 		i30_ischecked=1;
 	});

 });
 function on_submit()
 {
 	if(i30_ischecked==0)
 	{
 		alert('请选择一项！');
 		return;
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
<style>
.app_content{ margin:1px auto; width:80%; text-align:center; margin-bottom:20px}
.app_content .question{padding:10px 0; display:none;}
</style>
<?php 
require_once '../a_include/header_stat.php';
?>
</head>
<body  class="ui-overlay-c" style="cursor: auto;">

	<div id="login_page" data-role="page" data-theme="c">
		<div data-role="header" data-theme="c">
			<a href="/" data-icon="home" data-ajax="false" class="ui-link">首页</a>
			<h3 ><?=$app_list[$app_name]['title']?></h3>
			<a href="/" data-icon="arrow-l" data-ajax="false" class="ui-link">返回</a>
		</div>
		
		<div data-role="content" >
			
			<div class="app_content">
				<form action="./" method="post" id="form1" name="form1">
					<div data-role="controlgroup" class="question" style="display:block;">  
						<fieldset data-role="controlgroup">  
						<legend style="color:#27F;text-align:left;font-size:20px;">请选择你的星座类型：</legend>  
						<input type="radio" name="i1" id="i11" value="1" class="question_last_item">  
						<label for="i11">白羊座 (03.21-04.19)</label>
						<input type="radio" name="i1" id="i12" value="2" class="question_last_item">  
						<label for="i12">金牛座 (04.20-05.20)</label>
						<input type="radio" name="i1" id="i13" value="3" class="question_last_item">  
						<label for="i13">双子座 (05.21-06.21)</label>
						<input type="radio" name="i1" id="i14" value="4" class="question_last_item">  
						<label for="i14">巨蟹座 (06.22-07.22)</label>
						<input type="radio" name="i1" id="i15" value="5" class="question_last_item">  
						<label for="i15">狮子座 (07.23-08.22)</label>
						<input type="radio" name="i1" id="i16" value="6" class="question_last_item">  
						<label for="i16">处女座 (08.23-09.22)</label>
						<input type="radio" name="i1" id="i17" value="7" class="question_last_item">  
						<label for="i17">天秤座 (09.23-10.23)</label>
						<input type="radio" name="i1" id="i18" value="8" class="question_last_item">  
						<label for="i18">天蝎座 (10.24-11.22)</label>
						<input type="radio" name="i1" id="i19" value="9" class="question_last_item">  
						<label for="i19">射手座 (11.23-12.21)</label>
						<input type="radio" name="i1" id="i110" value="10" class="question_last_item">  
						<label for="i110">魔羯座 (12.22-01.19)</label>
						<input type="radio" name="i1" id="i111" value="11" class="question_last_item">  
						<label for="i111">水瓶座 (01.20-02.18)</label>
						<input type="radio" name="i1" id="i112" value="12" class="question_last_item">  
						<label for="i112">双鱼座 (02.19-03.20)</label>
						</fieldset>  
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
				
			<div style="text-align: center;" data-cid="image10" >
			<a href="###" class="ui-link" data-ajax="false" onclick="on_submit();return false;" >
				<img src="<?=$static_file_path?>/imgs/share.gif" id="btn_submit_img" >
			</a>
				<img id='load_pic' src='http://app.qpic.cn/mblogpic/240dcbe326654d4738c8/460' style='display:none;'/>
			</div>
			</div>

		</div>

           <div data-role="footer" data-theme="c">
			　 <h4>2013 &copy; Copyright 微测试</h4>
			</div> 
			
			　 <?php 
				require_once './../a_include/footer_stat.php';
				?>

	</div>
<?php 
require_once './../a_include/admobilebuttom.php';
?>
</body>
</html>
