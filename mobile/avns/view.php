<?php 
header('Content-Type: text/html; charset=utf-8');
require_once './../../global.inc.php';
require_once './../../a_cache/app_top.php';
require_once './../../a_include/func/Funcs.inc.php';
$app_name = 'avns';


if ($_REQUEST['name']) {
	$name = $_REQUEST['name'];
	setcookie ( 'app_'.$app_name.'_name', $name, time () + 3000, '/' );
} else {	
	$name = $_COOKIE['app_'.$app_name.'_name'];
	if (!$name) {
		header('Location:./');
		exit;
	}
}

if (!$_COOKIE['v_o_t_']) {
	header('Location:./login.php?id=q&app='.$app_name.'&act=view');
	exit;
}

$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );
$num=str_to_num($name,$app_name);
$str = "";

$result_img_list = array(
		'1'=>'http://app.qpic.cn/mblogpic/2956bef5d64695731232/2000',
		'2'=>'http://app.qpic.cn/mblogpic/0ea1ee1b5a59f3336940/2000',
		'3'=>'http://app.qpic.cn/mblogpic/f22502b434d2af659eaa/2000',
		'4'=>'http://app.qpic.cn/mblogpic/077410be34d4e73379ce/2000',
		'5'=>'http://app.qpic.cn/mblogpic/20867dc9daf171153098/2000',
		'6'=>'http://app.qpic.cn/mblogpic/4898d0effe47e31dfe84/2000',
		'7'=>'http://app.qpic.cn/mblogpic/d14b62f9289b4f6226ac/2000',
		'8'=>'http://app.qpic.cn/mblogpic/d867de6e45428ff07784/2000',
		'9'=>'http://app.qpic.cn/mblogpic/a9ff9ff444aaac2b4dde/2000',
		'10'=>'http://app.qpic.cn/mblogpic/b15db0b6fd24196853c4/2000',
		'11'=>'http://app.qpic.cn/mblogpic/e87ff29daa5c59c2a276/2000',
		'12'=>'http://app.qpic.cn/mblogpic/b3c958b8caae859ddd04/2000',
		'13'=>'http://app.qpic.cn/mblogpic/985981cb3f5ab6f705e2/2000',
		'14'=>'http://app.qpic.cn/mblogpic/c4104f79b6d48b082a4c/2000',
		'15'=>'http://app.qpic.cn/mblogpic/61d3c41609571a63507c/2000',
		'16'=>'http://app.qpic.cn/mblogpic/9db756851ea76019159e/2000',
		'17'=>'http://app.qpic.cn/mblogpic/eff767dbbf9846f6c32e/2000',
		'18'=>'http://app.qpic.cn/mblogpic/0955c97a0cdb0cb195e0/2000',
		'19'=>'http://app.qpic.cn/mblogpic/25989b40a97e216d6b88/2000',
		'20'=>'http://app.qpic.cn/mblogpic/99998851f78f701f0772/2000',
		'21'=>'http://app.qpic.cn/mblogpic/dccf3ed63f93f017cf6e/2000',
);
if($num>21)
{
	$num=ceil($num/5);
}
if ($num == 0) $num=1;
$ret_img = $result_img_list[$num];
switch($num)
{
	case 1:$str='麻生希';break;
	case 2:$str='爱尺有纱';break;
	case 3:$str='麻仓忧';break;
	case 4:$str='天海翼';break;
	case 5:$str='波多野结衣';break;
	case 6:$str='龙泽萝拉';break;
	case 7:$str='成濑心美';break;
	case 8:$str='友田彩也香';break;
	case 9:$str='饭岛爱';break;
	case 10:$str='川岛和津实';break;
	case 11:$str='香坂百合';break;
	case 12:$str='爱田由';break;
	case 13:$str='长濑爱';break;
	case 14:$str='高树玛利亚';break;
	case 15:$str='饭岛爱';break;
	case 16:$str='武藤兰';break;
	case 17:$str='小泽玛莉亚';break;
	case 18:$str='杉原杏璃';break;
	case 19:$str='松岛枫';break;
	case 20:$str='樱井莉亚';break;
	case 21:$str='龙泽萝拉';break;
}
$pic = $result_img_list[$num];
if (!$pic) {
	$pic = $result_img_list[array_rand($result_img_list)];
}
// $img=createImg($img,$nick,115,28,13,0,14,'000');

$content='哇哦~原来【'.$name.'】心中的AV女神是【'.$str.'】，耶~难怪平时Ta看的最多的就是她！小伙伴们，一起来揭秘Ta心中的AV女神吧：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams['pic'] = $pic;
// 	$pagrams[type] = 'jpg';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->揭秘Ta心中的AV女神";
$pagrams[summary] = "揭秘Ta心中的AV女神？测试地址：".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['url'] = $url;
if ($ret_img) {
	// 	$rt_info['result_img'] = $pic;
}
setcookie ( 'app_'.$app_name.'_name', NULL, -3000, '/' );
$mmc=@memcache_init();
$mmc->set('app_result_'.$_COOKIE ['v_o_t_openid'],$rt_info,MEMCACHE_COMPRESSED,1000);
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>揭秘Ta心中的AV女神</title>
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