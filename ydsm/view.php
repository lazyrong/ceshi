<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'ydsm';

if (($_REQUEST ['score'])) {
	$score = $_REQUEST ['score'];
	setcookie ( 'app_' . $app_name . '_score', $score, time () + 3000, '/' );
} else {
	$score = $_COOKIE ['app_' . $app_name . '_score'];
	setcookie ( 'app_' . $app_name . '_score', null, - 3000, '/' );
}
if (!islogined()) {
	header ( 'Location:./login.php?id=q&app=' . $app_name . '&act=view' );
	exit ();
}
check_appstatus($app_name);

if (! $score) {
	header ( 'Location:./' );
	exit ();
}
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$num=str_to_num($nick,$app_name);
$resultlist = array (
		1 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/ee31aa293d5e0441b454/460',
				'jieguo' => '在喜欢的人面前出丑',
				'img' => './imgs/result/1.jpg'
		),
		2 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/a34eff2ddf515b18b3dc/460',
				'jieguo' => '遇到一个不喜欢的人纠缠ta',
				'img' => './imgs/result/2.jpg'
		),
		3 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/b8b75ddef0250afc508c/460',
				'jieguo' => '得到超多人的帮助',
				'img' => './imgs/result/3.jpg'
		),
		4 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/970af2c4d25989de6cb8/460',
				'jieguo' => '吃到很多好吃的，减肥之路艰辛',
				'img' => './imgs/result/4.jpg'
		),
		5 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/96ff0f1482d959fc3d44/460',
				'jieguo' => '一直窝在家里看肥皂剧',
				'img' => './imgs/result/5.jpg'
		),
		6 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/281a90d8994ab261bf06/460',
				'jieguo' => '无忧无虑，无欲无求，无灾无难',
				'img' => './imgs/result/6.jpg'
		),
		7 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/ece3709085506dd1fd80/460',
				'jieguo' => '结束单身',
				'img' => './imgs/result/7.jpg'
		),
		8 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/f25f7e287ed0ef17abd8/460',
				'jieguo' => '被某人气吐血',
				'img' => './imgs/result/8.jpg'
		),
		9 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/3bea8a3fb36bc7ab6314/460',
				'jieguo' => '一直处于放空状态',
				'img' => './imgs/result/9.jpg'
		),
);
// $num = $num % count($resultlist);
// $result = $resultlist [$num];
// if (! $result) {
// 	$result = $resultlist [array_rand ( $resultlist )];
// }
$result = $resultlist [array_rand ( $resultlist )];
if (strtolower($result_pic_pf) == 'sina') {
	$result ['pic'] = $result ['pic_sina']?$result ['pic_sina']:$result ['pic'];
}
$img = getImgType($result['img']);

$content = "OMG！【".$nick."】今年竟然会“".$result['jieguo']."”。你今年会遇到什么呢？快来测试吧！测试地址：" . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams ['pic'] = $result ['pic'];
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->今年你都会遇到些什么事";
$pagrams [summary] = "你今年会遇到什么呢？快来测测看吧！测试地址：" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['url'] = $url;
$rt_info ['result_img'] = $result ['pic'];
$rt_info ['result_title'] = '【'.$result ['jieguo'].'】';
setcookie ( 'app_' . $app_name . '_score', NULL, - 3000, '/' );
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
