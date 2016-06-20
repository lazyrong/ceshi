<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='lglp';
reset_appstatus($app_name);
$questionAnswerList = null;
if ($_REQUEST['who'] == 'lg' || $_REQUEST['who'] == 'bf') {
$questionAnswerList = array(
	array('question'=>'他的身高是多少？',
			'answers'=>array(
					array('option'=>'A、低于160cm', 'value'=>'-20' ),
					array('option'=>'B、160-170cm', 'value'=>'-10' ),
					array('option'=>'C、170-180cm', 'value'=>'0' ),
					array('option'=>'D、180-190cm', 'value'=>'10' ),
					array('option'=>'E、超过190cm', 'value'=>'20' ),
			)
	),
	array('question'=>'他的年龄？',
			'answers'=>array(
					array('option'=>'A、小于20岁', 'value'=>'0' ),
					array('option'=>'B、20-25岁', 'value'=>'10' ),
					array('option'=>'C、26-30岁', 'value'=>'0' ),
					array('option'=>'D、大于30岁', 'value'=>'-10' ),
			)
	),
	array('question'=>'是否会打篮球？',
			'answers'=>array(
					array('option'=>'A、会打', 'value'=>'10' ),
					array('option'=>'B、不会打', 'value'=>'0' ),
			)
	),
	array('question'=>'是否会游泳？',
			'answers'=>array(
					array('option'=>'A、会', 'value'=>'10' ),
					array('option'=>'B、不会', 'value'=>'0' ),
			)
	),
	array('question'=>'是否会斗地主？',
			'answers'=>array(
					array('option'=>'A、会', 'value'=>'10' ),
					array('option'=>'B、不会', 'value'=>'0' ),
			)
	),
	array('question'=>'他的体重？',
			'answers'=>array(
					array('option'=>'A、不足50公斤', 'value'=>'-20' ),
					array('option'=>'B、50-60公斤', 'value'=>'-10' ),
					array('option'=>'C、60-75公斤', 'value'=>'10' ),
					array('option'=>'D、75-85公斤', 'value'=>'-10' ),
					array('option'=>'E、超过85公斤', 'value'=>'-20' ),
			)
	),	
	array('question'=>'他的近视程度？',
			'answers'=>array(
					array('option'=>'A、不近视', 'value'=>'20' ),
					array('option'=>'B、戴隐形眼镜', 'value'=>'-20' ),
					array('option'=>'C、近视小于300度', 'value'=>'10' ),
					array('option'=>'D、300-500度', 'value'=>'-10' ),
					array('option'=>'E、500-700度', 'value'=>'-20' ),
					array('option'=>'F、大于700度', 'value'=>'-30' ),
			)
	),	
	array('question'=>'是否谈过恋爱？',
			'answers'=>array(
					array('option'=>'A、没谈过', 'value'=>'10' ),
					array('option'=>'B、唯一的一次恋爱进行中', 'value'=>'10' ),
					array('option'=>'C、被甩一次', 'value'=>'10' ),
					array('option'=>'D、甩别人一次', 'value'=>'-10' ),
					array('option'=>'E、被甩过n次', 'value'=>'20' ),
					array('option'=>'F、甩过别人n次', 'value'=>'-20' ),
			)
	),	
	array('question'=>'他更重视朋友还是更重视你？',
			'answers'=>array(
					array('option'=>'A、朋友更重要', 'value'=>'10' ),
					array('option'=>'B、女人更重要', 'value'=>'0' ),
			)
	),	
	array('question'=>'他什么地方最吸引人？',
			'answers'=>array(
					array('option'=>'A、脸蛋', 'value'=>'-10' ),
					array('option'=>'B、身材', 'value'=>'10' ),
					array('option'=>'C、气质', 'value'=>'20' ),
					array('option'=>'D、其它', 'value'=>'0' ),
			)
	),	
	array('question'=>'是否会开车？',
			'answers'=>array(
					array('option'=>'A、会', 'value'=>'10' ),
					array('option'=>'B、不会', 'value'=>'0' ),
			)
	),	
	array('question'=>'他的英语水平？',
			'answers'=>array(
					array('option'=>'A、没过四级', 'value'=>'-10' ),
					array('option'=>'B、过了四级', 'value'=>'0' ),
					array('option'=>'C、过了六级', 'value'=>'10' ),
			)
	),	
	array('question'=>'他的歌声',
			'answers'=>array(
					array('option'=>'A、五音不全', 'value'=>'-20' ),
					array('option'=>'B、唱得不错', 'value'=>'0' ),
					array('option'=>'C、专业水平', 'value'=>'20' ),
			)
	),	
	array('question'=>'是否会溜冰？',
			'answers'=>array(
					array('option'=>'A、会', 'value'=>'0' ),
					array('option'=>'B、不会', 'value'=>'-20' ),
			)
	),	
	array('question'=>'是否会打麻将？',
			'answers'=>array(
					array('option'=>'A、会', 'value'=>'0' ),
					array('option'=>'B、不会', 'value'=>'10' ),
			)
	),	
	array('question'=>'是否会喝酒？',
			'answers'=>array(
					array('option'=>'A、不会喝酒', 'value'=>'-10' ),
					array('option'=>'B、喝的很强', 'value'=>'10' ),
					array('option'=>'C、一般般', 'value'=>'0' ),
			)
	),	
	array('question'=>'是否会做饭？',
			'answers'=>array(
					array('option'=>'A、会', 'value'=>'10' ),
					array('option'=>'B、不会', 'value'=>'0' ),
			)
	),	
	array('question'=>'是否喜欢养宠物？',
			'answers'=>array(
					array('option'=>'A、喜欢', 'value'=>'10' ),
					array('option'=>'B、不喜欢', 'value'=>'0' ),
			)
	),	
	array('question'=>'是否喜欢玩游戏？',
			'answers'=>array(
					array('option'=>'A、喜欢', 'value'=>'0' ),
					array('option'=>'B、不喜欢', 'value'=>'10' ),
			)
	),	
	array('question'=>'是否喜欢吃大蒜？',
			'answers'=>array(
					array('option'=>'A、喜欢', 'value'=>'-10' ),
					array('option'=>'B、不喜欢', 'value'=>'0' ),
			)
	),	
);
} else {
	$questionAnswerList = array(
		array('question'=>'她的身高是多少？',
				'answers'=>array(
						array('option'=>'A、低于155cm', 'value'=>'-20' ),
						array('option'=>'B、155-165cm', 'value'=>'0' ),
						array('option'=>'C、165-175cm', 'value'=>'20' ),
						array('option'=>'D、超过175cm', 'value'=>'-10' ),
				)
		),
		array('question'=>'是否会织毛衣？',
				'answers'=>array(
						array('option'=>'A、会', 'value'=>'20' ),
						array('option'=>'B、不会', 'value'=>'0' ),
				)
		),
		array('question'=>'是否喜欢操持家务？',
				'answers'=>array(
						array('option'=>'A、喜欢', 'value'=>'10' ),
						array('option'=>'B、不喜欢', 'value'=>'0' ),
				)
		),
		array('question'=>'是否会使用电熨斗？',
				'answers'=>array(
						array('option'=>'A、会使用', 'value'=>'0' ),
						array('option'=>'B、不会使用', 'value'=>'-10' ),
				)
		),
		array('question'=>'是否喜欢泡KTV？',
				'answers'=>array(
						array('option'=>'A、喜欢', 'value'=>'-20' ),
						array('option'=>'B、不喜欢', 'value'=>'0' ),
				)
		),
		array('question'=>'她的体重？',
				'answers'=>array(
						array('option'=>'A、不足85斤', 'value'=>'-20' ),
						array('option'=>'B、85-90斤', 'value'=>'20' ),
						array('option'=>'C、90-100斤', 'value'=>'10' ),
						array('option'=>'D、100-120斤', 'value'=>'0' ),
						array('option'=>'E、超过120斤', 'value'=>'-50' ),
				)
		),
		array('question'=>'她是否戴眼镜，近视程度怎么样？',
				'answers'=>array(
						array('option'=>'A、不近视', 'value'=>'20' ),
						array('option'=>'B、戴隐形眼镜', 'value'=>'-20' ),
						array('option'=>'C、近视小于300度', 'value'=>'10' ),
						array('option'=>'D、300-500度', 'value'=>'-10' ),
						array('option'=>'E、500-700度', 'value'=>'-20' ),
						array('option'=>'F、大于700度', 'value'=>'-30' ),
				)
		),
		array('question'=>'她的恋爱经历？',
				'answers'=>array(
						array('option'=>'A、没谈过', 'value'=>'20' ),
						array('option'=>'B、唯一的一次恋爱进行中', 'value'=>'10' ),
						array('option'=>'C、被甩一次', 'value'=>'-20' ),
						array('option'=>'D、甩别人一次', 'value'=>'20' ),
						array('option'=>'E、被甩过n次', 'value'=>'-50' ),
						array('option'=>'F、甩过别人n次', 'value'=>'-50' ),
				)
		),
		array('question'=>'她的年龄？',
				'answers'=>array(
						array('option'=>'A、小于20岁', 'value'=>'0' ),
						array('option'=>'B、20-25岁', 'value'=>'10' ),
						array('option'=>'C、26-30岁', 'value'=>'0' ),
						array('option'=>'D、大于30岁', 'value'=>'-10' ),
				)
		),
		array('question'=>'是否做过文秘？',
				'answers'=>array(
						array('option'=>'A、做过', 'value'=>'0' ),
						array('option'=>'B、没做过', 'value'=>'20' ),
				)
		),
		array('question'=>'是否会开车？',
				'answers'=>array(
						array('option'=>'A、会开', 'value'=>'10' ),
						array('option'=>'B、不会开', 'value'=>'0' ),
				)
		),
		array('question'=>'她的英语水平？',
				'answers'=>array(
						array('option'=>'A、没过四级', 'value'=>'-10' ),
						array('option'=>'B、过了四级', 'value'=>'20' ),
						array('option'=>'C、过了六级', 'value'=>'10' ),
				)
		),
		array('question'=>'她的歌声',
				'answers'=>array(
						array('option'=>'A、五音不全', 'value'=>'-30' ),
						array('option'=>'B、唱得不错', 'value'=>'0' ),
						array('option'=>'C、专业水平', 'value'=>'30' ),
				)
		),
		array('question'=>'是否喜欢养宠物？',
				'answers'=>array(
						array('option'=>'A、喜欢', 'value'=>'10' ),
						array('option'=>'B、不喜欢', 'value'=>'0' ),
				)
		),
		array('question'=>'是否会打麻将？',
				'answers'=>array(
						array('option'=>'A、会', 'value'=>'-20' ),
						array('option'=>'B、不会', 'value'=>'0' ),
				)
		),
		array('question'=>'是否会喝酒？',
				'answers'=>array(
						array('option'=>'A、不会喝酒', 'value'=>'10' ),
						array('option'=>'B、喝的很强', 'value'=>'-30' ),
						array('option'=>'C、一般般', 'value'=>'0' ),
				)
		),
		array('question'=>'三围是否标准？（36-24-36）',
				'answers'=>array(
						array('option'=>'A、绝对标准', 'value'=>'20' ),
						array('option'=>'B、还可以', 'value'=>'10' ),
						array('option'=>'C、有点差距', 'value'=>'-20' ),
						array('option'=>'D、水桶', 'value'=>'-30' ),
				)
		),
		array('question'=>'她的小姐妹对你是否恭维有加？',
				'answers'=>array(
						array('option'=>'A、是', 'value'=>'20' ),
						array('option'=>'B、否', 'value'=>'-20' ),
				)
		),
		array('question'=>'当你与朋友高谈阔论时，她是否保持沉默？',
				'answers'=>array(
						array('option'=>'A、是', 'value'=>'20' ),
						array('option'=>'B、否', 'value'=>'-20' ),
				)
		),
		array('question'=>'是否喜欢唠叨？',
				'answers'=>array(
						array('option'=>'A、不喜欢', 'value'=>'0' ),
						array('option'=>'B、喜欢', 'value'=>'-50' ),
						array('option'=>'C、有一点', 'value'=>'-20' ),
				)
		),
	);
}

setcookie('app_'.$app_name.'_who',$_REQUEST['who'], time()+3000, '/');
if (is_mobile()) {
	require_once '../a_include/question_test_mobile.php';
} else {
	if ($_REQUEST['who'] == 'lg' || $_REQUEST['who'] == 'bf') {
		require_once './test_lg_web.php';
	} else {
		require_once './test_lp_web.php';
	}
}
?>