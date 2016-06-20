<?php 
$questionsize = count($questionAnswerList);
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
<style>
.app_content{ margin:1px auto; width:95%; text-align:center; margin-bottom:20px}
.app_content .question{padding:10px 0; display:none;}
</style>
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="http://libs.baidu.com/jquerymobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/header_stat.php';
?>
<script>
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
 		
 		$('#view-result').show();
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
</head>
<body  class="ui-overlay-c" style="cursor: auto; zoom: 1;">
	<div data-role="page" data-url="/" tabindex="0" style="min-height: 572px;">
	<div id="page_app" data-role="page_app" data-theme="a">
	<div data-role="content" >
		<div class="app_content">
		<div style="color:#F06; text-align:center">已完成：<span id="count">0</span>/<?=$questionsize?></div>
		<form action="/<?=$app_name?>/view.php" method="post" id="form1" name="form1">
		
					<?php 
					$idx = 1;
					foreach ($questionAnswerList as $questionAnswer) {
						if ($idx == 1) {
							?>
							<div data-role="controlgroup" class="question" style="display:block;"> 
							<fieldset data-role="controlgroup">  
								<legend style="color:#27F;text-align:left;font-size:20px;"><?=$idx?>、<?=$questionAnswer['question']?></legend>  
							<?php
						} else {
							?>
							<div data-role="controlgroup" class="question " style="display:none;"> 
							<fieldset data-role="controlgroup">  
								<legend style="color:#27F;text-align:left;font-size:20px;"><?=$idx?>、<?=$questionAnswer['question']?></legend>  
							<?php
						}
						?>
						
						<?php
							$subidx = 1;
							foreach ($questionAnswer['answers'] as $answer) {
								if ($idx == $questionsize) {
									?>
									<input type="radio" name="i<?=$idx?>" id="i<?=$idx?><?=$subidx?>" value="<?=$answer['value']?>" class="question_last_item">  
									<label for="i<?=$idx?><?=$subidx?>"><?=$answer['option']?></label>
									<?php
								} else {
									?>
									<input type="radio" name="i<?=$idx?>" id="i<?=$idx?><?=$subidx?>" value="<?=$answer['value']?>" class="question_item">  
									<label for="i<?=$idx?><?=$subidx?>"><?=$answer['option']?></label>
									<?php
								}
								$subidx++;
							}
						?>
						</fieldset>
						</div>
						<?php
						$idx++;
					}
					?>
		</form>
		
		<p id="view-result" style="text-align:center; margin-buttom:30px;display:none;">
		    <a href="#" class="ui-link" data-ajax="false"  onclick="on_submit(); return false;"><img id="btn_submit_img" src="<?=$static_file_path?>/imgs/share.gif" /></a>
		    <img id='load_pic' src='http://app.qpic.cn/mblogpic/240dcbe326654d4738c8/460' style='display:none;'/>
		    </p>
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
        <br>
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
