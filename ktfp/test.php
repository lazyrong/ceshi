<?
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';

$app_name = 'ktfp';

if (!islogined()) {
	header ( 'Location:./login.php?id=q&app=' . $app_name . '&act=test' );
	exit ();
}
check_appstatus($app_name);

$nick = $_COOKIE ['v_nick'];
$num = str_to_num ( $nick, $app_name );
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );

$num = $num % 19;
$resultlist = array (
		0 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/46e05eaae5ca246e5658/2000',
				'jieguo' => '《School Days》伊藤诚',
				'img' => './imgs/result/1.jpg'
		),
		1 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/7297527d32bb76e62074/2000',
				'jieguo' => '《JoJo奇妙奇遇》吉良吉影',
				'img' => './imgs/result/2.jpg'
		),
		2 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/df9dcf48a6e1bb4b7cbe/2000',
				'jieguo' => '《变形金刚》威震天',
				'img' => './imgs/result/3.jpg'
		),
		3 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/6c650bbd89e674b529fe/2000',
				'jieguo' => '《反叛的鲁路修》鲁路修',
				'img' => './imgs/result/4.jpg'
		),
		4 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/f5d3e2221b5903c7c936/2000',
				'jieguo' => '《钢之炼金术师》金·布拉德雷',
				'img' => './imgs/result/5.jpg'
		),
		5 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/4bf0067e60336210dd3a/2000',
				'jieguo' => '《高达SEED》劳·鲁·克鲁泽',
				'img' => './imgs/result/6.jpg'
		),
		6 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/bbb4aeae7cbf05990b6c/2000',
				'jieguo' => '《海贼王》赤犬',
				'img' => './imgs/result/7.jpg'
		),
		7 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/dfc11bf5672a0fbe49c2/2000',
				'jieguo' => '《日和》肉山大魔王',
				'img' => './imgs/result/8.jpg'
		),
		8 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/69d163c923acf59a43f2/2000',
				'jieguo' => '《魔卡少女樱》斯比奈鲁·太阳',
				'img' => './imgs/result/9.jpg'
		),
		9 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/05804e63852b635214ce/2000',
				'jieguo' => '《死亡笔记》夜神月',
				'img' => './imgs/result/10.jpg'
		),
		10 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/0f1a9fe46910525b45c0/2000',
				'jieguo' => '《银魂》高杉晋助',
				'img' => './imgs/result/11.jpg'
		),
		11 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/8a26ba911980a5daff84/2000',
				'jieguo' => '《全职猎人》西索',
				'img' => './imgs/result/12.jpg'
		),
		12 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/e42c08d4032d9fb36554/2000',
				'jieguo' => '《游戏王》暗貘良',
				'img' => './imgs/result/13.jpg'
		),
		13 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/aad2da1673db3291d60a/2000',
				'jieguo' => '《海贼王》黑胡子',
				'img' => './imgs/result/14.jpg'
		),
		14 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/1f3fa3ee24f60abcbb04/2000',
				'jieguo' => '《幽游白书》仙水',
				'img' => './imgs/result/15.jpg'
		),
		15 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/38caa5725bf807b5bf4c/2000',
				'jieguo' => '《新世纪福音战士》渚熏',
				'img' => './imgs/result/16.jpg'
		),
		16 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/75ccb07a312daf5961ae/2000',
				'jieguo' => '《海贼王》克拉克达尔',
				'img' => './imgs/result/17.jpg'
		),
		17 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/7f6050583a3a59bc323e/2000',
				'jieguo' => '《数码宝贝》吸血魔兽',
				'img' => './imgs/result/18.jpg'
		),
		18 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/8ff31c31dbf91926675e/2000',
				'jieguo' => '《四驱兄弟》大神博士',
				'img' => './imgs/result/19.jpg'
		),
);

$num = $num % count ( $resultlist );
$result = $resultlist [$num];
if (! $result) {
	$result = $resultlist [array_rand ( $resultlist )];
}

$img=getImgType($result['img']);

$content = '我发现我骨子里相似的卡通反派人物竟然是【'.$result['jieguo'].'】~~  想知道你骨子里像哪个卡通反派人物吗？快来测测吧！测试地址：' . $url;
$pagrams = array ();
$pagrams [content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams ['pic'] = $result ['pic'];
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->你骨子里像哪个卡通反派人物";
$pagrams [summary] = "测测你骨子里像哪个卡通反派人物？快来测测吧！" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info['result_title'] = $result['jieguo'];
$rt_info['result_img'] = $result ['pic'];
if (is_mobile ()) {
	require_once './../a_include/rt_mobile.php';
} else {
	require_once './../a_include/header.php';
	require_once './../a_include/rt_main.php';
	require_once './../a_include/footer.php';
}
?>