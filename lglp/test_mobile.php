<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title><?=$app_list[$app_name]['title']?></title>
<style type="text/css">
body,ul,li,dl,dt,dd{margin:0;padding:0;}
body{ background:url(../file/imgs/mobile/bg.png);background-size:16px 7px;padding-bottom:120px;}
.face{width:296px;height:251px;margin:18px auto 0 auto;background:url(../file/imgs/mobile/a.png) no-repeat; background-size:296px 251px;}
.info{ padding-top:135px;}
.info td{ height:36px;}
.sub{ text-align:center; padding-top:24px;}
</style>
</head>

<body>
<form name="myform" method="post" action="./view.php" onsubmit="return chkForm(this)">
<div class="face">
	<div class="info">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tbody><tr>
		<td align="right" width="185">请输入要测试的名字：</td>
		<td><input type="text" name="nick" id="dd" style="width:80px; padding:4px 0;" value="<?=$_COOKIE['v_nick']?>"> </td>
	  </tr>
	</tbody></table>
	</div>
</div>
<div class="sub"><input type="image" src="../file/imgs/mobile/sub.png" width="243" height="59" name="Submit" value="提交"></div>
</form>
<br/>
<?php 
//require_once '../a_include/ad_mobile_20x5.php';
?>
<?php 
require_once '../a_include/ad_app_down.php';
?>
<script type="text/javascript">
var pub=false;
function cheakForm(f){
	if(pub==false){
                pub=true;
        }else{
                return false;
        }
	var name = f.nick.value;
	name = name.replace(/[ ]/g,"");
	if(name.length<1 || name.length>10){
		alert('请输入1-10个长度的名字');
		f.nick.value='';
		f.nick.focus();
		pub=false;
		return false;
	}else if(name=='请输入你要测试的名字'){
		alert('请输入你要测试的名字');
		f.nick.value='';
		f.nick.focus();
		pub=false;
		return false;
	}
	return true;
}
</script>
<?php 
require_once './../a_include/footer_stat.php';
?>
<?php 
require_once './../a_include/admobilebuttom.php';
?>
</body></html>