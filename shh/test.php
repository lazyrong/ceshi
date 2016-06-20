<?
ini_set('display_errors', 'Off');
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='shh';
$t_nick=$_COOKIE['v_nick'];
$t_name=$_COOKIE['v_name'];
$t_avatar=$_COOKIE['v_avatar'];
$t_sex=$_COOKIE ['v_sex'];
setcookie('v_appname',$app_name, time()+3000, '/');

$questionAnswerList = array(
array('question'=>'上海话里的棺材板是一种',
		'answers'=>array(
				array('option'=>'家具样式', 'value'=>'0' ),
				array('option'=>'昆虫', 'value'=>'5' ),
				array('option'=>'刑具', 'value'=>'0' ),
				array('option'=>'骂人的话', 'value'=>'0' ),
				)),
array('question'=>'上海话里与曾经沧海难为水最对应的是',
		'answers'=>array(
				array('option'=>'老吃老骗', 'value'=>'0' ),
				array('option'=>'老偷老骗', 'value'=>'0' ),
				array('option'=>'老吃老做', 'value'=>'5' ),
				array('option'=>'老吃老喝', 'value'=>'0' ),
				)),
array('question'=>'上海话里形容出师不利的形象化说法为',
		'answers'=>array(
				array('option'=>'头一只蟋蟀就输掉', 'value'=>'0' ),
				array('option'=>'头一个女朋友就跑掉', 'value'=>'0' ),
				array('option'=>'头一只炮仗就不响', 'value'=>'5' ),
				array('option'=>'头一笔买卖就蚀掉', 'value'=>'0' ),
				)),
array('question'=>'上海话里形容生气之极的像声词为',
		'answers'=>array(
				array('option'=>'啊噜啊噜', 'value'=>'0' ),
				array('option'=>'啊兀啊兀', 'value'=>'0' ),
				array('option'=>'啊咕啊咕', 'value'=>'0' ),
				array('option'=>'啊扑啊扑', 'value'=>'5' ),
				)),
array('question'=>'上海话中，下列哪个短语的含义和其他不同？',
		'answers'=>array(
				array('option'=>'台老三', 'value'=>'5' ),
				array('option'=>'翘辫子', 'value'=>'0' ),
				array('option'=>'到提篮桥去', 'value'=>'0' ),
				array('option'=>'到铁板新村去', 'value'=>'0' ),
				)),
array('question'=>'上海话中可替代下句中，好歹我们也认识这么多年了的【好歹】一词的像声词是',
		'answers'=>array(
				array('option'=>'PaPa', 'value'=>'5' ),
				array('option'=>'PangPang', 'value'=>'0' ),
				array('option'=>'PaoPao', 'value'=>'0' ),
				array('option'=>'PanPan', 'value'=>'0' ),
				)),
array('question'=>'上海话中与金刚钻相对的是',
		'answers'=>array(
				array('option'=>'阿三头', 'value'=>'0' ),
				array('option'=>'阿屙卵', 'value'=>'5' ),
				array('option'=>'阿诈里', 'value'=>'0' ),
				array('option'=>'阿屈死', 'value'=>'0' ),
				)),
array('question'=>'捣浆糊在旧上海的原意是指',
		'answers'=>array(
				array('option'=>'烹饪中的勾芡', 'value'=>'0' ),
				array('option'=>'混水摸鱼', 'value'=>'0' ),
				array('option'=>'蹂躏雏妓', 'value'=>'5' ),
				array('option'=>'股票交易中跟峰', 'value'=>'0' ),
				)),
array('question'=>'四马路的女人在上海话中指',
		'answers'=>array(
				array('option'=>'蛮横无礼的女人', 'value'=>'0' ),
				array('option'=>'见过世面的女人', 'value'=>'0' ),
				array('option'=>'失身柳巷的女人', 'value'=>'5' ),
				array('option'=>'猥祟卑鄙的女人', 'value'=>'0' ),
				)),
array('question'=>'上海话里的包脚布常常指一种',
		'answers'=>array(
				array('option'=>'外国进口布料', 'value'=>'0' ),
				array('option'=>'街头小报', 'value'=>'0' ),
				array('option'=>'限制你自由的人', 'value'=>'5' ),
				array('option'=>'面食', 'value'=>'0' ),
				)),
array('question'=>'可以代替在上海话中【我受骗了！】的是',
		'answers'=>array(
				array('option'=>'我啊中刀了！', 'value'=>'0' ),
				array('option'=>'我上当了！', 'value'=>'0' ),
				array('option'=>'我拨噱进了！', 'value'=>'0' ),
				array('option'=>'我闷脱了！', 'value'=>'5' ),
				)),
array('question'=>'在上海话中，下列哪个短语中的【老】没有年华逝去的意思',
		'answers'=>array(
				array('option'=>'老浜瓜', 'value'=>'0' ),
				array('option'=>'老甲鱼', 'value'=>'0' ),
				array('option'=>'老屁眼', 'value'=>'5' ),
				array('option'=>'老菜皮', 'value'=>'0' ),
				)),
array('question'=>'以下短语不是上海人用来嘲讽近视眼的为',
		'answers'=>array(
				array('option'=>'嘎梁', 'value'=>'0' ),
				array('option'=>'横梁', 'value'=>'0' ),
				array('option'=>'木梁', 'value'=>'5' ),
				array('option'=>'书独头', 'value'=>'0' ),
				)),
array('question'=>'以下汉字组合与【读者文摘】在上海话中发音不同的是',
		'answers'=>array(
				array('option'=>'毒责愤扎', 'value'=>'0' ),
				array('option'=>'毒崭愤灾', 'value'=>'0' ),
				array('option'=>'毒崭愤扎', 'value'=>'0' ),
				array('option'=>'发的烂污面嗲', 'value'=>'5' ),
				)),
array('question'=>'上海话中【吃的洋籼米】这句话的下半句不是',
		'answers'=>array(
				array('option'=>'发的糍饭嗲', 'value'=>'5' ),
				array('option'=>'发的糯米嗲', 'value'=>'0' ),
				array('option'=>'发的泡饭嗲', 'value'=>'0' ),
				)),
array('question'=>'在父亲训斥儿子时，下列哪些说法不能最好地替代北方人所说的【我揍你！】',
		'answers'=>array(
				array('option'=>'我喇一记！', 'value'=>'0' ),
				array('option'=>'我打侬！', 'value'=>'5' ),
				array('option'=>'我请侬吃生活！', 'value'=>'0' ),
				array('option'=>'霉头触到哈尔滨', 'value'=>'0' ),
				)),
array('question'=>'以下不是上海话中形容倒楣的短语是',
		'answers'=>array(
				array('option'=>'霉头触到印度国', 'value'=>'0' ),
				array('option'=>'额角头碰到棺材板', 'value'=>'0' ),
				array('option'=>'霉豆腐干', 'value'=>'5' ),
				)),
array('question'=>'在上海话中【我吃他的干醋】与【我吃他的老酸】不是相同的含义',
		'answers'=>array(
				array('option'=>'对', 'value'=>'0' ),
				array('option'=>'错', 'value'=>'5' ),
				)),
array('question'=>'上海话中【横竖横】的歇后语为【拆牛棚】',
		'answers'=>array(
				array('option'=>'对', 'value'=>'5' ),
				array('option'=>'错', 'value'=>'0' ),
				)),
array('question'=>'旧上海话中【鸟】的一般发音为【Diao】',
		'answers'=>array(
				array('option'=>'对', 'value'=>'0' ),
				array('option'=>'错', 'value'=>'5' ),
				)),
);

