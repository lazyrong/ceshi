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
 		$(this).parents('.question').next().fadeIn()(300);
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
			
<p style="color:#F06; line-height:30px; text-align:center">已完成：<span id="count">0</span>/30</p>
<div class="app_content">
<form action="./" method="post" id="form1" name="form1">
<div data-role="controlgroup" class="question" style="display:block;">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">1、一旦下决心做某事后便会立刻就去做。</legend>  
	<input type="radio" name="i1" id="i11" value="0" class="question_item">  
	<label for="i11">是的</label>
	<input type="radio" name="i1" id="i12" value="2" class="question_item">  
	<label for="i12">不是</label>   
	<input type="radio" name="i1" id="i13" value="1" class="question_item">  
	<label for="i13">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">2、往往喜欢凭自己经验办事。</legend>  
	<input type="radio" name="i2" id="i21" value="2" class="question_item">  
	<label for="i21">是的</label>
	<input type="radio" name="i2" id="i22" value="0" class="question_item">  
	<label for="i22">不是</label>   
	<input type="radio" name="i2" id="i23" value="1" class="question_item">  
	<label for="i23">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">3、对任何事情都有探索精神。</legend>  
	<input type="radio" name="i3" id="i31" value="0" class="question_item">  
	<label for="i31">是的</label>
	<input type="radio" name="i3" id="i32" value="4" class="question_item">  
	<label for="i32">不是</label>   
	<input type="radio" name="i3" id="i33" value="2" class="question_item">  
	<label for="i33">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">4、说话慢而且比较爱啰嗦。</legend>  
	<input type="radio" name="i4" id="i41" value="4" class="question_item">  
	<label for="i41">是的</label>
	<input type="radio" name="i4" id="i42" value="0" class="question_item">  
	<label for="i42">不是</label>   
	<input type="radio" name="i4" id="i43" value="2" class="question_item">  
	<label for="i43">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">5、健忘。</legend>  
	<input type="radio" name="i5" id="i51" value="4" class="question_item">  
	<label for="i51">是的</label>
	<input type="radio" name="i5" id="i52" value="0" class="question_item">  
	<label for="i52">不是</label>   
	<input type="radio" name="i5" id="i53" value="2" class="question_item">  
	<label for="i53">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">6、怕烦心、怕做事、不想活动。</legend>  
	<input type="radio" name="i6" id="i61" value="4" class="question_item">  
	<label for="i61">是的</label>
	<input type="radio" name="i6" id="i62" value="0" class="question_item">  
	<label for="i62">不是</label>   
	<input type="radio" name="i6" id="i63" value="2" class="question_item">  
	<label for="i63">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">7、比较容易计较小事。</legend>  
	<input type="radio" name="i7" id="i71" value="2" class="question_item">  
	<label for="i71">是的</label>
	<input type="radio" name="i7" id="i72" value="0" class="question_item">  
	<label for="i72">不是</label>   
	<input type="radio" name="i7" id="i73" value="1" class="question_item">  
	<label for="i73">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">8、喜欢参加各种活动。</legend>  
	<input type="radio" name="i8" id="i81" value="0" class="question_item">  
	<label for="i81">是的</label>
	<input type="radio" name="i8" id="i82" value="2" class="question_item">  
	<label for="i82">不是</label>   
	<input type="radio" name="i8" id="i83" value="1" class="question_item">  
	<label for="i83">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">9、越来越变得固执起来。</legend>  
	<input type="radio" name="i9" id="i91" value="4" class="question_item">  
	<label for="i91">是的</label>
	<input type="radio" name="i9" id="i92" value="0" class="question_item">  
	<label for="i92">不是</label>   
	<input type="radio" name="i9" id="i93" value="2" class="question_item">  
	<label for="i93">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">10、对什么事情都有好奇心。</legend>  
	<input type="radio" name="i10" id="i101" value="0" class="question_item">  
	<label for="i101">是的</label>
	<input type="radio" name="i10" id="i102" value="2" class="question_item">  
	<label for="i102">不是</label>   
	<input type="radio" name="i10" id="i103" value="1" class="question_item">  
	<label for="i103">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">11、有强烈的生活追求。</legend>  
	<input type="radio" name="i11" id="i111" value="0" class="question_item">  
	<label for="i111">是的</label>
	<input type="radio" name="i11" id="i112" value="4" class="question_item">  
	<label for="i112">不是</label>   
	<input type="radio" name="i11" id="i113" value="2" class="question_item">  
	<label for="i113">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">12、经常难以控制自己的感情。</legend>  
	<input type="radio" name="i12" id="i121" value="0" class="question_item">  
	<label for="i121">是的</label>
	<input type="radio" name="i12" id="i122" value="2" class="question_item">  
	<label for="i122">不是</label>   
	<input type="radio" name="i12" id="i123" value="1" class="question_item">  
	<label for="i123">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">13、容易嫉妒别人，容易悲伤。</legend>  
	<input type="radio" name="i13" id="i131" value="2" class="question_item">  
	<label for="i131">是的</label>
	<input type="radio" name="i13" id="i132" value="0" class="question_item">  
	<label for="i132">不是</label>   
	<input type="radio" name="i13" id="i133" value="1" class="question_item">  
	<label for="i133">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">14、见到不合理的事不再那么气愤了。</legend>  
	<input type="radio" name="i14" id="i141" value="2" class="question_item">  
	<label for="i141">是的</label>
	<input type="radio" name="i14" id="i142" value="0" class="question_item">  
	<label for="i142">不是</label>   
	<input type="radio" name="i14" id="i143" value="1" class="question_item">  
	<label for="i143">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">15、不喜欢看推理小说。</legend>  
	<input type="radio" name="i15" id="i151" value="2" class="question_item">  
	<label for="i151">是的</label>
	<input type="radio" name="i15" id="i152" value="0" class="question_item">  
	<label for="i152">不是</label>   
	<input type="radio" name="i15" id="i153" value="1" class="question_item">  
	<label for="i153">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">16、对电影和爱情小说日益失去兴趣。 </legend>  
	<input type="radio" name="i16" id="i161" value="2" class="question_item">  
	<label for="i161">是的</label>
	<input type="radio" name="i16" id="i162" value="0" class="question_item">  
	<label for="i162">不是</label>   
	<input type="radio" name="i16" id="i163" value="1" class="question_item">  
	<label for="i163">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">17、做事情往往不能坚持到底。</legend>  
	<input type="radio" name="i17" id="i171" value="4" class="question_item">  
	<label for="i171">是的</label>
	<input type="radio" name="i17" id="i172" value="0" class="question_item">  
	<label for="i172">不是</label>   
	<input type="radio" name="i17" id="i173" value="2" class="question_item">  
	<label for="i173">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">18、不愿意改变旧习惯。</legend>  
	<input type="radio" name="i18" id="i181" value="2" class="question_item">  
	<label for="i181">是的</label>
	<input type="radio" name="i18" id="i182" value="0" class="question_item">  
	<label for="i182">不是</label>   
	<input type="radio" name="i18" id="i183" value="1" class="question_item">  
	<label for="i183">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">19、喜欢回忆过去。</legend>  
	<input type="radio" name="i19" id="i191" value="4" class="question_item">  
	<label for="i191">是的</label>
	<input type="radio" name="i19" id="i192" value="0" class="question_item">  
	<label for="i192">不是</label>   
	<input type="radio" name="i19" id="i193" value="2" class="question_item">  
	<label for="i193">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">20、学习新鲜事物感到困难。 </legend>  
	<input type="radio" name="i20" id="i201" value="2" class="question_item">  
	<label for="i201">是的</label>
	<input type="radio" name="i20" id="i202" value="0" class="question_item">  
	<label for="i202">不是</label>   
	<input type="radio" name="i20" id="i203" value="1" class="question_item">  
	<label for="i203">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">21、十分注意自己身体的变化。 </legend>  
	<input type="radio" name="i21" id="i211" value="2" class="question_item">  
	<label for="i211">是的</label>
	<input type="radio" name="i21" id="i212" value="0" class="question_item">  
	<label for="i212">不是</label>   
	<input type="radio" name="i21" id="i213" value="1" class="question_item">  
	<label for="i213">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">22、生活兴趣的范围变小了。</legend>  
	<input type="radio" name="i22" id="i221" value="2" class="question_item">  
	<label for="i221">是的</label>
	<input type="radio" name="i22" id="i222" value="0" class="question_item">  
	<label for="i222">不是</label>   
	<input type="radio" name="i22" id="i223" value="1" class="question_item">  
	<label for="i223">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">23、看书的速度变快了。</legend>  
	<input type="radio" name="i23" id="i231" value="2" class="question_item">  
	<label for="i231">是的</label>
	<input type="radio" name="i23" id="i232" value="0" class="question_item">  
	<label for="i232">不是</label>   
	<input type="radio" name="i23" id="i233" value="1" class="question_item">  
	<label for="i233">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">24、觉得自己有时候动作不够灵活。 </legend>  
	<input type="radio" name="i24" id="i241" value="2" class="question_item">  
	<label for="i241">是的</label>
	<input type="radio" name="i24" id="i242" value="0" class="question_item">  
	<label for="i242">不是</label>   
	<input type="radio" name="i24" id="i243" value="1" class="question_item">  
	<label for="i243">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">25、容易感到疲劳。</legend>  
	<input type="radio" name="i25" id="i251" value="2" class="question_item">  
	<label for="i251">是的</label>
	<input type="radio" name="i25" id="i252" value="0" class="question_item">  
	<label for="i252">不是</label>   
	<input type="radio" name="i25" id="i253" value="1" class="question_item">  
	<label for="i253">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">26、晚上不如早晨和上午头脑清醒。</legend>  
	<input type="radio" name="i26" id="i261" value="2" class="question_item">  
	<label for="i261">是的</label>
	<input type="radio" name="i26" id="i262" value="0" class="question_item">  
	<label for="i262">不是</label>   
	<input type="radio" name="i26" id="i263" value="1" class="question_item">  
	<label for="i263">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">27、对生活中的挫折感到烦恼。</legend>  
	<input type="radio" name="i27" id="i271" value="2" class="question_item">  
	<label for="i271">是的</label>
	<input type="radio" name="i27" id="i272" value="0" class="question_item">  
	<label for="i272">不是</label>   
	<input type="radio" name="i27" id="i273" value="1" class="question_item">  
	<label for="i273">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">28、比较缺乏自信心。</legend>  
	<input type="radio" name="i28" id="i281" value="2" class="question_item">  
	<label for="i281">是的</label>
	<input type="radio" name="i28" id="i282" value="0" class="question_item">  
	<label for="i282">不是</label>   
	<input type="radio" name="i28" id="i283" value="1" class="question_item">  
	<label for="i283">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">29、很难集中精力思考。</legend>  
	<input type="radio" name="i29" id="i291" value="2" class="question_item">  
	<label for="i291">是的</label>
	<input type="radio" name="i29" id="i292" value="0" class="question_item">  
	<label for="i292">不是</label>   
	<input type="radio" name="i29" id="i293" value="1" class="question_item">  
	<label for="i293">不一定</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">30、工作效率越来越低。</legend>  
	<input type="radio" name="i30" id="i301" value="2" class="question_last_item">  
	<label for="i301">是的</label>
	<input type="radio" name="i30" id="i302" value="0" class="question_last_item">  
	<label for="i302">不是</label>   
	<input type="radio" name="i30" id="i303" value="1" class="question_last_item">  
	<label for="i303">不一定</label>   
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
