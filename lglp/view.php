<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'lglp';
if (isset($_REQUEST['i1']) && isset($_REQUEST['i20'])) {
	$score = 0;
	$i = 1;
	while ( $i <= 20 ) {
		$score = $score + $_POST ['i' . $i];
		$i ++;
	}
	setcookie ( 'app_' . $app_name . '_score', $score, time () + 3000, '/' );
} else if (isset($_REQUEST ['score'])) {
	$score = $_REQUEST ['score'];
	setcookie ( 'app_' . $app_name . '_score', $score, time () + 3000, '/' );
} else {
	$score = $_COOKIE ['app_' . $app_name . '_score'];
}
$who = $_REQUEST ['who'];
if ($who) {
	setcookie ( 'app_' . $app_name . '_who', $who, time () + 3000, '/' );
} else {
	$who = $_COOKIE ['app_' . $app_name . '_who'];
}
if (!islogined()) {
	header ( 'Location:./login.php?id=q&app=' . $app_name . '&act=view' );
	exit ();
}
check_appstatus($app_name);

if (strlen(strval($score)) == 0 || strlen(strval($who)) == 0) {
	header ( 'Location:./' );
	exit ();
}
setcookie ( 'app_' . $app_name . '_score', null, - 3000, '/' );
setcookie ( 'app_' . $app_name . '_who', null, - 3000, '/' );

$nick = $_COOKIE['v_nick'];
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );
$num = str_to_num ( $nick, $app_name );

if ($who == 'lg') {
	$who = '老公';
} else if ($who == 'bf') {
	$who = '男朋友';
} else if ($who == 'lp') {
	$who = '媳妇儿';
} else if ($who == 'gf') {
	$who = '女朋友';
}
if ($score < 0) {
	$score = 0 - pow(abs($score), 2);
} else {
	$score = ceil(pow($score/2, 2)*($score/10));
}
$score = $score + $num;
$stsstr = '起码是正的，比负的强！';
$img_path = '';
if ($score < 0) {
	$stsstr = 'I服了U，居然是负的！';
	$img_path = './imgs/2.jpg';
} else if ($score < 10000) {
	$stsstr = '起码是正的，比负的强！';
	$img_path = './imgs/1.jpg';
} else if ($score < 25000) {
	$stsstr = '还不错，值点小钱了！';
	$img_path = './imgs/3.jpg';
} else if ($score < 50000) {
	$stsstr = '数字证明我的价值！';
	$img_path = './imgs/5.jpg';
} else if ($score < 100000) {
	$stsstr = '2013年我涨了，真的涨了！';
	$img_path = './imgs/7.jpg';
} else if ($score < 200000) {
	$stsstr = '天价啊，把自己买了就发了！';
	$img_path = './imgs/4.jpg';
} else {
	$stsstr = '哇，这得多少钱一斤啊！';
	$img_path = './imgs/6.jpg';
}

$left_px = 80;
$str_len = 7 - strlen(strval($score));
$left_px = $left_px + $str_len * 12;

$img=getImgType($img_path);
$img=createImg($img,'@'.$nick.'的'.$who,38,68,12,0,20,'790');
$img=createImg($img,$score,$left_px,125,13,0,50,'f90','katong');
$content = 'omg，原来'.$nick.'的'.$who.'值这么多钱，以后没钱的时候狠狠心就把'.$who.'给卖了！ /呲牙  快来算算你的'.$who.'值多少钱吧！测试地址：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->算算你老公/媳妇值多少钱？";
$pagrams [summary] = "想知道你的媳妇or老公值多少钱么？如果TA会做饭，如果TA还会游泳，那可是值很多钱的哦。快来测试一下吧，简单有趣的测试迅速计算出TA的真实价值。测试地址：" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['url'] = $url;
$rt_info ['result_title'] = '【'.$score.'元，'.$stsstr.'】';
setcookie ( 'app_' . $app_name . '_name', NULL, - 3000, '/' );
$mmc = @memcache_init ();
$mmc->set ( 'app_result_' . $_COOKIE ['v_o_t_openid'], $rt_info, MEMCACHE_COMPRESSED, 1000 );

if (is_mobile ()) {
	require_once './../a_include/rt_mobile.php';
} else {
	require_once './../a_include/header.php';
	require_once './../a_include/rt_main.php';
	require_once './../a_include/footer.php';
}
?>
