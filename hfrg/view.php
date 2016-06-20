<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'hfrg';
$score = '';
if ($_POST ['i1'] != '' && $_POST ['i9'] != '') {
	$score = 0;
	$i = 1;
	while ( $i <= 9 ) {
		$score = $score + $_POST ['i' . $i];
		$i ++;
	}
	setcookie ( 'app_' . $app_name . '_score', $score, time () + 3000, '/' );
} else {
	$score = $_COOKIE ['app_' . $app_name . '_score'];
	setcookie ( 'app_' . $app_name . '_score', null, -3000, '/' );
}
if (!islogined()) {
	header ( 'Location:./login.php?id=q&app=' . $app_name . '&act=view' );
	exit ();
}
if (strlen(strval($score)) == 0 || ! is_numeric ( $score )) {
	header ( 'Location:./' );
	exit ();
}
check_appstatus ( $app_name );
$nick = $_COOKIE ['v_nick'];
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );

$sex = $_COOKIE['v_sex'];
$result = array();
if ($score <=20) {
	$result['jieguo'] = '你是个害羞的人喔！';
	$result['text'] = '总有些时候你宁可待在家里享受一个人的自在 , 也不愿去面对一些讨厌的人们 , 看来邱比特曾经开你一场玩笑！';
	$result['remark'] = '当处在人多的场合时 ,你便会感到不自在. 你常会觉得你的身心生得不是很一致或觉得你生错了时代. 你实际上比你看起来要聪明多了 ,但是你不想让别人知道这点. 大概是属于那种深藏不露的人 你有一颗可以容纳很多想法的"心" , 可是也因为你有太多想法,所以常你的思绪塞车你拥有艺术方面的天份 , 你喜欢的音乐类型是:描写爱情为爱伤心失恋的歌 , 你喜欢的电影:铁达尼号 , 总有些时候你宁可待在家里享受一个人的自在 , 也不愿去面对一些讨厌的人们 , 看来邱比特曾经开你一场玩笑! 有人曾伤过你的心! , 在你童年的时候你的父母常吵架 , 你曾有过去刺青的念头。';
} else if ($score <=30) {
	$result['jieguo'] = '尽管生活是有崎岖挫折, 但你总有办法克服 顺利渡过！';
	$result['text'] = '生活就像在坐云霄飞车一样 , 你总是想尽办法让生活过得更加如你所愿！ ';
	$result['remark'] = '你遭遇过的措折比一般人多 , 你曾经接触过一些难相处的人 , 没道理的规定和不和谐的人际关系 你对爱情的态度就像太阳表面一般热情高温 , 当你被很多烦人的事困扰的时候 , 你要不就是非常镇定的静观其变 , 要不就是以领导者的姿态出现叫大家都闭嘴 你觉得一个人去看电影没什么大不了的 , 反而想不通为什么有些人非要有人陪 才肯去看电影 , 你感到自在不论是一个人独处或处在人群当中 , 你对你的父母不很满意但又无法改变他们你会是个很好的情人 , 如果你能在万人之中找到和你极为相配的人 , 不然的话 你和恋人的关系总是不能持久或痛苦结束你可能已经和一个你并不爱的人在一起太久了 , 生活就像在坐云霄飞车一样 , 你总是想尽办法让生活过得更加如你所愿 , 你要不就是个运动迷 , 要不你就曾经尝试过禁药。';
} else if ($score <=42) {
	$result['jieguo'] = '大致而言，你算是一个冷静的人！';
	$result['text'] = '会让你兴奋的情况有 , 1.当你爱的乐团或歌手要来举行演唱会 , 2.和情人约会 , 3.和朋友跳舞！ ';
	$result['remark'] = '会让你兴奋的情况有 , 1.当你爱的乐团或歌手要来举行演唱会 , 2.和情人约会 , 3.和朋友跳舞 的时候 对你来说 朋友比什么都重要 , 你爱好艺术和喜欢诗词 , 你喜欢办party或帮朋友一齐筹划party , 通常你身旁不缺追求的人 , 但你总是三不五时碰到一些呆板不解风情的人 , 你喜欢户外活动 , 即使下雨天也影响不了你爱好户外活动的精神你有时候会嫉妒那些比你聪明或比你帅/美的人 , 但当你是个就事论事的人 , 不会因为私人情绪影响你正确公正的判断能力 , 你和你的父母关系良好 , 虽然有时你会觉得快被他们搞疯了 , 你曾不小心看过你父母间的亲密行为 认识你的人都觉得你是一个 , 可依赖值得信赖的人 , 你爱动物。';
} else {
	$result['jieguo'] = '你有太多想法和计划 以致你总是觉得时间不够用！';
	$result['text'] = '你是那种会让人崇拜的人 , 你可以说是一个有能力让“心想事成”的人 ';
	$result['remark'] = '如果你感到无聊 你总是能够想出办法把场面炒热 , 你是那种会让人崇拜的人 , 你可以说是一个有能力让"心想事成"的人 你通常不在乎别人的想法是个自我中心的人 , 你可以很自然的在大庭广众下亲吻你的男/女朋友 , "性"对你来说 就像是一种充满热情的艺术品 , Sex for you is a passionate art， and you never have a , probleminbed，except for being a little too wild for your > > partner , (sorry…想了很久还是决定用英文) 你拥有过人的精力 , 你喜欢亲自下场运动胜过在场外观看 , 常有人嫉妒你的一切 但这些都很难引起你的注意 你有两位很活耀的父母 , 也因此你常觉得他们没有足够的时间陪你 , 你有刺青或是乐团成员 , 或有一头金发(好像不适用)或?O球队的队员 , 身为人们崇拜的偶像 , 人们喜欢跟随你的脚步 , 希望能变得像你一样 即使有时候你也是一团糟 , 但你从不让自己颓废下去 , 你总有办法恢复成耀眼的星星。';
}

$content = '经过哈佛专业人格测试，我得到的结果是【' . $result['jieguo'].$result['text'] . '】 感觉这个测试特别准，想知道你的人格是那样的吗？快来测测吧！ 测试地址：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams ['pic'] = $result['pic'];
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->哈佛专业人格测试";
$pagrams [summary] = "想知道你的人格是那样的吗？快来测测吧！ 测试地址：" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_img'] = $pic;
$rt_info['result_remark'] = '<p>经过测试，你的得分：<font color="red">'.$score.'</font>，人格分析：<font color="red">'.$result['jieguo'].'</font></p>';
$rt_info['result_remark'] .= '<p>'.$result['remark'].'</p>';
setcookie ( 'app_' . $app_name . '_score', NULL, - 3000, '/' );
if (is_mobile ()) {
	require_once './../a_include/rt_mobile.php';
} else {
	require_once './../a_include/header.php';
	require_once './../a_include/rt_main.php';
	require_once './../a_include/footer.php';
}
?>
