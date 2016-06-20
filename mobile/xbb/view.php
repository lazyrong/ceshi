<?php 
header('Content-Type: text/html; charset=utf-8');
require_once './../../global.inc.php';
require_once './../../a_cache/app_top.php';
require_once './../../a_include/func/Funcs.inc.php';
$app_name = 'xbb2';

if (($_POST['name'] && $_POST['sex']) || ($_GET['name'] && $_GET['sex'])) {
	$name = $_REQUEST['name'];
	$sex = $_REQUEST['sex'];
	setcookie ( 'app_'.$app_name.'_name', $name, time () + 3000, '/' );
	setcookie ( 'app_'.$app_name.'_sex', $sex, time () + 3000, '/' );
} else {	
	$name = $_COOKIE['app_'.$app_name.'_name'];
	$sex = $_COOKIE['app_'.$app_name.'_sex'];
}

if (!$_COOKIE['v_o_t_']) {
	header('Location:./login.php?id=q&app=xbb2&act=view');
	exit;
}
	if (!$name || !$sex) {
		header('Location:./');
		exit;
	}

// if ($_POST) {
	$url = 'http://' . $_SERVER ['HTTP_HOST'] . '/xbb2';
	$url = str_replace ( 'index.php', '', $url );
	$url = str_replace ( 'view.php', '', $url );
	$num=str_to_num($name,$app_name);
	$str = "";

	$boy_img_list = array(
			'1'=>'http://app.qpic.cn/mblogpic/984d1dae6f33e6ce68e4/2000',
			'2'=>'http://app.qpic.cn/mblogpic/0f4e653d7fe345775ea0/2000',
			'3'=>'http://app.qpic.cn/mblogpic/a1c038a86e24cd2244a8/2000',
			'4'=>'http://app.qpic.cn/mblogpic/7d083ae8d5ef6a7f0284/2000',
			'5'=>'http://app.qpic.cn/mblogpic/405127462dac869126d0/2000',
			'6'=>'http://app.qpic.cn/mblogpic/78516882affdcd3679fe/2000',
			'7'=>'http://app.qpic.cn/mblogpic/0704bc2c40fa2312bfca/2000',
			'8'=>'http://app.qpic.cn/mblogpic/d61ebb7020c74da476f6/2000',
			'9'=>'http://app.qpic.cn/mblogpic/b7597d902268a64cf97a/2000',
			'10'=>'http://app.qpic.cn/mblogpic/4067194a2707ae994ae0/2000',
	);
	$girl_img_list = array(
			'1'=>'http://app.qpic.cn/mblogpic/07488f585f2e8ec255ea/2000',
			'2'=>'http://app.qpic.cn/mblogpic/373ca5df598ee3d82f34/2000',
			'3'=>'http://app.qpic.cn/mblogpic/a9c98e35fec0565eacc6/2000',
			'4'=>'http://app.qpic.cn/mblogpic/45d20f3d5c8b2a3b03dc/2000',
			'5'=>'http://app.qpic.cn/mblogpic/9d6c97dbd33242fbd77c/2000',
			'6'=>'http://app.qpic.cn/mblogpic/54436da28aa15005bd34/2000',
			'7'=>'http://app.qpic.cn/mblogpic/a76c93c9135858cb136c/2000',
	);
	$ret_img = '';
	if($sex=='2')//如果为女
	{
		$folder='girl';
		if($num>7)
		{
			$num=ceil($num/15);
		}
		if ($num == 0) $num=1;
		$ret_img = $girl_img_list[$num];
		switch($num)
		{
			case 1:$str='于果女友【珊珊】';break;
			case 2:$str='李三妹的妈妈【周云清】';break;
			case 3:$str='大胜的女朋友，人民教师【小艾】';break;
			case 4:$str='夏天妈妈【夏小白】';break;
			case 5:$str='珊珊好闺蜜【薛丽】';break;
			case 6:$str='帅气干练的【李三妹】';break;
			case 7:$str='泰勒的助理【米露】';break;
		}
	
	}
	else
	{
		$folder='boy';
		if($num>10)
		{
			$num=ceil($num/10);
		}
		if ($num == 0) $num=1;
		$ret_img = $boy_img_list[$num];
		switch($num)
		{
			case 1:$str='于果"好基友"【齐大胜】';break;
			case 2:$str='城府高深的【泰勒】';break;
			case 3:$str='土豪【维尼哥】';break;
			case 4:$str='于果爸爸【于建国】';break;
			case 5:$str='外柔内刚的【李三弟】';break;
			case 6:$str='"不靠谱"爸爸【于果】';break;
			case 7:$str='大胜与小艾的司仪【杜海涛】';break;
			case 8:$str='鬼马精灵【夏天】';break;
			case 9:$str='刀子嘴，豆腐心的【大飞哥】';break;
			case 10:$str='客串前国脚【高峰】';break;
		}
	}
	
	$img_path='../../xbb2/imgs/'.$folder.'/'.$num.'.jpg';
	$img=getImgType($img_path);
	// $img=createImg($img,$nick,115,28,13,0,14,'000');
	
	$content='【测测你是小爸爸里的谁】哈哈，经过专业分析，【'.$name.'】在小爸爸里面居然会是'.$str.'，赶快来测测你会是小爸爸里面的谁！测试地址：'.$url;
	
	$pagrams = array();
	$pagrams[content] = $content;
	$pagrams[img] = $img;
	$pagrams[type] = 'jpg';
	//@账号内容会过多
	$pagrams[url] = $url;
	$pagrams[title] = "点击测试->测测你是小爸爸里的谁";
	$pagrams[summary] = "小伙伴们快来测测你是小爸爸里的谁吧！测试地址：".$pagrams[url];
	$rt_info=post_send2($pagrams);
	$rt_info['url'] = $url;
	if ($ret_img) {
	$rt_info['result_img'] = $ret_img;
	}
	setcookie ( 'app_xbb_name', NULL, -3000, '/' );
	setcookie ( 'app_xbb_sex', NULL, -3000, '/' );
	$mmc=@memcache_init();
	$mmc->set('app_result_'.$_COOKIE ['v_o_t_openid'],$rt_info,MEMCACHE_COMPRESSED,1000);
