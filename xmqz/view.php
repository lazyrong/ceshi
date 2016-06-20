<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'xmqz';

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

$resultlist = array (
		0 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/8072f1fa54b127bc422e/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebevgc01oij208c08c0ty.jpg',
				'jieguo' => '富贵',
				'text' => '除了钱，什么都缺' 
		),
		1 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/a0e943bb1aca490cdcce/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebevgfs8qnj208c08cmyd.jpg',
				'jieguo' => '和谐',
				'text' => '为建设和谐社会贡献力量' 
		),
		2 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/225d9738586841e08054/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebevgnyoyqj208c08cmyd.jpg',
				'jieguo' => '低调',
				'text' => '就不告诉别人你爸是谁' 
		),
		3 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/70cf9cf0e09c1e467276/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebevgplqrij208c08cgmu.jpg',
				'jieguo' => '智慧',
				'text' => '夜观天象，运筹帷幄' 
		),
		4 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/65c3bc954394d32752e0/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebevgv47arj208c08cmy9.jpg',
				'jieguo' => '萌',
				'text' => '回首萌杀万千宅' 
		),
		5 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/a701cd1f951a35630ea4/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebevgylb6nj208c08c0tw.jpg',
				'jieguo' => '乡土',
				'text' => '你是最炫的民族风' 
		),
		6 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/670059088c98fb50b8ae/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebevh668ffj208c08c3zn.jpg',
				'jieguo' => '森',
				'text' => '树林里走出的纯净阳光' 
		),
		7 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/c7c82ab07439f7b12a54/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebevhwx08oj208c08c3zp.jpg',
				'jieguo' => '甜美',
				'text' => '人见人爱，花见花开' 
		),
		8 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/052c03e6f80c724ab9fa/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebevhyr7k3j208c08cwfp.jpg',
				'jieguo' => '风尘',
				'text' => '注定是伟大的表演艺术家' 
		),
		9 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/671700b570e4cb430932/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebevi1awpwj208c08c75h.jpg',
				'jieguo' => '霸气',
				'text' => '名不惊人死不休' 
		),
		10 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/558a5be911d980429b68/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebevi608o4j208c08c0ty.jpg',
				'jieguo' => '屌丝',
				'text' => '“在吗，忙不，早点睡”' 
		),
		11 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/80ca733c140dfe561266/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebevi9m2v7j208c08c0tz.jpg',
				'jieguo' => '幽默',
				'text' => '你的名字存在得很有勇气' 
		),
		12 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/3ddfbc8535c9bf337e72/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebevicp2guj208c08cgmv.jpg',
				'jieguo' => '王者风范',
				'text' => '君临天下，嗷呜' 
		),
		13 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/a8622f32ef57b8cab11a/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebeviecvbkj208c08c75k.jpg',
				'jieguo' => '古灵精怪',
				'text' => '心较比干多一窍' 
		),
		14 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/91cec0121414f9722e6c/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebevifwfd6j208c08ct9v.jpg',
				'jieguo' => '大爷',
				'text' => '爷，您真范儿' 
		),
		15 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/1acf51e41c356894fdfa/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebevila0rrj208c08c0tx.jpg',
				'jieguo' => '优雅',
				'text' => '秀外慧中，举止从容' 
		),
		16 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/dc9448093bd343a2fb98/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebevilt48pj208c08cab8.jpg',
				'jieguo' => '阳光',
				'text' => '你永远不懂夜的黑' 
		),
		17 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/9497dc72534e816a9d60/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebevimbupzj208c08cwfp.jpg',
				'jieguo' => '小清新',
				'text' => '夏达和刘诗诗的综合体' 
		),
		18 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/3ec8bc73cf545a62db6e/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebevimrl8sj208c08cgmu.jpg',
				'jieguo' => '矫情',
				'text' => '本宫最看不得你这副狐媚样子' 
		),
		19 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/72225de5cbb159c071fa/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw690/84f58744gw1ebevinf4ufj208c08ct9n.jpg',
				'jieguo' => '苦逼',
				'text' => '人中小强，坚韧不拔' 
		),
);
$num = $num % count($resultlist);
$result = $resultlist [$num];
if (! $result) {
	$result = $resultlist [array_rand ( $resultlist )];
}
if (strtolower($result_pic_pf) == 'sina') {
	$result ['pic'] = $result ['pic_sina']?$result ['pic_sina']:$result ['pic'];
}
$img=getImgType('./imgs/result/'.$num.'.jpg');
$content = '经过大师分析，【' . $name . '】姓名中隐藏的气质是【' . $result ['jieguo'] . '】，' . $result ['text'] . '~每个人的姓名中都隐藏着某种气质，你是否被某个名字的气质触动过呢？想知道自己的姓名中有什么隐藏气质？快来测测吧：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams ['pic'] = $result ['pic'];
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->你姓名中有什么隐藏气质？";
$pagrams [summary] = "每个人的姓名中都隐藏着某种气质，你是否被某个名字的气质触动过呢？想知道自己的姓名中有什么隐藏气质？快来测试吧！测试地址：" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['url'] = $url;
$rt_info ['result_img'] = $result ['pic'];
$rt_info ['result_title'] = '【'.$result ['jieguo'].'】';
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
