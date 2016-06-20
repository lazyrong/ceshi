<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='hfrg';
setcookie('v_appname',$app_name, time()+3000, '/');
reset_appstatus ( $app_name );
$questionAnswerList = array(
		array('question'=>'早上起床之后 通常吃什么当早点?',
				'answers'=>array(
						array('option'=>'A、蛋和面包', 'value'=>'3' ),
						array('option'=>'B、麦片', 'value'=>'1' ),
						array('option'=>'C、汽水', 'value'=>'6' ),
						array('option'=>'D、什么都不吃', 'value'=>'2' ),
				)),
		array('question'=>'如果你可以选任何一样你想吃的东西当早点你会选择什么?',
				'answers'=>array(
						array('option'=>'A、蛋和面包', 'value'=>'2' ),
						array('option'=>'B、其它别种东西', 'value'=>'1' ),
						array('option'=>'C、汽水', 'value'=>'3' ),
						array('option'=>'D、什么都不吃', 'value'=>'4' ),
				)),
		array('question'=>'午餐时?你会…',
				'answers'=>array(
						array('option'=>'A、不吃东西 因为太忙或担心体重', 'value'=>'2' ),
						array('option'=>'B、吃你想了一个早上想吃的东西', 'value'=>'1' ),
						array('option'=>'C、吃自己带来的食物', 'value'=>'3' ),
						array('option'=>'D、问朋友要吃什么 再一起去吃', 'value'=>'4' ),
				)),
		array('question'=>'一位朋友请你吃一些她/他带来的食物 你会…',
				'answers'=>array(
						array('option'=>'A、吃一小口 因为实在太饿了', 'value'=>'3' ),
						array('option'=>'B、为了保持礼貌 只吃一小口', 'value'=>'1' ),
						array('option'=>'C、拒绝他/她的好意 因为你正在减肥', 'value'=>'2' ),
						array('option'=>'D、吃两口', 'value'=>'6' ),
				)),
		array('question'=>'你未来的男/女朋友请你吃一样东西 你想那会是什么?',
				'answers'=>array(
						array('option'=>'A、一块蛋糕', 'value'=>'1' ),
						array('option'=>'B、一颗苹果', 'value'=>'2' ),
						array('option'=>'C、一片批萨', 'value'=>'5' ),
						array('option'=>'D、一个胡萝卜', 'value'=>'3' ),
				)),
		array('question'=>'你的狗对你奋力摇尾巴 企图引起你的注意 你会给他…',
				'answers'=>array(
						array('option'=>'A、给他一块狗饼干', 'value'=>'3' ),
						array('option'=>'B、一些蛋糕', 'value'=>'1' ),
						array('option'=>'C、什么都不给 拍拍他就好', 'value'=>'4' ),
						array('option'=>'D、什么都不给 还把他赶开 因为你认为不能让你的狗养成要什么有什么的坏习惯', 'value'=>'2' ),
				)),
		array('question'=>'梦中你正在一家全世界最棒的餐厅里 你想你会点…',
				'answers'=>array(
						array('option'=>'A、菜单上列的每道菜 反正是做梦嘛!!', 'value'=>'2' ),
						array('option'=>'B、一个大盘 里面什么东西都有的色拉', 'value'=>'1' ),
						array('option'=>'C、牛排', 'value'=>'3' ),
						array('option'=>'D、一个会让你多长很多肥油的点心', 'value'=>'4' ),
				)),
		array('question'=>'在一个热带岛上 你觉得什么食物是你一定要吃到的?',
				'answers'=>array(
						array('option'=>'A、水果和蔬蔡', 'value'=>'2' ),
						array('option'=>'B、肉和马玲薯', 'value'=>'1' ),
						array('option'=>'C、冰淇淋 巧克力和蛋糕?', 'value'=>'3' ),
						array('option'=>'D、中国菜', 'value'=>'4' ),
				)),
		array('question'=>'你现在是一个婴儿 你妈妈正在喂你吃…',
				'answers'=>array(
						array('option'=>'A、婴儿麦片或婴儿食物', 'value'=>'6' ),
						array('option'=>'B、肉和马玲薯', 'value'=>'4' ),
						array('option'=>'C、绿色花椰菜', 'value'=>'8' ),
						array('option'=>'D、什么都没有 你妈正在做别的事', 'value'=>'2' ),
				)),
		array('question'=>'你现在是六岁的小孩 你爸爸正在喂你吃…',
				'answers'=>array(
						array('option'=>'A、批萨', 'value'=>'7' ),
						array('option'=>'B、意大利面', 'value'=>'5' ),
						array('option'=>'C、泡泡糖', 'value'=>'1' ),
						array('option'=>'D、胡萝卜', 'value'=>'3' ),
				)),
);
if (is_mobile()) {
	require_once './../a_include/question_test_mobile.php';
} else {
	require_once './../a_include/question_test.php';
}
?>