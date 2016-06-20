<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='fyhb';
setcookie('v_appname',$app_name, time()+3000, '/');
reset_appstatus ( $app_name );
$questionAnswerList = array(
		array('question'=>'遮奇炸枪朗搞是',
				'answers'=>array(
						array('option'=>'现在去哪里', 'value'=>'0' ),
						array('option'=>'针扎得疼', 'value'=>'0' ),
						array('option'=>'今天天气很好', 'value'=>'0' ),
						array('option'=>'现在怎么办', 'value'=>'5' ),
				)),
		array('question'=>'客该地客是',
				'answers'=>array(
						array('option'=>'上街去', 'value'=>'5' ),
						array('option'=>'请客吃饭', 'value'=>'0' ),
						array('option'=>'扭秧歌', 'value'=>'0' ),
						array('option'=>'活该', 'value'=>'0' ),
				)),
		array('question'=>'打赤暴条头是',
				'answers'=>array(
						array('option'=>'打倒赤身裸体的人', 'value'=>'0' ),
						array('option'=>'赤身裸体', 'value'=>'5' ),
						array('option'=>'赤膊上阵', 'value'=>'0' ),
						array('option'=>'打架打红了眼', 'value'=>'0' ),
				)),
		array('question'=>'怎喀批皮雀，不够我色啊（2声）此缝是',
				'answers'=>array(
						array('option'=>'怎么了，小小年纪就好色', 'value'=>'0' ),
						array('option'=>'这么小的麻雀，看都看不清', 'value'=>'0' ),
						array('option'=>'这小的娃子，我一个人就可对付', 'value'=>'0' ),
						array('option'=>'这一丁点荸荠，不够我一个人吃', 'value'=>'5' ),
				)),
		array('question'=>'雌皮头子是',
				'answers'=>array(
						array('option'=>'一种动物 ', 'value'=>'0' ),
						array('option'=>'傻瓜', 'value'=>'0' ),
						array('option'=>'一种文具', 'value'=>'5' ),
						array('option'=>'无赖', 'value'=>'0' ),
				)),
		array('question'=>'姿耳子是',
				'answers'=>array(
						array('option'=>'大耳朵', 'value'=>'0' ),
						array('option'=>'耳朵', 'value'=>'0' ),
						array('option'=>'烂耳朵', 'value'=>'0' ),
						array('option'=>'蝉', 'value'=>'5' ),
				)),
		array('question'=>'耸食猴嘎四是',
				'answers'=>array(
						array('option'=>'耸人听闻', 'value'=>'0' ),
						array('option'=>'吓死我了', 'value'=>'0' ),
						array('option'=>'什么时候开始', 'value'=>'5' ),
						array('option'=>'四只食人猴嘎嘎地叫着', 'value'=>'0' ),
				)),
		array('question'=>'三漫太（3声）子是',
				'answers'=>array(
						array('option'=>'公子', 'value'=>'0' ),
						array('option'=>'口音与当地不一样的人', 'value'=>'5' ),
						array('option'=>'儿子', 'value'=>'0' ),
						array('option'=>'有钱人', 'value'=>'0' ),
				)),
		array('question'=>'翁孩、套孩分别指的是',
				'answers'=>array(
						array('option'=>'棉鞋、雨鞋', 'value'=>'5' ),
						array('option'=>'老人、小孩', 'value'=>'0' ),
						array('option'=>'人贩子和被贩者', 'value'=>'0' ),
						array('option'=>'捉迷藏的双方', 'value'=>'0' ),
				)),
		array('question'=>'欧油屁眼、揪油已罢是指',
				'answers'=>array(
						array('option'=>'二流子', 'value'=>'0' ),
						array('option'=>'没油了', 'value'=>'0' ),
						array('option'=>'炸油饼', 'value'=>'0' ),
						array('option'=>'种田', 'value'=>'5' ),
				)),
		array('question'=>'烂嚼是指',
				'answers'=>array(
						array('option'=>'乱说', 'value'=>'0' ),
						array('option'=>'乱吃', 'value'=>'5' ),
				)),
		array('question'=>'几乖油是指',
				'answers'=>array(
						array('option'=>'真坏呀', 'value'=>'5' ),
						array('option'=>'真乖呀', 'value'=>'0' ),
				)),
		array('question'=>'晓得有几好噢是指',
				'answers'=>array(
						array('option'=>'非常好', 'value'=>'0' ),
						array('option'=>'一点都不好', 'value'=>'5' ),
				)),
		array('question'=>'出鬼气是指',
				'answers'=>array(
						array('option'=>'怎么可能呢', 'value'=>'5' ),
						array('option'=>'闹鬼了', 'value'=>'0' ),
						array('option'=>'阴气特别重', 'value'=>'0' ),
						array('option'=>'你很调皮', 'value'=>'0' ),
				)),
		array('question'=>'嚼啥是指',
				'answers'=>array(
						array('option'=>'快吃啥', 'value'=>'0' ),
						array('option'=>'快说话', 'value'=>'5' ),
				)),
		array('question'=>'求了个求是指',
				'answers'=>array(
						array('option'=>'乞求乞求', 'value'=>'0' ),
						array('option'=>'完了，没希望', 'value'=>'5' ),
				)),
		array('question'=>'搞么斯是指',
				'answers'=>array(
						array('option'=>'做什么', 'value'=>'5' ),
						array('option'=>'没得没事', 'value'=>'0' ),
				)),
		array('question'=>'么瞎括是指',
				'answers'=>array(
						array('option'=>'没瞎了', 'value'=>'0' ),
						array('option'=>'不乱说', 'value'=>'5' ),
				)),
		array('question'=>'冒得么斯是指',
				'answers'=>array(
						array('option'=>'有事', 'value'=>'0' ),
						array('option'=>'没有事', 'value'=>'5' ),
				)),
		array('question'=>'找不倒有几好是指',
				'answers'=>array(
						array('option'=>'非常好', 'value'=>'5' ),
						array('option'=>'不好', 'value'=>'0' ),
				)),
);



if (is_mobile()) {
	require_once './../a_include/question_test_mobile.php';
} else {
	require_once './../a_include/question_test.php';
}
?>