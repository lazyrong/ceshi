<?
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';

$app_name = 'sgz';

if (!islogined()) {
	header ( 'Location:./login.php?id=q&app=' . $app_name . '&act=test' );
	exit ();
}
check_appstatus ( $app_name );
$nick = $_COOKIE ['v_nick'];
$num = str_to_num ( $nick, $app_name );
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );

$num = $num % 27;
$resultlist = array (
		0 => array (
				'pic' => '',
				'jieguo' => '淡淡如水' 
		),
		1 => array (
				'pic' => '',
				'jieguo' => '鸿运当头' 
		),
		2 => array (
				'pic' => '',
				'jieguo' => '桃花朵朵' 
		),
		3 => array (
				'pic' => '',
				'jieguo' => '一如既往' 
		),
		4 => array (
				'pic' => '',
				'jieguo' => '厚积薄发' 
		),
		5 => array (
				'pic' => '',
				'jieguo' => '艺术人生' 
		),
		6 => array (
				'pic' => '',
				'jieguo' => '随心所欲' 
		),
		7 => array (
				'pic' => '',
				'jieguo' => '生龙活虎' 
		),
		8 => array (
				'pic' => '',
				'jieguo' => '心想事成' 
		),
		9 => array (
				'pic' => '',
				'jieguo' => '春风得意' 
		),
		10 => array (
				'pic' => '',
				'jieguo' => '兴高采烈' 
		),
		11 => array (
				'pic' => '',
				'jieguo' => '乐此不疲' 
		),
		12 => array (
				'pic' => '',
				'jieguo' => '光鲜亮丽' 
		),
		13 => array (
				'pic' => '',
				'jieguo' => '扬名万里' 
		),
		14 => array (
				'pic' => '',
				'jieguo' => '衣食无忧' 
		),
		15 => array (
				'pic' => '',
				'jieguo' => '乐得逍遥' 
		),
		16 => array (
				'pic' => '',
				'jieguo' => '自由自在' 
		),
		17 => array (
				'pic' => '',
				'jieguo' => '悠然自得' 
		),
		18 => array (
				'pic' => '',
				'jieguo' => '简简单单' 
		),
		19 => array (
				'pic' => '',
				'jieguo' => '风风火火' 
		),
		20 => array (
				'pic' => '',
				'jieguo' => '日理万机' 
		),
		21 => array (
				'pic' => '',
				'jieguo' => '风尘仆仆' 
		),
		22 => array (
				'pic' => '',
				'jieguo' => '不紧不慢' 
		),
		23 => array (
				'pic' => '',
				'jieguo' => '泰然自若' 
		),
		24 => array (
				'pic' => '',
				'jieguo' => '松弛有度' 
		),
		25 => array (
				'pic' => '',
				'jieguo' => '心平气和' 
		),
		26 => array (
				'pic' => '',
				'jieguo' => '从容不迫' 
		) 
);
$result = $resultlist [$num];
if (! $result) {
	$result = $resultlist [array_rand ( $resultlist )];
}
$pic = 'http://app.qpic.cn/mblogpic/207061fc61a8002a8dd6/460';
$pic_sina = 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfu6lezyvj20cs07xq34.jpg';

if (strtolower($result_pic_pf) == 'sina') {
	$pic = $pic_sina;
}
$img_path='./imgs/pre.jpg';
$img=getImgType($img_path);

$content = '我的2015年可以概括为这四个字：【' . $result ['jieguo'] . '】hold住2015！！你的2015可以用哪四个字来概括呢？快来测测吧～测试地址：' . $url;
$pagrams = array ();
$pagrams [content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams ['pic'] = $pic;
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->概括你2015年的四个字";
$pagrams [summary] = "hold住2015！！你的2015可以用哪四个字来概括呢？快来测测吧～测试地址：" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_img'] = $pic;
$rt_info ['result_title'] = '【' . $result ['jieguo'] . '】';
if (is_mobile ()) {
	require_once './../a_include/rt_mobile.php';
} else {
	require_once './../a_include/header.php';
	require_once './../a_include/rt_main.php';
	require_once './../a_include/footer.php';
}
?>