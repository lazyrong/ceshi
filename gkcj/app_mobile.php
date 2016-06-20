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
 var i8_ischecked=0;
 var btn_enable = 1;
 $(function()
 {
 	$('.question_item').click(function() {
 		current_i++;
 		$('#count').html(current_i);
 		$(this).parents('.question').hide(300);
 		$(this).parents('.question').next().fadeIn()(300);
 	});
 	
 	$('.question_last_item').click(function() {
 		if(i8_ischecked==0)
 		{
 			current_i++;
 			$('#count').html(current_i);
 		}
 		i8_ischecked=1;
 	});

 });
 function on_submit()
 {
 	if(i8_ischecked==0)
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
			
<p style="color:#F06; line-height:30px; text-align:center">已完成：<span id="count">0</span>/8</p>
<div class="app_content">
<form action="./" method="post" id="form1" name="form1">
<div data-role="controlgroup" class="question" style="display:block;">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">1.你喜爱哪门学科？</legend>  
	<input type="radio" name="i1" id="i11" value="0" class="question_item">  
	<label for="i11">语文</label>
	<input type="radio" name="i1" id="i12" value="2" class="question_item">  
	<label for="i12">数学</label>   
	<input type="radio" name="i1" id="i13" value="1" class="question_item">  
	<label for="i13">英语</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">2.你每天运动多少时间？</legend>  
	<input type="radio" name="i2" id="i21" value="2" class="question_item">  
	<label for="i21">一小时以内</label>
	<input type="radio" name="i2" id="i22" value="0" class="question_item">  
	<label for="i22">一小时以上</label>   
	<input type="radio" name="i2" id="i23" value="1" class="question_item">  
	<label for="i23">从不运动</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">3.你喜爱哪种几何图形？</legend>  
	<input type="radio" name="i3" id="i31" value="0" class="question_item">  
	<label for="i31">矩形</label>
	<input type="radio" name="i3" id="i32" value="1" class="question_item">  
	<label for="i32">三角形</label>   
	<input type="radio" name="i3" id="i33" value="2" class="question_item">  
	<label for="i33">圆形</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">4.你喜爱哪个作家？</legend>  
	<input type="radio" name="i4" id="i41" value="1" class="question_item">  
	<label for="i41">鲁迅</label>
	<input type="radio" name="i4" id="i42" value="0" class="question_item">  
	<label for="i42">韩寒</label>   
	<input type="radio" name="i4" id="i43" value="2" class="question_item">  
	<label for="i43">巴金</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">5.你喜爱哪个科学家？</legend>  
	<input type="radio" name="i5" id="i51" value="1" class="question_item">  
	<label for="i51">爱因斯坦</label>
	<input type="radio" name="i5" id="i52" value="0" class="question_item">  
	<label for="i52">牛顿</label>   
	<input type="radio" name="i5" id="i53" value="2" class="question_item">  
	<label for="i53">霍金</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">6.你的近视眼度数是？</legend>  
	<input type="radio" name="i6" id="i61" value="1" class="question_item">  
	<label for="i61">小于100</label>
	<input type="radio" name="i6" id="i62" value="0" class="question_item">  
	<label for="i62">100—500</label>   
	<input type="radio" name="i6" id="i63" value="2" class="question_item">  
	<label for="i63">500以上</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">7.你喜爱哪个诗人？</legend>  
	<input type="radio" name="i7" id="i71" value="2" class="question_item">  
	<label for="i71">杜甫</label>
	<input type="radio" name="i7" id="i72" value="0" class="question_item">  
	<label for="i72">李白</label>   
	<input type="radio" name="i7" id="i73" value="1" class="question_item">  
	<label for="i73">白居易</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">8.高考后你想做的事是？</legend>  
	<input type="radio" name="i8" id="i81" value="0" class="question_item">  
	<label for="i81">旅行</label>
	<input type="radio" name="i8" id="i82" value="2" class="question_item">  
	<label for="i82">烧书</label>   
	<input type="radio" name="i8" id="i83" value="1" class="question_item">  
	<label for="i83">睡觉</label>   
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
