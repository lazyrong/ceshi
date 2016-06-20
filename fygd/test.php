<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='fygd';
setcookie('v_appname',$app_name, time()+3000, '/');
reset_appstatus ( $app_name );
$questionAnswerList = array(
		array('question'=>'“缩骨”的意思是',
				'answers'=>array(
						array('option'=>'形容人很瘦', 'value'=>'0' ),
						array('option'=>'形容人很穷', 'value'=>'0' ),
						array('option'=>'形容人很吝啬', 'value'=>'5' ),
						array('option'=>'形容人很小心、谨慎', 'value'=>'0' ),
				)),
		array('question'=>'“鸡咁脚”的意思是',
				'answers'=>array(
						array('option'=>'形容脚像鸡一样', 'value'=>'0' ),
						array('option'=>'形容走路像鸡一样', 'value'=>'0' ),
						array('option'=>'形容走路很小声', 'value'=>'0' ),
						array('option'=>'形容走路很匆忙', 'value'=>'5' ),
				)),
		array('question'=>'“骑离”的意思是',
				'answers'=>array(
						array('option'=>'特别的', 'value'=>'0' ),
						array('option'=>'古怪的', 'value'=>'5' ),
						array('option'=>'有趣的', 'value'=>'0' ),
						array('option'=>'无聊的', 'value'=>'0' ),
				)),
		array('question'=>'以下哪个词是用来形容那些容易被别人拿好处的人',
				'answers'=>array(
						array('option'=>'粉肠', 'value'=>'0' ),
						array('option'=>'金鱼佬', 'value'=>'0' ),
						array('option'=>'水鱼', 'value'=>'5' ),
						array('option'=>'蠢佬', 'value'=>'0' ),
				)),
		array('question'=>'与“孤寒”同义的词是',
				'answers'=>array(
						array('option'=>'度缩', 'value'=>'5' ),
						array('option'=>'企理', 'value'=>'0' ),
						array('option'=>'爬头', 'value'=>'0' ),
						array('option'=>'掟弯', 'value'=>'0' ),
				)),
		array('question'=>'“ke le fe”的意思是',
				'answers'=>array(
						array('option'=>'好色的人', 'value'=>'0' ),
						array('option'=>'无足轻重的人', 'value'=>'5' ),
						array('option'=>'有个性的人', 'value'=>'0' ),
						array('option'=>'喜欢的人', 'value'=>'0' ),
				)),
		array('question'=>'“Call Lao Ye！”的意思是',
				'answers'=>array(
						array('option'=>'我的天啊！', 'value'=>'0' ),
						array('option'=>'不是吧？！', 'value'=>'0' ),
						array('option'=>'你去死吧！', 'value'=>'0' ),
						array('option'=>'岂有此理！', 'value'=>'5' ),
				)),
		array('question'=>'歇后语“山草药”的下一句是',
				'answers'=>array(
						array('option'=>'人人啱', 'value'=>'0' ),
						array('option'=>'神憎鬼厌', 'value'=>'0' ),
						array('option'=>'噏得就噏', 'value'=>'5' ),
						array('option'=>'心知肚明', 'value'=>'0' ),
				)),
		array('question'=>'与“发long嚟”同义的词是',
				'answers'=>array(
						array('option'=>'发瘟', 'value'=>'0' ),
						array('option'=>'发烂咋', 'value'=>'5' ),
						array('option'=>'发钱寒', 'value'=>'0' ),
						array('option'=>'发达', 'value'=>'0' ),
				)),
		array('question'=>'与“懵盛盛”不同义的词是',
				'answers'=>array(
						array('option'=>'憨居', 'value'=>'0' ),
						array('option'=>'short short哋', 'value'=>'5' ),
						array('option'=>'蒙查查', 'value'=>'0' ),
						array('option'=>'傻更更', 'value'=>'0' ),
				)),
		array('question'=>'与“嘈生嗮！”不同意的是',
				'answers'=>array(
						array('option'=>'嘈喧巴闭！', 'value'=>'0' ),
						array('option'=>'鬼咁大声！', 'value'=>'0' ),
						array('option'=>'六国大封相！', 'value'=>'5' ),
						array('option'=>'拆楼咩！', 'value'=>'0' ),
				)),
		array('question'=>'四个中，不同意思的是',
				'answers'=>array(
						array('option'=>'茅尼', 'value'=>'0' ),
						array('option'=>'大乡里', 'value'=>'5' ),
						array('option'=>'木嘴', 'value'=>'0' ),
						array('option'=>'碌葛', 'value'=>'0' ),
				)),
		array('question'=>'四个中，不同意思的是',
				'answers'=>array(
						array('option'=>'八月十五', 'value'=>'0' ),
						array('option'=>'箩柚', 'value'=>'0' ),
						array('option'=>'PET PET', 'value'=>'0' ),
						array('option'=>'窟窟', 'value'=>'5' ),
				)),
		array('question'=>'与“箩底橙”同义的是',
				'answers'=>array(
						array('option'=>'隔夜粥', 'value'=>'0' ),
						array('option'=>'头啖汤', 'value'=>'0' ),
						array('option'=>'拉MAY', 'value'=>'0' ),
						array('option'=>'卖剩蔗', 'value'=>'5' ),
				)),
		array('question'=>'“帮衬”的意思是',
				'answers'=>array(
						array('option'=>'请帮忙', 'value'=>'0' ),
						array('option'=>'请光顾', 'value'=>'5' ),
						array('option'=>'请进', 'value'=>'0' ),
						array('option'=>'请回吧', 'value'=>'0' ),
				)),
		array('question'=>'四个中，不同意思的是',
				'answers'=>array(
						array('option'=>'收风', 'value'=>'5' ),
						array('option'=>'收皮', 'value'=>'0' ),
						array('option'=>'收嗲', 'value'=>'0' ),
						array('option'=>'收声', 'value'=>'0' ),
				)),
		array('question'=>'“盏鬼”的意思是',
				'answers'=>array(
						array('option'=>'恐怖的', 'value'=>'0' ),
						array('option'=>'新奇的', 'value'=>'0' ),
						array('option'=>'有趣的', 'value'=>'5' ),
						array('option'=>'进口的', 'value'=>'0' ),
				)),
		array('question'=>'四个中，不同意思的是',
				'answers'=>array(
						array('option'=>'去佐', 'value'=>'0' ),
						array('option'=>'钉佐', 'value'=>'0' ),
						array('option'=>'瓜佐', 'value'=>'0' ),
						array('option'=>'跌佐', 'value'=>'5' ),
				)),
		array('question'=>'四个中，不同意思的是',
				'answers'=>array(
						array('option'=>'松人', 'value'=>'0' ),
						array('option'=>'撇人', 'value'=>'0' ),
						array('option'=>'散水', 'value'=>'0' ),
						array('option'=>'行人', 'value'=>'5' ),
				)),
		array('question'=>'“朱义盛”的意思是',
				'answers'=>array(
						array('option'=>'假货', 'value'=>'5' ),
						array('option'=>'好货', 'value'=>'0' ),
						array('option'=>'真货', 'value'=>'0' ),
						array('option'=>'次货', 'value'=>'0' ),
				)),
);

if (is_mobile()) {
	require_once './../a_include/question_test_mobile.php';
} else {
	require_once './../a_include/question_test.php';
}
?>