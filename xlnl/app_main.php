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
    <p class="q_title">1、一旦下决心做某事后便会立刻就去做。  </p>
    <p class="item"><input type="radio" name="i1" value="0"/>是的</p>
    <p class="item"><input type="radio" name="i1" value="2"/>不是</p>
    <p class="item"><input type="radio" name="i1" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">2、往往喜欢凭自己经验办事。</p>
    <p class="item"><input type="radio" name="i2" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i2" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i2" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">3、对任何事情都有探索精神。</p>
    <p class="item"><input type="radio" name="i3" value="0"/>是的</p>
    <p class="item"><input type="radio" name="i3" value="4"/>不是</p>
    <p class="item"><input type="radio" name="i3" value="2"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">4、说话慢而且比较爱啰嗦。</p>
    <p class="item"><input type="radio" name="i4" value="4"/>是的</p>
    <p class="item"><input type="radio" name="i4" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i4" value="2"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">5、健忘。</p>
    <p class="item"><input type="radio" name="i5" value="4"/>是的</p>
    <p class="item"><input type="radio" name="i5" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i5" value="2"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">6、怕烦心、怕做事、不想活动。</p>
    <p class="item"><input type="radio" name="i6" value="4"/>是的</p>
    <p class="item"><input type="radio" name="i6" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i6" value="2"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">7、比较容易计较小事。</p>
    <p class="item"><input type="radio" name="i7" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i7" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i7" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">8、喜欢参加各种活动。</p>
    <p class="item"><input type="radio" name="i8" value="0"/>是的</p>
    <p class="item"><input type="radio" name="i8" value="2"/>不是</p>
    <p class="item"><input type="radio" name="i8" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">9、越来越变得固执起来。</p>
    <p class="item"><input type="radio" name="i9" value="4"/>是的</p>
    <p class="item"><input type="radio" name="i9" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i9" value="2"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">10、对什么事情都有好奇心。</p>
    <p class="item"><input type="radio" name="i10" value="0"/>是的</p>
    <p class="item"><input type="radio" name="i10" value="2"/>不是</p>
    <p class="item"><input type="radio" name="i10" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">11、有强烈的生活追求。</p>
    <p class="item"><input type="radio" name="i11" value="0"/>是的</p>
    <p class="item"><input type="radio" name="i11" value="4"/>不是</p>
    <p class="item"><input type="radio" name="i11" value="2"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">12、经常难以控制自己的感情。  </p>
    <p class="item"><input type="radio" name="i12" value="0"/>是的</p>
    <p class="item"><input type="radio" name="i12" value="2"/>不是</p>
    <p class="item"><input type="radio" name="i12" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">13、容易嫉妒别人，容易悲伤。</p>
    <p class="item"><input type="radio" name="i13" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i13" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i13" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">14、见到不合理的事不再那么气愤了。</p>
    <p class="item"><input type="radio" name="i14" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i14" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i14" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">15、不喜欢看推理小说。</p>
    <p class="item"><input type="radio" name="i15" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i15" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i15" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">16、对电影和爱情小说日益失去兴趣。</p>
    <p class="item"><input type="radio" name="i16" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i16" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i16" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">17、做事情往往不能坚持到底。</p>
    <p class="item"><input type="radio" name="i17" value="4"/>是的</p>
    <p class="item"><input type="radio" name="i17" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i17" value="2"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">18、不愿意改变旧习惯。  </p>
    <p class="item"><input type="radio" name="i18" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i18" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i18" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">19、喜欢回忆过去。  </p>
    <p class="item"><input type="radio" name="i19" value="4"/>是的</p>
    <p class="item"><input type="radio" name="i19" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i19" value="2"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">20、学习新鲜事物感到困难。  </p>
    <p class="item"><input type="radio" name="i20" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i20" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i20" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">21、十分注意自己身体的变化。  </p>
    <p class="item"><input type="radio" name="i21" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i21" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i21" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">22、生活兴趣的范围变小了。  </p>
    <p class="item"><input type="radio" name="i22" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i22" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i22" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">23、看书的速度变快了。 </p>
    <p class="item"><input type="radio" name="i23" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i23" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i23" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">24、觉得自己有时候动作不够灵活。 </p>
    <p class="item"><input type="radio" name="i24" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i24" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i24" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">25、容易感到疲劳。  </p>
    <p class="item"><input type="radio" name="i25" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i25" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i25" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">26、晚上不如早晨和上午头脑清醒。 </p>
    <p class="item"><input type="radio" name="i26" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i26" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i26" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">27、对生活中的挫折感到烦恼。</p>
    <p class="item"><input type="radio" name="i27" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i27" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i27" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">28、比较缺乏自信心。</p>
    <p class="item"><input type="radio" name="i28" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i28" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i28" value="1"/>不一定</p>
</div>

<div class="question">
    <p class="q_title">29、很难集中精力思考。</p>
    <p class="item"><input type="radio" name="i29" value="2"/>是的</p>
    <p class="item"><input type="radio" name="i29" value="0"/>不是</p>
    <p class="item"><input type="radio" name="i29" value="1"/>不一定</p>
</div>

<div class="question last_question">
    <p class="q_title">30、工作效率越来越低。  </p>
    <p class="last_item"><input id="last_i1" type="radio" name="i30" value="2"/>是的</p>
    <p class="last_item"><input id="last_i2" type="radio" name="i30" value="0"/>不是</p>
    <p class="last_item"><input id="last_i3" type="radio" name="i30" value="1"/>不一定</p>
</div>

    <?
if(islogined())
{
?>
<div class="clear"></div>
<div class="app_ad" id="mid_banner_ad" style="margin-top: 20px;">
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