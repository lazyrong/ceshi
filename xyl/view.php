<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'xyl';

if ($_REQUEST ['name'] && $_REQUEST ['year'] && $_REQUEST ['month'] && $_REQUEST ['day']) {
	$name = $_REQUEST ['name'];
	$year = $_REQUEST ['year'];
	$month = $_REQUEST ['month'];
	$day = $_REQUEST ['day'];
	$birthday = $year.$month.$day;
	setcookie ( 'app_' . $app_name . '_name', $name, time () + 3000, '/' );
	setcookie ( 'app_' . $app_name . '_birthday', $birthday, time () + 3000, '/' );
} else {
	$name = $_COOKIE ['app_' . $app_name . '_name'];
	$birthday = $_COOKIE ['app_' . $app_name . '_birthday'];
	setcookie ( 'app_' . $app_name . '_name', null, - 3000, '/' );
	setcookie ( 'app_' . $app_name . '_birthday', null, - 3000, '/' );

}
if (!islogined()) {
	header ( 'Location:./login.php?id=q&app=' . $app_name . '&act=view' );
	exit ();
}
if (! $name || ! $birthday) {
	header ( 'Location:./' );
	exit ();
}
check_appstatus ( $app_name );
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );
// $url = $url.'index.php?id='.rand(1, 100);
$num = str_to_num ( $name.$birthday, $app_name );
$randnum = rand(1, 12);
if ($randnum == 10) {
	$num = - $num;
}

$jieguo = "";
$img_path = "";
if ($num < 1) {
	$jieguo = "这辈子你跟异性无缘，还是试试同性吧！";
	$img_path = "./imgs/result/1.jpg";
} else if ($num < 30) {
	$jieguo = "哦呜！哪里出问题了？";
	$img_path = "./imgs/result/2.jpg";
} else if ($num < 60) {
	$jieguo = "很容易陷入爱情的陷阱。";
	$img_path = "./imgs/result/3.jpg";
} else if ($num < 80) {
	$jieguo = "在“闺蜜”和“爱人”之间徘徊。";
	$img_path = "./imgs/result/4.jpg";
} else if ($num < 90) {
	$jieguo = "再傲娇的Ta也无法无视你。";
	$img_path = "./imgs/result/5.jpg";
} else {
	$jieguo = "就算是其他不明生物也能吸引哦！";
	$img_path = "./imgs/result/6.jpg";
}

$img=getImgType($img_path);
$img=createImg($img,$num.'分',20,100,13,0,60,'A7253D','katong');
$content = '哇哦~【'.$name.'】对异性的吸引力是【'.$num.'】分哦：'.$jieguo.'你的异性缘怎样呢？快来测测吧！测试地址：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->测测你的异性吸引力";
$pagrams [summary] = "你的异性缘怎样呢？快来测测吧！测试地址：" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );

setcookie ( 'app_' . $app_name . '_name', NULL, - 3000, '/' );
setcookie ( 'app_' . $app_name . '_sex', NULL, - 3000, '/' );

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
