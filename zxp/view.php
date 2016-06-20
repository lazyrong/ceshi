<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'zxp';
$score = $_REQUEST ['score'];
if ($score) {
	setcookie ( 'app_' . $app_name . '_score', $score, time () + 3000, '/' );
} else {
	$score = $_COOKIE ['app_' . $app_name . '_score'];
}
if (!islogined()) {
	header ( 'Location:./login.php?id=q&app=' . $app_name . '&act=view' );
	exit ();
}
if (strlen(strval($score)) == 0) {
	header ( 'Location:./' );
	exit ();
}

check_appstatus($app_name);
$nick = $_COOKIE ['v_nick'];

$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );

$result_list = array(
	'A'=>array(
		'pic'=>'http://app.qpic.cn/mblogpic/05266d7fe8cc19f63622/2000',
		'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1eberdjxtbhj20b4089dgj.jpg',
		'jieguo'=>'和活泼健康的宝宝最相配',
		'remark'=>'你在爱情上的表现显得相当笨拙，只要在心意的人的面前就会故意装出一副很强悍的样子，这样喜欢逞强的你，正需要一个比你强悍的伴侣，最好是那种有一点粗鲁、但身体非常健康、性格开朗、体力较好、不会弱不禁风的那一型，最适合你不过了。 ',
		'info'=>'你在爱情上的表现显得相当笨拙，喜欢逞强的你，这一型最适合你不过了。',
		'img' => './imgs/1.jpg'
		),
	'B'=>array(
		'pic'=>'http://app.qpic.cn/mblogpic/f332c08d8433f677791a/2000',
		'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1eberdkx2s8j20b4089js3.jpg',
		'jieguo'=>'和有气质的文艺青年最相配',
		'remark'=>'你最重视的就是两个人的兴趣和感觉合不合，你比较欣赏重视自己的工作、拥有一片自己的天地的异性，希望他不管是文学或文艺，甚至音乐都能抱有高度的敏感性，你喜欢两个人一起去看电影，或者是听听演唱会，享受悠闲的知性的时光，要找到你的另一半，过幸福的婚姻生活的话，当然是非这种人莫属了！',
		'info'=>'你最重视的就是两个人的兴趣和感觉合不合，当然是有气质的文艺青年莫属了！',
		'img' => './imgs/2.jpg'
		),
	'C'=>array(
		'pic'=>'http://app.qpic.cn/mblogpic/c1f5db0e98844d45f940/2000',
		'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1eberdm26idj20b4089t9d.jpg',
		'jieguo'=>'和相敬如宾的人最相配',
		'remark'=>'你是一个很容易一头栽进兴趣之中的人，这样的你需要需要一个可以尊重你的兴趣和工作、百分之百支持你的伴侣，你不喜欢两个人天天腻在一起，希望彼此能保持相当的距离，所以拥有一身专业技术和知识保持着就算是两个人在一起也可以彼此拥有自己的空间的异性，是你的最佳人选。',
		'info'=>'拥有一身专业技术和知识保持着就算是两个人在一起也可以彼此拥有自己的空间的异性，是你的最佳人选。',
		'img' => './imgs/3.jpg'
		),
	'D'=>array(
		'pic'=>'http://app.qpic.cn/mblogpic/0d0369400f347ee6b72a/2000',
		'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1eberdmkszlj20b4089dgi.jpg',
		'jieguo'=>'和责任感强的人最相配',
		'remark'=>'认真和意志坚定的人是你的最佳人选，如果你要结婚，那种对家庭和工作具有很强的责任感，在公司也很受到上司信赖的人是你的第一选择，在婚前你可能还会很坚持什么男女平等、提出种种你的原则，一旦结婚之后，你就会为了对方和家庭去做任何的事情。',
		'info'=>'认真和意志坚定的人是你的最佳人选，如果你要结婚，那种对家庭和工作具有很强的责任感的是你的第一选择。',
		'img' => './imgs/4.jpg'
		),
);
$result = $result_list[strtoupper($score)];
if (!$result) {
	$result = $result_list[array_rand($result_list)];
}
if (strtolower($result_pic_pf) == 'sina') {
	$result ['pic'] = $result ['pic_sina']?$result ['pic_sina']:$result ['pic'];
}
$img = getImgType($result['img']);
$content = '我刚测试了谁跟你最相配，得到的结果是【我'.$result['jieguo'].'，'.$result['info'].'】感觉这个测试好准啊！想知道你会和什么样的人最相配吗？赶快来试试吧： ' . $url;

$pagrams = array ();
$pagrams ['content'] = $content;
$pagrams ['pic'] = $result['pic'];
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams ['url'] = $url;
$pagrams ['title'] = "点击测试->谁跟你最相配";
$pagrams ['summary'] = "专业性格分析，测测谁跟你最相配？测试地址：" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );

$rt_info ['result_remark'] = '<div>【你'.$result['jieguo'].'，'.$result['info'].'】</div><div>'.$result['remark'].'</div>';
$rt_info ['result_pic'] = $result['pic'];

setcookie ( 'app_' . $app_name . '_score', NULL, - 3000, '/' );
if (is_mobile ()) {
	require_once './../a_include/rt_mobile.php';
} else {
	require_once './../a_include/header.php';
	require_once './../a_include/rt_main.php';
	require_once './../a_include/footer.php';
}
?>
