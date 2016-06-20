<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'fydb';
$score = '';
if ($_POST ['i1'] != '' && $_POST ['i20'] != '') {
	$score = 0;
	$i = 1;
	while ( $i <= 20 ) {
		$score = $score + $_POST ['i' . $i];
		$i ++;
	}
	setcookie ( 'app_' . $app_name . '_score', $score, time () + 3000, '/' );
} else {
	$score = $_COOKIE ['app_' . $app_name . '_score'];
}
if (!islogined()) {
	header ( 'Location:./login.php?id=q&app=' . $app_name . '&act=view' );
	exit ();
}
if (strlen($score) == 0 || ! is_numeric ( $score )) {
	header ( 'Location:./' );
	exit ();
}
check_appstatus ( $app_name );
$nick = $_COOKIE ['v_nick'];

$url = 'http://' . $_SERVER ['HTTP_HOST'] . '/fangyan.php';
$str = "";

if ($score >= 0 && $score <= 20) {
	$jieguo = "完全不懂大家在说啥～好囧啊！";
}

if ($score > 20 && $score <= 40) {
	$jieguo = "你的东北话貌似还欠点火候，再学习学习吧～";
}

if ($score > 40 && $score <= 60) {
	$jieguo = "到东北有几年了吧～有些东北味喽～哈哈哈～";
}

if ($score > 60 && $score <= 80) {
	$jieguo = "你的东北话很不错，可以自由行走东北了～～";
}
if ($score > 80 && $score <= 100) {
	$jieguo = "你是东北本地人吧～！完全难不倒你啊～膜拜下～";
}

$score = '' . $score . '分';

$img_path = './imgs/result.png';
$img = getImgType ( $img_path );
$img = createImg ( $img, $nick, 108, 155, 12, 0, 16, 'f00', 'yahei' );
$img = createImg ( $img, $score, 170, 220, 12, 0, 50, 'f00', 'yahei' );
$img = createImg ( $img, $jieguo, 90, 265, 11, 0, 20, 'f00', 'yahei' );

$content = '我刚在《疯狂方言测试》参加了东北方言八级水平考试并取得了' . $score . '的成绩，得到评价：' . $jieguo . ' 会讲英语算神马~会讲韩语是浮云~会讲日语鄙视你！有本事讲讲东北话！点击测试为普及东北话献出一份力量！  测试地址：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams [img] = $img;
$pagrams [type] = 'png';
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->东北方言八级水平考试";
$pagrams [summary] = "东北方言八级水平考试，回答20道题，就能测出你的东北方言地道不地道~" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );

$rt_info ['url'] = $url;
$rt_info ['back_url'] = 'fangyan.php';
$rt_info['result_title'] =  '【'.$score.'】';

setcookie ( 'app_' . $app_name . '_score', NULL, - 3000, '/' );
// $mmc=@memcache_init();
// $mmc->set('app_result_'.$_COOKIE
// ['v_o_t_openid'],$rt_info,MEMCACHE_COMPRESSED,1000);
// header('Location:../result.php');
// exit;
// } else {
if (is_mobile ()) {
	require_once './../a_include/rt_mobile.php';
} else {
	require_once './../a_include/header.php';
	require_once './../a_include/rt_main.php';
	require_once './../a_include/footer.php';
}
?>
