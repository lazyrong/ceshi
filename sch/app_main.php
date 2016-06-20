<style>
.main_l .content{ margin:10px auto; width:480px; text-align:left; margin-bottom:50px}
.main_l .content .question{padding:10px 0 0; display:none;}
.main_l .content .q_title{ margin-bottom:30px;color:#27F;}
.main_l .item,.content .last_item{ font-size:15px; padding:5px 12px;line-height:28px; background:#f8f8f8; border:1px solid #ddd; margin-bottom:15px; cursor:pointer; color:#565656}
.content .item:hover,.content .last_item:hover{background:#eee; border:1px solid #ddd;}
</style>

<p style="color:#F06; line-height:30px; text-align:center">已完成：<span id="count">0</span>/15</p>
<div class="content">
<form action="./" method="post" id="form1" name="form1">
<input type="hidden" id="follow" name="follow" />


<div class="question" style="display:block">
    <p class="q_title">1.女：啥子事？男：关你求事！问：男的意思是什么？</p>
    <p class="item"><input type="radio" name="i1" value="0"/>求我我才告诉你</p>
    <p class="item"><input type="radio" name="i1" value="6"/>不关你的事</p>
	<p class="item"><input type="radio" name="i1" value="0"/>和你的球有关</p>
    <p class="item"><input type="radio" name="i1" value="0"/>以上答案均不对</p>
</div>

<div class="question">
    <p class="q_title">2.张三：哈哈,这道题张三我做出来了！李四,你做出来没有？李四：早十八年就做出来了。由此我们可以推断？</p>
    <p class="item"><input type="radio" name="i2" value="0"/>李四今年18岁</p>
    <p class="item"><input type="radio" name="i2" value="0"/>李四比张三大18岁</p>
    <p class="item"><input type="radio" name="i2" value="0"/>李四在18年前做过此题</p>
    <p class="item"><input type="radio" name="i2" value="6"/>李四已经做出来了</p>
</div>

<div class="question">
    <p class="q_title">3.女：快点！你在干啥子？男：马上,我在穿HAI子！问：男的现在可能在做什么？</p>
    <p class="item"><input type="radio" name="i3" value="0"/>照镜子 </p>
    <p class="item"><input type="radio" name="i3" value="6"/>系鞋带</p>
    <p class="item"><input type="radio" name="i3" value="0"/>穿衣服</p>
    <p class="item"><input type="radio" name="i3" value="0"/>给孩子穿衣服</p>
</div>

<div class="question">
    <p class="q_title">4.甲：你爪子？乙：肚子忽然痛了！问：爪子是什么意思？</p>
    <p class="item"><input type="radio" name="i4" value="0"/>乙有爪子</p>
    <p class="item"><input type="radio" name="i4" value="6"/>做什么的意思</p>
    <p class="item"><input type="radio" name="i4" value="0"/>甲询问乙的爪子在哪里</p>
    <p class="item"><input type="radio" name="i4" value="0"/>说不清楚</p>
</div>

<div class="question">
    <p class="q_title">5.男：给你讲件事,龅牙叔下台了女：鬼扯。男：鬼扯我才不扯。问：从这段话我们可以知道什么？</p>
    <p class="item"><input type="radio" name="i5" value="0"/>有个鬼叫龅牙叔</p>
    <p class="item"><input type="radio" name="i5" value="0"/>女的不相信有鬼</p>
    <p class="item"><input type="radio" name="i5" value="6"/>男的说他说的是实话</p>
    <p class="item"><input type="radio" name="i5" value="0"/>男的在和女的扯皮</p>
</div>

<div class="question">
    <p class="q_title">6.班上共有N个渣渣.一天大扫除,先扫出10堆渣渣,再派10个渣渣去渣渣场丢渣渣,<br/>教室头还剩下几个渣渣在扫渣渣？问：上面这段话中,与人渣相同的词共有几个？</p>
    <p class="item"><input type="radio" name="i6" value="0"/>2个</p>
    <p class="item"><input type="radio" name="i6" value="7"/>3个</p>
    <p class="item"><input type="radio" name="i6" value="0"/>N个</p>
    <p class="item"><input type="radio" name="i6" value="0"/>N-10个</p>
</div>

<div class="question">
    <p class="q_title">7.四川人普通话说的不好,就说他说的是（　）普通话？</p>
    <p class="item"><input type="radio" name="i7" value="0"/>红烧</p>
    <p class="item"><input type="radio" name="i7" value="7"/>椒盐</p>
    <p class="item"><input type="radio" name="i7" value="0"/>麻辣</p>
    <p class="item"><input type="radio" name="i7" value="0"/>糖醋</p>
</div>

<div class="question">
    <p class="q_title">8.（　）得烤蛇吃,此处应该填什么？</p>
    <p class="item"><input type="radio" name="i8" value="0"/>饿</p>
    <p class="item"><input type="radio" name="i8" value="0"/>穷</p>
    <p class="item"><input type="radio" name="i8" value="0"/>疯</p>
    <p class="item"><input type="radio" name="i8" value="7"/>懒</p>
</div>

<div class="question">
    <p class="q_title">9.烤（KAO一声）沙罐,指的是？</p>
    <p class="item"><input type="radio" name="i9" value="0"/>一道菜</p>
    <p class="item"><input type="radio" name="i9" value="0"/>一道工艺品</p>
    <p class="item"><input type="radio" name="i9" value="7"/>被枪毙</p>
    <p class="item"><input type="radio" name="i9" value="0"/>迷信说法,用沙罐来占卜</p>
</div>

<div class="question">
    <p class="q_title">10.这件衣服很相因,指的是（　）？</p>
    <p class="item"><input type="radio" name="i10" value="7"/>这件衣服很便宜</p>
    <p class="item"><input type="radio" name="i10" value="0"/>这件衣服质量很好</p>
    <p class="item"><input type="radio" name="i10" value="0"/>这件衣服很适合你</p>
    <p class="item"><input type="radio" name="i10" value="0"/>这件衣服我们可以换着穿</p>
</div>

<div class="question">
    <p class="q_title">11.甲：告诉你一件事情……乙：是不是真的哦？甲：真的哦！ 这时候乙最有可能说的是：</p>
    <p class="item"><input type="radio" name="i11" value="0"/>你少骗我！</p>
    <p class="item"><input type="radio" name="i11" value="7"/>真的还煮的呢！</p>
    <p class="item"><input type="radio" name="i11" value="0"/>少来哄我！</p>
    <p class="item"><input type="radio" name="i11" value="0"/>我不信</p>
</div>

<div class="question">
    <p class="q_title">12.下面与[你又吃胡了！]意思相近的是？</p>
    <p class="item"><input type="radio" name="i12" value="7"/>你又赢了！</p>
    <p class="item"><input type="radio" name="i12" value="0"/>你吃了这么多了,还吃？！</p>
    <p class="item"><input type="radio" name="i12" value="0"/>你怎么又偷吃东西了？</p>
    <p class="item"><input type="radio" name="i12" value="0"/>你又输了？</p>
</div>

<div class="question">
    <p class="q_title">13.[污猫皂狗]形容的是什么？</p>
    <p class="item"><input type="radio" name="i13" value="0"/>一个人养了很多动物</p>
    <p class="item"><input type="radio" name="i13" value="0"/>天色阴沉,快下雨了</p>
    <p class="item"><input type="radio" name="i13" value="7"/>一个人很邋遢</p>
    <p class="item"><input type="radio" name="i13" value="0"/>一个人思想不健康</p>
</div>

<div class="question">
    <p class="q_title">14.甲：（　）乙：锤子！甲最有可能说的是什么？</p>
    <p class="item"><input type="radio" name="i14" value="0"/>你要买什么？</p>
    <p class="item"><input type="radio" name="i14" value="0"/>你吃了吗？</p>
    <p class="item"><input type="radio" name="i14" value="0"/>现在网上流行什么？</p>
    <p class="item"><input type="radio" name="i14" value="7"/>听说你泡了个MM</p>
</div>

<div class="question last_question">
    <p class="q_title">15.下列词中不表示颜色的是:</p>
    <p class="last_item"><input type="radio" name="i15" value="0"/>迅白</p>
    <p class="last_item"><input type="radio" name="i15" value="0"/>黢黑</p>
    <p class="last_item"><input type="radio" name="i15" value="0"/>缺青</p>
    <p class="last_item"><input type="radio" name="i15" value="7"/>日白</p>
</div>
    <?
if(islogined())
{
?>
<div class="clear"></div>
<div class="app_ad" id="mid_banner_ad" style="margin-top:10px;">
<script type="text/javascript">
/*468*60，创建于2013-4-3*/
var cpro_id = "u1252068";
</script>
<script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
</div>
<?
}
?>

<div  id="submit_btn" style="display:none">
    <p style="text-align:center; margin-top:10px;">
    <a href="#" onclick="on_submit(); return false;"><img id="btn_submit_img" src="<?=$static_file_path?>/imgs/share.gif" /></a>
    <img id='load_pic' src='http://app.qpic.cn/mblogpic/240dcbe326654d4738c8/460' style='display:none;'/>
    </p>
    <p style="text-align:center;margin-top:20px;">
    
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
    		echo '<input type="checkbox" id="invite" name="invite" value="1" checked /><span style="color:#cccccc;font-size:12px;">邀请好友试试</span>';
    		break;
    }
    ?>
    </p>
</div>
</form>

</div><!--/content-->
<script>
var v_time=0;
var current_i=0;
var last_ischecked=0;
var btn_enable = 1;
$(function()
{
	$('.item').click(function()
	{
		
		$(this).children('input').attr('checked',true);
		current_i++;
		$('#count').html(current_i);
		$(this).parent('.question').hide(300);
		$(this).parent('.question').next().show(300);
		if ($(this).parent('.question').next().hasClass('last_question')) {
			$('#submit_btn').show(300);
		}
	});
	$('.item').hover(function(){$(this).css('background','#eee');},function(){$(this).css('background','#f8f8f8');});
	
	$('.last_item').click(function()
	{
		$(this).children('input').attr('checked',true);
		if(last_ischecked==0)
		{
			current_i++;
			$('#count').html(current_i);
		}
		last_ischecked=1;
	});
	$('.last_item').hover(function(){$(this).css('background','#eee');},function(){$(this).css('background','#f8f8f8');});

});
function on_submit()
{
	if(last_ischecked==0)
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