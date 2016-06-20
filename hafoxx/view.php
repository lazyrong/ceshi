<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'hafoxx';
$score = '';
if ($_POST ['i1'] != '' && $_POST ['i30'] != '') {
	$score = 0;
	$i = 1;
	while ( $i <= 30 ) {
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
if (strlen($score) == 0 || ! is_numeric ( $score )) {
	header ( 'Location:./' );
	exit ();
}
check_appstatus ( $app_name );
$nick = $_COOKIE ['v_nick'];
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );

$sex = $_COOKIE['v_sex'];
$jieguo = '';
$img_path = '';
if ($sex == 2) {
	if ($score < 0) {
		$jieguo = '女王大人';
		$img_path = './imgs/19.png';
	} else if($score<150){
		$jieguo = '女汉子';
		$img_path = './imgs/12.png';
	} else if ($score<180) {
		$jieguo = '男女通吃';
		$img_path = './imgs/16.png';
	} else if ($score<300){
		$jieguo = '软妹子';
		$img_path = './imgs/13.png';
	} else {
		$jieguo = '柔弱女子';
		$img_path = './imgs/17.png';
	}
} else {
	if ($score < 0) {
		$jieguo = '纯爷们';
		$img_path = './imgs/11.png';
	} else if($score<150){
		$jieguo = '直男';
		$img_path = './imgs/14.png';
	} else if ($score<180) {
		$jieguo = '男女通吃';
		$img_path = './imgs/16.png';
	} else if ($score<300){
		$jieguo = '男闺蜜';
		$img_path = './imgs/15.png';
	} else {
		$jieguo = '外星人';
		$img_path = './imgs/18.png';
	}
}
$left_px = 90;
$len = strlen(strval($score));
$left_px = $left_px - ($len - 1)*10;
$score = '' . $score . '分';

$img = getImgType ( $img_path );
// $img = createImg ( $img, $nick, 108, 155, 12, 0, 16, 'f00', 'yahei' );
//$img = createImg ( $img, $score, $left_px, 135, 12, 0, 30, 'f00', 'yahei' );
// $img = createImg ( $img, $jieguo, 90, 265, 11, 0, 20, 'f00', 'yahei' );

$content = '经过哈佛标准性向测试，我居然是' . $jieguo . '！ 答题测出你的大脑雄性和雌性荷尔蒙水平，一窥你内心深处的性取向。直男or娘炮、女汉子or软妹子，一测便知！ 测试地址：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams [img] = $img;
$pagrams [type] = 'png';
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->哈佛性向测试";
$pagrams [summary] = "答题测出你的大脑雄性和雌性荷尔蒙水平，一窥你内心深处的性取向。直男or娘炮、女汉子or软妹子，一测便知！测试地址：" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info['result_title'] =  '【'.$jieguo.'】';
$rt_info['result_remark'] = '<p>经过测试，你的得分：<font color="red">'.$score.'</font>，你的性向属于：<font color="red">'.$jieguo.'</font></p>';
$rt_info['result_remark'] .= '<p>得分解释：</p>';
$rt_info['result_remark'] .= '<p>多数男性的分数会分布在 0-180 分之间，多数女性的分数会分布在 150-300 分之间</p>';
$rt_info['result_remark'] .= '<p><font color="red">0分～150分：</font>大脑偏男性化，分数越接近0分就越男性化。特点是有很强的逻辑观念、分析能力、说话技巧,很自律,也很有组织,不容易受到情绪的影响，要是女性得到很低的分数,那可能有女同性恋的倾向。</p>';
$rt_info['result_remark'] .= '<p><font color="red">150分～180分：</font>思考方式拥有两性的特质，对男女都没有偏见,并在解决问题方面,反应会比较灵活,找出最佳的解决方法。不管男性或女性,他都可以成为他们的好友。</p>';
$rt_info['result_remark'] .= '<p><font color="red">180分～300分：</font>大脑偏女性化，分数越高,大脑就越女性化。特点是富有创意,有音乐艺术方面的天份。会凭直觉与感觉做决定,并擅长从很少的资讯判断问题。分数高过180分的男人,他们是同性恋的机率也越高。</p>';
$rt_info['result_remark'] .= '<p>分数低于0分的男性或高于300分的女性：大脑的构造是完全不同的,同在地球上生活是你们唯一的共同点。</p>';
setcookie ( 'app_' . $app_name . '_score', NULL, - 3000, '/' );
if (is_mobile ()) {
	require_once './../a_include/rt_mobile.php';
} else {
	require_once './../a_include/header.php';
	require_once './../a_include/rt_main.php';
	require_once './../a_include/footer.php';
}
?>
