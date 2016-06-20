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
<p style="color:#F06; line-height:30px; text-align:center">已完成：<span id="count">0</span>/33</p>
<div class="app_content">
<form action="./" method="post" id="form1" name="form1">
<div data-role="controlgroup" class="question" style="display:block;">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">1、面对困难的时候：</legend>  
	<input type="radio" name="i1" id="i11" value="6" class="question_item">  
	<label for="i11">A、我有能力克服它 </label>
	<input type="radio" name="i1" id="i12" value="3" class="question_item">  
	<label for="i12">B、我不一定能克服它</label>   
	<input type="radio" name="i1" id="i13" value="0" class="question_item">  
	<label for="i13">C、我不能克服它</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">2、如果我能到一个新的环境，我要把生活安排得：</legend>  
	<input type="radio" name="i2" id="i21" value="6" class="question_item">  
	<label for="i21">A、和从前相仿 </label>
	<input type="radio" name="i2" id="i22" value="3" class="question_item">  
	<label for="i22">B、不一定</label>   
	<input type="radio" name="i2" id="i23" value="0" class="question_item">  
	<label for="i23">C、和从前不一样</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">3、对于人生的目标：</legend>  
	<input type="radio" name="i3" id="i31" value="6" class="question_item">  
	<label for="i31">A、我觉得我有生之年一定能够实现</label>
	<input type="radio" name="i3" id="i32" value="3" class="question_item">  
	<label for="i32">B、我觉得我不一定能实现</label>   
	<input type="radio" name="i3" id="i33" value="0" class="question_item">  
	<label for="i33">C、我肯定不能实现我的梦想了</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">4、不知为什么，有些人总是回避或冷淡我：</legend>  
	<input type="radio" name="i4" id="i41" value="6" class="question_item">  
	<label for="i41">A、不会</label>
	<input type="radio" name="i4" id="i42" value="3" class="question_item">  
	<label for="i42">B、有时候会出现这种情况</label>   
	<input type="radio" name="i4" id="i43" value="0" class="question_item">  
	<label for="i43">C、一直是的</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">5、在大街上，我常常避开我不愿打招呼的人：</legend>  
	<input type="radio" name="i5" id="i51" value="6" class="question_item">  
	<label for="i51">A、从未如此</label>
	<input type="radio" name="i5" id="i52" value="3" class="question_item">  
	<label for="i52">B、偶尔如此</label>   
	<input type="radio" name="i5" id="i53" value="0" class="question_item">  
	<label for="i53">C、总是如此</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">6、当我集中精力工作时，假使有人在旁边高谈阔论：</legend>  
	<input type="radio" name="i6" id="i61" value="6" class="question_item">  
	<label for="i61">A、我仍能专心工作</label>
	<input type="radio" name="i6" id="i62" value="3" class="question_item">  
	<label for="i62">B、会受到影响，但仍能工作</label>   
	<input type="radio" name="i6" id="i63" value="0" class="question_item">  
	<label for="i63">C、我不能专心且感到愤怒</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">7、我的方向感：</legend>  
	<input type="radio" name="i7" id="i71" value="6" class="question_item">  
	<label for="i71">A、不管什么地方，我都能辨别方向</label>
	<input type="radio" name="i7" id="i72" value="3" class="question_item">  
	<label for="i72">B、有时候能够较好地辨别方向</label>   
	<input type="radio" name="i7" id="i73" value="0" class="question_item">  
	<label for="i73">C、基本上是路痴</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">8、对于我所学的专业或者所从事的工作：</legend>  
	<input type="radio" name="i8" id="i81" value="6" class="question_item">  
	<label for="i81">A、我热爱它，并且能够享受在其中</label>
	<input type="radio" name="i8" id="i82" value="3" class="question_item">  
	<label for="i82">B、说不上热爱，但是也不讨厌</label>   
	<input type="radio" name="i8" id="i83" value="0" class="question_item">  
	<label for="i83">C、我很讨厌它，并且会影响我的情绪</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">9、气候的变化不会影响我的情绪：</legend>  
	<input type="radio" name="i9" id="i91" value="6" class="question_item">  
	<label for="i91">A、是的</label>
	<input type="radio" name="i9" id="i92" value="3" class="question_item">  
	<label for="i92">B、有时候会</label>   
	<input type="radio" name="i9" id="i93" value="0" class="question_item">  
	<label for="i93">C、不是的</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">10、面对流言蜚语</legend>  
	<input type="radio" name="i10" id="i101" value="5" class="question_item">  
	<label for="i101">A、我会为此而生气</label>
	<input type="radio" name="i10" id="i102" value="2" class="question_item">  
	<label for="i102">B、有时候会生气，有时觉得无所谓</label>   
	<input type="radio" name="i10" id="i103" value="0" class="question_item">  
	<label for="i103">C、我不会受到影响，淡然面对</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">11、我善于控制自己的面部表情：</legend>  
	<input type="radio" name="i11" id="i111" value="5" class="question_item">  
	<label for="i111">A、是的</label>
	<input type="radio" name="i11" id="i112" value="2" class="question_item">  
	<label for="i112">B、不确定</label>   
	<input type="radio" name="i11" id="i113" value="0" class="question_item">  
	<label for="i113">C、不是的</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">12、在就寝时，我常常：</legend>  
	<input type="radio" name="i12" id="i121" value="5" class="question_item">  
	<label for="i121">A、极易入睡</label>
	<input type="radio" name="i12" id="i122" value="2" class="question_item">  
	<label for="i122">B、看情况 </label>   
	<input type="radio" name="i12" id="i123" value="0" class="question_item">  
	<label for="i123">C、不易入睡</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">13、有人侵扰我时，我会：</legend>  
	<input type="radio" name="i13" id="i131" value="5" class="question_item">  
	<label for="i131">A、不露声色</label>
	<input type="radio" name="i13" id="i132" value="2" class="question_item">  
	<label for="i132">B、可能会很愤怒，也可能会一笑了之</label>   
	<input type="radio" name="i13" id="i133" value="0" class="question_item">  
	<label for="i133">C、大声抗议，以泄己愤</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">14、在和人争辩或工作出现失误后：</legend>  
	<input type="radio" name="i14" id="i141" value="5" class="question_item">  
	<label for="i141">A、我会感到筋疲力尽，不能安心工作</label>
	<input type="radio" name="i14" id="i142" value="2" class="question_item">  
	<label for="i142">B、情绪受到影响，还是能够继续工作</label>   
	<input type="radio" name="i14" id="i143" value="0" class="question_item">  
	<label for="i143">C、能够保持积极的情绪继续工作下去</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">15、我常常被一些无谓的小事困扰：</legend>  
	<input type="radio" name="i15" id="i151" value="5" class="question_item">  
	<label for="i151">A、不会的</label>
	<input type="radio" name="i15" id="i152" value="2" class="question_item">  
	<label for="i152">B、有时候会这样</label>   
	<input type="radio" name="i15" id="i153" value="0" class="question_item">  
	<label for="i153">C、会</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">16、我喜欢的居住的地方是：</legend>  
	<input type="radio" name="i16" id="i161" value="5" class="question_item">  
	<label for="i161">A、僻静的郊区，远离城市的喧嚣 </label>
	<input type="radio" name="i16" id="i162" value="2" class="question_item">  
	<label for="i162">B、郊区和城市都能接受</label>   
	<input type="radio" name="i16" id="i163" value="0" class="question_item">  
	<label for="i163">C、热闹的市区会让我活得更加开心</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">17、我被朋友、同事起过绰号，挖苦过：</legend>  
	<input type="radio" name="i17" id="i171" value="5" class="question_item">  
	<label for="i171">A、从来没有</label>
	<input type="radio" name="i17" id="i172" value="2" class="question_item">  
	<label for="i172">B、偶尔有过</label>   
	<input type="radio" name="i17" id="i173" value="0" class="question_item">  
	<label for="i173">C、这是常有的事</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">18、有一种食物使我吃后呕吐：</legend>  
	<input type="radio" name="i18" id="i181" value="5" class="question_item">  
	<label for="i181">A、没有</label>
	<input type="radio" name="i18" id="i182" value="2" class="question_item">  
	<label for="i182">B、记不清</label>   
	<input type="radio" name="i18" id="i183" value="0" class="question_item">  
	<label for="i183">C、有</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">19、除去看见的世界外，我的心中没有另外的世界：</legend>  
	<input type="radio" name="i19" id="i191" value="5" class="question_item">  
	<label for="i191">A、没有</label>
	<input type="radio" name="i19" id="i192" value="2" class="question_item">  
	<label for="i192">B、记不清</label>   
	<input type="radio" name="i19" id="i193" value="0" class="question_item">  
	<label for="i193">C、有</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">20、我会想到若干年后有什么使自己极为不安的事：</legend>  
	<input type="radio" name="i20" id="i201" value="5" class="question_item">  
	<label for="i201">A、从来没有想过</label>
	<input type="radio" name="i20" id="i202" value="2" class="question_item">  
	<label for="i202">B、偶尔想到过 </label>   
	<input type="radio" name="i20" id="i203" value="0" class="question_item">  
	<label for="i203">C、经常想到</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">21、我常常觉得自己的家庭对自己不好，但是我又确切地知道他们的确对我好：</legend>  
	<input type="radio" name="i21" id="i211" value="5" class="question_item">  
	<label for="i211">A、否 </label>
	<input type="radio" name="i21" id="i212" value="2" class="question_item">  
	<label for="i212">B、说不清楚</label>   
	<input type="radio" name="i21" id="i213" value="0" class="question_item">  
	<label for="i213">C、是</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">22、每天我一回家就立刻把门关上：</legend>  
	<input type="radio" name="i22" id="i221" value="5" class="question_item">  
	<label for="i221">A、否 </label>
	<input type="radio" name="i22" id="i222" value="2" class="question_item">  
	<label for="i222">B、不清楚</label>   
	<input type="radio" name="i22" id="i223" value="0" class="question_item">  
	<label for="i223">C、是</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">23、我坐在小房间里把门关上，但我仍觉得心里不安：</legend>  
	<input type="radio" name="i23" id="i231" value="5" class="question_item">  
	<label for="i231">A、否</label>
	<input type="radio" name="i23" id="i232" value="2" class="question_item">  
	<label for="i232">B、偶尔是</label>   
	<input type="radio" name="i23" id="i233" value="0" class="question_item">  
	<label for="i233">C、是</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">24、当一件事需要我作决定时，我常觉得很难：</legend>  
	<input type="radio" name="i24" id="i241" value="5" class="question_item">  
	<label for="i241">A、否</label>
	<input type="radio" name="i24" id="i242" value="2" class="question_item">  
	<label for="i242">B、偶尔是</label>   
	<input type="radio" name="i24" id="i243" value="0" class="question_item">  
	<label for="i243">C、是</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">25、我常常用抛硬币、翻纸、抽签之类的游戏来预测凶吉：</legend>  
	<input type="radio" name="i25" id="i251" value="5" class="question_item">  
	<label for="i251">A、否</label>
	<input type="radio" name="i25" id="i252" value="2" class="question_item">  
	<label for="i252">B、偶尔是</label>   
	<input type="radio" name="i25" id="i253" value="0" class="question_item">  
	<label for="i253">C、是</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">26、为了工作我早出晚归，早晨起床我常常感到疲惫不堪：</legend>  
	<input type="radio" name="i26" id="i261" value="0" class="question_item">  
	<label for="i261">A、是</label>
	<input type="radio" name="i26" id="i262" value="5" class="question_item">  
	<label for="i262">B、否</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">27、在某种心境下，我会因为困惑陷入空想，将工作搁置下来：</legend>  
	<input type="radio" name="i27" id="i271" value="0" class="question_item">  
	<label for="i271">A、是</label>
	<input type="radio" name="i27" id="i272" value="5" class="question_item">  
	<label for="i272">B、否</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">28、我的神经脆弱，稍有刺激就会使我战栗：</legend>  
	<input type="radio" name="i28" id="i281" value="0" class="question_item">  
	<label for="i281">A、是</label>
	<input type="radio" name="i28" id="i282" value="5" class="question_item">  
	<label for="i282">B、否</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">29、睡梦中，我常常被噩梦惊醒： </legend>  
	<input type="radio" name="i29" id="i291" value="0" class="question_item">  
	<label for="i291">A、是</label>
	<input type="radio" name="i29" id="i292" value="5" class="question_item">  
	<label for="i292">B、否</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">30、工作中我愿意挑战艰巨的任务：</legend>  
	<input type="radio" name="i30" id="i301" value="1" class="question_item">  
	<label for="i301">A、从不</label>
	<input type="radio" name="i30" id="i302" value="2" class="question_item">  
	<label for="i302">B、几乎不</label>   
	<input type="radio" name="i30" id="i303" value="3" class="question_item">  
	<label for="i303">C、一半时间</label>   
	<input type="radio" name="i30" id="i304" value="4" class="question_item">  
	<label for="i304">D、大多数时间</label>   
	<input type="radio" name="i30" id="i305" value="5" class="question_item">  
	<label for="i305">E、总是</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">31、我善于发现别人好的一面： </legend>  
	<input type="radio" name="i31" id="i311" value="1" class="question_item">  
	<label for="i311">A、从不</label>
	<input type="radio" name="i31" id="i312" value="2" class="question_item">  
	<label for="i312">B、几乎不</label>   
	<input type="radio" name="i31" id="i313" value="3" class="question_item">  
	<label for="i313">C、一半时间</label>   
	<input type="radio" name="i31" id="i314" value="4" class="question_item">  
	<label for="i314">D、大多数时间</label>   
	<input type="radio" name="i31" id="i315" value="5" class="question_item">  
	<label for="i315">E、总是</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">32、能听取不同的意见，包括对自己的批评： </legend>  
	<input type="radio" name="i32" id="i321" value="1" class="question_item">  
	<label for="i321">A、从不</label>
	<input type="radio" name="i32" id="i322" value="2" class="question_item">  
	<label for="i322">B、几乎不</label>   
	<input type="radio" name="i32" id="i323" value="3" class="question_item">  
	<label for="i323">C、一半时间</label>   
	<input type="radio" name="i32" id="i324" value="4" class="question_item">  
	<label for="i324">D、大多数时间</label>   
	<input type="radio" name="i32" id="i325" value="5" class="question_item">  
	<label for="i325">E、总是</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">33、我时常勉励自己，对未来充满希望：</legend>  
	<input type="radio" name="i33" id="i331" value="1" class="question_last_item">  
	<label for="i331">A、从不</label>
	<input type="radio" name="i33" id="i332" value="2" class="question_last_item">  
	<label for="i332">B、几乎不</label>   
	<input type="radio" name="i33" id="i333" value="3" class="question_last_item">  
	<label for="i333">C、一半时间</label>   
	<input type="radio" name="i33" id="i334" value="4" class="question_last_item">  
	<label for="i334">D、大多数时间</label>   
	<input type="radio" name="i33" id="i335" value="5" class="question_last_item">  
	<label for="i335">E、总是</label>   
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
