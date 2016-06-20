<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'zmsg';

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
					'pic' => 'http://app.qpic.cn/mblogpic/4505512885126a78bffc/460',
					'jieguo' => '春妮',
					'text' => 'MG公司员工' ,
					'img' => './imgs/result/girl/1.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/b4159dd2dab24f111214/460',
					'jieguo' => '苏蔓',
					'text' => '舍高位、求低职，狂追男轻熟女'  ,
					'img' => './imgs/result/girl/2.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/f869b7374a3c951508b8/460',
					'jieguo' => '许母',
					'text' => '许怜霜母亲'  ,
					'img' => './imgs/result/girl/3.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/bc77645fe0de2d3d6eae/460',
					'jieguo' => '慧敏',
					'text' => '陆组的一位员工'  ,
					'img' => './imgs/result/girl/4.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/57347013e8f3428e4086/460',
					'jieguo' => '麻辣烫',
					'text' => '苏蔓好友'  ,
					'img' => './imgs/result/girl/5.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/f34e878d653fda05cbde/460',
					'jieguo' => '林达',
					'text' => 'MG部门负责人'  ,
					'img' => './imgs/result/girl/6.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/a6e4a9fadac27331355e/460',
					'jieguo' => '苏母',
					'text' => '苏蔓母亲'  ,
					'img' => './imgs/result/girl/7.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/19b80fb24b49576d88cc/460',
					'jieguo' => '许秋',
					'text' => '宋翊的前女友'  ,
					'img' => './imgs/result/girl/8.jpg'
			),
			
);
} else {
$resultlist = array (
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/441788acda2275cc938e/460',
					'jieguo' => '陆励成',
					'text' => '邪魅狂狷的少帅'  ,
					'img' => './imgs/result/boy/1.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/a60f5756649778cc7d18/460',
					'jieguo' => '马志明',
					'text' => 'MG公司职员' ,
					'img' => './imgs/result/boy/2.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/3fad5d93c393ddf6476a/460',
					'jieguo' => '大宁',
					'text' => '十全十美老板' ,
					'img' => './imgs/result/boy/3.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/3834c32173821d00df30/460',
					'jieguo' => 'Mike',
					'text' => '大中华区总裁' ,
					'img' => './imgs/result/boy/4.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/d49272e309b535163354/460',
					'jieguo' => '苏宗航',
					'text' => '苏曼父亲' ,
					'img' => './imgs/result/boy/5.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/6435a3db400461d632f8/460',
					'jieguo' => '秦川',
					'text' => '人工呼吸男' ,
					'img' => './imgs/result/boy/6.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/a521f159bbde1de44bfc/460',
					'jieguo' => '韩帆',
					'text' => 'MG公司职员' ,
					'img' => './imgs/result/boy/7.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/f67ea07ca489cd7aa43e/460',
					'jieguo' => '潘文杰',
					'text' => '陆励成组员' ,
					'img' => './imgs/result/boy/8.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/d1aecfb8b7e404fe649c/460',
					'jieguo' => '宋翊',
					'text' => '帅气专情的炮灰男二' ,
					'img' => './imgs/result/boy/9.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/db85d9b95a3bd6da61a4/460',
					'jieguo' => '陈总',
					'text' => '难缠客户' ,
					'img' => './imgs/result/boy/10.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/ed1509a8b535ecd1e9d0/460',
					'jieguo' => '许仲晋',
					'text' => '许怜霜父亲' ,
					'img' => './imgs/result/boy/11.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/91ff4eca1dad4d8f38fc/460',
					'jieguo' => '朱少杰',
					'text' => 'MG公司职员' ,
					'img' => './imgs/result/boy/12.jpg'
			),
			array (
					'pic' => 'http://app.qpic.cn/mblogpic/de00f128ea5f49e45f46/460',
					'jieguo' => '刘海波',
					'text' => 'MG公司职员' ,
					'img' => './imgs/result/boy/13.jpg'
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
$img = getImgType($result['img']);

$content = '经过专业分析，【' . $name . '】在最美的时光里面居然会是【' . $result ['jieguo'] . '】："' . $result ['text'] . '"，小伙伴赶快来测测你会是最美的时光里面的谁吧！测试地址：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams ['pic'] = $result ['pic'];
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->你是最美的时光里的谁";
$pagrams [summary] = "小伙伴们快来测测你是最美的时光里的谁吧！测试地址：" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_title'] = '【' . $result ['jieguo'] . '】';
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
// 		require_once './view_mobile.php';
	} else {
		require_once './view_web.php';
// 		require_once './../a_include/header.php';
// 		require_once './../a_include/rt_main.php';
// 		require_once './../a_include/footer.php';
	}
}

?>
