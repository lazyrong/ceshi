<style>
.main_l .content{ margin:10px auto; width:480px; text-align:left; margin-bottom:50px}
.main_l .content .question{padding:10px 0 0; display:none;}
.main_l .content .q_title{ margin-bottom:30px;color:#27F;}
.main_l .item,.content .last_item{ font-size:15px; padding:5px 12px;line-height:28px; background:#f8f8f8; border:1px solid #ddd; margin-bottom:15px; cursor:pointer; color:#565656}
.content .item:hover,.content .last_item:hover{background:#eee; border:1px solid #ddd;}
</style>

<p style="color:#F06; line-height:30px; text-align:center">已完成：<span id="count">0</span>/30</p>
<div class="content">
<form action="./" method="post" id="form1" name="form1">
<input type="hidden" id="follow" name="follow" />


<div class="question" style="display:block">
    <p class="q_title">1、你的性别（这个很重要哦）  </p>
    <p class="item"><input type="radio" name="i1" value="1000"/>男生</p>
    <p class="item"><input type="radio" name="i1" value="0"/>女生</p>
</div>

<div class="question">
    <p class="q_title">2、你在看地图,或街上指示时,你会: </p>
    <p class="item"><input type="radio" name="i2" value="15"/>会有困难,而找人协助 </p>
    <p class="item"><input type="radio" name="i2" value="5"/>把地图转过来,面对你要走的方向</p>
    <p class="item"><input type="radio" name="i2" value="-5"/>没有任何困难</p>
</div>

<div class="question">
    <p class="q_title">3、你在准备一道做法复杂的菜时,一边正在播放收音机, 还有朋友的来电.你会:</p>
    <p class="item"><input type="radio" name="i3" value="15"/>三件事同时进行 </p>
    <p class="item"><input type="radio" name="i3" value="5"/>关掉收音机,但嘴巴和手都没有停</p>
    <p class="item"><input type="radio" name="i3" value="-5"/>告诉朋友,你做好菜后马上回电话给他</p>
</div>

<div class="question">
    <p class="q_title">4、朋友要来参观你的新家,问你该怎么走,你会: </p>
    <p class="item"><input type="radio" name="i4" value="15"/>画一张标示清楚的地图寄给他们,或是请别人替你说明该如何走 </p>
    <p class="item"><input type="radio" name="i4" value="5"/>问她们有没有熟悉的地标,然后告诉他们该怎么走 </p>
    <p class="item"><input type="radio" name="i4" value="-5"/>口头上告诉他们该怎么走</p>
</div>

<div class="question">
    <p class="q_title">5、解释一个想法或概念时,你很可能会怎么做: </p>
    <p class="item"><input type="radio" name="i5" value="15"/>会利用铅笔、纸和肢体语言</p>
    <p class="item"><input type="radio" name="i5" value="5"/>口头解释加上肢体语言</p>
    <p class="item"><input type="radio" name="i5" value="-5"/>口头上清楚简单的解释 </p>
</div>

<div class="question">
    <p class="q_title">6、看完一场很棒的电影回家后,你喜欢: </p>
    <p class="item"><input type="radio" name="i6" value="15"/>在脑海里回想电影的画面</p>
    <p class="item"><input type="radio" name="i6" value="5"/>把画面及角色的台词说出来</p>
    <p class="item"><input type="radio" name="i6" value="-5"/>主要引述电影里的对话</p>
</div>

<div class="question">
    <p class="q_title">7、在电影院里你最喜欢坐在: </p>
    <p class="item"><input type="radio" name="i7" value="15"/>电影院的右边</p>
    <p class="item"><input type="radio" name="i7" value="5"/>不在意坐在哪里</p>
    <p class="item"><input type="radio" name="i7" value="-5"/>电影院的左边</p>
</div>

<div class="question">
    <p class="q_title">8、一个朋友的机器出了问题,你会: </p>
    <p class="item"><input type="radio" name="i8" value="15"/>深表同情,并和他们讨论他们的感觉</p>
    <p class="item"><input type="radio" name="i8" value="5"/>介绍一个值得信任的人去修理</p>
    <p class="item"><input type="radio" name="i8" value="-5"/>弄清楚它的构造,想帮他们修理好</p>
</div>

<div class="question">
    <p class="q_title">9、在不熟悉的地方,有人问你北方是哪个方向,你会: </p>
    <p class="item"><input type="radio" name="i9" value="15"/>坦白说你不知道</p>
    <p class="item"><input type="radio" name="i9" value="5"/>思考一会儿后,推测大约的方向</p>
    <p class="item"><input type="radio" name="i9" value="-5"/>毫无困难的指出北方方向</p>
</div>

<div class="question">
    <p class="q_title">10、你找到一个停车位,可是空间很小,必须用倒车才能停进去,你会: </p>
    <p class="item"><input type="radio" name="i10" value="15"/>宁愿找另一个车位</p>
    <p class="item"><input type="radio" name="i10" value="5"/>试图小心的停进去</p>
    <p class="item"><input type="radio" name="i10" value="-5"/>很顺利的倒出车停进去</p>
</div>

<div class="question">
    <p class="q_title">11、你在看电视时,这时电话响了,你会:</p>
    <p class="item"><input type="radio" name="i11" value="15"/>接电话,电视开着</p>
    <p class="item"><input type="radio" name="i11" value="5"/>把音量转小后才接电话</p>
    <p class="item"><input type="radio" name="i11" value="-5"/>关掉电视,叫其他人安静后才接电话</p>
</div>

<div class="question">
    <p class="q_title">12、你听到一首新歌,是你喜欢的歌手唱的,通常你会: </p>
    <p class="item"><input type="radio" name="i12" value="15"/>听完后,你可以毫无困难的跟着唱</p>
    <p class="item"><input type="radio" name="i12" value="5"/>如果是首很简单的歌,听过后你可以跟着哼唱一小段 </p>
    <p class="item"><input type="radio" name="i12" value="-5"/>很难记得歌曲的旋律,但是你可以回想起部分歌词 </p>
</div>

<div class="question">
    <p class="q_title">13、你对事情的结局如何会有强烈的预感,是借着: </p>
    <p class="item"><input type="radio" name="i13" value="15"/>直觉</p>
    <p class="item"><input type="radio" name="i13" value="5"/>可靠的资讯和大胆的假设,才做出判断</p>
    <p class="item"><input type="radio" name="i13" value="-5"/>事实统计数字和资料 </p>
</div>

<div class="question">
    <p class="q_title">14、你忘了把钥匙时放在哪里,你会: </p>
    <p class="item"><input type="radio" name="i14" value="15"/>先做别的事,等到自然想起为止</p>
    <p class="item"><input type="radio" name="i14" value="5"/>做别的事,但同时试着回想你把钥匙放在哪里</p>
    <p class="item"><input type="radio" name="i14" value="-5"/>在心理回想刚刚做了哪些事,藉此想起放在何处 </p>
</div>

<div class="question">
    <p class="q_title">15、你在饭店里,听到远处传来警报,你会: </p>
    <p class="item"><input type="radio" name="i15" value="15"/>指出声音来源</p>
    <p class="item"><input type="radio" name="i15" value="5"/>如果你够专心,可以指出声音来源</p>
    <p class="item"><input type="radio" name="i15" value="-5"/>没办法知道声音来源</p>
</div>

<div class="question">
    <p class="q_title">16、你参加一个社交宴会时,有人向你介绍七八位新朋友,隔天你会: </p>
    <p class="item"><input type="radio" name="i16" value="15"/>可以轻易想起他们的长相</p>
    <p class="item"><input type="radio" name="i16" value="5"/>只能记得其中几个的长相 </p>
    <p class="item"><input type="radio" name="i16" value="-5"/>比较可能记住他们的名字</p>
</div>

<div class="question">
    <p class="q_title">17、你想去乡间度假时,但是你的伴侣想去海边的渡假胜地.你要怎么说服他呢? </p>
    <p class="item"><input type="radio" name="i17" value="15"/>和颜悦色的说你的感觉:你喜欢乡间的悠闲,小孩和家人在乡间过得很快乐。 </p>
    <p class="item"><input type="radio" name="i17" value="5"/>告诉他如果能去乡间渡假,你会感到很愉快,下次你会很乐意去海边 </p>
    <p class="item"><input type="radio" name="i17" value="-5"/>说出事实:乡间渡假区比较近,比较便宜,有规划适当的休闲设施</p>
</div>

<div class="question">
    <p class="q_title">18、规划日常生活时,通常你会: </p>
    <p class="item"><input type="radio" name="i18" value="15"/>列张清单,这样一来该做什么事一目了然</p>
    <p class="item"><input type="radio" name="i18" value="5"/>考虑你该做哪些事</p>
    <p class="item"><input type="radio" name="i18" value="-5"/>在心里想你会见到哪些人,会到哪些地方,以及你得处理哪些事</p>
</div>

<div class="question">
    <p class="q_title">19、一个朋友有了困难,他来找你商量,你会:  </p>
    <p class="item"><input type="radio" name="i19" value="15"/>表示同情,还有你能理解他的困难</p>
    <p class="item"><input type="radio" name="i19" value="5"/>说事情并不如他想的严重,并加以解</p>
    <p class="item"><input type="radio" name="i19" value="-5"/>给他建议,或是合理的忠告,告诉他该如何解决 </p>
</div>

<div class="question">
    <p class="q_title">20、两个已婚的朋友有了外遇,你会如何发现:  </p>
    <p class="item"><input type="radio" name="i20" value="15"/>你会很早就察觉 </p>
    <p class="item"><input type="radio" name="i20" value="5"/>经过一段时间后才察觉 </p>
    <p class="item"><input type="radio" name="i20" value="-5"/>根本不会察觉</p>
</div>

<div class="question">
    <p class="q_title">21、你的生活态度为何?  </p>
    <p class="item"><input type="radio" name="i21" value="15"/>交很多朋友,和周围的人和谐相处</p>
    <p class="item"><input type="radio" name="i21" value="5"/>友善的对待他人,但保持个人隐私</p>
    <p class="item"><input type="radio" name="i21" value="-5"/>完成某个伟大目标,赢得别人的尊敬,名望及获得晋升</p>
</div>

<div class="question">
    <p class="q_title">22、如果有选择,你会喜欢什么样的工作: </p>
    <p class="item"><input type="radio" name="i22" value="15"/>和可以相处的人一起工作 </p>
    <p class="item"><input type="radio" name="i22" value="5"/>有其他同事,但也保有自己的空间 </p>
    <p class="item"><input type="radio" name="i22" value="-5"/>独自工作 </p>
</div>

<div class="question">
    <p class="q_title">23、你喜欢读的书是:  </p>
    <p class="item"><input type="radio" name="i23" value="15"/>小说,其他文学作品 </p>
    <p class="item"><input type="radio" name="i23" value="5"/>报章杂志 </p>
    <p class="item"><input type="radio" name="i23" value="-5"/>非文学类,传记</p>
</div>

<div class="question">
    <p class="q_title">24、购物时你倾向: </p>
    <p class="item"><input type="radio" name="i24" value="15"/>常常是一时冲动,尤其是特殊物品 </p>
    <p class="item"><input type="radio" name="i24" value="5"/>有个粗略的计画,可是心血来潮时也会买 </p>
    <p class="item"><input type="radio" name="i24" value="-5"/>读标签,比较价钱</p>
</div>

<div class="question">
    <p class="q_title">25、睡觉起床吃饭,你比较喜欢怎么做: </p>
    <p class="item"><input type="radio" name="i25" value="15"/>随心所欲 </p>
    <p class="item"><input type="radio" name="i25" value="5"/>依据一定的计画,但弹性很大 </p>
    <p class="item"><input type="radio" name="i25" value="-5"/>每天几乎有固定的时间</p>
</div>

<div class="question">
    <p class="q_title">26、你开始一个新的工作,认识许多新同事.其中一个打电话到家里找你, 你会 :</p>
    <p class="item"><input type="radio" name="i26" value="15"/>轻易的认出他的声音</p>
    <p class="item"><input type="radio" name="i26" value="5"/>谈了一会儿话后,才知道他是谁 </p>
    <p class="item"><input type="radio" name="i26" value="-5"/>无法从声音辨认他到底是谁 </p>
</div>

<div class="question">
    <p class="q_title">27、和别人有争论时,什么事会令你很生气: </p>
    <p class="item"><input type="radio" name="i27" value="15"/>沉默或是没有反应</p>
    <p class="item"><input type="radio" name="i27" value="5"/>他们不了解你的观点 </p>
    <p class="item"><input type="radio" name="i27" value="-5"/>追根究底的问问题,或是提出质疑,或是评论 </p>
</div>

<div class="question">
    <p class="q_title">28、你对学校的拼字测验以及作文课有何感觉? </p>
    <p class="item"><input type="radio" name="i28" value="15"/>觉得两项都很简单 </p>
    <p class="item"><input type="radio" name="i28" value="5"/>其中一项还可以,另一项就不是很好</p>
    <p class="item"><input type="radio" name="i28" value="-5"/>两项都不好 </p>
</div>

<div class="question">
    <p class="q_title">29、碰到固定的舞步或是爵士舞时,你会: </p>
    <p class="item"><input type="radio" name="i29" value="15"/>听到音乐就会想起学过的舞步 </p>
    <p class="item"><input type="radio" name="i29" value="5"/>只能跳一点点,大多想不起来 </p>
    <p class="item"><input type="radio" name="i29" value="-5"/>抓不准时间和旋律</p>
</div>

<div class="question last_question">
    <p class="q_title">30、一天结束后,你喜欢:  </p>
    <p class="last_item"><input id="last_i1" type="radio" name="i30" value="30"/>和朋友或家人谈谈你这一天过得如何 </p>
    <p class="last_item"><input id="last_i2" type="radio" name="i30" value="10"/>听别人谈他这一天过得如何</p>
    <p class="last_item"><input id="last_i3" type="radio" name="i30" value="-10"/>看报纸电视,不会聊天</p>
</div>

    <?
if(islogined())
{
?>
<div class="clear"></div>
<div class="app_ad" id="mid_banner_ad" style="margin-top:20px;">
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
    <p style="text-align:center; margin-top:20px;">
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
var current_i=0;
var i30_ischecked=0;
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
		if(i30_ischecked==0)
		{
			current_i++;
			$('#count').html(current_i);
		}
		i30_ischecked=1;
	});
	$('.last_item').hover(function(){$(this).css('background','#eee');},function(){$(this).css('background','#f8f8f8');});

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