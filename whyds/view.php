<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'whyds';

if (($_REQUEST ['nick'])) {
	$name = $_REQUEST ['nick'];
	setcookie ( 'app_' . $app_name . '_name', $name, time () + 3000, '/' );
} else {
	$name = $_COOKIE ['app_' . $app_name . '_name'];
	setcookie ( 'app_' . $app_name . '_name', null, - 3000, '/' );
}
if (!islogined()) {
	header ( 'Location:./login.php?id=q&app=' . $app_name . '&act=view' );
	exit ();
}
check_appstatus($app_name);

if (! $name) {
	header ( 'Location:./' );
	exit ();
}
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );
$num = str_to_num ( $name, $app_name );

$num = $num % 20;
$resultlist = array (
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/4231a7811e15c86eac2a/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfq62ow1dj208c08cq3j.jpg',
				'jieguo' => '他只把我当朋友',
				'img' => './imgs/result/1.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/a4132ac56fc52e815dd0/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfq64sph5j208c08c0te.jpg',
				'jieguo' => '总是暗恋，不敢表白',
				'img' => './imgs/result/2.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/c0b616ccfb1d62fd71b0/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfq6bh55nj208c08cdgh.jpg',
				'jieguo' => '吊丝一名，没人看得上',
				'img' => './imgs/result/3.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/7fdbdaba0b511c3abe66/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfq6l9vd4j208c08cmxs.jpg',
				'jieguo' => '工作狂，没空恋爱',
				'img' => './imgs/result/4.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/bd22062641fcc3c4a706/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfq68yvf5j208c08c3z7.jpg',
				'jieguo' => '挑花眼了，不知道选谁',
				'img' => './imgs/result/5.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/4595b688331791557516/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfq6rcqfcj208c08c3z7.jpg',
				'jieguo' => '眼光太高，没看得上的',
				'img' => './imgs/result/6.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/647de6c77ada08471838/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfq6ejy4wj208c08cjry.jpg',
				'jieguo' => '总是宅在家里',
				'img' => './imgs/result/7.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/9a27731ea433e6243760/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfq65a618j208c08cmxs.jpg',
				'jieguo' => '周围的异性太少了',
				'img' => './imgs/result/8.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/654734e2e9c4050154fc/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfq6bv2xrj208c08cq3m.jpg',
				'jieguo' => '更喜欢跟父母在一起',
				'img' => './imgs/result/9.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/8e11e4f8ffb1eed74552/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfq5xom1xj208c08ct9d.jpg',
				'jieguo' => '旧的去了，新的没来',
				'img' => './imgs/result/10.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/d39a14e2e8c3a84b4918/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfq6hpgc0j208c08c74p.jpg',
				'jieguo' => '太胖了',
				'img' => './imgs/result/11.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/0677e7d166d666194516/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfq5uh5tij208c08cq3l.jpg',
				'jieguo' => '自己都照顾不过来',
				'img' => './imgs/result/12.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/f185b82d8afdab1aee44/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfq5rllwdj208c08cmxn.jpg',
				'jieguo' => '宁缺毋滥',
				'img' => './imgs/result/13.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/4825c840c9782df7f17a/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfq5r4zlxj208c08ct9f.jpg',
				'jieguo' => '见到喜欢的人就紧张',
				'img' => './imgs/result/14.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/e78a25c23ff044006a0c/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfq6m8pj3j208c08c0th.jpg',
				'jieguo' => '苦逼程序员，短命没人要',
				'img' => './imgs/result/15.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/c9409dd561a7fe4bcd66/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfq6k08h7j208c08caap.jpg',
				'jieguo' => '喜欢自由，一个人挺好',
				'img' => './imgs/result/16.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/30da1798ca5e829b70ee/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfq6ksqaaj208c08c74v.jpg',
				'jieguo' => '单身太久，习惯了',
				'img' => './imgs/result/17.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/bddfd2ca553cd67dc2f4/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfq6fchl1j208c08cq3f.jpg',
				'jieguo' => '外貌协会',
				'img' => './imgs/result/18.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/08973eec4811b60e9fd6/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfq65wjjnj208c08c3z3.jpg',
				'jieguo' => '情商低，没情调',
				'img' => './imgs/result/19.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/beb279c7b4874daab44c/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfq68huyej208c08c0te.jpg',
				'jieguo' => '家境太好，难信真心',
				'img' => './imgs/result/20.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/21262f93b562aa0e154c/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfq6e4yxzj208c08cjs2.jpg',
				'jieguo' => '喜欢的人已经有主了',
				'img' => './imgs/result/21.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/53d7b89911040c2a67f6/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfq6p5gvvj208c08c3z2.jpg',
				'jieguo' => '心里住着一个他',
				'img' => './imgs/result/22.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/f1642c0d70c209b4fd02/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfq6kf321j208c08cmxm.jpg',
				'jieguo' => '过于自卑',
				'img' => './imgs/result/23.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/f4a1919d7a04e058c672/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfq609nsvj208c08cmxn.jpg',
				'jieguo' => '害怕受伤',
				'img' => './imgs/result/24.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/a255ee18c6649d2f32f0/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfq5y0aidj208c08cgm6.jpg',
				'jieguo' => '有更高的追求',
				'img' => './imgs/result/25.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/79b80aff656b97511fe2/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfq5v9vuhj208c08cwf7.jpg',
				'jieguo' => '六级还没过，谈毛恋爱',
				'img' => './imgs/result/26.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/569a5d5424f1815d776a/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfq6ez8onj208c08c3yz.jpg',
				'jieguo' => '家人阻碍',
				'img' => './imgs/result/27.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/9eb4d414195218491d88/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfq5s3b2pj208c08c0tg.jpg',
				'jieguo' => '没车没房，谈不起恋爱',
				'img' => './imgs/result/28.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/f7248606dd9fef9d05ea/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfq6oocf6j208c08c750.jpg',
				'jieguo' => '交不起学费，谈毛恋爱',
				'img' => './imgs/result/29.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/b5e1811f3dbc5cb28e6a/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfq6lrjw4j208c08cgma.jpg',
				'jieguo' => '条件太好，没人敢追',
				'img' => './imgs/result/30.jpg'
		),
		array (
				'pic' => 'http://app.qpic.cn/mblogpic/b8e37ecb6190d2dcbe12/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfq669vbdj208c08caai.jpg',
				'jieguo' => '有洁癖',
				'img' => './imgs/result/31.jpg'
		),
);
$result = $resultlist [$num];
if (! $result) {
	$result = $resultlist [array_rand ( $resultlist )];
}

if (strtolower($result_pic_pf) == 'sina') {
	$result ['pic'] = $result ['pic_sina']?$result ['pic_sina']:$result ['pic'];
}
$img=getImgType($result['img']);
$content = '经过大师分析，哦，原来【'.$name.'】的单身原因是'.$result['jieguo'].'，终于知道为什么总是一个人了。你又为什么单身呢？快来测试吧！测试地址：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams ['pic'] = $result ['pic'];
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->你为什么单身？";
$pagrams [summary] = "当各种交友活动和相亲节目在这个城市流行，单身也就在这个城市开始蔓延。想知道你为什么单身吗？快来测试吧！测试地址：" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['url'] = $url;
$rt_info ['result_title'] = '【原因：'.$result ['jieguo'].'】';
$rt_info ['result_img'] = $result ['pic'];
setcookie ( 'app_' . $app_name . '_name', NULL, - 3000, '/' );
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
