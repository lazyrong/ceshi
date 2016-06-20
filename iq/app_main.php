<style>
.main_l .content{ margin:10px auto; width:480px; text-align:left; margin-bottom:50px}
.main_l .content .question{padding:10px 0 0; display:none;}
.main_l .content .q_title{ margin-bottom:30px;color:#27F;}
.main_l .item,.content .last_item{ font-size:15px; padding:5px 12px;line-height:28px; background:#f8f8f8; border:1px solid #ddd; margin-bottom:15px; cursor:pointer; color:#565656}
.content .item:hover,.content .last_item:hover{background:#eee; border:1px solid #ddd;}
</style>
<p style="color:#F06; line-height:30px; text-align:center; margin:20px;">已完成：<span id="count">0</span>/30，计时：<span id="show_time">0</span> 秒</p>
<div class="content">
<form action="./" method="post" id="form1" name="form1">
<input type="hidden" id="v_time" name="v_time" />
<input type="hidden" id="follow" name="follow" />


<div class="question" style="display:block">
    <p class="q_title">1、选出不同的一项：  </p>
    <p class="item"><input type="radio" name="i1" value="0"/>A、蛇</p>
    <p class="item"><input type="radio" name="i1" value="5"/>B、大树</p>
    <p class="item"><input type="radio" name="i1" value="0"/>C、老虎</p>
</div>

<div class="question">
    <p class="q_title">2、在下列分数中，选出不同类的一项：</p>
    <p class="item"><input type="radio" name="i2" value="0"/>A、3/5</p>
    <p class="item"><input type="radio" name="i2" value="0"/>B、3/7</p>
    <p class="item"><input type="radio" name="i2" value="5"/>C、3/9</p>
</div>

<div class="question">
    <p class="q_title">3、男孩对男子，正如女孩对：</p>
    <p class="item"><input type="radio" name="i3" value="0"/>A、青年</p>
    <p class="item"><input type="radio" name="i3" value="0"/>B、孩子</p>
    <p class="item"><input type="radio" name="i3" value="0"/>C、夫人</p>
    <p class="item"><input type="radio" name="i3" value="0"/>D、姑娘</p>
    <p class="item"><input type="radio" name="i3" value="5"/>E、妇女</p>
</div>

<div class="question">
    <p class="q_title">4、如果笔相对于写字，那么书相对于：</p>
    <p class="item"><input type="radio" name="i4" value="0"/>A、娱乐</p>
    <p class="item"><input type="radio" name="i4" value="5"/>B、阅读</p>
    <p class="item"><input type="radio" name="i4" value="0"/>C、学文化</p>
    <p class="item"><input type="radio" name="i4" value="0"/>D、解除疲劳</p>
</div>

<div class="question">
    <p class="q_title">5、马之于马厩，正如人之于：</p>
    <p class="item"><input type="radio" name="i5" value="0"/>A、牛棚</p>
    <p class="item"><input type="radio" name="i5" value="0"/>B、马车</p>
    <p class="item"><input type="radio" name="i5" value="5"/>C、房屋</p>
    <p class="item"><input type="radio" name="i5" value="0"/>D、农场</p>
    <p class="item"><input type="radio" name="i5" value="0"/>E、楼房</p>
</div>

<div class="question">
    <p class="q_title">6、 2、8、14、20、（）请写出" （ ） "处的数字：</p>
    <p class="item"><input type="radio" name="i6" value="0"/>A、24</p>
    <p class="item"><input type="radio" name="i6" value="0"/>B、25</p>
    <p class="item"><input type="radio" name="i6" value="0"/>C、38 </p>
    <p class="item"><input type="radio" name="i6" value="5"/>D、26</p>
</div>

<div class="question">
    <p class="q_title">7、下列四个词是否可以组成一个正确的句子：“生活”、“水里”、“鱼”、“在”</p>
    <p class="item"><input type="radio" name="i7" value="5"/>A、是</p>
    <p class="item"><input type="radio" name="i7" value="0"/>B、否</p>
</div>

<div class="question">
    <p class="q_title">8、下列六个词是否可以组成一个正确的句子：“球棒”、“的”、“用来”、“是”、“棒球”、“打”</p>
    <p class="item"><input type="radio" name="i8" value="5"/>A、是</p>
    <p class="item"><input type="radio" name="i8" value="0"/>B、否 </p>
</div>

<div class="question">
    <p class="q_title">9、动物学家与社会学家相对应，正如动物与（）相对：</p>
    <p class="item"><input type="radio" name="i9" value="5"/>A、人类  </p>
    <p class="item"><input type="radio" name="i9" value="0"/>B、问题</p>
    <p class="item"><input type="radio" name="i9" value="0"/>C、社会</p>
    <p class="item"><input type="radio" name="i9" value="0"/>D、社会学</p>
</div>

<div class="question">
    <p class="q_title">10、如果所有的妇女都有大衣，那么漂亮的妇女会有：</p>
    <p class="item"><input type="radio" name="i10" value="0"/>A、更多的大衣</p>
    <p class="item"><input type="radio" name="i10" value="0"/>B、时髦的大衣</p>
    <p class="item"><input type="radio" name="i10" value="5"/>C、大衣</p>
    <p class="item"><input type="radio" name="i10" value="0"/>D、昂贵的大衣</p>
</div>

<div class="question">
    <p class="q_title">11、1、3、2、4、6、5、7、（），请写出" （ ） "处的数字：</p>
    <p class="item"><input type="radio" name="i11" value="0"/>A、8 </p>
    <p class="item"><input type="radio" name="i11" value="0"/>B、9</p>
    <p class="item"><input type="radio" name="i11" value="5"/>C、10</p>
    <p class="item"><input type="radio" name="i11" value="0"/>D、13</p>
</div>

<div class="question">
    <p class="q_title">12、南之于西北，正如西之于：</p>
    <p class="item"><input type="radio" name="i12" value="0"/>A、西北</p>
    <p class="item"><input type="radio" name="i12" value="5"/>B、东北</p>
    <p class="item"><input type="radio" name="i12" value="0"/>C、西南</p>
    <p class="item"><input type="radio" name="i12" value="0"/>D、东南</p>
</div>

<div class="question">
    <p class="q_title">13、找出不同类的一项：</p>
    <p class="item"><input type="radio" name="i13" value="0"/>A、铁锅</p>
    <p class="item"><input type="radio" name="i13" value="0"/>B、小勺</p>
    <p class="item"><input type="radio" name="i13" value="5"/>C、米饭</p>
    <p class="item"><input type="radio" name="i13" value="0"/>D、碟子</p>
</div>

<div class="question">
    <p class="q_title">14、9、7、8、6、7、5、（），请写出" （ ） "处的数字：</p>
    <p class="item"><input type="radio" name="i14" value="5"/>A、4</p>
    <p class="item"><input type="radio" name="i14" value="0"/>B、5</p>
    <p class="item"><input type="radio" name="i14" value="0"/>C、6</p>
    <p class="item"><input type="radio" name="i14" value="0"/>D、7</p>
</div>

<div class="question">
    <p class="q_title">15、找出不同类的一项：</p>
    <p class="item"><input type="radio" name="i15" value="0"/>A、写字台</p>
    <p class="item"><input type="radio" name="i15" value="0"/>B、沙发 </p>
    <p class="item"><input type="radio" name="i15" value="5"/>C、电视</p>
    <p class="item"><input type="radio" name="i15" value="0"/>D、桌布</p>
</div>

<div class="question">
    <p class="q_title">16、961、（25）、432、932、（ ）、731 ，请写出（）内的数字：</p>
    <p class="item"><input type="radio" name="i16" value="5"/>A、38</p>
    <p class="item"><input type="radio" name="i16" value="0"/>B、25</p>
    <p class="item"><input type="radio" name="i16" value="0"/>C、14 </p>
    <p class="item"><input type="radio" name="i16" value="0"/>D、09</p>
</div>

<div class="question">
    <p class="q_title">17、选项ABCD中，哪一个应该填在"XOOOOXXOOOXXX"后：</p>
    <p class="item"><input type="radio" name="i17" value="0"/>A、XOO </p>
    <p class="item"><input type="radio" name="i17" value="5"/>B、OO</p>
    <p class="item"><input type="radio" name="i17" value="0"/>C、OOX</p>
    <p class="item"><input type="radio" name="i17" value="0"/>D、OXX </p>
</div>

<div class="question">
    <p class="q_title">18、望子成龙的家长往往（）苗助长： </p>
    <p class="item"><input type="radio" name="i18" value="5"/>A、揠 </p>
    <p class="item"><input type="radio" name="i18" value="0"/>B、堰</p>
    <p class="item"><input type="radio" name="i18" value="0"/>C、偃 </p>
</div>

<div class="question">
    <p class="q_title">19、填上空缺的词：金黄的头发（黄山）刀山火海，赞美人生（ ）卫国战争：</p>
    <p class="item"><input type="radio" name="i19" value="0"/>A、人生 </p>
    <p class="item"><input type="radio" name="i19" value="5"/>B、美国</p>
    <p class="item"><input type="radio" name="i19" value="0"/>C、赞美 </p>
    <p class="item"><input type="radio" name="i19" value="0"/>D、生卫</p>
</div>

<div class="question">
    <p class="q_title">20、选出不同类的一项： </p>
    <p class="item"><input type="radio" name="i20" value="0"/>A、地板 </p>
    <p class="item"><input type="radio" name="i20" value="0"/>B、壁橱</p>
    <p class="item"><input type="radio" name="i20" value="0"/>C、窗户 </p>
    <p class="item"><input type="radio" name="i20" value="5"/>D、窗帘 </p>
</div>

<div class="question">
    <p class="q_title">21、1、8、27、（），请写出（）内的数字。</p>
    <p class="item"><input type="radio" name="i21" value="0"/>A、45  </p>
    <p class="item"><input type="radio" name="i21" value="5"/>B、64 </p>
    <p class="item"><input type="radio" name="i21" value="0"/>C、81</p>
    <p class="item"><input type="radio" name="i21" value="0"/>D、100</p>
</div>

<div class="question">
    <p class="q_title">22、填上空缺的词：罄竹难书（书法）无法无天，作奸犯科（ ）教学相长  </p>
    <p class="item"><input type="radio" name="i22" value="0"/>A、教学 </p>
    <p class="item"><input type="radio" name="i22" value="0"/>B、教科</p>
    <p class="item"><input type="radio" name="i22" value="5"/>C、科学</p>
    <p class="item"><input type="radio" name="i22" value="0"/>D、科长</p>
</div>

<div class="question">
    <p class="q_title">23、在括号内填上一个字，使其与括号前后的字都能组成一个词：款（ ）样</p>
    <p class="item"><input type="radio" name="i23" value="0"/>A、子</p>
    <p class="item"><input type="radio" name="i23" value="0"/>B、爷</p>
    <p class="item"><input type="radio" name="i23" value="5"/>C、式</p>
    <p class="item"><input type="radio" name="i23" value="0"/>D、美 </p>
</div>

<div class="question">
    <p class="q_title">24、填入空缺的数字16、（96）、12、10、（ ）、7.5</p>
    <p class="item"><input type="radio" name="i24" value="0"/>A、45 </p>
    <p class="item"><input type="radio" name="i24" value="5"/>B、60</p>
    <p class="item"><input type="radio" name="i24" value="0"/>C、36 </p>
    <p class="item"><input type="radio" name="i24" value="0"/>D、72 </p>
</div>

<div class="question">
    <p class="q_title">25、找出不同类的一项：</p>
    <p class="item"><input type="radio" name="i25" value="0"/>A、斑马</p>
    <p class="item"><input type="radio" name="i25" value="0"/>B、军马</p>
    <p class="item"><input type="radio" name="i25" value="0"/>C、赛马</p>
    <p class="item"><input type="radio" name="i25" value="0"/>D、骏马</p>
    <p class="item"><input type="radio" name="i25" value="5"/>E、驸马</p>
</div>

<div class="question">
    <p class="q_title">26、在括号上填上一个字，使其与括号前后的字都能组成一个词：祭（ ）定</p>
    <p class="item"><input type="radio" name="i26" value="5"/>A、奠  </p>
    <p class="item"><input type="radio" name="i26" value="0"/>B、祀 </p>
    <p class="item"><input type="radio" name="i26" value="0"/>C、一</p>
    <p class="item"><input type="radio" name="i26" value="0"/>D、确 </p>
</div>

<div class="question">
    <p class="q_title">27、在括号内填上一个字：头部（ ）震荡</p>
    <p class="item"><input type="radio" name="i27" value="5"/>A、脑</p>
    <p class="item"><input type="radio" name="i27" value="0"/>B、胸</p>
    <p class="item"><input type="radio" name="i27" value="0"/>C、颈 </p>
    <p class="item"><input type="radio" name="i27" value="0"/>D、头 </p>
</div>

<div class="question">
    <p class="q_title">28、填入空缺的数字65、37、17、（ ）</p>
    <p class="item"><input type="radio" name="i28" value="5"/>A、5</p>
    <p class="item"><input type="radio" name="i28" value="0"/>B、6 </p>
    <p class="item"><input type="radio" name="i28" value="0"/>C、7</p>
    <p class="item"><input type="radio" name="i28" value="0"/>D、8 </p>
</div>

<div class="question">
    <p class="q_title">29、填入空缺的数字41、（28）、27、83、（ ）、65</p>
    <p class="item"><input type="radio" name="i29" value="5"/>A、36</p>
    <p class="item"><input type="radio" name="i29" value="0"/>B、30</p>
    <p class="item"><input type="radio" name="i29" value="0"/>C、45</p>
    <p class="item"><input type="radio" name="i29" value="0"/>D、54</p>
</div>

<div class="question last_question">
    <p class="q_title">30、填上空缺的字母   CFI DHL EJ（ ）</p>
    <p class="last_item"><input type="radio" name="i30" value="0"/>A、E</p>
    <p class="last_item"><input type="radio" name="i30" value="5"/>B、O</p>
    <p class="last_item"><input type="radio" name="i30" value="0"/>C、G </p>
    <p class="last_item"><input type="radio" name="i30" value="0"/>D、H</p>
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
var v_time=0;
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
	document.getElementById('v_time').value=v_time;
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

function show_time()
{
	v_time++;
	document.getElementById('show_time').innerHTML=v_time;
	r_show_time();
}
function r_show_time()
{
	setTimeout("show_time()", 1000);
}
setTimeout("show_time()", 1000);
</script>