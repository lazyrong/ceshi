<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'lmzz';

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
					'pic' => 'http://app.qpic.cn/mblogpic/dfe15eacad918d9ab43c/2000',
					'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebg103uknaj208m09gab0.jpg',
					'jieguo' => '【夏冰】' ,
					'img' => './imgs/girl/1.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/ea46fbbddccd712e58f2/2000',
					'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg101ixiyj208m09gmxw.jpg',
					'jieguo' => '【夏冰的老板李木子】' ,
					'img' => './imgs/girl/2.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/04b18d3aa1a036dfdf3e/2000',
					'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg1025j31j208m09gdgh.jpg',
					'jieguo' => '【夏冰的婆婆】' ,
					'img' => './imgs/girl/3.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/4833713a7b6c77fd02ae/2000',
					'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebg102xm9zj208m09gq3l.jpg',
					'jieguo' => '【夏冰的妈妈】' ,
					'img' => './imgs/girl/4.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/dfe15eacad918d9ab43c/2000',
					'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebg103uknaj208m09gab0.jpg',
					'jieguo' => '【夏冰】' ,
					'img' => './imgs/girl/5.jpg'
			) 
	);
} else {
	
	$resultlist = array (
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/086b8ceb19a0383508c0/2000',
					'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg0zqfc6ij208m09gmxv.jpg',
					'jieguo' => '【夏冰的前男友鲍帅】' ,
					'img' => './imgs/boy/1.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/bc6404d6720d338041de/2000',
					'pic_sina' => 'http://app.qpic.cn/mblogpic/bc6404d6720d338041de/2000',
					'jieguo' => '【夏冰的丈夫元宝】' ,
					'img' => './imgs/boy/2.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/0af115fd5591016628c8/2000',
					'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebg0zv7yakj208m09gaas.jpg',
					'jieguo' => '【李木子的老公洛天】' ,
					'img' => './imgs/boy/3.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/662993c89dd130377352/2000',
					'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebg0zw765aj208m09g74v.jpg',
					'jieguo' => '【夏冰的爸爸】' ,
					'img' => './imgs/boy/4.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/086b8ceb19a0383508c0/2000',
					'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebg0zzk5yjj208m09gmxv.jpg',
					'jieguo' => '【夏冰的前男友鲍帅】' ,
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
$content = '【测测你是辣妈正传里的谁】哈哈，经过专业分析，【' . $name . '】在辣妈正传里面居然会是' . $result ['jieguo'] . '，赶快来测测你会是辣妈正传的谁！测试地址：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams ['pic'] = $result ['pic'];
$pagrams [url] = $url;
$pagrams [title] = "点击测试->测测你是辣妈正传里的谁";
$pagrams [summary] = "小伙伴们快来测测你是辣妈正传里的谁吧！测试地址：" . $pagrams [url];
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
