<style>
.main_l .content{ margin:10px auto; width:480px; text-align:left; margin-bottom:50px}
.main_l .content .question{padding:10px 0 0; display:none;}
.main_l .content .q_title{ margin-bottom:30px;color:#27F;}
.main_l .item,.content .last_item{ font-size:15px; padding:5px 12px;line-height:28px; background:#f8f8f8; border:1px solid #ddd; margin-bottom:15px; cursor:pointer; color:#565656}
.content .item:hover,.content .last_item:hover{background:#eee; border:1px solid #ddd;}
</style>

<p style="color:#F06; line-height:30px; text-align:center">已完成：<span id="count">0</span>/8</p>
<div class="content">
<form action="./" method="post" id="form1" name="form1">
<input type="hidden" id="follow" name="follow" />


<div class="question" style="display:block">
    <p class="q_title">1.你喜爱哪门学科？</p>
    <p class="item"><input type="radio" name="i1" value="0"/>语文</p>
    <p class="item"><input type="radio" name="i1" value="2"/>数学</p>
    <p class="item"><input type="radio" name="i1" value="1"/>英语</p>
</div>

<div class="question">
    <p class="q_title">2.你每天运动多少时间？</p>
    <p class="item"><input type="radio" name="i2" value="2"/>一小时以内</p>
    <p class="item"><input type="radio" name="i2" value="0"/>一小时以上</p>
    <p class="item"><input type="radio" name="i2" value="1"/>从不运动</p>
</div>

<div class="question">
    <p class="q_title">3.你喜爱哪种几何图形？</p>
    <p class="item"><input type="radio" name="i3" value="0"/>矩形</p>
    <p class="item"><input type="radio" name="i3" value="1"/>三角形</p>
    <p class="item"><input type="radio" name="i3" value="2"/>圆形</p>
</div>

<div class="question">
    <p class="q_title">4.你喜爱哪个作家？</p>
    <p class="item"><input type="radio" name="i4" value="1"/>鲁迅</p>
    <p class="item"><input type="radio" name="i4" value="0"/>韩寒</p>
    <p class="item"><input type="radio" name="i4" value="2"/>巴金</p>
</div>

<div class="question">
    <p class="q_title">5.你喜爱哪个科学家？</p>
    <p class="item"><input type="radio" name="i5" value="1"/>爱因斯坦</p>
    <p class="item"><input type="radio" name="i5" value="0"/>牛顿</p>
    <p class="item"><input type="radio" name="i5" value="2"/>霍金</p>
</div>

<div class="question">
    <p class="q_title">6.你的近视眼度数是？</p>
    <p class="item"><input type="radio" name="i6" value="1"/>小于100</p>
    <p class="item"><input type="radio" name="i6" value="0"/>100—500</p>
    <p class="item"><input type="radio" name="i6" value="2"/>500以上</p>
</div>

<div class="question">
    <p class="q_title">7.你喜爱哪个诗人？</p>
    <p class="item"><input type="radio" name="i7" value="2"/>杜甫</p>
    <p class="item"><input type="radio" name="i7" value="0"/>李白</p>
    <p class="item"><input type="radio" name="i7" value="1"/>白居易</p>
</div>

<div class="question last_question">
    <p class="q_title">8.高考后你想做的事是？</p>
    <p class="last_item"><input id="last_i1" type="radio" name="i8" value="0"/>旅行</p>
    <p class="last_item"><input id="last_i2" type="radio" name="i8" value="2"/>烧书</p>
    <p class="last_item"><input id="last_i3" type="radio" name="i8" value="1"/>睡觉</p>
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
var i8_ischecked=0;
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
		if(i8_ischecked==0)
		{
			current_i++;
			$('#count').html(current_i);
		}
		i8_ischecked=1;
	});
	$('.last_item').hover(function(){$(this).css('background','#eee');},function(){$(this).css('background','#f8f8f8');});

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