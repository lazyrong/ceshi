<?php 
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'nsns';
$score='';

if ($_POST['i1'] != '' && $_POST['i8'] != '') {
	$score=0;
	$i=1;
	while($i<=8) {
		$score = $score + $_POST['i'.$i];
		$i++;
	}
	setcookie ( 'app_'.$app_name.'_score', $score, time () + 3000, '/' );
} else {
	$score = $_COOKIE['app_'.$app_name.'_score'];
}
if (!islogined()) {
	header('Location:./login.php?id=q&app='.$app_name.'&act=view');
	exit;
}
if (strlen($score) == 0 || !is_numeric($score)) {
	header('Location:./');
	exit;
}
check_appstatus($app_name);
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );

$jieguo = '';
$sex = $_COOKIE['app_'.$app_name.'_sex'];
setcookie ( 'app_'.$app_name.'_sex', null, -3000, '/' );
if (!$sex) {
	$sex = get_sex();
}

if ($sex == '1') {
	if ($score < 60) {
		$jieguo = '“屌丝”，洗洗睡吧……';
// 		$pic = 'http://app.qpic.cn/mblogpic/7679b49bdd908eab4a68/2000';
		$img_path = './imgs/boy/1.jpg';
	} else if ($score <= 80) {
		$jieguo = '呵呵，还算精神正常吧……';
// 		$pic = 'http://app.qpic.cn/mblogpic/fede9fd3b4a614737792/2000';
		$img_path = './imgs/boy/2.jpg';
	} else {
		$jieguo = '可望而不可及的男人，你确定没作弊？';
// 		$pic = 'http://app.qpic.cn/mblogpic/06926520e494c568b27e/2000';
		$img_path = './imgs/boy/3.jpg';
	}
	$content='【“男神”“女神”测试卷】OMG!我在"男神"测试中竟然得了'.$score.'分，'.$jieguo.'骚年们，你敢接受拷问吗？'.$url;
} else {
	if ($score < 60) {
		$jieguo = '扣脚"女汉子"，做自己的男人……';
// 		$pic = 'http://app.qpic.cn/mblogpic/f46bc707f041f934fb9c/2000';
		$img_path = './imgs/girl/1.jpg';
	} else if ($score <= 80) {
		$jieguo = '总算是个正常人了……';
// 		$pic = 'http://app.qpic.cn/mblogpic/95213ff5c82f444f873a/2000';
		$img_path = './imgs/girl/2.jpg';
	} else {
		$jieguo = '女神大人吾等吊丝跪拜了！';
// 		$pic = 'http://app.qpic.cn/mblogpic/9ede5446d564dc521cfc/2000';
		$img_path = './imgs/girl/3.jpg';
	}
	$content='【“男神”“女神”测试卷】OMG!我在"女神"测试中竟然得了'.$score.'分，'.$jieguo.'骚年们，你敢接受拷问吗？'.$url;
}

// $img_path=$pic;
$img=getImgType($img_path);
$img=createImg($img,$score,160,190,11,0,60,'f00','yahei');

$pagrams = array();
$pagrams[content] = $content;
// $pagrams['pic'] = $pic;
$pagrams[type] = 'jpg';
$pagrams[img] = $img;
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->“男神”“女神”测试";
$pagrams[summary] = "面对这套残酷的、调皮的、有节操的测试题。骚年们，你敢接受拷问吗？".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【得分：'.$jieguo.'分，'.$jieguo.'】';
$rt_info['url'] = $url;

setcookie ( 'app_'.$app_name.'_score', NULL, -3000, '/' );

if (is_mobile ()) {
	require_once './../a_include/rt_mobile.php';
} else {
	require_once './../a_include/header.php';
	require_once './../a_include/rt_main.php';
	require_once './../a_include/footer.php';
}
?>
