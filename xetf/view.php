<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'xetf';
$score = $_REQUEST ['score'];
if ($score) {
	setcookie ( 'app_' . $app_name . '_score', $score, time () + 3000, '/' );
} else {
	$score = $_COOKIE ['app_' . $app_name . '_score'];
}
if (!islogined()) {
	header ( 'Location:./login.php?id=q&app=' . $app_name . '&act=view' );
	exit ();
}
if (strlen ( $score ) == 0) {
	header ( 'Location:./' );
	exit ();
}
check_appstatus ( $app_name );
$nick = $_COOKIE ['v_nick'];

$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );

$result_list = array (
		'A' => array (
				'pic' => 'http://app.qpic.cn/mblogpic/583320d1b829221f2ec6/2000',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebeypvabl2j20a007iaa8.jpg',
				'level' => '★☆☆☆☆',
				'remark' => '你实在是没有什么邪恶的天赋，从小到大，被人整的总是你。小的时候每当你流着眼泪擦着鼻涕又一次哭着回家，向妈妈告状某某某又欺负你了的时候，妈妈给你出了无数招，每一招都足以给对手致命一击，可惜你就是那么不争气，每次还是以同一面目回家。',
				'info' => '你实在是没有什么邪恶的天赋，从小到大，被人整的总是你。' ,
				'img' => './imgs/1.png'
		),
		'B' => array (
				'pic' => 'http://app.qpic.cn/mblogpic/dfaca99b0a40321201b8/2000',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebeyq1gaf8j20a007iq33.jpg',
				'level' => '★★★★★',
				'remark' => '你的邪恶天赋藏的很深很深哦，它就像是一把藏在你心中的剑，不到万不得已，你不会轻易使用它们。这种天赋是娘胎里面带出来的，可能连你自己都不会轻易察觉出来。你邪恶的天赋一旦激发出来，你就会变得心思缜密步步为营，毫不留情地除掉敌人……',
				'info' => '你的邪恶天赋藏的很深很深哦，它就像是一把藏在你心中的剑，不到万不得已，你不会轻易使用它们。' ,
				'img' => './imgs/5.png'
		),
		'C' => array (
				'pic' => 'http://app.qpic.cn/mblogpic/0c5a21228ed06e0251ae/2000',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebeypw2sipj20a007i3yo.jpg',
				'level' => '★★☆☆☆',
				'remark' => '整蛊、搞怪你是最拿手的了，在整个愚人节的把戏大汇演中，除非你不出手，否则第一名总是非你莫属哦。在一般情况下，你是一个与人为善的人，不喜欢到处作恶，不会利用你的天赋做出一些让自己不齿的事情；你也不愿意去伤害别人。',
				'info' => '整蛊、搞怪你是最拿手的了，在整个愚人节的把戏大汇演中，除非你不出手，否则第一名总是非你莫属哦。' ,
				'img' => './imgs/2.png'
		),
		'D' => array (
				'pic' => 'http://app.qpic.cn/mblogpic/7a35ca9ba46bcf5115a0/2000',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebeypyv1j0j20a007i0sw.jpg',
				'level' => '★★★☆☆',
				'remark' => '你的妒忌心很强，这一点在岗位竞争或者考试排名上表现的很明显。一旦某某某排到了你的前面，而你又认为他不如你，就会怀疑他之所以能上位肯定是用了什么见不得人的办法。对付阴险的小人当然也要用阴险的招数了，暗中调查、写匿名检举信等都是可以成功把对方拉下水的不二选择。',
				'info' => '你的妒忌心很强，这一点在岗位竞争或者考试排名上表现的很明显。' ,
				'img' => './imgs/3.png'
		) 
);
$result = $result_list [strtoupper ( $score )];
if (! $result) {
	$result = $result_list [array_rand ( $result_list )];
}
if (strtolower($result_pic_pf) == 'sina') {
	$result ['pic'] = $result ['pic_sina']?$result ['pic_sina']:$result ['pic'];
}
$img=getImgType($result['img']);

$content = '哇塞，我的邪恶天分是【' . $result ['level'] . '】' . $result ['info'] . ' /惊讶 这是神马神器！！搞怪的同时。。居然准了有木有！【你的邪恶天分有多少】？你也试试吧！ 测试地址：' . $url;

$pagrams = array ();
$pagrams ['content'] = $content;
$pagrams ['pic'] = $result ['pic'];
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams ['url'] = $url;
$pagrams ['title'] = "点击测试->你的邪恶天分有多少？";
$pagrams ['summary'] = "你的邪恶天分有多少？测试地址：" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );

$rt_info ['result_title'] = '【' . $result ['level'] . '】';
$rt_info ['result_remark'] = '<p style="text-align:center;">' . $result ['remark'] . '</p>';
$rt_info ['result_pic'] = $result ['pic'];

setcookie ( 'app_' . $app_name . '_score', NULL, - 3000, '/' );
if (is_mobile ()) {
	require_once './../a_include/rt_mobile.php';
} else {
	require_once './../a_include/header.php';
	require_once './../a_include/rt_main.php';
	require_once './../a_include/footer.php';
}
?>
