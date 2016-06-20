<?
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';

$app_name = 'kwzy';

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

$resultlist = array (
		0 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/776808e1343aab17eede/2000',
				'zhiye' => '川菜厨子',
				'text' => '知心味道给知心的人～我爱我菜～' 
		),
		1 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/d78a581c6a9b9ecb72a6/2000',
				'zhiye' => '演讲帝',
				'text' => '语言的魅力无人能敌～话中自有颜如玉～乐吧～' 
		),
		2 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/380a0c0c17a565157b4e/2000',
				'zhiye' => '诗人',
				'text' => '好湿好湿～佩服佩服～' 
		),
		3 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/c0eefa140e4edf7cd1b4/2000',
				'zhiye' => '图书馆管理员',
				'text' => '其实我一直很有才～只是被埋没～' 
		),
		4 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/281a9cf5a31d64f50238/2000',
				'zhiye' => '盗梦者',
				'text' => '盗高一尺，魔高一丈～' 
		),
		5 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/946b4c738586e08cc022/2000',
				'zhiye' => '教授',
				'text' => '教授何其多～教授何其少～' 
		),
		6 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/e1bf8b087a2569c4c534/2000',
				'zhiye' => '双面间谍',
				'text' => '白加黑一样黑白分明，人格分裂有木有～不过都超级有才啊' 
		),
		7 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/9a8b684392b4ead24b96/2000',
				'zhiye' => '相声演员',
				'text' => '因为有你，郭德纲的相声事业感受了冲击力！' 
		),
		8 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/857d246f18274349251c/2000',
				'zhiye' => '电影放映者',
				'text' => '给人带来欢乐，是你最大的满足～' 
		),
		9 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/6cab394f379928066d0e/2000',
				'zhiye' => '钢琴演奏家',
				'text' => '你的演奏技巧可以与海上钢琴师有一拼！' 
		),
		10 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/91324a26e6012d82f1c6/2000',
				'zhiye' => '什么职业都行',
				'text' => '只要经常出差就行' 
		),
		11 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/a12928a8de92a435dd22/2000',
				'zhiye' => '广告人',
				'text' => '中国的广告，唉，你能拯救下吗？' 
		),
		12 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/501c9374eb643f3a96a2/2000',
				'zhiye' => '裁缝',
				'text' => '你是著名的服装设计师～一针一线皆有心～' 
		),
		13 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/0340446b12bded68601e/2000',
				'zhiye' => '赛车手',
				'text' => '在牛的赛车手在北京的路上也要耐心堵着～' 
		),
		14 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/8f1de0bcbd159f4cd83e/2000',
				'zhiye' => '农民知识分子',
				'text' => '现在谁都想当农民，有地，有房，空气好，好快活～' 
		),
		15 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/21484da928b06c8b535a/2000',
				'zhiye' => '流氓大亨',
				'text' => '没有你一些人的职业就白设置了～' 
		),
		16 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/3fd88a270485f5eba02e/2000',
				'zhiye' => '化妆师',
				'text' => '有时候化腐朽为神奇，有时候化腐朽为更腐朽~' 
		),
		17 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/53344ec69fae644a6acc/2000',
				'zhiye' => '拳击手',
				'text' => '享受被打和打人的high点！' 
		),
		18 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/8d351b29bce1b4b53aa4/2000',
				'zhiye' => '大熊猫饲养员',
				'text' => '天天和国宝在一起！' 
		),
		19 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/01257e1a6604ad5a5ae0/2000',
				'zhiye' => '名侦探',
				'text' => '专门给有钱有势的人办事儿～灰色的那啥你懂滴' 
		),
		20 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/dfc8e819ef6623e5fa4c/2000',
				'zhiye' => '幼儿园老师',
				'text' => '小朋友们，来跟阿姨一起说，早上好！' 
		),
		21 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/e501b145a0376806161e/2000',
				'zhiye' => '医生',
				'text' => '仁心仁术～不过要分人～' 
		),
		22 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/aaf25200cdb23ae991a2/2000',
				'zhiye' => '咖啡厅老板',
				'text' => '感受着咖啡香，悠闲自在' 
		),
		23 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/ab54d4310feab38b4722/2000',
				'zhiye' => '行者',
				'text' => '天下无疆，任意驰骋' 
		),
		24 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/99b8b69f837a2f4c5bd8/2000',
				'zhiye' => '个性小店老板',
				'text' => '我的地盘我做主' 
		),
		25 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/3b0bb18cde9be59a22f2/2000',
				'zhiye' => '歌唱者',
				'text' => '虽然偶尔不在调～但是大家还是喜欢你' 
		),
		26 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/d5aa0d8ebfd6de72277e/2000',
				'zhiye' => '演员',
				'text' => '感受不同的人生感受不同的时间～你爱它！' 
		),
		27 => array (
				'pic' => 'http://app.qpic.cn/mblogpic/bec01a6df32a59372a94/2000',
				'zhiye' => '作家',
				'text' => '爱宅爱文字～名作家非你莫属！' 
		) 
);
$num = $num % count ( $resultlist );
$result = $resultlist [$num];
if (! $result) {
	$result = $resultlist [array_rand ( $resultlist )];
}

$img_path='./imgs/'.$num.'.jpg';
$img=getImgType($img_path);

$content = '/偷笑 我刚刚测出了我潜意识里最渴望的职业是'. $result ['zhiye'].'哟~【你们呢？来看看吧～】：' . $url;
$pagrams = array ();
$pagrams [content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams ['pic'] = $result ['pic'];
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->你潜意识里最渴望的职业是什么";
$pagrams [summary] = "每个人心中都隐藏着最渴望最理想的职业，你潜意识里最渴望的职业是什么？快来测测吧！" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info['result_img'] = $result ['pic'];
$rt_info['result_title'] =  '【'.$result['zhiye'].'】';
if (is_mobile ()) {
	require_once './../a_include/rt_mobile.php';
} else {
	require_once './../a_include/header.php';
	require_once './../a_include/rt_main.php';
	require_once './../a_include/footer.php';
}
?>