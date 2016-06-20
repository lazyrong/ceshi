<?
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';

$app_name = 'onepiece';

if (!islogined()) {
	header ( 'Location:./login.php?id=q&app=' . $app_name . '&act=test' );
	exit ();
}
check_appstatus ( $app_name );
$nick = $_COOKIE ['v_nick'];
$num = str_to_num ( $nick, $app_name, - 3 );
$num1 = str_to_num ( $nick, $app_name );
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );

$finalScore = $num * $num + $num * $num1;

$finalScore = number_format ( $finalScore );
$img_path = './imgs/result.jpg';
$img = getImgType ( $img_path );
$img = createImg ( $img, $nick, 108, 155, 12, 0, 16, 'f00', 'yahei' );
$img = createImg ( $img, $finalScore, 430, 305, 12, 0, 50, 'fff', 'yahei' );

$content = '哈哈，我发现我在海賊王中会被悬赏【' . $finalScore . '贝利】~~  想知道你在海賊王中会被悬赏多少钱吗？快来测测吧！测试地址：' . $url;
$pagrams = array ();
$pagrams [content] = $content;
$pagrams [img] = $img;
$pagrams [type] = 'jpg';
// $pagrams ['pic'] = $result ['pic'];
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->你在海賊王中会被悬赏多少？";
$pagrams [summary] = "测测你在海賊王中会被悬赏多少？快来测测吧！" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_title'] = '【' . $finalScore . '贝利】';
// $rt_info['result_title'] = $result['jieguo'];
// $rt_info['result_img'] = $result ['pic'];
if (is_mobile ()) {
	require_once './../a_include/rt_mobile.php';
} else {
	require_once './../a_include/header.php';
	require_once './../a_include/rt_main.php';
	require_once './../a_include/footer.php';
}
?>