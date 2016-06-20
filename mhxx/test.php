<?
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';

$app_name = 'mhxx';

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
$sex = $_COOKIE ['v_sex'];


$resultboylist = array (
		0 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/edf86adacc60a987c6be/2000',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebes8ocadmj206807p74y.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/1.jpg',
		),
		1 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/aafcb1d8a03bea897428/2000',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebes974fdij206807omxv.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/2.jpg',
		),
		2 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/913446eb7d976b70b828/2000',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebes97pj16j206807n0td.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/3.jpg',
		),
		3 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/cd69bb3eef6a9c0ca3c8/2000',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebes9cktj6j206807pgm9.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/4.jpg',
		),
		4 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/0a42a8d8254670564dbc/2000',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebes9g3nj0j206807pgm9.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/5.jpg',
		),
		5 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/08aff19290266f7494d8/2000',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebes9me11kj206807pwf3.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/6.jpg',
		),
		6 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/624808636330c1de2c00/2000',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebes9ozxasj206807r74w.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/7.jpg',
		),
		7 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/400475780bdf144a27da/2000',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebes9rkkoqj206807qwf4.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/8.jpg',
		),
		8 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/a25e5682a4dd11ab1e48/2000',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebesb8hq5ij206807pgm4.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/9.jpg',
		),
		9 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/7d809e3720eb2dc8dc3c/2000',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebesb9ofijj206807ngma.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/10.jpg',
		),
		10 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/2518adbb7a62f5c26a88/2000',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebesbculuoj206807nwf6.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/11.jpg',
		),
		11 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/f81f844a706b974a57f6/2000',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebesbefv2zj206807nt9d.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/12.jpg',
		),
		12 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/f4130e8f7fe3a20868d4/2000',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebesbgu50gj206807nq3l.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/13.jpg',
		),
		13 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/b4283f89931b8d2577e4/2000',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebesbjvflnj206807m0tb.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/14.jpg',
		),
		14 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/b8488078efd6bb3bf310/2000',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebesbo95smj206807n3z5.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/15.jpg',
		),
		15 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/3f83bbba80ea8346958c/2000',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebesbqgr5pj206807ndgg.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/16.jpg',
		),
		16 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/1cd90076c67b96aca09a/2000',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebesbst9n8j206807omxs.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/17.jpg',
		),
		17 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/b13ff7bb22b8b207c40e/2000',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebesbv8cigj206807p0td.jpg',
				'jieguo' => '',
				'img' => './imgs/result/boy/18.jpg',
		),
);
$resultgirllist = array (
		0 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/a02afe6c4c8fbd13365c/2000',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebetxne7u2j206807oq3k.jpg',
				'jieguo' => '',
				'img' => './imgs/result/girl/1.jpg',
		),
		1 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/cd1e3a2d395aa47341d2/2000',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebetxqbnhyj206807pq3l.jpg',
				'jieguo' => '',
				'img' => './imgs/result/girl/2.jpg',
		),
		2 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/8a5e4d53067d8496cda8/2000',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebetxqv6gmj206807pt9c.jpg',
				'jieguo' => '',
				'img' => './imgs/result/girl/3.jpg',
		),
		3 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/07d4949a69dae554d3a6/2000',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebetxrash8j206807ogm9.jpg',
				'jieguo' => '',
				'img' => './imgs/result/girl/4.jpg',
		),
		4 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/55e9889bd1aebc0491fe/2000',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebetxtqi3sj206807pwf5.jpg',
				'jieguo' => '',
				'img' => './imgs/result/girl/5.jpg',
		),
		5 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/3aff3357c0a952598714/2000',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebetxvywgoj206807nwf6.jpg',
				'jieguo' => '',
				'img' => './imgs/result/girl/6.jpg',
		),
		6 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/8c0b80295bcad77e0488/2000',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebetxybkulj206807ngm9.jpg',
				'jieguo' => '',
				'img' => './imgs/result/girl/7.jpg',
		),
		7 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/020cc354692ba5c08a5c/2000',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebetxyswfhj206807o3z7.jpg',
				'jieguo' => '',
				'img' => './imgs/result/girl/8.jpg',
		),
		8 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/385fcf998312c7a08878/2000',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebety14pqrj206807ot9e.jpg',
				'jieguo' => '',
				'img' => './imgs/result/girl/9.jpg',
		),
		9 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/fc7d292b136f205b093e/2000',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebety3glphj206807omxu.jpg',
				'jieguo' => '',
				'img' => './imgs/result/girl/10.jpg',
		),
		10 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/a0ff0df2ab27ed645e0c/2000',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebety634ybj206807qgm4.jpg',
				'jieguo' => '',
				'img' => './imgs/result/girl/11.jpg',
		),
		11 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/ffd6731993dbf37164a8/2000',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebety8hacej206807o0tf.jpg',
				'jieguo' => '',
				'img' => './imgs/result/girl/12.jpg',
		),
		12 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/00d0f1d1ae2dd85e24aa/2000',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebety8vwejj206807ndgi.jpg',
				'jieguo' => '',
				'img' => './imgs/result/girl/13.jpg',
		),
		13 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/be7274261f293a8908fe/2000',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebety97mmsj206807pgm9.jpg',
				'jieguo' => '',
				'img' => './imgs/result/girl/14.jpg',
		),
		14 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/09a0bc2a776084af69c6/2000',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebety9ok5ij206807o0tf.jpg',
				'jieguo' => '',
				'img' => './imgs/result/girl/15.jpg',
		),
		15 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/ecbc5f0b720c6103c30e/2000',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebetybxyy4j206807p3z6.jpg',
				'jieguo' => '',
				'img' => './imgs/result/girl/16.jpg',
		),
);
if ($sex == 2) {
	$resultlist = $resultgirllist;
} else {
	$resultlist = $resultboylist;
}
$num = $num % count($resultlist);
$result = $resultlist [$num];
if (! $result) {
	$result = $resultlist [array_rand ( $resultlist )];
}
if (strtolower($result_pic_pf) == 'sina') {
	$result ['pic'] = $result ['pic_sina']?$result ['pic_sina']:$result ['pic'];
}
$img=getImgType($result ['img']);

$content = '下图是我在漫画中的形象，好喜欢！小伙伴们快来查看下你们的漫画形象吧。测试地址：' . $url;
$pagrams = array ();
$pagrams [content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams ['pic'] = $result ['pic'];
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->测测你在漫画中的形象是什么样？";
$pagrams [summary] = "测测你在漫画中的形象是什么样？快来测测吧！" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info['result_img'] = $result ['pic'];
if (is_mobile ()) {
	require_once './../a_include/rt_mobile.php';
} else {
	require_once './../a_include/header.php';
	require_once './../a_include/rt_main.php';
	require_once './../a_include/footer.php';
}
?>