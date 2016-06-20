<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='fysx';
setcookie('v_appname',$app_name, time()+3000, '/');
reset_appstatus ( $app_name );

$questionAnswerList = array(
		array('question'=>'[圪]在山西一些地区专指房屋的哪个位置',
				'answers'=>array(
						array('option'=>'书房', 'value'=>'0' ),
						array('option'=>'屋顶', 'value'=>'0' ),
						array('option'=>'角落', 'value'=>'11' ),
						array('option'=>'客厅', 'value'=>'0' ),
				)),
		array('question'=>'在山西,如果[米]前不加修饰语,如米汤、米面、米醋、米颗粒儿、米窝窝、米虫儿等等,一般都是指哪种米',
				'answers'=>array(
						array('option'=>'大米', 'value'=>'0' ),
						array('option'=>'小米', 'value'=>'11' ),
						array('option'=>'高粱米', 'value'=>'0' ),
						array('option'=>'黑米', 'value'=>'0' ),
				)),
		array('question'=>'甲说乙:你[桑]咧(太原方言)!甲和乙正在做什么',
				'answers'=>array(
						array('option'=>'吵架', 'value'=>'11' ),
						array('option'=>'运动', 'value'=>'0' ),
						array('option'=>'浇花', 'value'=>'0' ),
						array('option'=>'养蚕', 'value'=>'0' ),
				)),
		array('question'=>'在熙攘的路边,一对情侣的动作很是亲昵,一位老大爷路过,说了句:[带点儿(大同方言)老大爷的意思是说',
				'answers'=>array(
						array('option'=>'这对情侣有些脑子不够用', 'value'=>'11' ),
						array('option'=>'鼓励情侣的做法', 'value'=>'0' ),
						array('option'=>'问情侣几点了', 'value'=>'0' ),
						array('option'=>'以上答案都不对', 'value'=>'0' ),
				)),
		array('question'=>'[卡戏](榆次方言)的意思是',
				'answers'=>array(
						array('option'=>'一种地方戏曲', 'value'=>'0' ),
						array('option'=>'磁带转动不畅', 'value'=>'0' ),
						array('option'=>'心烦意乱', 'value'=>'11' ),
						array('option'=>'形容长得漂亮、可爱', 'value'=>'0' ),
				)),
		array('question'=>'张三说你到哪阁来(太原方言)。张三是在问',
				'answers'=>array(
						array('option'=>'你下班了', 'value'=>'0' ),
						array('option'=>'你去哪了', 'value'=>'11' ),
						array('option'=>'你吃饭了', 'value'=>'0' ),
						array('option'=>'你回家了', 'value'=>'0' ),
				)),
		array('question'=>'在晋南,小孩子如果哭闹不休,大人会吓唬孩子:不敢哭了,再哭麻狐(子)就来了。一听这话,小孩子的哭声戛然而止。这[麻狐]是个什么怪物,让孩子如此害怕呢',
				'answers'=>array(
						array('option'=>'传说中的一个狐狸精', 'value'=>'0' ),
						array('option'=>'传说中[跳大绳]的巫婆婆', 'value'=>'0' ),
						array('option'=>'传说中类似狼的一种动物,也叫[马虎]', 'value'=>'11' ),
						array('option'=>'传说中类似[年]的怪物', 'value'=>'0' ),
				)),
		array('question'=>'山西方言中有丰富的以[二]打头的词,如二痞子、二伙计、二鬼、二个炮、二道贩子、二性物烂等。以[二]打头的词,主要表达了什么含义',
				'answers'=>array(
						array('option'=>'褒义词,用在方言里显得有亲切感', 'value'=>'0' ),
						array('option'=>'多数是贬义词,有时略趋向中性词,多用来形容、指称某类人或某个人言行不端', 'value'=>'11' ),
						array('option'=>'以上答案都不对', 'value'=>'0' ),
				)),
		array('question'=>'[共共](阳泉方言)是一种',
				'answers'=>array(
						array('option'=>'长条签状物', 'value'=>'0' ),
						array('option'=>'球体', 'value'=>'0' ),
						array('option'=>'圆柱体', 'value'=>'12' ),
						array('option'=>'立方体', 'value'=>'0' ),
				)),
);


if (is_mobile()) {
	require_once './../a_include/question_test_mobile.php';
} else {
	require_once './../a_include/question_test.php';
}
?>