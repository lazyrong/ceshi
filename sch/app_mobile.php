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
	<!-- Home -->
	<div id="login_page" data-role="page" data-theme="c">
		<div data-role="header" data-theme="c">
			<a href="/" data-icon="home" data-ajax="false" class="ui-link">首页</a>
			<h3 ><?=$app_list[$app_name]['title']?></h3>
			<a href="/" data-icon="arrow-l" data-ajax="false" class="ui-link">返回</a>
		</div>
		
		<div data-role="content" >
			
<div class="app_content">
<p style="color:#F06; text-align:center">已完成：<span id="count">0</span>/15</p>
<form action="./" method="post" id="form1" name="form1">
<div data-role="controlgroup" class="question" style="display:block;">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">1.女：啥子事？男：关你求事！问：男的意思是什么？</legend>  
	<input type="radio" name="i1" id="i11" value="0" class="question_item">  
	<label for="i11">求我我才告诉你</label>
	<input type="radio" name="i1" id="i12" value="6" class="question_item">  
	<label for="i12">不关你的事</label>   
	<input type="radio" name="i1" id="i13" value="0" class="question_item">  
	<label for="i13">和你的球有关</label>   
	<input type="radio" name="i1" id="i14" value="0" class="question_item">  
	<label for="i14">以上答案均不对</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">>2.张三：哈哈,这道题张三我做出来了！李四,你做出来没有？李四：早十八年就做出来了。由此我们可以推断？</legend>  
	<input type="radio" name="i2" id="i21" value="0" class="question_item">  
	<label for="i21">李四今年18岁</label>
	<input type="radio" name="i2" id="i22" value="0" class="question_item">  
	<label for="i22">李四比张三大18岁</label>   
	<input type="radio" name="i2" id="i23" value="0" class="question_item">  
	<label for="i23">李四在18年前做过此题</label>   
	<input type="radio" name="i2" id="i24" value="6" class="question_item">  
	<label for="i24">李四已经做出来了</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">3.女：快点！你在干啥子？男：马上,我在穿HAI子！问：男的现在可能在做什么？</legend>  
	<input type="radio" name="i3" id="i31" value="0" class="question_item">  
	<label for="i31">照镜子 </label>
	<input type="radio" name="i3" id="i32" value="6" class="question_item">  
	<label for="i32">系鞋带</label>   
	<input type="radio" name="i3" id="i33" value="0" class="question_item">  
	<label for="i33">穿衣服</label>   
	<input type="radio" name="i3" id="i34" value="0" class="question_item">  
	<label for="i34">给孩子穿衣服</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">4.甲：你爪子？乙：肚子忽然痛了！问：爪子是什么意思？</legend>  
	<input type="radio" name="i4" id="i41" value="0" class="question_item">  
	<label for="i41">乙有爪子</label>
	<input type="radio" name="i4" id="i42" value="6" class="question_item">  
	<label for="i42">做什么的意思</label>   
	<input type="radio" name="i4" id="i43" value="0" class="question_item">  
	<label for="i43">甲询问乙的爪子在哪里</label>   
	<input type="radio" name="i4" id="i44" value="0" class="question_item">  
	<label for="i44">说不清楚</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">5.男：给你讲件事,龅牙叔下台了女：鬼扯。男：鬼扯我才不扯。问：从这段话我们可以知道什么？</legend>  
	<input type="radio" name="i5" id="i51" value="0" class="question_item">  
	<label for="i51">有个鬼叫龅牙叔</label>
	<input type="radio" name="i5" id="i52" value="0" class="question_item">  
	<label for="i52">女的不相信有鬼</label>   
	<input type="radio" name="i5" id="i53" value="6" class="question_item">  
	<label for="i53">男的说他说的是实话</label>   
	<input type="radio" name="i5" id="i54" value="0" class="question_item">  
	<label for="i54">男的在和女的扯皮</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">6.班上共有N个渣渣.一天大扫除,先扫出10堆渣渣,再派10个渣渣去渣渣场丢渣渣,<br/>教室头还剩下几个渣渣在扫渣渣？问：上面这段话中,与人渣相同的词共有几个？</legend>  
	<input type="radio" name="i6" id="i61" value="0" class="question_item">  
	<label for="i61">2个</label>
	<input type="radio" name="i6" id="i62" value="7" class="question_item">  
	<label for="i62">3个</label>   
	<input type="radio" name="i6" id="i63" value="0" class="question_item">  
	<label for="i63">N个</label>   
	<input type="radio" name="i6" id="i64" value="0" class="question_item">  
	<label for="i64">N-10个</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">7.四川人普通话说的不好,就说他说的是（　）普通话？</legend>  
	<input type="radio" name="i7" id="i71" value="0" class="question_item">  
	<label for="i71">红烧</label>
	<input type="radio" name="i7" id="i72" value="7" class="question_item">  
	<label for="i72">椒盐</label>   
	<input type="radio" name="i7" id="i73" value="0" class="question_item">  
	<label for="i73">麻辣</label>   
	<input type="radio" name="i7" id="i74" value="0" class="question_item">  
	<label for="i74">糖醋</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">8.（　）得烤蛇吃,此处应该填什么？</legend>  
	<input type="radio" name="i8" id="i81" value="0" class="question_item">  
	<label for="i81">饿</label>
	<input type="radio" name="i8" id="i82" value="0" class="question_item">  
	<label for="i82">穷</label>   
	<input type="radio" name="i8" id="i83" value="0" class="question_item">  
	<label for="i83">疯</label>   
	<input type="radio" name="i8" id="i84" value="7" class="question_item">  
	<label for="i84">懒</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">9.烤（KAO一声）沙罐,指的是？</legend>  
	<input type="radio" name="i9" id="i91" value="0" class="question_item">  
	<label for="i91">一道菜</label>
	<input type="radio" name="i9" id="i92" value="0" class="question_item">  
	<label for="i92">一道工艺品</label>   
	<input type="radio" name="i9" id="i93" value="7" class="question_item">  
	<label for="i93">被枪毙</label>   
	<input type="radio" name="i9" id="i94" value="0" class="question_item">  
	<label for="i94">迷信说法,用沙罐来占卜</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">10.这件衣服很相因,指的是（　）？</legend>  
	<input type="radio" name="i10" id="i101" value="7" class="question_item">  
	<label for="i101">这件衣服很便宜</label>
	<input type="radio" name="i10" id="i102" value="0" class="question_item">  
	<label for="i102">这件衣服质量很好</label>   
	<input type="radio" name="i10" id="i103" value="0" class="question_item">  
	<label for="i103">这件衣服很适合你</label>   
	<input type="radio" name="i10" id="i104" value="0" class="question_item">  
	<label for="i104">这件衣服我们可以换着穿</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">11.甲：告诉你一件事情……乙：是不是真的哦？甲：真的哦！ 这时候乙最有可能说的是：</legend>  
	<input type="radio" name="i11" id="i111" value="0" class="question_item">  
	<label for="i111">你少骗我！</label>
	<input type="radio" name="i11" id="i112" value="7" class="question_item">  
	<label for="i112">真的还煮的呢！</label>   
	<input type="radio" name="i11" id="i113" value="0" class="question_item">  
	<label for="i113">少来哄我！</label>   
	<input type="radio" name="i11" id="i114" value="0" class="question_item">  
	<label for="i114">我不信</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">12.下面与[你又吃胡了！]意思相近的是？</legend>  
	<input type="radio" name="i12" id="i121" value="7" class="question_item">  
	<label for="i121">你又赢了！</label>
	<input type="radio" name="i12" id="i122" value="0" class="question_item">  
	<label for="i122">你吃了这么多了,还吃？！</label>   
	<input type="radio" name="i12" id="i123" value="0" class="question_item">  
	<label for="i123">你怎么又偷吃东西了？</label>   
	<input type="radio" name="i12" id="i124" value="0" class="question_item">  
	<label for="i124">你又输了？</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">13.[污猫皂狗]形容的是什么？</legend>  
	<input type="radio" name="i13" id="i131" value="0" class="question_item">  
	<label for="i131">一个人养了很多动物</label>
	<input type="radio" name="i13" id="i132" value="0" class="question_item">  
	<label for="i132">天色阴沉,快下雨了</label>   
	<input type="radio" name="i13" id="i133" value="7" class="question_item">  
	<label for="i133">一个人很邋遢</label>   
	<input type="radio" name="i13" id="i134" value="0" class="question_item">  
	<label for="i134">一个人思想不健康</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question" >  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">14.甲：（　）乙：锤子！甲最有可能说的是什么？</legend>  
	<input type="radio" name="i14" id="i141" value="0" class="question_item">  
	<label for="i141">你要买什么？</label>
	<input type="radio" name="i14" id="i142" value="0" class="question_item">  
	<label for="i142">你吃了吗？</label>   
	<input type="radio" name="i14" id="i143" value="0" class="question_item">  
	<label for="i143">现在网上流行什么？</label>   
	<input type="radio" name="i14" id="i144" value="7" class="question_item">  
	<label for="i144">听说你泡了个MM</label>   
	</fieldset>  
</div>
<div data-role="controlgroup" class="question">  
	<fieldset data-role="controlgroup">  
	<legend style="color:#27F;text-align:left;fone-size:20px;">15.下列词中不表示颜色的是:</legend>  
	<input type="radio" name="i15" id="i151" value="0" class="question_last_item">  
	<label for="i151">迅白</label>
	<input type="radio" name="i15" id="i152" value="0" class="question_last_item">  
	<label for="i152">黢黑</label>   
	<input type="radio" name="i15" id="i153" value="0" class="question_last_item">  
	<label for="i153">缺青</label>   
	<input type="radio" name="i15" id="i154" value="7" class="question_last_item">  
	<label for="i154">日白</label>   
	</fieldset>  
<p style="text-align:center; margin-top:10px;">
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
