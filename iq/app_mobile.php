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
			
<p style="color:#F06; line-height:30px; text-align:center">已完成：<span id="count">0</span>/30</p>
<div class="app_content">
<form action="./" method="post" id="form1" name="form1">
<div data-role="controlgroup" class="question" style="display:block;">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">1、选出不同的一项：</legend>  
	<input type="radio" name="i1" id="i11" value="0" class="question_item">  
	<label for="i11">A、蛇</label>
	<input type="radio" name="i1" id="i12" value="5" class="question_item">  
	<label for="i12">B、大树</label>   
	<input type="radio" name="i1" id="i13" value="0" class="question_item">  
	<label for="i13">C、老虎</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">2、在下列分数中，选出不同类的一项：</legend>  
	<input type="radio" name="i2" id="i21" value="0" class="question_item">  
	<label for="i21">A、3/5</label>
	<input type="radio" name="i2" id="i22" value="0" class="question_item">  
	<label for="i22">B、3/7</label>   
	<input type="radio" name="i2" id="i23" value="5" class="question_item">  
	<label for="i23">C、3/9</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">3、男孩对男子，正如女孩对：</legend>  
	<input type="radio" name="i3" id="i31" value="0" class="question_item">  
	<label for="i31">A、青年</label>
	<input type="radio" name="i3" id="i32" value="0" class="question_item">  
	<label for="i32">B、孩子</label>   
	<input type="radio" name="i3" id="i33" value="0" class="question_item">  
	<label for="i33">C、夫人</label>   
	<input type="radio" name="i3" id="i34" value="0" class="question_item">  
	<label for="i34">D、姑娘</label>   
	<input type="radio" name="i3" id="i35" value="5" class="question_item">  
	<label for="i35">E、妇女</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">4、如果笔相对于写字，那么书相对于：</legend>  
	<input type="radio" name="i4" id="i41" value="0" class="question_item">  
	<label for="i41">A、娱乐</label>
	<input type="radio" name="i4" id="i42" value="5" class="question_item">  
	<label for="i42">B、阅读</label>   
	<input type="radio" name="i4" id="i43" value="0" class="question_item">  
	<label for="i43">C、学文化</label>   
	<input type="radio" name="i4" id="i44" value="0" class="question_item">  
	<label for="i44">D、解除疲劳</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">5、马之于马厩，正如人之于：</legend>  
	<input type="radio" name="i5" id="i51" value="0" class="question_item">  
	<label for="i51">A、牛棚</label>
	<input type="radio" name="i5" id="i52" value="0" class="question_item">  
	<label for="i52">B、马车</label>   
	<input type="radio" name="i5" id="i53" value="5" class="question_item">  
	<label for="i53">C、房屋</label>   
	<input type="radio" name="i5" id="i54" value="0" class="question_item">  
	<label for="i54">D、农场</label>   
	<input type="radio" name="i5" id="i55" value="0" class="question_item">  
	<label for="i55">E、楼房</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">6、 2、8、14、20、（）请写出" （ ） "处的数字：</legend>  
	<input type="radio" name="i6" id="i61" value="0" class="question_item">  
	<label for="i61">A、24</label>
	<input type="radio" name="i6" id="i62" value="0" class="question_item">  
	<label for="i62">B、25</label>   
	<input type="radio" name="i6" id="i63" value="0" class="question_item">  
	<label for="i63">C、38</label>   
	<input type="radio" name="i6" id="i64" value="5" class="question_item">  
	<label for="i64">D、26</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">7、下列四个词是否可以组成一个正确的句子：“生活”、“水里”、“鱼”、“在”</legend>  
	<input type="radio" name="i7" id="i71" value="5" class="question_item">  
	<label for="i71">A、是</label>
	<input type="radio" name="i7" id="i72" value="0" class="question_item">  
	<label for="i72">B、否</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">8、下列六个词是否可以组成一个正确的句子：“球棒”、“的”、“用来”、“是”、“棒球”、“打”</legend>  
	<input type="radio" name="i8" id="i81" value="5" class="question_item">  
	<label for="i81">A、是</label>
	<input type="radio" name="i8" id="i82" value="0" class="question_item">  
	<label for="i82">B、否</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">9、动物学家与社会学家相对应，正如动物与（）相对：</legend>  
	<input type="radio" name="i9" id="i91" value="5" class="question_item">  
	<label for="i91">A、人类</label>
	<input type="radio" name="i9" id="i92" value="0" class="question_item">  
	<label for="i92">B、问题</label>   
	<input type="radio" name="i9" id="i93" value="0" class="question_item">  
	<label for="i93">C、社会</label>   
	<input type="radio" name="i9" id="i94" value="0" class="question_item">  
	<label for="i94">D、社会学</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">10、如果所有的妇女都有大衣，那么漂亮的妇女会有：</legend>  
	<input type="radio" name="i10" id="i101" value="0" class="question_item">  
	<label for="i101">A、更多的大衣</label>
	<input type="radio" name="i10" id="i102" value="0" class="question_item">  
	<label for="i102">B、时髦的大衣</label>   
	<input type="radio" name="i10" id="i103" value="5" class="question_item">  
	<label for="i103">C、大衣</label>   
	<input type="radio" name="i10" id="i104" value="0" class="question_item">  
	<label for="i104">D、昂贵的大衣</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">11、1、3、2、4、6、5、7、（），请写出" （ ） "处的数字：</legend>  
	<input type="radio" name="i11" id="i111" value="0" class="question_item">  
	<label for="i111">A、8</label>
	<input type="radio" name="i11" id="i112" value="0" class="question_item">  
	<label for="i112">B、9</label>   
	<input type="radio" name="i11" id="i113" value="5" class="question_item">  
	<label for="i113">C、10</label>   
	<input type="radio" name="i11" id="i114" value="0" class="question_item">  
	<label for="i114">D、13</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">12、南之于西北，正如西之于：</legend>  
	<input type="radio" name="i12" id="i121" value="0" class="question_item">  
	<label for="i121">A、西北</label>
	<input type="radio" name="i12" id="i122" value="5" class="question_item">  
	<label for="i122">B、东北</label>   
	<input type="radio" name="i12" id="i123" value="0" class="question_item">  
	<label for="i123">C、西南</label>   
	<input type="radio" name="i12" id="i124" value="0" class="question_item">  
	<label for="i124">D、东南</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">13、找出不同类的一项：</legend>  
	<input type="radio" name="i13" id="i131" value="0" class="question_item">  
	<label for="i131">A、铁锅</label>
	<input type="radio" name="i13" id="i132" value="0" class="question_item">  
	<label for="i132">B、小勺</label>   
	<input type="radio" name="i13" id="i133" value="5" class="question_item">  
	<label for="i133">C、米饭</label>   
	<input type="radio" name="i13" id="i134" value="0" class="question_item">  
	<label for="i134">D、碟子</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">14、9、7、8、6、7、5、（），请写出" （ ） "处的数字：</legend>  
	<input type="radio" name="i14" id="i141" value="5" class="question_item">  
	<label for="i141">A、4</label>
	<input type="radio" name="i14" id="i142" value="0" class="question_item">  
	<label for="i142">B、5</label>   
	<input type="radio" name="i14" id="i143" value="0" class="question_item">  
	<label for="i143">C、6</label>   
	<input type="radio" name="i14" id="i144" value="0" class="question_item">  
	<label for="i144">D、7</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">15、找出不同类的一项：</legend>  
	<input type="radio" name="i15" id="i151" value="0" class="question_item">  
	<label for="i151">A、写字台</label>
	<input type="radio" name="i15" id="i152" value="0" class="question_item">  
	<label for="i152">B、沙发</label>   
	<input type="radio" name="i15" id="i153" value="5" class="question_item">  
	<label for="i153">C、电视</label>   
	<input type="radio" name="i15" id="i154" value="0" class="question_item">  
	<label for="i154">D、桌布</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">16、961、（25）、432、932、（ ）、731 ，请写出（）内的数字：</legend>  
	<input type="radio" name="i16" id="i161" value="5" class="question_item">  
	<label for="i161">A、38</label>
	<input type="radio" name="i16" id="i162" value="0" class="question_item">  
	<label for="i162">B、25</label>   
	<input type="radio" name="i16" id="i163" value="0" class="question_item">  
	<label for="i163">C、14</label>   
	<input type="radio" name="i16" id="i164" value="0" class="question_item">  
	<label for="i164">D、09</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">17、选项ABCD中，哪一个应该填在"XOOOOXXOOOXXX"后：</legend>  
	<input type="radio" name="i17" id="i171" value="0" class="question_item">  
	<label for="i171">A、XOO</label>
	<input type="radio" name="i17" id="i172" value="5" class="question_item">  
	<label for="i172">B、OO</label>   
	<input type="radio" name="i17" id="i173" value="0" class="question_item">  
	<label for="i173">C、OOX</label>   
	<input type="radio" name="i17" id="i174" value="0" class="question_item">  
	<label for="i174">D、OXX</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">18、望子成龙的家长往往（）苗助长：</legend>  
	<input type="radio" name="i18" id="i181" value="5" class="question_item">  
	<label for="i181">A、揠</label>
	<input type="radio" name="i18" id="i182" value="0" class="question_item">  
	<label for="i182">B、堰</label>   
	<input type="radio" name="i18" id="i183" value="0" class="question_item">  
	<label for="i183">C、偃</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">19、填上空缺的词：金黄的头发（黄山）刀山火海，赞美人生（ ）卫国战争：</legend>  
	<input type="radio" name="i19" id="i191" value="0" class="question_item">  
	<label for="i191">A、人生</label>
	<input type="radio" name="i19" id="i192" value="5" class="question_item">  
	<label for="i192">B、美国</label>   
	<input type="radio" name="i19" id="i193" value="0" class="question_item">  
	<label for="i193">C、赞美 </label>   
	<input type="radio" name="i19" id="i194" value="0" class="question_item">  
	<label for="i194">D、生卫 </label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">20、选出不同类的一项：</legend>  
	<input type="radio" name="i20" id="i201" value="0" class="question_item">  
	<label for="i201">A、地板</label>
	<input type="radio" name="i20" id="i202" value="0" class="question_item">  
	<label for="i202">B、壁橱</label>   
	<input type="radio" name="i20" id="i203" value="0" class="question_item">  
	<label for="i203">C、窗户</label>   
	<input type="radio" name="i20" id="i204" value="5" class="question_item">  
	<label for="i204">D、窗帘</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">21、1、8、27、（），请写出（）内的数字。</legend>  
	<input type="radio" name="i21" id="i211" value="0" class="question_item">  
	<label for="i211">A、45</label>
	<input type="radio" name="i21" id="i212" value="5" class="question_item">  
	<label for="i212">B、64</label>   
	<input type="radio" name="i21" id="i213" value="0" class="question_item">  
	<label for="i213">C、81</label>   
	<input type="radio" name="i21" id="i214" value="0" class="question_item">  
	<label for="i214">D、100</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">22、填上空缺的词：罄竹难书（书法）无法无天，作奸犯科（ ）教学相长</legend>  
	<input type="radio" name="i22" id="i221" value="0" class="question_item">  
	<label for="i221">A、教学</label>
	<input type="radio" name="i22" id="i222" value="0" class="question_item">  
	<label for="i222">B、教科</label>   
	<input type="radio" name="i22" id="i223" value="5" class="question_item">  
	<label for="i223">C、科学</label>   
	<input type="radio" name="i22" id="i224" value="0" class="question_item">  
	<label for="i224">D、科长</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">23、在括号内填上一个字，使其与括号前后的字都能组成一个词：款（ ）样</legend>  
	<input type="radio" name="i23" id="i231" value="0" class="question_item">  
	<label for="i231">A、子</label>
	<input type="radio" name="i23" id="i232" value="0" class="question_item">  
	<label for="i232">B、爷</label>   
	<input type="radio" name="i23" id="i233" value="5" class="question_item">  
	<label for="i233">C、式</label>   
	<input type="radio" name="i23" id="i234" value="0" class="question_item">  
	<label for="i234">D、美</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">24、填入空缺的数字16、（96）、12、10、（ ）、7.5</legend>  
	<input type="radio" name="i24" id="i241" value="0" class="question_item">  
	<label for="i241">A、45</label>
	<input type="radio" name="i24" id="i242" value="5" class="question_item">  
	<label for="i242">B、60</label>   
	<input type="radio" name="i24" id="i243" value="0" class="question_item">  
	<label for="i243">C、36</label>   
	<input type="radio" name="i24" id="i244" value="0" class="question_item">  
	<label for="i244">D、72</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">25、找出不同类的一项：</legend>  
	<input type="radio" name="i25" id="i251" value="0" class="question_item">  
	<label for="i251">A、斑马</label>
	<input type="radio" name="i25" id="i252" value="0" class="question_item">  
	<label for="i252">B、军马</label>   
	<input type="radio" name="i25" id="i253" value="0" class="question_item">  
	<label for="i253">C、赛马</label>   
	<input type="radio" name="i25" id="i254" value="0" class="question_item">  
	<label for="i254">D、骏马</label>   
	<input type="radio" name="i25" id="i255" value="5" class="question_item">  
	<label for="i255">E、驸马</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">26、在括号上填上一个字，使其与括号前后的字都能组成一个词：祭（ ）定</legend>  
	<input type="radio" name="i26" id="i261" value="5" class="question_item">  
	<label for="i261">A、奠 </label>
	<input type="radio" name="i26" id="i262" value="0" class="question_item">  
	<label for="i262">B、祀</label>   
	<input type="radio" name="i26" id="i263" value="0" class="question_item">  
	<label for="i263">C、一</label>   
	<input type="radio" name="i26" id="i264" value="0" class="question_item">  
	<label for="i264">D、确</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">27、在括号内填上一个字：头部（ ）震荡</legend>  
	<input type="radio" name="i27" id="i271" value="5" class="question_item">  
	<label for="i271">A、脑</label>
	<input type="radio" name="i27" id="i272" value="0" class="question_item">  
	<label for="i272">B、胸</label>   
	<input type="radio" name="i27" id="i273" value="0" class="question_item">  
	<label for="i273">C、颈</label>   
	<input type="radio" name="i27" id="i274" value="0" class="question_item">  
	<label for="i274">D、头</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">28、填入空缺的数字65、37、17、（ ）</legend>  
	<input type="radio" name="i28" id="i281" value="5" class="question_item">  
	<label for="i281">A、5</label>
	<input type="radio" name="i28" id="i282" value="0" class="question_item">  
	<label for="i282">B、6</label>   
	<input type="radio" name="i28" id="i283" value="0" class="question_item">  
	<label for="i283">C、7</label>   
	<input type="radio" name="i28" id="i284" value="0" class="question_item">  
	<label for="i284">D、8</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">29、填入空缺的数字41、（28）、27、83、（ ）、65</legend>  
	<input type="radio" name="i29" id="i291" value="5" class="question_item">  
	<label for="i291">A、36</label>
	<input type="radio" name="i29" id="i292" value="0" class="question_item">  
	<label for="i292">B、30</label>   
	<input type="radio" name="i29" id="i293" value="0" class="question_item">  
	<label for="i293">C、45</label>   
	<input type="radio" name="i29" id="i294" value="0" class="question_item">  
	<label for="i294">D、54</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">30、填上空缺的字母   CFI DHL EJ（ ）</legend>  
	<input type="radio" name="i30" id="i301" value="0" class="question_last_item">  
	<label for="i301">A、E</label>
	<input type="radio" name="i30" id="i302" value="5" class="question_last_item">  
	<label for="i302">B、O</label>   
	<input type="radio" name="i30" id="i303" value="0" class="question_last_item">  
	<label for="i303">C、G</label>   
	<input type="radio" name="i30" id="i304" value="0" class="question_last_item">  
	<label for="i304">D、H</label>   
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
