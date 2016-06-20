<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'wmm';

if (($_POST ['name'] && $_POST ['sex']) || ($_GET ['name'] && $_GET ['sex'])) {
	$name = $_REQUEST ['name'];
	$sex = $_REQUEST ['sex'];
	setcookie ( 'app_' . $app_name . '_name', $name, time () + 3000, '/' );
	setcookie ( 'app_' . $app_name . '_sex', $sex, time () + 3000, '/' );
} else {
	$name = $_COOKIE ['app_' . $app_name . '_name'];
	$sex = $_COOKIE ['app_' . $app_name . '_sex'];
}
if (!islogined()) {
	header ( 'Location:./login.php?id=q&app=' . $app_name . '&act=view' );
	exit ();
}
if (! $name || ! $sex) {
	header ( 'Location:./' );
	exit ();
}
check_appstatus ( $app_name );
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );
$num = str_to_num ( $name, $app_name );
$str = "";
$resultlist = array ();
if ($sex == '2') {
	$resultlist = array (
			array (
					'pic' => 'http://t2.qpic.cn/mblogpic/5586d7dbf5b4b7eb4328/2000',
					'pic_sina' => 'http://t2.qpic.cn/mblogpic/5586d7dbf5b4b7eb4328/2000',
					'jieguo' => '【徐慧】' ,
					'img' => './imgs/girl/1.jpg'
			),
			array (
					'pic' => 'http://t2.qpic.cn/mblogpic/17f6ba3763cd93632ca0/2000',
					'pic_sina' => 'http://t2.qpic.cn/mblogpic/17f6ba3763cd93632ca0/2000',
					'jieguo' => '【武则天】' ,
					'img' => './imgs/girl/2.jpg'
			),
			array (
					'pic' => 'http://t2.qpic.cn/mblogpic/c45581b2a97a4ff26f8a/2000',
					'pic_sina' => 'http://t2.qpic.cn/mblogpic/c45581b2a97a4ff26f8a/2000',
					'jieguo' => '【韦贵妃】' ,
					'img' => './imgs/girl/3.jpg'
			),
			array (
					'pic' => 'http://t2.qpic.cn/mblogpic/bca532406677ab0c36a4/2000',
					'pic_sina' => 'http://t2.qpic.cn/mblogpic/bca532406677ab0c36a4/2000',
					'jieguo' => '【杨妃】' ,
					'img' => './imgs/girl/4.jpg'
			),
			array (
					'pic' => 'http://t2.qpic.cn/mblogpic/d58db50bb3ccf2e7f708/2000',
					'pic_sina' => 'http://t2.qpic.cn/mblogpic/d58db50bb3ccf2e7f708/2000',
					'jieguo' => '【萧淑妃】' ,
					'img' => './imgs/girl/5.jpg'
			) 
	);
} else {
	
	$resultlist = array (
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/766a8b4fcd689d448092/2000',
					'pic_sina' => 'http://app.qpic.cn/mblogpic/766a8b4fcd689d448092/2000',
					'jieguo' => '【张柬之】' ,
					'img' => './imgs/boy/1.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/7dfeac7894ab074f028c/2000',
					'pic_sina' => 'http://app.qpic.cn/mblogpic/7dfeac7894ab074f028c/2000',
					'jieguo' => '【李恪】' ,
					'img' => './imgs/boy/2.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/dc526dd583362a7470d8/2000',
					'pic_sina' => 'http://app.qpic.cn/mblogpic/dc526dd583362a7470d8/2000',
					'jieguo' => '【唐高宗李治】' ,
					'img' => './imgs/boy/3.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/df9e5d33134bb7618800/2000',
					'pic_sina' => 'http://app.qpic.cn/mblogpic/df9e5d33134bb7618800/2000',
					'jieguo' => '【长孙无忌】' ,
					'img' => './imgs/boy/4.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/cbb73c149a60a3b99ce2/2000',
					'pic_sina' => 'http://app.qpic.cn/mblogpic/cbb73c149a60a3b99ce2/2000',
					'jieguo' => '【李世民】' ,
					'img' => './imgs/boy/5.jpg'
			) 
	);
}
$num = $num % count ( $resultlist );
$result = $resultlist [$num];
if (! $result) {
	$result = $resultlist [array_rand ( $resultlist )];
}
if (strtolower($result_pic_pf) == 'sina') {
	$result ['pic'] = $result ['pic_sina']?$result ['pic_sina']:$result ['pic'];
}

// $img_path='./imgs/'.$folder.'/'.$num.'.jpg';
// $img=getImgType($img_path);
// $img=createImg($img,$nick,115,28,13,0,14,'000');

$img=getImgType($result['img']);
$content = '【' . $name . '】穿越到唐朝竟然是武媚娘传奇里的' . $result ['jieguo'] . '，赶快来测测你穿越到唐朝会是谁！';

$pagrams = array ();
$pagrams [content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams ['pic'] = $result ['pic'];
$pagrams [url] = $url;
$pagrams [title] = "梦回唐朝，你是武媚娘传奇里的谁";
$pagrams [summary] = "小伙伴们快来测测穿越到唐朝你是武媚娘传奇里的谁吧！";
$rt_info = post_send2 ( $pagrams );
$rt_info ['url'] = $url;
$rt_info ['result_img'] = $result ['pic'];
$rt_info ['result_title'] = $result ['jieguo'];
setcookie ( 'app_' . $app_name . '_name', NULL, - 3000, '/' );
setcookie ( 'app_' . $app_name . '_sex', NULL, - 3000, '/' );
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
