<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'qszs';

if ($_REQUEST ['name']) {
	$nick = $_REQUEST ['name'];
	setcookie ( 'app_' . $app_name . '_name', $nick, time () + 3000, '/' );
} else {
	$nick = $_COOKIE ['app_' . $app_name . '_name'];
	setcookie ( 'app_' . $app_name . '_name', null, - 3000, '/' );
}
if (!islogined()) {
	header ( 'Location:./login.php?id=q&app=' . $app_name . '&act=view' );
	exit ();
}
if (! $nick) {
	header ( 'Location:./' );
	exit ();
}
check_appstatus ( $app_name );
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );
$num = str_to_num ( $nick, $app_name, - 3 );
$num = $num % 200;
if ($num < 100) {
	$m = md5 ( $nick . $app_name );
	$chars = str_split ( $m );
	$num_add_even = 0;
	foreach ( $chars as $char ) {
		$num_add_even = $num_add_even + ord ( $char );
	}
	$odd_even = (($num_add_even % 2) == 1);
	if ($odd_even) {
		$num = 0 - $num;
	}
}

$resultlist = array (
		'hundredless' => array (
				array (
						'img_path' => './imgs/hundredless/1.jpg',
						'text' => '狗挂铃铛跑得欢，该给你买个铃铛了！' 
				),
				array (
						'img_path' => './imgs/hundredless/2.jpg',
						'text' => '你很了不起么？不就是有动物保护协会撑！' 
				),
				array (
						'img_path' => './imgs/hundredless/3.jpg',
						'text' => '认识你真好，不用去动物园了！' 
				),
				array (
						'img_path' => './imgs/hundredless/4.jpg',
						'text' => '听说你傍大款了，认二郎神当主人了！' 
				),
				array (
						'img_path' => './imgs/hundredless/4.jpg',
						'text' => '你不能这样，缺狗粮才知道来找我！' 
				),
				array (
						'img_path' => './imgs/hundredless/5.jpg',
						'text' => '能认识自己是个什么东西，都是好样的！' 
				),
				array (
						'img_path' => './imgs/hundredless/6.jpg',
						'text' => '别说我很高傲，我只是拒绝与禽兽打交道！' 
				),
				array (
						'img_path' => './imgs/hundredless/7.jpg',
						'text' => '你脱掉衣服是禽兽，穿上衣服是衣冠禽兽！' 
				) 
		),
		'negative' => array (
				array (
						'img_path' => './imgs/negative/1.jpg',
						'text' => '进化不完全的生命体，基因突变的禽兽！' 
				),
				array (
						'img_path' => './imgs/negative/2.jpg',
						'text' => '说你“禽兽不如”，都是在侮辱禽兽了！' 
				),
				array (
						'img_path' => './imgs/negative/3.jpg',
						'text' => '不怕流氓有文化，就怕色狼有耐心！' 
				),
				array (
						'img_path' => './imgs/negative/4.jpg',
						'text' => '你还没进化完全，长的像人真难为你了！' 
				),
				array (
						'img_path' => './imgs/negative/5.jpg',
						'text' => '看来你的生物学定义要生物学家考察一番！' 
				),
				array (
						'img_path' => './imgs/negative/6.jpg',
						'text' => '看见你，终于相信人是种动物！' 
				),
				array (
						'img_path' => './imgs/negative/7.jpg',
						'text' => '拿你当人的时候，你尽量走人道好吗？' 
				),
				array (
						'img_path' => './imgs/negative/8.jpg',
						'text' => '果然喝假奶长大的！' 
				) 
		),
		'hundredabove' => array (
				array (
						'img_path' => './imgs/hundredabove/1.jpg',
						'text' => '我感觉你像两头猪，一头猪都不够形容你！' 
				),
				array (
						'img_path' => './imgs/hundredabove/2.jpg',
						'text' => '骂你一句衣冠禽兽，只怕污了畜类的天性！' 
				),
				array (
						'img_path' => './imgs/hundredabove/3.jpg',
						'text' => '猪狗形容你，人家禽兽不乐意！' 
				),
				array (
						'img_path' => './imgs/hundredabove/4.jpg',
						'text' => '没心没肺，你的体重应该会很轻吧？' 
				),
				array (
						'img_path' => './imgs/hundredabove/5.jpg',
						'text' => '春天都过了，你还在发春做什么！' 
				),
				array (
						'img_path' => './imgs/hundredabove/6.jpg',
						'text' => '披着狼皮的羊，带着面具的骗子！' 
				),
				array (
						'img_path' => './imgs/hundredabove/7.jpg',
						'text' => '说你像猪呢？那是侮辱了猪！' 
				),
				array (
						'img_path' => './imgs/hundredabove/8.jpg',
						'text' => '除了创造大粪，你还有什么追求？' 
				) 
		) 
);
$img_path = '';
$range = '';
$idx = 0;
if ($num <= 0) {
	$range = 'negative';
} else if ($num < 100) {
	$range = 'hundredless';
} else {
	$range = 'hundredabove';
}
$resultlist = $resultlist [$range];
$idx = abs ( $num ) % count ( $resultlist );
$result = $resultlist [$idx];
$left_px = 155 - 22*strlen(strval($num));
$img_path = $result ['img_path'];
$img = getImgType ( $img_path );
$img = createImg ( $img, $num, $left_px, 180, 13, 0, 60, 'f00', 'yahei' );

$content = 'omg！原来【' . $nick . '】的禽兽指数是【' . $num . '】，' . $result ['text'] . '敢不敢来测测你的禽兽指数？测试地址：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams [img] = $img;
$pagrams [type] = 'jpg';
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->测测你的禽兽指数有多高";
$pagrams [summary] = "测测你的禽兽指数有多高？测试地址：" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_title'] = '【禽兽指数：' . $num . '，' . $result ['text'] . '】';
$rt_info ['url'] = $url;

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
