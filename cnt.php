<?php 
$resultlist = array (
	array (
			'pic' => 'http://app.qpic.cn/mblogpic/976191f96cb2df11b318/460',
			'jieguo' => '为打败自己而活着',
	),
	array (
			'pic' => 'http://app.qpic.cn/mblogpic/cc55592e96880eb61ffe/460',
			'jieguo' => '为吃成一个胖子而活着',
	),
	array (
			'pic' => 'http://app.qpic.cn/mblogpic/28225ade008e436519f4/460',
			'jieguo' => '为梦想而活着',
	),
	array (
			'pic' => 'http://app.qpic.cn/mblogpic/0d32b2989eff8fb7962e/460',
			'jieguo' => '为爱情而活着',
	),
	array (
			'pic' => 'http://app.qpic.cn/mblogpic/39e8a22fece961774dfe/460',
			'jieguo' => '为不被看扁而活着',
	),
	array (
			'pic' => 'http://app.qpic.cn/mblogpic/4683a08480759e287cf0/460',
			'jieguo' => '为赖床而活着',
	),
	array (
			'pic' => 'http://app.qpic.cn/mblogpic/b8535a63ff5289a1aeb0/460',
			'jieguo' => '为使人类不绝种而活着',
	),
	array (
			'pic' => 'http://app.qpic.cn/mblogpic/42ebefbe69786b27e9f0/460',
			'jieguo' => '为明天那首不知名的歌而活着',
	),
	array (
			'pic' => 'http://app.qpic.cn/mblogpic/9657ddbe9f70179afbf2/460',
			'jieguo' => '为艺术而活着',
	),
	array (
			'pic' => 'http://app.qpic.cn/mblogpic/d33305f366af53ca7d10/460',
			'jieguo' => '为享受生活而活着',
	),
	array (
			'pic' => 'http://app.qpic.cn/mblogpic/758faa0dd1e0778ee59c/460',
			'jieguo' => '为努力工作而活着',
	),
	array (
			'pic' => 'http://app.qpic.cn/mblogpic/d3572f549c494b6b352e/460',
			'jieguo' => '为我女儿能成为富二代而活着',
	),
);
$sex = 2;
if ($sex == 2) {
	$resultlist[] = array(
			'pic'=>'http://app.qpic.cn/mblogpic/5d232f351dab6e857e32/460',
			'jieguo'=>"为快点长大嫁人而活着"
			);
	$resultlist[] = array(
			'pic'=>'http://app.qpic.cn/mblogpic/4ee5e694da3c4c9502f6/460',
			'jieguo'=>"为勾搭已婚男性而活着"
			);
	$resultlist[] = array(
			'pic'=>'http://app.qpic.cn/mblogpic/57360c53a93e5e73496a/460',
			'jieguo'=>"为拯救王子而活着"
			);
	$resultlist[] = array(
			'pic'=>'http://app.qpic.cn/mblogpic/ed8970d8b3f36d7f58b6/460',
			'jieguo'=>"为成为富婆而活着"
			);
} else {

	$resultlist[] = array(
			'pic'=>'http://app.qpic.cn/mblogpic/68e3c85e271640dba298/460',
			'jieguo'=>"为拯救单身女性而活着"
	);
	$resultlist[] = array(
			'pic'=>'http://app.qpic.cn/mblogpic/4197c7c21fb25c8d205e/460',
			'jieguo'=>"为成为五道杠而活着"
	);
	$resultlist[] = array(
			'pic'=>'http://app.qpic.cn/mblogpic/8bfcfa4733c83c5c2b02/460',
			'jieguo'=>"为拯救世界而活着"
	);
	$resultlist[] = array(
			'pic'=>'http://app.qpic.cn/mblogpic/ad47657419fbbc4f3990/460',
			'jieguo'=>"为解放全人类而活着"
	);
	$resultlist[] = array(
			'pic'=>'http://app.qpic.cn/mblogpic/31d2ad2539c8a78f6ab0/460',
			'jieguo'=>"为号令天下而活着"
	);
	$resultlist[] = array(
			'pic'=>'http://app.qpic.cn/mblogpic/11544b7838db6fedccb4/460',
			'jieguo'=>"为征服宇宙而活着"
	);
	$resultlist[] = array(
			'pic'=>'http://app.qpic.cn/mblogpic/2017b690e8efb10191e8/460',
			'jieguo'=>"为改善人类生活而活着"
	);
	$resultlist[] = array(
			'pic'=>'http://app.qpic.cn/mblogpic/1523d06e8c8c3f2921f6/460',
			'jieguo'=>"为泡妞而活着"
	);
}
$i = 1;
foreach ($resultlist as $result) {
	echo '<p>'.$i.'</p>';
	echo '<img src="'.$result['pic'].'"></br>';
	$i++;
}

?>