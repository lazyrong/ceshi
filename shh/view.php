<?php 
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'shh';

if (isset($_POST['i1']) && isset($_POST['i20'])) {
	$score=0;
	$i=1;
	while($i<=20) {
		$score = $score + $_POST['i'.$i];
		$i++;
	}
// 	setcookie ( 'app_'.$app_name.'_score', $score, time () + 3000, '/' );
	$mmc=@memcache_init();
	$mmc->set($_COOKIE [$app_name.'_score_key'],$score,MEMCACHE_COMPRESSED,1000);
} else {	
	$mmc=@memcache_init();
	$score = $mmc->get($_COOKIE ['shh_score_key']);
	$mmc->set($_COOKIE ['shh_score_key'],null);
	setcookie ( $app_name.'_score_key', null, -3000, '/' );
}

if (!$_COOKIE['v_o_t_']) {
	header('Location:./login.php?id=q&app=shh&act=view');
}
if ($score == '' || !is_numeric($score)) {
	header('Location:./');
}

$infos=get_user_info();
$name=$_COOKIE['v_name'];
$nick=$_COOKIE['v_nick'];
$url=$infos['url'];
$nick_len=mb_strlen($nick,'UTF8');
switch($nick_len)
{
	case 1:$left_px=145;break;
	case 2:$left_px=130;break;
	case 3:$left_px=118;break;
	case 4:$left_px=108;break;
	case 5:$left_px=96;break;
	case 6:$left_px=87;break;
	case 7:$left_px=77;break;
	case 8:$left_px=67;break;
	case 9:$left_px=57;break;
	case 10:$left_px=47;break;
	case 11:$left_px=37;break;
	case 12:$left_px=27;break;
	default:$left_px=27;
}

// if ($_POST) {
	$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
	$url = str_replace ( 'index.php', '', $url );
	$url = str_replace ( 'view.php', '', $url );
	$num=str_to_num($name,$app_name);
	$str = "";


	if($score>=0&&$score<=20)
	{
		$jieguo="魔都很魔，完全不懂大家在还说啥～魔啥啊！";
	}
	
	if($score>20&&$score<=40)
	{
		$jieguo="你的上海话貌似还欠点火候，在学习学习吧～魔都在召唤你哦～";
	}
	
	if($score>40&&$score<=60)
	{
		$jieguo="到上海有几年了吧～有些上海味喽～魔都魔都魔都都～";
	}
	
	if($score>60&&$score<=80)
	{
		$jieguo="你的上海话很不错，可以自由行走魔都了～～羡慕个～";
	}
	if($score>80&&$score<=100)
	{
		$jieguo="你是上海本地人吧～！完全难不倒你啊～膜拜下～";
	}
	
	$score=''.$score.'分';
	
	$img_path='./imgs/result.png';
	$img=getImgType($img_path);
	$img=createImg($img,$nick,108,155,12,0,16,'f00','yahei');
	$img=createImg($img,$score,170,220,12,0,50,'f00','yahei');
	$img=createImg($img,$jieguo,90,265,11,0,20,'f00','yahei');
	
	$content='我刚参加了《上海话八级水平考试》，我考了'.$score.'分，貌似可以小混下魔都了，推荐给大家玩玩， 测试地址：'.$url;
	
	
	$pagrams = array();
	$pagrams[content] = $content;
	$pagrams[img] = $img;
	$pagrams[type] = 'png';
	//@账号内容会过多
	$pagrams[url] = $url;
	$pagrams[title] = "点击测试->上海话八级水平考试";
	$pagrams[summary] = "上海话八级水平考试，回答20道题，就能测出你的上海话地道不地道~".$pagrams[url];
	$rt_info=post_send2($pagrams);
	
	$rt_info['url'] = $url;
	
	setcookie ( 'app_'.$app_name.'_score', NULL, -3000, '/' );
// 	$mmc=@memcache_init();
// 	$mmc->set('app_result_'.$_COOKIE ['v_o_t_openid'],$rt_info,MEMCACHE_COMPRESSED,1000);
// 	header('Location:../result.php');
// 	exit;
// } else {
	if (is_mobile ()) {
		require_once './../a_include/rt_mobile.php';
	} else {
		require_once './../a_include/header.php';
		require_once './../a_include/rt_main.php';
	}
?>
