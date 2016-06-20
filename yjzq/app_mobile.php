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
.app_content{ margin:5px auto; width:80%; text-align:center; margin-bottom:20px}
.app_content .question{padding:10px 0; display:none;}
</style>
<?php 
require_once '../a_include/header_stat.php';
?>
</head>
<body  class="ui-overlay-c" style="cursor: auto;">
	<!-- Home -->
	<div id="login_page" data-role="page" data-theme="c">
		<div data-role="header" data-theme="c">
			<a href="/" data-icon="home" data-ajax="false" class="ui-link">首页</a>
			<h3 ><?=$app_list[$app_name]['title']?></h3>
			<a href="/" data-icon="arrow-l" data-ajax="false" class="ui-link">返回</a>
		</div>
		<div data-role="content" >
			
<p style="color:#F06; line-height:30px; text-align:center">已完成：<span id="count">0</span>/7</p>
<div class="app_content">
<form action="./" method="post" id="form1" name="form1">
<div data-role="controlgroup" class="question" style="display:block;">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">1、橘色糖果比绿色糖果吃了让你更忘记烦恼</legend>  
	<input type="radio" name="i1" id="i11" value="1" class="question_item">  
	<label for="i11">YES，是的</label>
	<input type="radio" name="i1" id="i12" value="0" class="question_item">  
	<label for="i12">NO，不是</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">2、你觉得好哦个葡萄比青葡萄贵</legend>  
	<input type="radio" name="i2" id="i21" value="1" class="question_item">  
	<label for="i21">YES，是的</label>
	<input type="radio" name="i2" id="i22" value="0" class="question_item">  
	<label for="i22">NO，不是</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">3、你觉得粉红色的花比黄色的花更适合摆在房间里</legend>  
	<input type="radio" name="i3" id="i31" value="1" class="question_item">  
	<label for="i31">YES，是的</label>
	<input type="radio" name="i3" id="i32" value="0" class="question_item">  
	<label for="i32">NO，不是</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">4、浅黄色的心形图案比浅蓝色的心形图案让你更有初恋的感觉</legend>  
	<input type="radio" name="i4" id="i41" value="1" class="question_item">  
	<label for="i41">YES，是的</label>
	<input type="radio" name="i4" id="i42" value="0" class="question_item">  
	<label for="i42">NO，不是</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">5、你觉得将分手的信装在黄色的信封里比装在蓝色的信封里更合适</legend>  
	<input type="radio" name="i5" id="i51" value="1" class="question_item">  
	<label for="i51">YES，是的</label>
	<input type="radio" name="i5" id="i52" value="0" class="question_item">  
	<label for="i52">NO，不是</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">6、你觉得天变地动前月亮为橘色的可能大于紫色</legend>  
	<input type="radio" name="i6" id="i61" value="1" class="question_item">  
	<label for="i61">YES，是的</label>
	<input type="radio" name="i6" id="i62" value="0" class="question_item">  
	<label for="i62">NO，不是</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">7、你觉得红色比黄色更能指引方向</legend>  
	<input type="radio" name="i7" id="i71" value="1" class="question_last_item">  
	<label for="i71">YES，是的</label>
	<input type="radio" name="i7" id="i72" value="0" class="question_last_item">  
	<label for="i72">NO，不是</label>   
	</fieldset>  
<p style="text-align:center; margin-top:30px;">
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
</form>
</div>
		</div>

           
           <div data-role="footer" data-theme="c">
			　 <h4>2013 &copy; Copyright 微测试</h4>
			　 <?php 
				require_once '../a_include/footer_stat.php';
			  ?>
			</div> 	

	</div>
<?php 
require_once './../a_include/admobilebuttom.php';
?>
</body>
</html>
