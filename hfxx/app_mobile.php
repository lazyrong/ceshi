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
	<legend style="color:#27F;text-align:left;fone-size:20px;">1、你的性别（这个很重要哦）</legend>  
	<input type="radio" name="i1" id="i11" value="1000" class="question_item">  
	<label for="i11">男生</label>
	<input type="radio" name="i1" id="i12" value="0" class="question_item">  
	<label for="i12">女生</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">2、你在看地图,或街上指示时,你会:</legend>  
	<input type="radio" name="i2" id="i21" value="15" class="question_item">  
	<label for="i21">会有困难,而找人协助 </label>
	<input type="radio" name="i2" id="i22" value="5" class="question_item">  
	<label for="i22">把地图转过来,面对你要走的方向</label>   
	<input type="radio" name="i2" id="i23" value="-5" class="question_item">  
	<label for="i23">没有任何困难</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">3、你在准备一道做法复杂的菜时,一边正在播放收音机, 还有朋友的来电.你会:</legend>  
	<input type="radio" name="i3" id="i31" value="15" class="question_item">  
	<label for="i31">三件事同时进行</label>
	<input type="radio" name="i3" id="i32" value="5" class="question_item">  
	<label for="i32">关掉收音机,但嘴巴和手都没有停</label>   
	<input type="radio" name="i3" id="i33" value="-5" class="question_item">  
	<label for="i33">告诉朋友,你做好菜后马上回电话给他</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">4、朋友要来参观你的新家,问你该怎么走,你会:</legend>  
	<input type="radio" name="i4" id="i41" value="15" class="question_item">  
	<label for="i41">画一张标示清楚的地图寄给他们,或是请别人替你说明该如何走</label>
	<input type="radio" name="i4" id="i42" value="5" class="question_item">  
	<label for="i42">问她们有没有熟悉的地标,然后告诉他们该怎么走 </label>   
	<input type="radio" name="i4" id="i43" value="-5" class="question_item">  
	<label for="i43">口头上告诉他们该怎么走</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">5、解释一个想法或概念时,你很可能会怎么做:</legend>  
	<input type="radio" name="i5" id="i51" value="15" class="question_item">  
	<label for="i51">会利用铅笔、纸和肢体语言</label>
	<input type="radio" name="i5" id="i52" value="5" class="question_item">  
	<label for="i52">口头解释加上肢体语言</label>   
	<input type="radio" name="i5" id="i53" value="-5" class="question_item">  
	<label for="i53">口头上清楚简单的解释</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">6、看完一场很棒的电影回家后,你喜欢: </legend>  
	<input type="radio" name="i6" id="i61" value="15" class="question_item">  
	<label for="i61">在脑海里回想电影的画面</label>
	<input type="radio" name="i6" id="i62" value="5" class="question_item">  
	<label for="i62">把画面及角色的台词说出来</label>   
	<input type="radio" name="i6" id="i63" value="-5" class="question_item">  
	<label for="i63">主要引述电影里的对话</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">7、在电影院里你最喜欢坐在:</legend>  
	<input type="radio" name="i7" id="i71" value="15" class="question_item">  
	<label for="i71">电影院的右边</label>
	<input type="radio" name="i7" id="i72" value="5" class="question_item">  
	<label for="i72">不在意坐在哪里</label>   
	<input type="radio" name="i7" id="i73" value="-5" class="question_item">  
	<label for="i73">电影院的左边</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">8、一个朋友的机器出了问题,你会: </legend>  
	<input type="radio" name="i8" id="i81" value="15" class="question_item">  
	<label for="i81">深表同情,并和他们讨论他们的感觉</label>
	<input type="radio" name="i8" id="i82" value="5" class="question_item">  
	<label for="i82">介绍一个值得信任的人去修理</label>   
	<input type="radio" name="i8" id="i83" value="-5" class="question_item">  
	<label for="i83">弄清楚它的构造,想帮他们修理好</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">9、在不熟悉的地方,有人问你北方是哪个方向,你会: </legend>  
	<input type="radio" name="i9" id="i91" value="15" class="question_item">  
	<label for="i91">坦白说你不知道</label>
	<input type="radio" name="i9" id="i92" value="5" class="question_item">  
	<label for="i92">思考一会儿后,推测大约的方向</label>   
	<input type="radio" name="i9" id="i93" value="-5" class="question_item">  
	<label for="i93">毫无困难的指出北方方向</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">10、你找到一个停车位,可是空间很小,必须用倒车才能停进去,你会: </legend>  
	<input type="radio" name="i10" id="i101" value="15" class="question_item">  
	<label for="i101">宁愿找另一个车位</label>
	<input type="radio" name="i10" id="i102" value="5" class="question_item">  
	<label for="i102">试图小心的停进去</label>   
	<input type="radio" name="i10" id="i103" value="-5" class="question_item">  
	<label for="i103">很顺利的倒出车停进去</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">11、你在看电视时,这时电话响了,你会:</legend>  
	<input type="radio" name="i11" id="i111" value="15" class="question_item">  
	<label for="i111">接电话,电视开着</label>
	<input type="radio" name="i11" id="i112" value="5" class="question_item">  
	<label for="i112">把音量转小后才接电话</label>   
	<input type="radio" name="i11" id="i113" value="-5" class="question_item">  
	<label for="i113">关掉电视,叫其他人安静后才接电话</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">12、你听到一首新歌,是你喜欢的歌手唱的,通常你会:</legend>  
	<input type="radio" name="i12" id="i121" value="15" class="question_item">  
	<label for="i121">听完后,你可以毫无困难的跟着唱</label>
	<input type="radio" name="i12" id="i122" value="5" class="question_item">  
	<label for="i122">如果是首很简单的歌,听过后你可以跟着哼唱一小段</label>   
	<input type="radio" name="i12" id="i123" value="-5" class="question_item">  
	<label for="i123">很难记得歌曲的旋律,但是你可以回想起部分歌词</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">13、你对事情的结局如何会有强烈的预感,是借着: </legend>  
	<input type="radio" name="i13" id="i131" value="15" class="question_item">  
	<label for="i131">直觉</label>
	<input type="radio" name="i13" id="i132" value="5" class="question_item">  
	<label for="i132">可靠的资讯和大胆的假设,才做出判断</label>   
	<input type="radio" name="i13" id="i133" value="-5" class="question_item">  
	<label for="i133">事实统计数字和资料</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">14、你忘了把钥匙时放在哪里,你会: </legend>  
	<input type="radio" name="i14" id="i141" value="15" class="question_item">  
	<label for="i141">先做别的事,等到自然想起为止</label>
	<input type="radio" name="i14" id="i142" value="5" class="question_item">  
	<label for="i142">做别的事,但同时试着回想你把钥匙放在哪里</label>   
	<input type="radio" name="i14" id="i143" value="-5" class="question_item">  
	<label for="i143">在心理回想刚刚做了哪些事,藉此想起放在何处</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">15、你在饭店里,听到远处传来警报,你会:</legend>  
	<input type="radio" name="i15" id="i151" value="15" class="question_item">  
	<label for="i151">指出声音来源</label>
	<input type="radio" name="i15" id="i152" value="5" class="question_item">  
	<label for="i152">如果你够专心,可以指出声音来源</label>   
	<input type="radio" name="i15" id="i153" value="-5" class="question_item">  
	<label for="i153">没办法知道声音来源</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">16、你参加一个社交宴会时,有人向你介绍七八位新朋友,隔天你会: </legend>  
	<input type="radio" name="i16" id="i161" value="15" class="question_item">  
	<label for="i161">可以轻易想起他们的长相</label>
	<input type="radio" name="i16" id="i162" value="5" class="question_item">  
	<label for="i162">只能记得其中几个的长相 </label>   
	<input type="radio" name="i16" id="i163" value="-5" class="question_item">  
	<label for="i163">比较可能记住他们的名字</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">17、你想去乡间度假时,但是你的伴侣想去海边的渡假胜地.你要怎么说服他呢? </legend>  
	<input type="radio" name="i17" id="i171" value="15" class="question_item">  
	<label for="i171">和颜悦色的说你的感觉:你喜欢乡间的悠闲,小孩和家人在乡间过得很快乐。</label>
	<input type="radio" name="i17" id="i172" value="5" class="question_item">  
	<label for="i172">告诉他如果能去乡间渡假,你会感到很愉快,下次你会很乐意去海边</label>   
	<input type="radio" name="i17" id="i173" value="-5" class="question_item">  
	<label for="i173">说出事实:乡间渡假区比较近,比较便宜,有规划适当的休闲设施</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">18、规划日常生活时,通常你会:</legend>  
	<input type="radio" name="i18" id="i181" value="15" class="question_item">  
	<label for="i181">列张清单,这样一来该做什么事一目了然</label>
	<input type="radio" name="i18" id="i182" value="5" class="question_item">  
	<label for="i182">考虑你该做哪些事</label>   
	<input type="radio" name="i18" id="i183" value="-5" class="question_item">  
	<label for="i183">在心里想你会见到哪些人,会到哪些地方,以及你得处理哪些事</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">19、一个朋友有了困难,他来找你商量,你会: </legend>  
	<input type="radio" name="i19" id="i191" value="15" class="question_item">  
	<label for="i191">表示同情,还有你能理解他的困难</label>
	<input type="radio" name="i19" id="i192" value="5" class="question_item">  
	<label for="i192">说事情并不如他想的严重,并加以解</label>   
	<input type="radio" name="i19" id="i193" value="-5" class="question_item">  
	<label for="i193">给他建议,或是合理的忠告,告诉他该如何解决 </label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">20、两个已婚的朋友有了外遇,你会如何发现: </legend>  
	<input type="radio" name="i20" id="i201" value="15" class="question_item">  
	<label for="i201">你会很早就察觉 </label>
	<input type="radio" name="i20" id="i202" value="5" class="question_item">  
	<label for="i202">经过一段时间后才察觉</label>   
	<input type="radio" name="i20" id="i203" value="-5" class="question_item">  
	<label for="i203">根本不会察觉</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">21、你的生活态度为何? </legend>  
	<input type="radio" name="i21" id="i211" value="15" class="question_item">  
	<label for="i211">交很多朋友,和周围的人和谐相处</label>
	<input type="radio" name="i21" id="i212" value="5" class="question_item">  
	<label for="i212">友善的对待他人,但保持个人隐私</label>   
	<input type="radio" name="i21" id="i213" value="-5" class="question_item">  
	<label for="i213">完成某个伟大目标,赢得别人的尊敬,名望及获得晋升</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">22、如果有选择,你会喜欢什么样的工作:</legend>  
	<input type="radio" name="i22" id="i221" value="15" class="question_item">  
	<label for="i221">和可以相处的人一起工作</label>
	<input type="radio" name="i22" id="i222" value="5" class="question_item">  
	<label for="i222">有其他同事,但也保有自己的空间 </label>   
	<input type="radio" name="i22" id="i223" value="-5" class="question_item">  
	<label for="i223">独自工作</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">23、你喜欢读的书是: </legend>  
	<input type="radio" name="i23" id="i231" value="15" class="question_item">  
	<label for="i231">小说,其他文学作品</label>
	<input type="radio" name="i23" id="i232" value="5" class="question_item">  
	<label for="i232">报章杂志</label>   
	<input type="radio" name="i23" id="i233" value="-5" class="question_item">  
	<label for="i233">非文学类,传记</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">24、购物时你倾向:</legend>  
	<input type="radio" name="i24" id="i241" value="15" class="question_item">  
	<label for="i241">常常是一时冲动,尤其是特殊物品 </label>
	<input type="radio" name="i24" id="i242" value="5" class="question_item">  
	<label for="i242">有个粗略的计画,可是心血来潮时也会买</label>   
	<input type="radio" name="i24" id="i243" value="-5" class="question_item">  
	<label for="i243">读标签,比较价钱</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">25、睡觉起床吃饭,你比较喜欢怎么做: </legend>  
	<input type="radio" name="i25" id="i251" value="15" class="question_item">  
	<label for="i251">随心所欲 </label>
	<input type="radio" name="i25" id="i252" value="5" class="question_item">  
	<label for="i252">依据一定的计画,但弹性很大</label>   
	<input type="radio" name="i25" id="i253" value="-5" class="question_item">  
	<label for="i253">每天几乎有固定的时间</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">26、你开始一个新的工作,认识许多新同事.其中一个打电话到家里找你, 你会 :</legend>  
	<input type="radio" name="i26" id="i261" value="15" class="question_item">  
	<label for="i261">轻易的认出他的声音</label>
	<input type="radio" name="i26" id="i262" value="5" class="question_item">  
	<label for="i262">谈了一会儿话后,才知道他是谁</label>   
	<input type="radio" name="i26" id="i263" value="-5" class="question_item">  
	<label for="i263">无法从声音辨认他到底是谁</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">27、和别人有争论时,什么事会令你很生气: </legend>  
	<input type="radio" name="i27" id="i271" value="15" class="question_item">  
	<label for="i271">沉默或是没有反应</label>
	<input type="radio" name="i27" id="i272" value="5" class="question_item">  
	<label for="i272">他们不了解你的观点</label>   
	<input type="radio" name="i27" id="i273" value="-5" class="question_item">  
	<label for="i273">追根究底的问问题,或是提出质疑,或是评论</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">28、你对学校的拼字测验以及作文课有何感觉?</legend>  
	<input type="radio" name="i28" id="i281" value="15" class="question_item">  
	<label for="i281">觉得两项都很简单</label>
	<input type="radio" name="i28" id="i282" value="5" class="question_item">  
	<label for="i282">其中一项还可以,另一项就不是很好</label>   
	<input type="radio" name="i28" id="i283" value="-5" class="question_item">  
	<label for="i283">两项都不好</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">29、碰到固定的舞步或是爵士舞时,你会:</legend>  
	<input type="radio" name="i29" id="i291" value="15" class="question_item">  
	<label for="i291">听到音乐就会想起学过的舞步</label>
	<input type="radio" name="i29" id="i292" value="5" class="question_item">  
	<label for="i292">只能跳一点点,大多想不起来</label>   
	<input type="radio" name="i29" id="i293" value="-5" class="question_item">  
	<label for="i293">抓不准时间和旋律</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">30、一天结束后,你喜欢:  </legend>  
	<input type="radio" name="i30" id="i301" value="30" class="question_last_item">  
	<label for="i301">和朋友或家人谈谈你这一天过得如何</label>
	<input type="radio" name="i30" id="i302" value="10" class="question_last_item">  
	<label for="i302">听别人谈他这一天过得如何</label>   
	<input type="radio" name="i30" id="i303" value="-10" class="question_last_item">  
	<label for="i303">看报纸电视,不会聊天</label>   
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
