<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'jiehun';

if ($_REQUEST ['nick']) {
	$nick = $_REQUEST ['nick'];
	setcookie ( 'app_' . $app_name . '_name', $nick, time () + 3000, '/' );
} else {
	$nick = $_COOKIE ['app_' . $app_name . '_name'];
	setcookie ( 'app_' . $app_name . '_name', null, - 3000, '/' );
}
if (!islogined()) {
	header ( 'Location:./login.php?id=q&app=' . $app_name . '&act=view' );
	exit ();
}
if (!$nick) {
	header ( 'Location:./' );
	exit ();
}
check_appstatus ( $app_name );
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );
$num = str_to_num ( $nick, $app_name );
$str = "";

$resultlist = array (
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/c96ae12d0383269dd55e/460',
				'picsina' => 'http://ww1.sinaimg.cn/bmiddle/67332ebfgw1ebef8m8c8lj208c08c0ti.jpg',
				'jieguo' => '19',
				'text' => '在这个最让人魂牵梦绕的年华去牵手吧',
				'img'=>'./imgs/result/19.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/399f7e260a116baf7e04/460',
				'picsina' => 'http://ww1.sinaimg.cn/bmiddle/67332ebfgw1ebef8u15dcj208c08cwf9.jpg',
				'jieguo' => '20',
				'text' => '这个年纪一切都很美妙，特别是爱情',
				'img'=>'./imgs/result/20.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/7b13fc11ba88d855207c/460',
				'picsina' => 'http://ww3.sinaimg.cn/bmiddle/67332ebfgw1ebef8unrykj208c08cgmd.jpg',
				'jieguo' => '21',
				'text' => '刚开始成熟，那些人碰到就是一辈子',
				'img'=>'./imgs/result/21.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/5da347aaef24da4b0fee/460',
				'picsina' => 'http://ww3.sinaimg.cn/bmiddle/67332ebfgw1ebef8v9r5kj208c08cgme.jpg',
				'jieguo' => '22',
				'text' => '这个年纪不用考虑的太多，一切很美好',
				'img'=>'./imgs/result/22.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/6dca003cef81971d2630/460',
				'picsina' => 'http://ww3.sinaimg.cn/bmiddle/67332ebfgw1ebef8vwjrsj208c08c752.jpg',
				'jieguo' => '23',
				'text' => '刚接触社会的年纪，对方还是初恋',
				'img'=>'./imgs/result/23.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/302098501a08072dd89c/460',
				'picsina' => 'http://ww3.sinaimg.cn/bmiddle/67332ebfgw1ebef8wjxerj208c08cmxy.jpg',
				'jieguo' => '24',
				'text' => '这个年龄结婚的最多，大概是最合适的',
				'img'=>'./imgs/result/24.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/1888829f6dec5cc8bb2c/460',
				'picsina' => 'http://ww1.sinaimg.cn/bmiddle/67332ebfgw1ebef8x5vzcj208c08c0ti.jpg',
				'jieguo' => '25',
				'text' => '据说在这个时间结婚最容易幸福',
				'img'=>'./imgs/result/25.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/bc3845d8c4a526c21bce/460',
				'picsina' => 'http://ww4.sinaimg.cn/bmiddle/67332ebfgw1ebef8xtqstj208c08cq3p.jpg',
				'jieguo' => '26',
				'text' => '打拼了几年累了吧，找个人结婚吧',
				'img'=>'./imgs/result/26.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/04a6e78b5a88df95cf1e/460',
				'picsina' => 'http://ww3.sinaimg.cn/bmiddle/67332ebfgw1ebef8yg9i9j208c08cgme.jpg',
				'jieguo' => '27',
				'text' => '你的身体和心理都处于最佳的准备状态',
				'img'=>'./imgs/result/27.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/35bf50ac6d46b4a5ab3e/460',
				'picsina' => 'http://ww3.sinaimg.cn/bmiddle/67332ebfgw1ebefet38e0j208c08cq3p.jpg',
				'jieguo' => '28',
				'text' => '爱情长跑了好几年，终于修成正果',
				'img'=>'./imgs/result/28.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/026f1a528765ffa66e96/460',
				'picsina' => 'http://ww4.sinaimg.cn/bmiddle/67332ebfgw1ebefet8y2sj208c08c0ti.jpg',
				'jieguo' => '29',
				'text' => '在正式奔三之前把终身大事解决了',
				'img'=>'./imgs/result/29.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/24e243929441c898dc44/460',
				'picsina' => 'http://ww1.sinaimg.cn/bmiddle/67332ebfgw1ebefeteznjj208c08c3za.jpg',
				'jieguo' => '30',
				'text' => '事业稳定，很适合组建幸福的家庭',
				'img'=>'./imgs/result/30.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/6c6ef44c118ba1387ba4/460',
				'picsina' => 'http://ww4.sinaimg.cn/bmiddle/67332ebfgw1ebefetkqg4j208c08cjs4.jpg',
				'jieguo' => '31',
				'text' => '这个年龄的婚姻会特别稳定',
				'img'=>'./imgs/result/31.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/f88a6d2c6e0e1e370d32/460',
				'picsina' => 'http://ww4.sinaimg.cn/bmiddle/67332ebfgw1ebefetpd0nj208c08cgmd.jpg',
				'jieguo' => '32',
				'text' => '这个时候是你各方面的上升期',
				'img'=>'./imgs/result/32.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/33cbfe6526bd6a583144/460',
				'picsina' => 'http://ww2.sinaimg.cn/bmiddle/67332ebfgw1ebefettv5nj208c08c3zb.jpg',
				'jieguo' => '33',
				'text' => '挑剔的眼光终于让你找到合适的结婚对象',
				'img'=>'./imgs/result/33.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/3640d8fead01f145d7aa/460',
				'picsina' => 'http://ww1.sinaimg.cn/bmiddle/67332ebfgw1ebefetzurij208c08caau.jpg',
				'jieguo' => '34',
				'text' => '之前一直都不太认真，一眨眼就这个年纪了',
				'img'=>'./imgs/result/34.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/90d73cf9ba1de25120bc/460',
				'picsina' => 'http://ww2.sinaimg.cn/bmiddle/67332ebfgw1ebefeu4cxxj208c08cq3q.jpg',
				'jieguo' => '35',
				'text' => '这个年纪你会静下心认真考虑结婚问题',
				'img'=>'./imgs/result/35.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/2485a5ecd0ff654c00f6/460',
				'picsina' => 'http://ww4.sinaimg.cn/bmiddle/67332ebfgw1ebefeua26rj208c08ct9f.jpg',
				'jieguo' => '38',
				'text' => '阅历丰富的少数派',
				'img'=>'./imgs/result/38.jpg'
		),
);
$num = $num % count ( $resultlist );
$result = $resultlist [$num];
if (! $result) {
	$result = $resultlist [array_rand ( $resultlist )];
}

