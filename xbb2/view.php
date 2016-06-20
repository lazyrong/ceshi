<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'xbb2';

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
	header ( 'Location:./login.php?id=q&app=xbb2&act=view' );
	exit ();
}
if (! $name || ! $sex) {
	header ( 'Location:./' );
	exit ();
}
check_appstatus ( $app_name );
// if ($_POST) {
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );
$num = str_to_num ( $name, $app_name );
$str = "";

if ($sex == '2') {
	$resultlist = array(
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/07488f585f2e8ec255ea/2000',
					'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebf0i688b8j208m09gabi.jpg',
					'jieguo'=>'于果女友【珊珊】',
					'img' => './imgs/girl/1.jpg'
			),
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/373ca5df598ee3d82f34/2000',
					'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebf0i6n1ffj208m09gta8.jpg',
					'jieguo'=>'李三妹的妈妈【周云清】',
					'img' => './imgs/girl/2.jpg'
			),
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/a9c98e35fec0565eacc6/2000',
					'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebf04urigyj208m09gwfw.jpg',
					'jieguo'=>'大胜的女朋友，人民教师【小艾】',
					'img' => './imgs/girl/3.jpg'
			),
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/45d20f3d5c8b2a3b03dc/2000',
					'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebf0i7meptj208m09gab7.jpg',
					'jieguo'=>'夏天妈妈【夏小白】',
					'img' => './imgs/girl/4.jpg'
			),
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/9d6c97dbd33242fbd77c/2000',
					'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebf0i803uvj208m09gabb.jpg',
					'jieguo'=>'珊珊好闺蜜【薛丽】',
					'img' => './imgs/girl/5.jpg'
			),
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/54436da28aa15005bd34/2000',
					'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebf09iigrmj208m09gwfo.jpg',
					'jieguo'=>'帅气干练的【李三妹】',
					'img' => './imgs/girl/6.jpg'
			),
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/a76c93c9135858cb136c/2000',
					'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebf0ib442ij208m09g0tw.jpg',
					'jieguo'=>'泰勒的助理【米露】',
					'img' => './imgs/girl/7.jpg'
			),
	);
} else {
	$resultlist = array(
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/984d1dae6f33e6ce68e4/2000',
					'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebezwotj1vj208m09g0tu.jpg',
					'jieguo'=>'于果"好基友"【齐大胜】',
					'img' => './imgs/boy/1.jpg'
			),
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/0f4e653d7fe345775ea0/2000',
					'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebezwr6dbxj208m09g75e.jpg',
					'jieguo'=>'城府高深的【泰勒】',
					'img' => './imgs/boy/2.jpg'
			),
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/a1c038a86e24cd2244a8/2000',
					'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebezwueaf4j208m09ggmt.jpg',
					'jieguo'=>'土豪【维尼哥】',
					'img' => './imgs/boy/3.jpg'
			),
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/7d083ae8d5ef6a7f0284/2000',
					'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebf0idjxi4j208m09g3zr.jpg',
					'jieguo'=>'于果爸爸【于建国】',
					'img' => './imgs/boy/4.jpg'
			),
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/405127462dac869126d0/2000',
					'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebezwyk36nj208m09gq43.jpg',
					'jieguo'=>'外柔内刚的【李三弟】',
					'img' => './imgs/boy/5.jpg'
			),
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/78516882affdcd3679fe/2000',
					'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebezwz4a3nj208m09gwfr.jpg',
					'jieguo'=>'"不靠谱"爸爸【于果】',
					'img' => './imgs/boy/6.jpg'
			),
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/0704bc2c40fa2312bfca/2000',
					'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebezx1v1dij208m09gq4d.jpg',
					'jieguo'=>'大胜与小艾的司仪【杜海涛】',
					'img' => './imgs/boy/7.jpg'
			),
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/d61ebb7020c74da476f6/2000',
					'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebezx4fhb4j208m09ggmu.jpg',
					'jieguo'=>'鬼马精灵【夏天】',
					'img' => './imgs/boy/8.jpg'
			),
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/b7597d902268a64cf97a/2000',
					'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebezx50lpvj208m09g75k.jpg',
					'jieguo'=>'刀子嘴，豆腐心的【大飞哥】',
					'img' => './imgs/boy/9.jpg'
			),
			array(
					'pic'=>'http://app.qpic.cn/mblogpic/4067194a2707ae994ae0/2000',
					'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebezx8433qj208m09g406.jpg',
					'jieguo'=>'客串前国脚【高峰】',
					'img' => './imgs/boy/10.jpg'
			),
	);
}
$num = $num % count($resultlist);
$result = $resultlist[$num];
if (!$result) {
	$result = $resultlist[array_rand($resultlist)];
}
if (strtolower($result_pic_pf) == 'sina') {
	$result ['pic'] = $result ['pic_sina']?$result ['pic_sina']:$result ['pic'];
}

$img=getImgType($result['img']);
// $img_path='./imgs/'.$folder.'/'.$num.'.jpg';
// $img=getImgType($img_path);
// $img=createImg($img,$nick,115,28,13,0,14,'000');

$content = '【测测你是小爸爸里的谁】哈哈，经过专业分析，【' . $name . '】在小爸爸里面居然会是' . $result ['jieguo'] . '，赶快来测测你会是小爸爸里面的谁！测试地址：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams ['pic'] = $result ['pic'];
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->测测你是小爸爸里的谁";
$pagrams [summary] = "小伙伴们快来测测你是小爸爸里的谁吧！测试地址：" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_title'] = $result ['jieguo'] ;
$rt_info ['url'] = $url;
$rt_info ['result_img'] = $result ['pic'];
setcookie ( 'app_xbb_name', NULL, - 3000, '/' );
setcookie ( 'app_xbb_sex', NULL, - 3000, '/' );
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
