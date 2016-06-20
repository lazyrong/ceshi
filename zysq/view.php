<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'zysq';

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
				'pic' => 'http://app.qpic.cn/mblogpic/6e974b2293a49e48f108/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw1024/84f58744gw1ebejuct95kj208c08cq3g.jpg',
				'jieguo' => '被父母逼婚，跳河自杀',
				'text' => '28岁' ,
				'img' => './imgs/28.jpg'
		),
		1 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/16779496eda9b9d8ff8a/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw1024/84f58744gw1ebejntsczcj208c08c0t8.jpg',
				'jieguo' => '为情所困跳河自杀',
				'text' => '29岁' ,
				'img' => './imgs/29.jpg'
		),
		2 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/19b5eec41bbe7b7e3546/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw1024/84f58744gw1ebejntz7s8j208c08cgm5.jpg',
				'jieguo' => '偷东西时掉入茅坑被熏死',
				'text' => '30岁' ,
				'img' => './imgs/30.jpg'
		),
		3 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/0ee0fc4b99f557c39cd4/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw1024/84f58744gw1ebejnu8qfkj208c08ct98.jpg',
				'jieguo' => '扶老太太过马路被车撞死',
				'text' => '31岁' ,
				'img' => './imgs/31.jpg'
		),
		4 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/08e929db9d261b414ca2/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw1024/84f58744gw1ebejnuly4yj208c08c3z0.jpg',
				'jieguo' => '被另一半家暴致死',
				'text' => '32岁' ,
				'img' => './imgs/32.jpg'
		),
		5 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/e641155c2566d5520f0e/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw1024/84f58744gw1ebek8gijbhj208c08cdgd.jpg',
				'jieguo' => '浴室洗澡踩到香皂摔死',
				'text' => '32岁' ,
				'img' => './imgs/321.jpg'
		),
		6 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/fec936643bd6edadd14c/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw1024/84f58744gw1ebekaaykjaj208c08cwf1.jpg',
				'jieguo' => '挤痘痘成瘾，细菌感染而死',
				'text' => '33岁' ,
				'img' => './imgs/33.jpg'
		),
		7 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/5de7509b4c5513deee54/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw1024/84f58744gw1ebejnuyircj208c08cdgb.jpg',
				'jieguo' => '加班过度，累死',
				'text' => '35岁' ,
				'img' => './imgs/35.jpg'
		),
		8 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/279d48c408297ae459c2/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw1024/84f58744gw1ebejqh1g5qj208c08cq3h.jpg',
				'jieguo' => '学人家当古惑仔被乱刀砍死',
				'text' => '35岁' ,
				'img' => './imgs/351.jpg'
		),
		9 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/a6c5b72854315bc1f69c/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw1024/84f58744gw1ebejnvim54j208c08cq3h.jpg',
				'jieguo' => '游泳时游泳圈漏气溺水而死',
				'text' => '36岁' ,
				'img' => './imgs/36.jpg'
		),
		10 => array (	
				'pic' => 'http://app.qpic.cn/mblogpic/761621fd370e54dd2ea8/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw1024/84f58744gw1ebejnvscjsj208c08c74t.jpg',
				'jieguo' => '在街上看到帅哥花痴而死',
				'text' => '38岁' ,
				'img' => './imgs/38.jpg'
		),
		11 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/195186322624a4982300/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw1024/84f58744gw1ebek9ihur0j208c08cq3h.jpg',
				'jieguo' => '彩票中大奖太开心脑溢血死亡',
				'text' => '40岁' ,
				'img' => './imgs/40.jpg'
		),
		12 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/f2d99519f8d81896cc7c/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw1024/84f58744gw1ebejnw3ux7j208c08c0t9.jpg',
				'jieguo' => '吃饭时太过急促被噎死',
				'text' => '42岁' ,
				'img' => './imgs/42.jpg'
		),
		13 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/00da58a5f62c66a9e98a/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw1024/84f58744gw1ebejnwim5dj208c08cwez.jpg',
				'jieguo' => '过马路被行人撞死',
				'text' => '44岁' ,
				'img' => './imgs/44.jpg'
		),
		14 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/808d89c44d9900684fc4/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw1024/84f58744gw1ebek8hazp2j208c08ct98.jpg',
				'jieguo' => '欠债被债主追债而自杀',
				'text' => '45岁' ,
				'img' => './imgs/45.jpg'
		),
		15 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/46e95cab58599b7b95fa/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw1024/84f58744gw1ebek8h4487j208c08cmxn.jpg',
				'jieguo' => '吃的太饱被撑死',
				'text' => '45岁',
				'img' => './imgs/451.jpg' 
		),
		16 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/db40e9f5bd8cd6d0994e/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw1024/84f58744gw1ebejp7t7jgj208c08ct98.jpg',
				'jieguo' => '乘坐动车后失踪，死因不明',
				'text' => '47岁' ,
				'img' => './imgs/47.jpg' 
		),
		17 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/a1a9c85ef9754dd3e1ce/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw1024/84f58744gw1ebejp856iij208c08cmxo.jpg',
				'jieguo' => '做坏事太多，被雷劈死',
				'text' => '50岁' ,
				'img' => './imgs/50.jpg' 
		),
		18 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/03277099ec39c6ed8ee8/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw1024/84f58744gw1ebejp8dc7tj208c08c3z0.jpg',
				'jieguo' => '纵欲过度，吐血而死',
				'text' => '52岁' ,
				'img' => './imgs/52.jpg' 
		),
		19 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/1bf67798dc46fef4bf98/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw1024/84f58744gw1ebejp8pezrj208c08c74s.jpg',
				'jieguo' => '见义勇为被歹徒刺死',
				'text' => '54岁' ,
				'img' => './imgs/54.jpg' 
		),
		20 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/9bfb86e24a651eec9f98/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw1024/84f58744gw1ebejp8w5a0j208c08ct98.jpg',
				'jieguo' => '不交管理费被城管打死',
				'text' => '55岁' ,
				'img' => './imgs/55.jpg' 
		),
		21 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/d85c0203838921321e44/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw1024/84f58744gw1ebejp93oxkj208c08cdgc.jpg',
				'jieguo' => '得病后服用假药而死',
				'text' => '59岁' ,
				'img' => './imgs/59.jpg' 
		),
		22 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/2c4973d43d1892905daa/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw1024/84f58744gw1ebejp9ajigj208c08c3z0.jpg',
				'jieguo' => '房子强拆时被砸死',
				'text' => '60岁' ,
				'img' => './imgs/60.jpg' 
		),
		23 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/7318879021ec000710be/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw1024/84f58744gw1ebejp9itdsj208c08cq3g.jpg',
				'jieguo' => '找不到厕所被活活憋死',
				'text' => '64岁' ,
				'img' => './imgs/64.jpg' 
		),
		24 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/374c631cfeb2b760872a/460',
				'pic_sina' => 'http://ww1.sinaimg.cn/mw1024/84f58744gw1ebejp9txdvj208c08c3yz.jpg',
				'jieguo' => '跟ta一起老死',
				'text' => '80岁' ,
				'img' => './imgs/80.jpg' 
		),
		25 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/d84fc9fa9e6a4dc9573a/460',
				'pic_sina' => 'http://ww2.sinaimg.cn/mw1024/84f58744gw1ebejqhehowj208c08ct98.jpg',
				'jieguo' => '横穿马路被压路机压死',
				'text' => '80岁' ,
				'img' => './imgs/801.jpg' 
		),
		26 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/06b946b25a92d0837350/460',
				'pic_sina' => 'http://ww3.sinaimg.cn/mw1024/84f58744gw1ebejqhm6daj208c08caal.jpg',
				'jieguo' => '拯救世界结果被坏人打死',
				'text' => '80岁' ,
				'img' => './imgs/802.jpg' 
		),
		27 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/454f32371158137c9a04/460',
				'pic_sina' => 'http://ww4.sinaimg.cn/mw1024/84f58744gw1ebejqgivjfj208c08ct98.jpg',
				'jieguo' => '一辈子无病无灾，正常死亡',
				'text' => '90岁' ,
				'img' => './imgs/90.jpg' 
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
$img = getImgType($result['img']);

$content = '天有不测风云，人有旦夕祸福。【'.$name.'】会在【'.$result['text'].'】时，【'.$result['jieguo'].'】，要不要这么威武啊。快来测测你会怎样死去吧：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams ['pic'] = $result ['pic'];
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->你会怎样死去？";
$pagrams [summary] = "天有不测风云，人有旦夕祸福。想知道你会怎样死去吗？快来测试吧！测试地址：" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['url'] = $url;
$rt_info ['result_img'] = $result ['pic'];
$rt_info ['result_title'] = '会在【'.$result['text'].'】时，【'.$result['jieguo'].'】';
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