$img=getImgType($result['img']);
$content = '就性格和运势而言，有的人适合早点结婚，有的人适合晚婚。经测试最适合【'.$nick.'】结婚的年龄是【'.$result['jieguo'].'岁，'.$result['text'].'】。快来看看你哪一岁最适合结婚吧！测试地址：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams ['pic'] = $result ['picsina'];
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->测测最适合你的结婚年龄";
$pagrams [summary] = "就性格和运势而言，有的人适合早点结婚，有的人适合晚婚。快来看看你哪一岁最适合结婚吧！测试地址：" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_title'] = '【' . $result ['jieguo'] . '岁】';
$rt_info ['url'] = $url;
$rt_info ['result_img'] = $result ['picsina'];

setcookie ( 'app_' . $app_name . '_name', NULL, - 3000, '/' );
$mmc = @memcache_init ();
$mmc->set ( 'app_result_' . $_COOKIE ['v_o_t_openid'], $rt_info, MEMCACHE_COMPRESSED, 1000 );

if (in_array($app_name, $app_today_list)) {
	if (is_mobile ()) {
		require_once './view_mobile.php';
	} else {
		require_once './view_web.php';
	}
} else {
	if (is_mobile ()) {
		require_once './../a_include/rt_mobile.php';
		//require_once './view_mobile.php';
	} else {
		require_once './../a_include/header.php';
		require_once './../a_include/rt_main.php';
		require_once './../a_include/footer.php';
	}
}
?>
