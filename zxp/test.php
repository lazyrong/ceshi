<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='zxp';
setcookie('v_appname',$app_name, time()+3000, '/');
reset_appstatus($app_name);
$questionAnswerList = array(
	array('question'=>'你会想和那一种异性约会？ ',
			'answers'=>array(
					array('option'=>'看起来老实又内向的', 'value'=>'1' ),
					array('option'=>'会玩又会懂得打扮的', 'value'=>'2' ),
			)),
	array('question'=>'有个人边看表边跑，他迟到了5分钟，你觉得他心理怎么想？',
			'answers'=>array(
					array('option'=>'才5分不算迟到', 'value'=>'3' ),
					array('option'=>'糟了！迟到了！', 'value'=>'4' ),
			)),
	array('question'=>'有个家庭主妇正在打扫，你觉得她正在怎么想？ ',
			'answers'=>array(
					array('option'=>'我要扫得一尘不染', 'value'=>'5' ),
					array('option'=>'差不多就行了，做完可以去看小说', 'value'=>'3' ),
			)),
	array('question'=>'有个女生从你身旁经过，飘来一阵很香的味道，你觉得是哪一种香味？',
			'answers'=>array(
					array('option'=>'甜甜的果香', 'value'=>'6' ),
					array('option'=>'清淡的花香', 'value'=>'8' ),
			)),
	array('question'=>'你和朋友一起去吃饭，付了钱走出餐厅才发现店员少找你10元，这时你会？',
			'answers'=>array(
					array('option'=>'折回去向他要回来', 'value'=>'8' ),
					array('option'=>'才10元就算了', 'value'=>'7' ),
			)),
	array('question'=>'有一只鸟从鸟笼飞走了，你觉得 ',
			'answers'=>array(
					array('option'=>'这只鸟一定会再回来', 'value'=>'6' ),
					array('option'=>'不会回来了', 'value'=>'9' ),
			)),
	array('question'=>'看到有人顺手把垃圾丢在路上，你有什么感想？',
			'answers'=>array(
					array('option'=>'不能原谅这种人', 'value'=>'11' ),
					array('option'=>'没什么感觉', 'value'=>'9' ),
			)),
	array('question'=>'朋友到你家作客，你喜欢收到哪一种礼物？ ',
			'answers'=>array(
					array('option'=>'鲜花或装饰品', 'value'=>'15' ),
					array('option'=>'蛋糕或食物', 'value'=>'10' ),
			)),
	array('question'=>'你在半夜边看书边窝在棉被中想事情，后来… ',
			'answers'=>array(
					array('option'=>'多半会睡着', 'value'=>'11' ),
					array('option'=>'会越来越清醒', 'value'=>'7' ),
			)),
	array('question'=>'你现在正在逃命，你认为是什么东西在追你呢？ ',
			'answers'=>array(
					array('option'=>'狮子或老虎', 'value'=>'12' ),
					array('option'=>'酷斯拉', 'value'=>'13' ),
			)),
	array('question'=>'你看到地面上有洞时你会怎么想？',
			'answers'=>array(
					array('option'=>'洞里有什么东西？', 'value'=>'14' ),
					array('option'=>'太危险了，还是赶快盖起来吧！', 'return_value'=>'A' ),
			)),
	array('question'=>'书架上的书倒了，看起来乱七八糟，这时你会马上整理吗？ ',
			'answers'=>array(
					array('option'=>'会', 'value'=>'15' ),
					array('option'=>'不会', 'value'=>'12' ),
			)),
	array('question'=>'有个人正对另一个人说悄巧话，你认为他听了之后的反应是？',
			'answers'=>array(
					array('option'=>'忍不住大笑出来', 'value'=>'16' ),
					array('option'=>'皱起眉头一脸沉重', 'value'=>'17' ),
			)),
	array('question'=>'有个女子拿刀对着一名男子，这女子会对他说什么？ ',
			'answers'=>array(
					array('option'=>'「我恨你，所以我要杀了你！」', 'value'=>'17' ),
					array('option'=>'「再过来我要刺过去了！」', 'return_value'=>'D' ),
			)),
	array('question'=>'你想找工作，下面2家公司你会选那一家？ ',
			'answers'=>array(
					array('option'=>'能让人成长公司', 'return_value'=>'D' ),
					array('option'=>'稳定的公司', 'return_value'=>'B' ),
			)),
	array('question'=>'朋友请吃晚餐，你已经很饱了，他却一直劝你吃甜点，这时你会？ ',
			'answers'=>array(
					array('option'=>'再饱也会吃', 'value'=>'16' ),
					array('option'=>'很果断的拒绝', 'value'=>'14' ),
			)),
	array('question'=>'买新电器时，关于说明书，你会？',
			'answers'=>array(
					array('option'=>'使用前一定先看仔细', 'return_value'=>'C' ),
					array('option'=>'根本很少会看', 'return_value'=>'B' ),
			)),
	array('question'=>'下面那一种人令你无法忍受？下面那一种人令你无法忍受？',
			'answers'=>array(
					array('option'=>'小气又啰嗦的人', 'return_value'=>'D' ),
					array('option'=>'做事随便的人', 'return_value'=>'C' ),
			)),
);


	$optiondata = json_encode($questionAnswerList);
if (is_mobile()) {
	require_once './../a_include/question_test_guide_mobile.php';
} else {
	require_once './../a_include/question_test_guide.php';
}
?>