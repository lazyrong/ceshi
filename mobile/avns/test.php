<?php 
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../../global.inc.php';
require_once './../../a_cache/app_top.php';


if ($_COOKIE['v_o_t_'] && ($_REQUEST['act'] == 'view')) {
	header('Location:./view.php');
	exit;
}
$app_name='avns';
$t_nick=$_COOKIE['v_nick'];
$t_name=$_COOKIE['v_name'];
$t_avatar=$_COOKIE['v_avatar'];
$t_sex=$_COOKIE ['v_sex'];
setcookie('v_appname',$app_name, time()+3000, '/');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title>揭秘Ta心中的AV女神</title>
<style type="text/css">
body,ul,li,dl,dt,dd{margin:0;padding:0;list-style:none;}
body{background:url(../images/bg.png);background-size:16px 7px;padding-bottom:120px;}
.face{width:296px;height:184px;margin:18px auto 0 auto;background:url(../images/a.png) no-repeat;background-size:296px 251px;padding-top:67px;}
.face .cont{width:240px;height:110px;padding:74px 0 0 38px;margin:0 auto;background:url(imgs/show.jpg) no-repeat;background-size:278px 174px;}
.face .cont li{padding:8px 0;font-size:18px;font-family:"微软雅黑";color:#363636;}
.face .cont .txt{height:26px;line-height:26px;width:120px;padding:0 2px;}
.face .cont li span{font-weight:bold;margin-right:10px;}
.face .cont label{cursor:pointer;margin:0 30px 0 10px;font-weight:bold;color:#fff}
.start{ text-align:center; padding-top:24px;}
</style>
<?php 
require_once '../../a_include/header_stat.php';
?>
</head>

<body>
<div class="face">
   <div class="cont">
   		<ul>
			<li><span>姓名：</span><input type="text" name="name" id="name" class="txt" value="<?=$t_nick?>"></li>
		</ul>
   </div>
</div><!--/face-->
 <div class="start"><a href="javascript:void(0)" onclick="goUrl()"><img src="../images/sub.png" width="243" height="59" alt="开始测试" title="开始测试"></a></div>
<div style="display:none"></div>

<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
<script>
window.onload=function(){
	document.getElementById('name').focus();
}
function goUrl(){
        var name=$.trim($('#name').val());
        var sex=$('input[name="sex"]:checked').val();
        if(name.length<=0){
                alert('姓名不能为空！');
                $('#name').val('').focus();
                return false;
        }
        window.location="view.php?name="+name;
        return false;
}
</script>
<?php 
require_once '../../a_include/footer_stat.php';
?>
<?php 
require_once './../../a_include/admobilebuttom.php';
?>
</body></html>