if (is_mobile()) {
	require_once './app_mobile.php';
} else {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>上海话八级测试_微测试</title>
<link rel="icon" href="../file/imgs/favicon.ico" type="image/x-icon" />
<link href="../file/css/app.css" rel="stylesheet" type="text/css" />
<link href="../file/css/show-min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body{background:#EEEFEF;}
.main .head{height:168px;width:760px;overflow:hidden;}
.main .cont{height:170px;width:540px;padding-left:280px;padding-top:40px;background:url(imgs/head2.jpg) no-repeat;overflow:hidden;}
.main .cont ul{float:left;width:280px;}
.main .cont .btn{float:left;width:280px;padding-top:20px;padding-left:50px;}
.main .cont li{padding:10px 0;font-size:18px;font-family:"微软雅黑";color:#363636;}
.main .cont .txt{height:30px;line-height:30px;width:160px;padding:2px 5px;}
.main .cont li span{font-weight:bold;margin-right:5px;color:#FFFFFF}
.main .cont #b{margin-left:5px;}
.main .cont label{cursor:pointer;padding:0 30px 0 10px;font-weight:bold;color:#FFFFFF;}
.main .m_bottom{height:102px;width:760px;overflow:hidden;}
</style>
<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
<?php 
require_once '../a_include/header_stat.php';
?>
</head>

<body>
<div class="header"> 
	<div class="c">
		<div class="logo"><a href="/" target="_blank"><img src="http://app.qpic.cn/mblogpic/3ad571c3942b830d9ee6/2000" height="30"></a></div>
		<div class="l">
			<ul>
				<li><a href="/">大家都在玩</a></li>
				<li><a href="/hot.php">热门测试</a></li>
				<li><a href="/love.php">缘分爱情</a></li>
				<li><a href="/fangyan.php">缘分爱情</a></li>
                <li><a href="/">更多应用</a></li>
			</ul>
		</div>
	</div>
</div>


<div class="paneAllWrapper">
	<div class="paneLeftWrapper">
		<div style="background:url(imgs/pre.jpg) 0 0 no-repeat;" class="imageWrapper">
		<form name="answerform" id="answerform"  action="view.php" method="post">
		<div class="allQuestionBuildWrapper">
		
			<?php 
			$questionsize = count($questionAnswerList);
			$idx = 1;
			foreach ($questionAnswerList as $questionAnswer) {
				if ($idx == 1) {
					?>
					<div class="rightQuestionTitle" id="rightQuestionTitle"><?=$idx?>.<?=$questionAnswer['question']?></div>
					<div class="answerWrapper"  data-title="<?=$idx?>.<?=$questionAnswer['question']?>">
					<?php
				} else {
					?>
					<div class="answerWrapper" style="display:none" data-title="<?=$idx?>.<?=$questionAnswer['question']?>">
					<?php
				}
				?>
				
				<?php
					foreach ($questionAnswer['answers'] as $answer) {
						if ($idx == $questionsize) {
							?>
							<a class="questionAnswer last_questionAnswer"><input type="radio" name="i<?=$idx?>" value="<?=$answer['value']?>"/><?=$answer['option']?></a>
							<?php
						} else {
							?>
							<a class="questionAnswer"><input type="radio" name="i<?=$idx?>" value="<?=$answer['value']?>"/><?=$answer['option']?></a>
							<?php
						}
					}
				?>
				</div>
				<?php
				$idx++;
			}
			?>
			
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
    
			<div class="processBar">
			<div id="processOn" style="width: 38px;">
			</div>
			</div>
		</div>
		</form>
		</div>
		<div class="actionWrapper"><div class="detailTitleBottom">上海话八级测试</div></div>	
	</div>
	<div class="paneRightWrapper">
	<?
$app_names=array_keys($app_nick_n);
$app_nicks=array_values ($app_nick_n);
$rank_num=0;
while($rank_num<6)
{
	$app_name_n=$app_names[$rank_num];
		?>
		<a class="testItemRightWrapper" href="../<?=$app_name_n?>"><div class="innerRightBoard"><div class="innerPhoto" style="background:url(<?=$file_logo[$app_name_n]?>) 0 0 no-repeat;"></div></div></a>
		<?

	$rank_num++;
}
?>
	</div>
	<div class="clear"></div>	
</div>
<script>
var current_i=0;
var i30_ischecked=0;
$(function()
{
	$('.questionAnswer').click(function()
	{
		
		$(this).children('input').attr('checked',true);
		current_i++;
		//$('#count').html(current_i);
		var next = $(this).parent('.answerWrapper').next();
		if (next && !$(this).hasClass('last_questionAnswer')) { 
			$(this).parent('.answerWrapper').slideUp('fast');
			$(this).parent('.answerWrapper').next().slideDown('fast');
			$('#rightQuestionTitle').text($(this).parent('.answerWrapper').next().attr('data-title'));

			var widthFix = (current_i*(760/20));
			$("#processOn").css({"width":widthFix+"px"});
		}
	});
	//$('.item').hover(function(){$(this).css('background','#eee');},function(){$(this).css('background','#f8f8f8');});
	$('.last_questionAnswer').click(function()
	{
		i30_ischecked=1;
	});
	//$('.last_item').hover(function(){$(this).css('background','#eee');},function(){$(this).css('background','#f8f8f8');});

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
	var form1=document.getElementById('answerform');
	form1.submit();
}
</script>
<div style="display:none">
</div>

<?php 
require_once '../a_include/footer_stat.php';
?>
</body></html>
<?php 
}
?>