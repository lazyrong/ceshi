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
	<legend style="color:#27F;text-align:left;fone-size:20px;">1、身高：175，已经非常高了，可以用屌丝的极限来形容。女神眼里178以上才算个男人。</legend>  
	<input type="radio" name="i1" id="i11" value="1" class="question_item">  
	<label for="i11">中枪！！</label>
	<input type="radio" name="i1" id="i12" value="0" class="question_item">  
	<label for="i12">中一半</label>   
	<input type="radio" name="i1" id="i13" value="-1" class="question_item">  
	<label for="i13">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">2、体重：要么瘦小要么肥胖，高富帅们从小营养好且注重健身，基本上身材都很健美。</legend>  
	<input type="radio" name="i2" id="i21" value="1" class="question_item">  
	<label for="i21">中枪！！</label>
	<input type="radio" name="i2" id="i22" value="0" class="question_item">  
	<label for="i22">中一半</label>   
	<input type="radio" name="i2" id="i23" value="-1" class="question_item">  
	<label for="i23">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">3、手机：用的都是一k多不超过2K的入门智能机，以前的NOKIA5230，现在的小米等安卓机。高富帅在诺基亚时代都用N73之类，在苹果时代都用IPHONE</legend>  
	<input type="radio" name="i3" id="i31" value="1" class="question_item">  
	<label for="i31">中枪！！</label>
	<input type="radio" name="i3" id="i32" value="0" class="question_item">  
	<label for="i32">中一半</label>   
	<input type="radio" name="i3" id="i33" value="-1" class="question_item">  
	<label for="i33">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">4、电子产品：喜欢研究各种电子产品如相机的品牌、型号、配置，聊天的时候能说的头头是到。高富帅甚至不知道自己的索尼是什么型号</legend>  
	<input type="radio" name="i4" id="i41" value="1" class="question_item">  
	<label for="i41">中枪！！</label>
	<input type="radio" name="i4" id="i42" value="0" class="question_item">  
	<label for="i42">中一半</label>   
	<input type="radio" name="i4" id="i43" value="-1" class="question_item">  
	<label for="i43">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">5、衣着：真维斯、李宁、安踏、德尔惠、乔丹、361度、地摊货、淘宝便宜货。</legend>  
	<input type="radio" name="i5" id="i51" value="1" class="question_item">  
	<label for="i51">中枪！！</label>
	<input type="radio" name="i5" id="i52" value="0" class="question_item">  
	<label for="i52">中一半</label>   
	<input type="radio" name="i5" id="i53" value="-1" class="question_item">  
	<label for="i53">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">6、衣着：偶尔也会在打折的时候买一条里维斯，但不会顺便买一条300块钱里维斯的皮带。细节是区别的最大体现，吊丝是没有资本追求细节的。</legend>  
	<input type="radio" name="i6" id="i61" value="1" class="question_item">  
	<label for="i61">中枪！！</label>
	<input type="radio" name="i6" id="i62" value="0" class="question_item">  
	<label for="i62">中一半</label>   
	<input type="radio" name="i6" id="i63" value="-1" class="question_item">  
	<label for="i63">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">7、饮食：高富帅经常出入星巴克，而屌丝也去过星巴克和吃哈根达斯，但是次数不会超过3次。而且女屌丝会拍照片上传到网上，并附上一句：XXX是我的最爱~</legend>  
	<input type="radio" name="i7" id="i71" value="1" class="question_item">  
	<label for="i71">中枪！！</label>
	<input type="radio" name="i7" id="i72" value="0" class="question_item">  
	<label for="i72">中一半</label>   
	<input type="radio" name="i7" id="i73" value="-1" class="question_item">  
	<label for="i73">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">8、抽烟：高帅富抽的烟两三十块的很正常，而屌丝在人前也会抽这种烟，但是只在人前抽，其实背地里都是抽的红双喜、红塔山之流</legend>  
	<input type="radio" name="i8" id="i81" value="1" class="question_item">  
	<label for="i81">中枪！！</label>
	<input type="radio" name="i8" id="i82" value="0" class="question_item">  
	<label for="i82">中一半</label>   
	<input type="radio" name="i8" id="i83" value="-1" class="question_item">  
	<label for="i83">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">9、游戏：屌丝们喜欢在dota等竞技性游戏或者没有人民币玩家的网游里寻求优越感，因而高富帅通常喜欢的是各种日本的游戏机或者可以砸钱的快餐网游</legend>  
	<input type="radio" name="i9" id="i91" value="1" class="question_item">  
	<label for="i91">中枪！！</label>
	<input type="radio" name="i9" id="i92" value="0" class="question_item">  
	<label for="i92">中一半</label>   
	<input type="radio" name="i9" id="i93" value="-1" class="question_item">  
	<label for="i93">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">10、旅行：屌丝们没有出过国，但是说起美利坚、大日本等国的时候都分析的头头是道，李菊福，这方面完爆高富帅。高富帅唯一的优势是，这些地方他们都去过</legend>  
	<input type="radio" name="i10" id="i101" value="1" class="question_item">  
	<label for="i101">中枪！！</label>
	<input type="radio" name="i10" id="i102" value="0" class="question_item">  
	<label for="i102">中一半</label>   
	<input type="radio" name="i10" id="i103" value="-1" class="question_item">  
	<label for="i103">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">11、饮料：康师傅系列，脉动，鲜橙多，快活林</legend>  
	<input type="radio" name="i11" id="i111" value="1" class="question_item">  
	<label for="i111">中枪！！</label>
	<input type="radio" name="i11" id="i112" value="0" class="question_item">  
	<label for="i112">中一半</label>   
	<input type="radio" name="i11" id="i113" value="-1" class="question_item">  
	<label for="i113">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">12、食品：沙县小吃，黑暗料理，路边摊，鸡蛋灌饼，豆浆，油条，包子，馒头，牛肉面，回锅肉炒饭</legend>  
	<input type="radio" name="i12" id="i121" value="1" class="question_item">  
	<label for="i121">中枪！！</label>
	<input type="radio" name="i12" id="i122" value="0" class="question_item">  
	<label for="i122">中一半</label>   
	<input type="radio" name="i12" id="i123" value="-1" class="question_item">  
	<label for="i123">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">13、发型：平头，刘海很长或奇形怪状的发型，碎发</legend>  
	<input type="radio" name="i13" id="i131" value="1" class="question_item">  
	<label for="i131">中枪！！</label>
	<input type="radio" name="i13" id="i132" value="0" class="question_item">  
	<label for="i132">中一半</label>   
	<input type="radio" name="i13" id="i133" value="-1" class="question_item">  
	<label for="i133">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">14、网络：QQ永远在线，但几乎从来不会有人主动来搭讪。终于鼓起勇气跟女神搭讪，换来的也只是一句：呵呵</legend>  
	<input type="radio" name="i14" id="i141" value="1" class="question_item">  
	<label for="i141">中枪！！</label>
	<input type="radio" name="i14" id="i142" value="0" class="question_item">  
	<label for="i142">中一半</label>   
	<input type="radio" name="i14" id="i143" value="-1" class="question_item">  
	<label for="i143">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">15、通信：手机不离身，拉屎也要带着。每次有信息来都迫不及待地打开看，然后发现是10086发的。每个月的包月短信总是用不完。</legend>  
	<input type="radio" name="i15" id="i151" value="1" class="question_item">  
	<label for="i151">中枪！！</label>
	<input type="radio" name="i15" id="i152" value="0" class="question_item">  
	<label for="i152">中一半</label>   
	<input type="radio" name="i15" id="i153" value="-1" class="question_item">  
	<label for="i153">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">16、微信：几乎每天都要摇一摇，却总是摇到跟自己一样的屌丝。好不容易摇到个女的，各种跪拜和赞美之后换来一句：呵呵。女屌丝一直在‘附近的人’里面显示，却在资料里写着：勿勾搭 </legend>  
	<input type="radio" name="i16" id="i161" value="1" class="question_item">  
	<label for="i161">中枪！！</label>
	<input type="radio" name="i16" id="i162" value="0" class="question_item">  
	<label for="i162">中一半</label>   
	<input type="radio" name="i16" id="i163" value="-1" class="question_item">  
	<label for="i163">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">17、胆小猥琐，即使在网上各种风趣幽默，现实里看见7分女就脸红，不敢说话</legend>  
	<input type="radio" name="i17" id="i171" value="1" class="question_item">  
	<label for="i171">中枪！！</label>
	<input type="radio" name="i17" id="i172" value="0" class="question_item">  
	<label for="i172">中一半</label>   
	<input type="radio" name="i17" id="i173" value="-1" class="question_item">  
	<label for="i173">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">18、无女友。见到美女和男的恩爱就在心里感慨好B都被XX了。谈起这个话题就说：现在的女的都太TM现实了。</legend>  
	<input type="radio" name="i18" id="i181" value="1" class="question_item">  
	<label for="i181">中枪！！</label>
	<input type="radio" name="i18" id="i182" value="0" class="question_item">  
	<label for="i182">中一半</label>   
	<input type="radio" name="i18" id="i183" value="-1" class="question_item">  
	<label for="i183">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">19、坐位置一定要选在后面，迟到了总想从后门进，害怕“高帅富”和“女神”的眼光。</legend>  
	<input type="radio" name="i19" id="i191" value="1" class="question_item">  
	<label for="i191">中枪！！</label>
	<input type="radio" name="i19" id="i192" value="0" class="question_item">  
	<label for="i192">中一半</label>   
	<input type="radio" name="i19" id="i193" value="-1" class="question_item">  
	<label for="i193">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">20、讨厌别人用照相机拍自己，因为一副搓B相。或者干脆破罐破摔，摆出一些鬼脸表情。</legend>  
	<input type="radio" name="i20" id="i201" value="1" class="question_item">  
	<label for="i201">中枪！！</label>
	<input type="radio" name="i20" id="i202" value="0" class="question_item">  
	<label for="i202">中一半</label>   
	<input type="radio" name="i20" id="i203" value="-1" class="question_item">  
	<label for="i203">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">21、不敢穿颜色鲜艳的衣服，也不敢穿戴特别潮的衣服和饰品。</legend>  
	<input type="radio" name="i21" id="i211" value="1" class="question_item">  
	<label for="i211">中枪！！</label>
	<input type="radio" name="i21" id="i212" value="0" class="question_item">  
	<label for="i212">中一半</label>   
	<input type="radio" name="i21" id="i213" value="-1" class="question_item">  
	<label for="i213">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">22、喜欢看小说，特别是YY小说、休闲小说。经常把自己幻想成小说或者电影里的英雄。</legend>  
	<input type="radio" name="i22" id="i221" value="1" class="question_item">  
	<label for="i221">中枪！！</label>
	<input type="radio" name="i22" id="i222" value="0" class="question_item">  
	<label for="i222">中一半</label>   
	<input type="radio" name="i22" id="i223" value="-1" class="question_item">  
	<label for="i223">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">23、没有特长，平平淡淡，也没有除了打游戏和女神之外的爱好。</legend>  
	<input type="radio" name="i23" id="i231" value="1" class="question_item">  
	<label for="i231">中枪！！</label>
	<input type="radio" name="i23" id="i232" value="0" class="question_item">  
	<label for="i232">中一半</label>   
	<input type="radio" name="i23" id="i233" value="-1" class="question_item">  
	<label for="i233">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">24、不爱运动，早上经常睡到10点。最近一次去操场锻炼是上体育课。</legend>  
	<input type="radio" name="i24" id="i241" value="1" class="question_item">  
	<label for="i241">中枪！！</label>
	<input type="radio" name="i24" id="i242" value="0" class="question_item">  
	<label for="i242">中一半</label>   
	<input type="radio" name="i24" id="i243" value="-1" class="question_item">  
	<label for="i243">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">25、拥有“美国梦”（留学，出国，移民），在网上常有愤青言论或者想法，哀叹自己没有生在美利坚。</legend>  
	<input type="radio" name="i25" id="i251" value="1" class="question_item">  
	<label for="i251">中枪！！</label>
	<input type="radio" name="i25" id="i252" value="0" class="question_item">  
	<label for="i252">中一半</label>   
	<input type="radio" name="i25" id="i253" value="-1" class="question_item">  
	<label for="i253">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">26、看到高富帅，白富美顿时没了自信，低头，或者掏出自己的渣手机乱按着。</legend>  
	<input type="radio" name="i26" id="i261" value="1" class="question_item">  
	<label for="i261">中枪！！</label>
	<input type="radio" name="i26" id="i262" value="0" class="question_item">  
	<label for="i262">中一半</label>   
	<input type="radio" name="i26" id="i263" value="-1" class="question_item">  
	<label for="i263">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">27、带女神出去撮一顿得吃一周馒头和稀饭。</legend>  
	<input type="radio" name="i27" id="i271" value="1" class="question_item">  
	<label for="i271">中枪！！</label>
	<input type="radio" name="i27" id="i272" value="0" class="question_item">  
	<label for="i272">中一半</label>   
	<input type="radio" name="i27" id="i273" value="-1" class="question_item">  
	<label for="i273">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">28、嘴上一直说自己是屌丝，其实心里根本不承认。</legend>  
	<input type="radio" name="i28" id="i281" value="1" class="question_item">  
	<label for="i281">中枪！！</label>
	<input type="radio" name="i28" id="i282" value="0" class="question_item">  
	<label for="i282">中一半</label>   
	<input type="radio" name="i28" id="i283" value="-1" class="question_item">  
	<label for="i283">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">29、看到比自己还搓的男的挽着还比较漂亮的女生时，各种羡慕嫉妒狠，心里却又自我安慰着——宁缺毋滥。</legend>  
	<input type="radio" name="i29" id="i291" value="1" class="question_item">  
	<label for="i291">中枪！！</label>
	<input type="radio" name="i29" id="i292" value="0" class="question_item">  
	<label for="i292">中一半</label>   
	<input type="radio" name="i29" id="i293" value="-1" class="question_item">  
	<label for="i293">逆袭一个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">30、做完了网上的屌丝指数测试之后，高富帅顺手就分享了因为有底气，不虚，屌丝要忐忐忑忑左顾右盼视结果情况而定</legend>  
	<input type="radio" name="i30" id="i301" value="1" class="question_last_item">  
	<label for="i301">中枪！！</label>
	<input type="radio" name="i30" id="i302" value="0" class="question_last_item">  
	<label for="i302">中一半</label>   
	<input type="radio" name="i30" id="i303" value="-1" class="question_last_item">  
	<label for="i303">逆袭一个</label>   
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
