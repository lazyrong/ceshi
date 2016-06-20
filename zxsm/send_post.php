<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);
$left_px=get_left_px($nick);
$left_px+=25;

$resultlist = array (
	array (
			'pic' => '',
			'jieguo' => '挖鼻屎',
	),
	array (
			'pic' => '',
			'jieguo' => '工资又涨了',
	),
	array (
			'pic' => '',
			'jieguo' => '吃喝玩乐',
	),
	array (
			'pic' => '',
			'jieguo' => '加工资',
	),
	array (
			'pic' => '',
			'jieguo' => '发财',
	),
	array (
			'pic' => '',
			'jieguo' => '鸭梨很大',
	),
	array (
			'pic' => '',
			'jieguo' => '钱包好瘦',
	),
	array (
			'pic' => '',
			'jieguo' => '维护和平',
	),
	array (
			'pic' => '',
			'jieguo' => '变成明星',
	),
	array (
			'pic' => '',
			'jieguo' => '不用上班',
	),
	array (
			'pic' => '',
			'jieguo' => '悠闲的生活',
	),
	array (
			'pic' => '',
			'jieguo' => '发呆',
	),
	array (
			'pic' => '',
			'jieguo' => '求食物',
	),
	array (
			'pic' => '',
			'jieguo' => '求艳遇',
	),
	array (
			'pic' => '',
			'jieguo' => 'TM又胖了',
	),
);
$sex = get_sex();
if ($sex == 2) {
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"Iphone4"
			);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"白马王子"
			);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"环游世界"
			);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"求包养"
			);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"隔壁大叔"
			);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"永远年轻"
			);
} else {

	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"集齐了苍老师全套"
	);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"猥琐的事"
	);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"与小月月OOXX"
	);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"艺术家"
	);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"上网泡MM"
	);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"邪恶的事"
	);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"何时下班"
	);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"奋斗"
	);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"裸奔"
	);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"恶作剧"
	);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"发奋图强"
	);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"花姑娘"
	);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"拯救地球"
	);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"吃喝嫖赌"
	);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"凤姐"
	);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"邻村寡妇"
	);
	$resultlist[] = array(
			'pic'=>'',
			'jieguo'=>"求出名"
	);
}
// $num = $num % count($resultlist);
// $result = $resultlist [$num];
// if (! $result) {
// 	$result = $resultlist [array_rand ( $resultlist )];
// }
$result = $resultlist [array_rand ( $resultlist )];
$content='/偷笑 OMG，此刻'.$name.'竟然在想这些。。。#测测你在想什么#太好玩了 ！只要输入你的名字，就能立刻分析出你在想什么哦！赶快来试一下吧~~~测试地址：'.$url;
$pagrams = array();
$pagrams['content'] = $content;
$pagrams['pic'] = $result['pic'];
//@账号内容会过多
$pagrams['url'] = $url;
$pagrams['title'] = "点击测试->你在想什么";
$pagrams[summary] = "这是心理学家浅野八郎设计的小测验，通过一些日常生活中的行为，就可以看出一个人的个性。 想知道你在想什么吗？快来测测吧：".$pagrams[url];
$rt_info=post_send2($pagrams);

$rt_info['result_img'] = $result['pic'];
$rt_info['result_title'] = '【'.$result['jieguo'].'】';