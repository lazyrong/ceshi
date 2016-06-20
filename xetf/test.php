<?
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name = 'xetf';
setcookie ( 'v_appname', $app_name, time () + 3000, '/' );
reset_appstatus ( $app_name );
$questionAnswerList = array (
		array (
				'question' => '物价越来越高，如果将来你发财了，你会买别墅让自己过的痛快点吗？',
				'answers' => array (
						array (
								'option' => '会',
								'value' => '1' 
						),
						array (
								'option' => '不会，够住就可以，不要浪费',
								'value' => '2' 
						) 
				) 
		),
		array (
				'question' => '下面两种类型的电视剧，你喜欢看哪种类型的？',
				'answers' => array (
						array (
								'option' => '古代类型的',
								'value' => '3' 
						),
						array (
								'option' => '现代类型的',
								'value' => '2' 
						) 
				) 
		),
		array (
				'question' => '如果回到初三的寒假中，你觉得下面两科你应该先写哪科作业？',
				'answers' => array (
						array (
								'option' => '语文，早早把日记作文写完早没有负担',
								'value' => '3' 
						),
						array (
								'option' => '数学，先把答案抄完再说',
								'value' => '4' 
						) 
				) 
		),
		array (
				'question' => '你相信眼缘吗？',
				'answers' => array (
						array (
								'option' => '相信',
								'value' => '4' 
						),
						array (
								'option' => '不相信',
								'value' => '5' 
						) 
				) 
		),
		array (
				'question' => '你认为怎样才能低调的忘记过去不好的东西呢？',
				'answers' => array (
						array (
								'option' => '一声不响的生活',
								'value' => '5' 
						),
						array (
								'option' => '默默无闻的消失',
								'value' => '6' 
						) 
				) 
		),
		array (
				'question' => '对于别人对你的误解你会怎么办？',
				'answers' => array (
						array (
								'option' => '想尽办法向所有人解释，一定要让他们相信自己',
								'value' => '7' 
						),
						array (
								'option' => '会解释，但信不信就是他们的事了',
								'value' => '8' 
						) 
				) 
		),
		array (
				'question' => '你和你的恋人吵架了，你觉得他说出下面哪一句话最能成功挽留你，让你回头呢？',
				'answers' => array (
						array (
								'option' => '我爱你',
								'value' => '8' 
						),
						array (
								'option' => '不要走',
								'value' => '7' 
						) 
				) 
		),
		array (
				'question' => '在现在这个社会上，如果让你必须选择一种生活方式你会选择过什么样的生活呢？',
				'answers' => array (
						array (
								'option' => '物质生活',
								'value' => '8' 
						),
						array (
								'option' => '精神生活',
								'value' => '9' 
						) 
				) 
		),
		array (
				'question' => '过几天你就要过生日了，你希望朋友们送你一个什么口味的蛋糕呢？',
				'answers' => array (
						array (
								'option' => '巧克力口味的蛋糕',
								'value' => '10' 
						),
						array (
								'option' => '冰激凌口味的蛋糕',
								'value' => '9' 
						) 
				) 
		),
		array (
				'question' => '在公交车上有一伙歹徒正在抢劫，你会去做一个见义勇为、挺身而出的人吗？',
				'answers' => array (
						array (
								'option' => '会',
								'value' => '11' 
						),
						array (
								'option' => '不会，太危险了，还是趴着吧',
								'value' => '10' 
						) 
				) 
		),
		array (
				'question' => '一天一个美女忽然从你眼前的楼上掉下来，你认为她说了下面哪一句话最能雷倒你？',
				'answers' => array (
						array (
								'option' => '还好发型没乱',
								'value' => '11' 
						),
						array (
								'option' => '真快，以后就这样下楼了',
								'value' => '12' 
						) 
				) 
		),
		array (
				'question' => '洗完头后如果要用吹风机，你通常会把头发吹几成干呢？',
				'answers' => array (
						array (
								'option' => '把头发全部吹干',
								'value' => '12' 
						),
						array (
								'option' => '吹个半干',
								'value' => '13' 
						) 
				) 
		),
		array (
				'question' => '单位有一个异性同事给你发了几张图片，暗示想和你交往。你觉得他发的图片内容是？',
				'answers' => array (
						array (
								'option' => '一对很可爱的企鹅宝宝',
								'value' => '13' 
						),
						array (
								'option' => '一对很可爱的狗熊宝宝',
								'value' => '14' 
						) 
				) 
		),
		array (
				'question' => '如果你身上仅剩下有一百块钱，你愿意在恋人身上花多少呢？',
				'answers' => array (
						array (
								'option' => '全部',
								'value' => '14' 
						),
						array (
								'option' => '一半',
								'value' => '15' 
						) 
				) 
		),
		array (
				'question' => '你和恋人吃饭时，一下点餐点多了，你剩下了好多，你的另一半会吃你的剩饭吗？',
				'answers' => array (
						array (
								'option' => '吃',
								'value' => '15' 
						),
						array (
								'option' => '不吃',
								'value' => '16' 
						) 
				) 
		),
		array (
				'question' => '男人三十一枝花，女人三十豆腐渣，你认同这句话吗？',
				'answers' => array (
						array (
								'option' => '认同，女人确实比男人更显老',
								'value' => '16' 
						),
						array (
								'option' => '不认同，五十的女人也可以很年轻，关键看心态',
								'value' => '17' 
						) 
				) 
		),
		array (
				'question' => '情敌和曾经背叛你的人同时掉进河里，且他 (她) 们不会游泳，你会先救谁呢？',
				'answers' => array (
						array (
								'option' => '情敌',
								'value' => '17' 
						),
						array (
								'option' => '曾经背叛自己的人',
								'value' => '18' 
						) 
				) 
		),
		array (
				'question' => '假如你被卖到大山里面给别人当媳妇，你打算怎么逃跑出来？',
				'answers' => array (
						array (
								'option' => '除了抱着必死的决心纵火杀人，别无他法',
								'value' => '18' 
						),
						array (
								'option' => '给他们吃没腌透咸菜，没炒熟的扁豆，长芽的土豆大蒜头……他们病了要去医院，借口帮着联系医生跑出去',
								'return_value' => 'C' 
						) 
				) 
		),
		array (
				'question' => '拥挤的地铁里你觉得什么样的人最讨厌？',
				'answers' => array (
						array (
								'option' => '等车的时候不排队，车来了一拥而上',
								'return_value' => 'A' 
						),
						array (
								'option' => '车厢里面空得要死，但偏偏挤在门口',
								'value' => '19' 
						) 
				) 
		),
		array (
				'question' => '上帝允许你获得一样魔法，也必须让你在尘世间舍弃一样珍贵的物品，你会抛弃？',
				'answers' => array (
						array (
								'option' => '钱财',
								'return_value' => 'D' 
						),
						array (
								'option' => '荣耀',
								'return_value' => 'B' 
						) 
				) 
		) 
);

$optiondata = json_encode ( $questionAnswerList );
if (is_mobile ()) {
	require_once './../a_include/question_test_guide_mobile.php';
} else {
	require_once './../a_include/question_test_guide.php';
}
?>