$cnter = new SaeCounter();
$cnter->incr('app_xbb_view');
// 	header('Location:../result.php');
// 	exit;
// } else {
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>测测你是小爸爸里的谁</title>
<style type="text/css">
body,ul,li,dl,dt,dd{margin:0;padding:0;}
body{ background:url(../images/bg.png);background-size:16px 7px;padding-bottom:120px;}
.face{width:296px;height:251px;margin:32px auto 0 auto;background:url(../images/a.png) no-repeat; background-size:296px 251px;}
.loading{ padding:124px 0 0 47px; font-size:0;}
.loading .l{width:8px;height:17px;background:url(../images/loading.png) no-repeat;background-size:9px 89px;}
.loading .r{width:9px;height:17px;background:url(../images/loading.png) 0 -72px no-repeat;background-size:9px 89px;}
.loading .c{height:17px;background:url(../images/loading.png) 0 -54px repeat-x;background-size:9px 89px;}
.loading .j1{float:left;height:17px;background:url(../images/loading.png) 0 -18px repeat-x;background-size:9px 89px;}
.loading .j2{float:left; width:9px;height:17px;background:url(../images/loading.png) 0 -36px no-repeat;background-size:9px 89px;}
.txt{ text-align:center; font-size:24px;font-weight:bold; color:#ED7705; padding-top:22px;}
</style>
<?php 
require_once '../../a_include/header_stat.php';
?>
</head>

<body>
<div class="face">
	<div class="loading">
	<table width="203" border="0" cellspacing="0" cellpadding="0">
	  <tbody><tr>
		<td width="8" headers="17"><div class="l"></div></td>
		<td width="188"><div class="c"><div class="j1" id="j1" style="width: 176.80000000000024px;"></div><div class="j2"></div></div></td>
		<td width="9"><div class="r"></div></td>
	  </tr>
	</tbody></table>
	</div>
	<div class="txt" id="txt">正在进入结果页</div>
</div>
<div style="display:none;">

</div>
<script type="text/javascript">
var len=0;
var atime;
window.onload=function()
{
	atime=setInterval(function(){
		len+=1.3;
		if(len<178){
			document.getElementById("j1").style.width=len+'px';
		}else
		{
			document.getElementById("txt").innerHTML='正在进入结果页';
			clearInterval(atime);
			window.location='../result.php';
		}
	},20)
}
</script>

<?php 
require_once '../../a_include/footer_stat.php';
?>
<?php 
require_once './../../a_include/admobilebuttom.php';
?>
</body></html>
<?php 
// } 
?>