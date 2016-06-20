<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'aqgy4';

if (($_POST ['name'] && $_POST ['sex']) || ($_GET ['name'] && $_GET ['sex'])) {
	$name = $_REQUEST ['name'];
	$sex = $_REQUEST ['sex'];
	setcookie ( 'app_' . $app_name . '_name', $name, time () + 3000, '/' );
	setcookie ( 'app_' . $app_name . '_sex', $sex, time () + 3000, '/' );
} else {
	$name = $_COOKIE ['app_' . $app_name . '_name'];
	$sex = $_COOKIE ['app_' . $app_name . '_sex'];
	setcookie ( 'app_' . $app_name . '_name', null, - 3000, '/' );
	setcookie ( 'app_' . $app_name . '_sex', null, - 3000, '/' );

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
// $url = $url.'index.php?id='.rand(1, 100);
$num = str_to_num ( $name, $app_name );
$str = "";
$resultlist = array ();

if ($sex == 2) {
	$resultlist = array (
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/e8b0bfc2c6d89cc33d16/460',
					'pic_sina' => '',
					'jieguo' => '“肉肉乐观女”【小美】',
					'text' => '' ,
					'img' => './imgs/result/girl/1.jpg' 
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/4b9e5202dfde332f8b7e/460',
					'pic_sina' => '',
					'jieguo' => '“狂想偏执狂”【唐悠悠】',
					'text' => '' ,
					'img' => './imgs/result/girl/2.jpg' 
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/911e77810124b5e65124/460',
					'pic_sina' => '',
					'jieguo' => '“偏见制作人”【lisa榕】',
					'text' => '' ,
					'img' => './imgs/result/girl/3.jpg' 
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/ed9fc3050a3ba449db6c/460',
					'pic_sina' => '',
					'jieguo' => '“宅男女神”【诺澜】',
					'text' => '' ,
					'img' => './imgs/result/girl/4.jpg' 
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/d32a77f1be2b83827cfe/460',
					'pic_sina' => '',
					'jieguo' => '“天然呆富千金”【林宛瑜】',
					'text' => '' ,
					'img' => './imgs/result/girl/5.jpg' 
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/035de13722cc4a17b900/460',
					'pic_sina' => '',
					'jieguo' => '“数学白痴”【陈美嘉】',
					'text' => '' ,
					'img' => './imgs/result/girl/6.jpg' 
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/4ca8b5a5d638937a2b9c/460',
					'pic_sina' => '',
					'jieguo' => '“张伟未婚妻”【那琳琳】',
					'text' => '' ,
					'img' => './imgs/result/girl/7.jpg' 
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/df17ad9a63f97fe2a864/460',
					'pic_sina' => '',
					'jieguo' => '“双面御姐”【胡一菲】',
					'text' => '' ,
					'img' => './imgs/result/girl/8.jpg' 
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/b409723e5f342edbaef8/460',
					'pic_sina' => '',
					'jieguo' => '“知性敏感白领”【秦羽墨】',
					'text' => '' ,
					'img' => './imgs/result/girl/9.jpg' 
			),
	);
} else {
	$resultlist = array (
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/2848727d3d37597681c4/460',
					'pic_sina' => '',
					'jieguo' => '“呆萌学生”【史小明】',
					'text' => '' ,
					'img' => './imgs/result/boy/1.jpg' 
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/b6b03aa635ea23953992/460',
					'pic_sina' => '',
					'jieguo' => '“智商超高天才儿童”【陆展博】',
					'text' => '' ,
					'img' => './imgs/result/boy/2.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/c66665d45e454f453de4/460',
					'pic_sina' => '',
					'jieguo' => '“新好男人”【曾小贤】',
					'text' => '' ,
					'img' => './imgs/result/boy/3.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/c57f3ad0af4df3764d80/460',
					'pic_sina' => '',
					'jieguo' => '“恶搞小生”【武小艺】',
					'text' => '' ,
					'img' => './imgs/result/boy/4.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/630ad5d075f5e75388f2/460',
					'pic_sina' => '',
					'jieguo' => '“土财主”【煤老板】',
					'text' => '' ,
					'img' => './imgs/result/boy/5.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/e9c6e2a1d463f3ae3300/460',
					'pic_sina' => '',
					'jieguo' => '“风流雅痞”【吕子乔】',
					'text' => '' ,
					'img' => './imgs/result/boy/6.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/8d9bca5ade7fb53d22ea/460',
					'pic_sina' => '',
					'jieguo' => '“工作狂御宅”【关谷神奇】',
					'text' => '' ,
					'img' => './imgs/result/boy/7.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/03c0a0efe0b3d9f48c40/460',
					'pic_sina' => '',
					'jieguo' => '“义愤妇科大夫”【司马健】',
					'text' => '' ,
					'img' => './imgs/result/boy/8.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/1371078e36008d6f0fb6/460',
					'pic_sina' => '',
					'jieguo' => '“吃货同事”【杜涛涛】',
					'text' => '' ,
					'img' => './imgs/result/boy/9.jpg'
			),
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
$content = '经过专业分析，【' . $name . '】竟然和《爱情公寓4》里的' . $result ['jieguo'] . '性格相像，小伙伴你也来测测看你的性格更像谁吧！测试地址：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams[img] = getImgType($result['img']);
$pagrams[type] = 'jpg';
$pagrams ['pic'] = $result ['pic'];
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->你和《爱情公寓4》里谁的性格最相像";
$pagrams [summary] = "小伙伴你也来测测看你的性格更像谁吧！测试地址：" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_title'] = $result ['jieguo'] ;
$rt_info ['url'] = $url;
$rt_info ['result_img'] = $result ['pic'];

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
