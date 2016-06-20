<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'hzgg';

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
					'pic' => 'http://t1.qpic.cn/mblogpic/16b3e2b889153fc646a2/460',
					'jieguo' => '塞娅',
					'text' => '什么牛啊草啊，馋不馋的，牛看到了草，当然会馋啦，怎么会‘大眼不馋呢’？',
					'img'=>'./imgs/result/girl/1.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/3ad5995cfb2ac57c587a/460',
					'jieguo' => '金锁',
					'text' => '小姐，尔康少爷是你的。' ,
					'img'=>'./imgs/result/girl/2.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/73bd7d15bf69e3b0ca10/460',
					'jieguo' => '彩霞',
					'text' => '不要打格格，打我……打我……' ,
					'img'=>'./imgs/result/girl/3.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/150d5e9aba7870c02588/460',
					'jieguo' => '老佛爷',
					'text' => '来人呀！给我把这两个格格押到慈宁宫去！' ,
					'img'=>'./imgs/result/girl/4.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/7527eb48375505bd3dfc/460',
					'jieguo' => '含香',
					'text' => '香妃娘娘变成蝴蝶飞走了。' ,
					'img'=>'./imgs/result/girl/5.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/b39f3892da1e55d872b2/460',
					'jieguo' => '知画',
					'text' => '永琪，永琪...你不要我了吗？你不要绵忆了吗？' ,
					'img'=>'./imgs/result/girl/6.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/5cbb2f8794f40557c314/460',
					'jieguo' => '紫薇',
					'text' => '山无陵，天地合，才敢与君绝！' ,
					'img'=>'./imgs/result/girl/7.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/cef0a3d92e4ec1368d30/460',
					'jieguo' => '皇后',
					'text' => '皇上，臣妾又要忠言逆耳了。' ,
					'img'=>'./imgs/result/girl/8.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/37e69dba979d3c0f5be8/460',
					'jieguo' => '令妃',
					'text' => '打在儿身，痛在娘心。' ,
					'img'=>'./imgs/result/girl/9.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/ad6c02011de9266204a4/460',
					'jieguo' => '夏雨荷',
					'text' => '你还记得大明湖畔的夏雨荷吗？' ,
					'img'=>'./imgs/result/girl/10.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/b32333a6701d656818d8/460',
					'jieguo' => '夏盈盈',
					'text' => '天茫茫，水茫茫，望断天涯，人在何方?' ,
					'img'=>'./imgs/result/girl/11.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/4274b99b7c9b122ee066/460',
					'jieguo' => '容嬷嬷',
					'text' => '扎扎扎扎扎……' ,
					'img'=>'./imgs/result/girl/12.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/a4b1f167a44a5700f3cc/460',
					'jieguo' => '小燕子',
					'text' => '要头一颗！要命一条！' ,
					'img'=>'./imgs/result/girl/13.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/d0a64929d7e8425d4c32/460',
					'jieguo' => '慕沙',
					'text' => '罂粟花丛一美人，英姿飒爽武功高。' ,
					'img'=>'./imgs/result/girl/14.jpg' 
			) ,
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/2e4be60162d910c69ac2/460',
					'jieguo' => '晴儿',
					'text' => '生活里没有自我，只有老佛爷！' ,
					'img'=>'./imgs/result/girl/15.jpg' 
			),
	);
} else {
	$resultlist = array (
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/c96c6af9338f5ba332a8/460',
					'jieguo' => '柳青',
					'text' => '金锁，你到底要不要...嫁我？' ,
					'img'=>'./imgs/result/boy/1.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/c49fb40614883bb44296/460',
					'jieguo' => '福伦',
					'text' => '咱们要保护令妃娘娘。' ,
					'img'=>'./imgs/result/boy/2.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/e845ef97855f54d37526/460',
					'jieguo' => '福尔康',
					'text' => '紫薇，一个破碎的我要怎么拯救一个破碎的你？' ,
					'img'=>'./imgs/result/boy/3.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/c9497dcd5f60a1216932/460',
					'jieguo' => '小邓子',
					'text' => '奴才给格格磕头了！' ,
					'img'=>'./imgs/result/boy/4.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/6ef654cbb7a80c5fd43c/460',
					'jieguo' => '永琪',
					'text' => '这不是被我一箭射来的格格嘛！' ,
					'img'=>'./imgs/result/boy/5.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/896ef936790da85575b4/460',
					'jieguo' => '箫剑',
					'text' => '一箫一剑走江湖，自古情仇酒一壶。' ,
					'img'=>'./imgs/result/boy/6.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/aa9f21c8ec3834d1d922/460',
					'jieguo' => '皇阿玛',
					'text' => '雨荷，不敢期待的是朕，深不可测的是你。' ,
					'img'=>'./imgs/result/boy/7.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/136ef04550215cf78972/460',
					'jieguo' => '福尔泰',
					'text' => '中原的男人可没那么容易就受伤的。' ,
					'img'=>'./imgs/result/boy/8.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/b2eea6a67649f36ce818/460',
					'jieguo' => '小卓子',
					'text' => '奴才皮糙肉厚，你打奴才吧！' ,
					'img'=>'./imgs/result/boy/9.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/7f8599c074bb562022cc/460',
					'jieguo' => '梁大人',
					'text' => '微臣救驾来迟，请皇上恕罪。' ,
					'img'=>'./imgs/result/boy/10.jpg' 
			) ,
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/45d78c380545cf9538ae/460',
					'jieguo' => '蒙丹',
					'text' => '你是风儿，我是沙……' ,
					'img'=>'./imgs/result/boy/11.jpg' 
			),
			array (
					'pic' => 'http://t1.qpic.cn/mblogpic/fea91b5c7fb5b1ff2c30/460',
					'jieguo' => '纪师傅',
					'text' => '师傅眼睛圆又圆，一拳过去少半边。' ,
					'img'=>'./imgs/result/boy/12.jpg' 
			)
	);
}

$num = $num % count ( $resultlist );
$result = $resultlist [$num];
if (! $result) {
	$result = $resultlist [array_rand ( $resultlist )];
}

$img=getImgType($result['img']);
$content = '经过专业分析，【' . $name . '】在还珠格格里面居然会是【' . $result ['jieguo'] . '】：“' . $result ['text'] . '”15年经典重温，小伙伴赶快来测测你会是还珠格格里面的谁吧：' . $url.'index.php?id='.rand(1, 100).' ';

$pagrams = array ();
$pagrams [content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams ['pic'] = $result ['pic'];
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->测测你是还珠格格里面的谁";
$pagrams [summary] = "小伙伴们快来测测你是还珠格格里面的谁吧！测试地址：" . $pagrams [url];
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
		//require_once './view_mobile.php';
	} else {
		require_once './../a_include/header.php';
		require_once './../a_include/rt_main.php';
		require_once './../a_include/footer.php';
	}
}

?>
