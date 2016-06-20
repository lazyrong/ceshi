<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'aqxl';
$score = '';
if ($_POST ['i1'] != '' && $_POST ['i15'] != '') {
	$score = 0;
	$i = 1;
	while ( $i <= 15 ) {
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
$infos = get_user_info ();
$name = $_COOKIE ['v_name'];
$nick = $_COOKIE ['v_nick'];
$url = $infos ['url'];
$nick_len = mb_strlen ( $nick, 'UTF8' );
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );
$str = "";

$finalScore = 0;
$nianji = '';
$img_path = './imgs/1.jpg';
if ($score <=23) {
	$finalScore = $score - 4;
	$img_path = './imgs/1.jpg';
	$nianji = '爱情青少年期';
	$jieguo = "你大概是爱情小说或连续剧的粉丝，过几年你会发现，现在的你，实在是太年轻、太容易感伤了！";
} else if ($score <= 36) {
	$finalScore = ceil(($score-22)/1.55) - 4;
	$img_path = './imgs/2.jpg';
	$nianji = '爱情青年期';
	$jieguo = "你还不够了解自己爱情的长相，还需要一点历练来使你的爱情发光~~";
} else if ($score <= 44) {
	$finalScore = $score - 6;
	$img_path = './imgs/3.jpg';
	$nianji = '爱情成熟期';
	$jieguo = "你开始有种老灵魂的感叹，自己可以把爱情的分寸拿捏得当，却无法像年轻时那么尽兴地相爱~";
} else {
	$finalScore = $score - 4;
	$img_path = './imgs/4.jpg';
	$nianji = '爱情沉淀期';
	$jieguo = "你很温柔地看待不同爱情阶段的人，并很温柔的陪伴和对待对方，爱上你和被你爱上都是浪漫的事~";
}

// $img_path='./imgs/result.png';
$img = getImgType ( $img_path );
// $img=createImg($img,$nick,108,155,12,0,16,'f00','yahei');
$img = createImg ( $img, $finalScore . '岁', 180, 335, 12, 0, 50, 'f37', 'yahei' );
// $img=createImg($img,$jieguo,90,265,11,0,20,'f00','yahei');

$content = 'AUV，我的爱情心理年龄是' . $finalScore . '岁，属于【'.$nianji.'】哟~~ /惊讶 知道彼此的爱情年龄，会让我们更懂得爱护彼此。推荐这个爱情心理年龄测试~ 测试地址：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams [img] = $img;
$pagrams [type] = 'jpg';
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->测测你的爱情心理年龄";
$pagrams [summary] = "知道彼此的爱情心理年龄，会让我们更懂得爱护彼此。想知道你的爱情心理年龄吗？那就快来测测吧~" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info['result_title'] =  '【'.$finalScore . '岁，属于'.$nianji.'】';

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
