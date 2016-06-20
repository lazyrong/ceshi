<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'mszs';
$score = '';
if ($_POST ['i1'] != '') {
	$score = $_POST ['i1'];
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
check_appstatus($app_name);
$infos = get_user_info ();
$name = $_COOKIE ['v_name'];
$nick = $_COOKIE ['v_nick'];
$url = $infos ['url'];
$nick_len = mb_strlen ( $nick, 'UTF8' );
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );
$num = str_to_num ( $nick, $app_name );
$str = "";

$finalScore = 0;
$img_path = './imgs/1.jpg';
if ($score == 1) {
	$finalScore = ($num % 20) + 30;
	$img_path = './imgs/1.jpg';
	$jieguo = "你平常都正经八百，只有在喝醉酒时，才会忍不住展现你的骚劲，把埋藏在心里已久的骚劲表露无疑，让身边的人大吃一惊。";
}

if ($score == 2) {
	$finalScore = ($num % 15) + 70;
	$img_path = './imgs/2.jpg';
	$jieguo = "你会在陌生人面前装乖，一副知书达礼的态度，但只要混熟就会乱发骚，甚至各种破坏形象的搞笑动作都无所谓。";
}

if ($score == 3) {
	$finalScore = ($num % 20) + 50;
	$img_path = './imgs/3.jpg';
	$jieguo = "你平常正直古板，在朋友前有很好的形象，只有在情人面前才会发骚，把内心最不为人知的一面表现出来，例如撒娇、小鸟依人状。";
}

if ($score == 4) {
	$finalScore = $num % 30;
	$img_path = './imgs/4.jpg';
	$jieguo = "你是表里如一的人，要发骚也是明着发骚。私底下和平日没有什么不同，即使发骚也是明着来不会去掩饰，个性自然大方。";
}
if ($score == 5) {
	$finalScore = ($num % 15) + 85;
	$img_path = './imgs/5.jpg';
	$jieguo = "你看起来正经得不行，但其实无时无刻都在暗自发骚。表面上看起来很拘谨有礼，其实骨子里骚到不行，只要找到机会就想办法发骚。";
}

// $img_path='./imgs/result.png';
$img = getImgType ( $img_path );
// $img=createImg($img,$nick,108,155,12,0,16,'f00','yahei');
$img = createImg ( $img, $finalScore . '%', 430, 305, 12, 0, 50, 'fff', 'yahei' );
// $img=createImg($img,$jieguo,90,265,11,0,20,'f00','yahei');

$content = '通过测试，我的闷骚指数是' . $finalScore . '~~ 得到评价：' . $jieguo . '你的闷骚指数究竟有多高，来做完这个测试看看吧~ 测试地址：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams [img] = $img;
$pagrams [type] = 'jpg';
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->你的闷骚指数究竟有多高？";
$pagrams [summary] = "其实有很多人外在形象跟内在形象差很多，想知道你的闷骚指数到底有多高吗？那就快来测测吧~" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info['result_title'] =  '【'.$finalScore.'】';
$rt_info ['result_remark'] = '<p style="color:red;">'.$jieguo.'</p>';
$rt_info ['url'] = $url;

setcookie ( 'app_' . $app_name . '_score', NULL, - 3000, '/' );
if (is_mobile ()) {
	require_once './../a_include/rt_mobile.php';
} else {
	require_once './../a_include/header.php';
	require_once './../a_include/rt_main.php';
	require_once './../a_include/footer.php';
}
?>
