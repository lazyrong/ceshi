<?
$infos = get_user_info ();
$name = $_COOKIE ['v_name'];
$nick = $_COOKIE ['v_nick'];
$url = $infos ['url'];
$nick_len = mb_strlen ( $nick, 'UTF8' );
switch ($nick_len) {
	case 1 :
		$left_px = 145;
		break;
	case 2 :
		$left_px = 130;
		break;
	case 3 :
		$left_px = 118;
		break;
	case 4 :
		$left_px = 108;
		break;
	case 5 :
		$left_px = 96;
		break;
	case 6 :
		$left_px = 87;
		break;
	case 7 :
		$left_px = 77;
		break;
	case 8 :
		$left_px = 67;
		break;
	case 9 :
		$left_px = 57;
		break;
	case 10 :
		$left_px = 47;
		break;
	case 11 :
		$left_px = 37;
		break;
	case 12 :
		$left_px = 27;
		break;
	default :
		$left_px = 27;
}

$score = 0;
$i = 1;
while ( $i < 31 ) {
	$score = $score + $_POST ['i' . $i];
	$i ++;
}

if ($score > 20) {
	$jieguo = "极品屌丝";
}

if ($score >= 10 && $score <= 20) {
	$jieguo = "屌丝";
}

if ($score >= - 5 && $score < 10) {
	$jieguo = "疑似屌丝";
}

if ($score >= - 15 && $score < - 5) {
	$jieguo = "疑似高富帅";
}
if ($score >= - 23 && $score < - 15) {
	$jieguo = "高富帅";
}
if ($score < - 23) {
	$jieguo = "极品高富帅";
}

$img_path = './imgs/xlnl.png';
$img = getImgType ( $img_path );
$img = createImg ( $img, $nick, $left_px, 160, 12, 0, 16, 'a60' );
$img = createImg ( $img, $jieguo, 130, 215, 11, 0, 22, 'f37', 'yahei' );

$content = '经过屌丝指数测试，我居然是' . $jieguo . ' ！想知道你是屌丝还是高富帅？完成30个测试题就能鉴定出，微博最火屌丝指数测试，快来试试吧！#屌丝指数测试#：' . $url;
$pagrams = array ();
$pagrams [content] = $content;
$pagrams [img] = $img;
$pagrams [type] = 'png';
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->你的屌丝指数测试";
$pagrams [summary] = "韩寒说，我是纯正的上海郊区“屌丝”；人气乐团“五月天”说，走下舞台我们就是“屌丝”。全民皆屌丝时代，你是真屌丝还是假高富帅，屌丝指数测试拉你出来遛一遛！" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_title'] = '【' . $jieguo . '】';