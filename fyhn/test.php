<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='fyhn';
setcookie('v_appname',$app_name, time()+3000, '/');
reset_appstatus ( $app_name );
$questionAnswerList = array(
		array('question'=>'河南方言中，咕堆的意思是',
				'answers'=>array(
						array('option'=>'躺', 'value'=>'0' ),
						array('option'=>'坐', 'value'=>'0' ),
						array('option'=>'蹲', 'value'=>'5' ),
						array('option'=>'以上答案都不是', 'value'=>'0' ),
				)),
		array('question'=>'在外地人看来，最能代表河南话的一个字是',
				'answers'=>array(
						array('option'=>'贼', 'value'=>'0' ),
						array('option'=>'咱', 'value'=>'0' ),
						array('option'=>'中', 'value'=>'5' ),
						array('option'=>'以上答案都是', 'value'=>'0' ),
				)),
		array('question'=>'咱私跟住去吧。句中的私跟意思是',
				'answers'=>array(
						array('option'=>'私奔', 'value'=>'0' ),
						array('option'=>'一起', 'value'=>'5' ),
						array('option'=>'四个人', 'value'=>'0' ),
						array('option'=>'合租', 'value'=>'0' ),
				)),
		array('question'=>'我可戈意他。该句中的戈意，意思是',
				'answers'=>array(
						array('option'=>'满意', 'value'=>'0' ),
						array('option'=>'喜欢', 'value'=>'0' ),
						array('option'=>'讨厌', 'value'=>'5' ),
						array('option'=>'瞧不起', 'value'=>'0' ),
				)),
		array('question'=>'他叶赫回来。该句中的叶赫的意思是',
				'answers'=>array(
						array('option'=>'前天晚上', 'value'=>'0' ),
						array('option'=>'昨天晚上', 'value'=>'5' ),
						array('option'=>'今天晚上', 'value'=>'0' ),
						array('option'=>'明天晚上', 'value'=>'0' ),
				)),
		array('question'=>'当有人说你是粉条/凉粉或者韭菜时，他的意思是指你怎么了',
				'answers'=>array(
						array('option'=>'你很圆滑', 'value'=>'0' ),
						array('option'=>'你很软弱', 'value'=>'5' ),
						array('option'=>'你很欠揍', 'value'=>'0' ),
						array('option'=>'你很多愁善感', 'value'=>'0' ),
				)),
		array('question'=>'你是哪儿类？该句中的类的词性是',
				'answers'=>array(
						array('option'=>'语气助词', 'value'=>'5' ),
						array('option'=>'形容词', 'value'=>'0' ),
						array('option'=>'名词', 'value'=>'0' ),
						array('option'=>'动词', 'value'=>'0' ),
				)),
		array('question'=>'五谷名称中的洋柿子/勤荞/秫秫分别是指？',
				'answers'=>array(
						array('option'=>'西红柿/青菜/高粱', 'value'=>'0' ),
						array('option'=>'柿子/荞麦/水稻', 'value'=>'0' ),
						array('option'=>'西红柿/辣椒/玉米', 'value'=>'5' ),
						array('option'=>'洋葱/荞麦/高粱', 'value'=>'0' ),
				)),
		array('question'=>'在时间的表述中，河南方言在一天的不同时辰都有较大差别，比如恰切指的是早晨，那么茶饭儿指的是',
				'answers'=>array(
						array('option'=>'凌晨', 'value'=>'0' ),
						array('option'=>'午夜', 'value'=>'0' ),
						array('option'=>'上午', 'value'=>'5' ),
						array('option'=>'黄昏', 'value'=>'0' ),
				)),
		array('question'=>'河南话中的儿化音是一大特色，朴实，顺口，自然，流畅，下列选项中，哪一项是对父亲的称呼？',
				'answers'=>array(
						array('option'=>'德儿', 'value'=>'5' ),
						array('option'=>'囤儿', 'value'=>'0' ),
						array('option'=>'巴儿', 'value'=>'0' ),
						array('option'=>'夜儿', 'value'=>'0' ),
				)),
		array('question'=>'扁担是一种细长青绿色的蚂蚱，大刀就是螳螂，布革则是白鸽，那么绩鸟儿指的是？',
				'answers'=>array(
						array('option'=>'蝉', 'value'=>'5' ),
						array('option'=>'蝴蝶', 'value'=>'0' ),
						array('option'=>'麻雀', 'value'=>'0' ),
						array('option'=>'猫头鹰', 'value'=>'0' ),
				)),
		array('question'=>'西方科学家牛顿在河南方言中会被叫做',
				'answers'=>array(
						array('option'=>'无顿', 'value'=>'0' ),
						array('option'=>'又顿', 'value'=>'0' ),
						array('option'=>'偶顿', 'value'=>'5' ),
						array('option'=>'牛兔', 'value'=>'0' ),
				)),
		array('question'=>'长辈称唿中老娘指的是',
				'answers'=>array(
						array('option'=>'妈妈', 'value'=>'0' ),
						array('option'=>'大娘', 'value'=>'0' ),
						array('option'=>'外婆', 'value'=>'5' ),
						array('option'=>'姑姑', 'value'=>'0' ),
				)),
		array('question'=>'河南话之所以简洁最主要的一点就是双字或多字连音现象非常普遍，河南话中的那dia是指',
				'answers'=>array(
						array('option'=>'地瓜', 'value'=>'0' ),
						array('option'=>'地滑', 'value'=>'0' ),
						array('option'=>'顶啥', 'value'=>'0' ),
						array('option'=>'底下', 'value'=>'5' ),
				)),
		array('question'=>'你的脸真哭触！该句中的哭触的意思',
				'answers'=>array(
						array('option'=>'细小', 'value'=>'0' ),
						array('option'=>'吓人', 'value'=>'0' ),
						array('option'=>'皱了', 'value'=>'5' ),
						array('option'=>'夸张', 'value'=>'0' ),
				)),
		array('question'=>'这小孩儿怎么老是嘿挲？该句中的嘿挲的意思是',
				'answers'=>array(
						array('option'=>'打嗝', 'value'=>'0' ),
						array('option'=>'咳嗽', 'value'=>'0' ),
						array('option'=>'呕吐', 'value'=>'0' ),
						array('option'=>'发抖', 'value'=>'5' ),
				)),
		array('question'=>'黑客帝国里面黑字在河南方言中读',
				'answers'=>array(
						array('option'=>'偶', 'value'=>'0' ),
						array('option'=>'歇', 'value'=>'5' ),
						array('option'=>'切', 'value'=>'0' ),
						array('option'=>'夏', 'value'=>'0' ),
				)),
		array('question'=>'曾经热播的贺岁片《手机》里面，讲河南话的演员是',
				'answers'=>array(
						array('option'=>'张国立', 'value'=>'0' ),
						array('option'=>'范伟', 'value'=>'5' ),
						array('option'=>'葛优', 'value'=>'0' ),
						array('option'=>'以上答案都不是', 'value'=>'0' ),
				)),
		array('question'=>'在形容白痴时，河南方言中表现得较为丰富多彩，下列选项中非此意的词是？',
				'answers'=>array(
						array('option'=>'欣俅', 'value'=>'0' ),
						array('option'=>'二俅', 'value'=>'0' ),
						array('option'=>'二杆儿', 'value'=>'0' ),
						array('option'=>'老二', 'value'=>'5' ),
				)),
		array('question'=>'用郑州话说玉霞，就等于用普通话说鱼虾',
				'answers'=>array(
						array('option'=>'是', 'value'=>'5' ),
						array('option'=>'否', 'value'=>'0' ),
				)),
);

if (is_mobile()) {
	require_once './../a_include/question_test_mobile.php';
} else {
	require_once './../a_include/question_test.php';
}
?>