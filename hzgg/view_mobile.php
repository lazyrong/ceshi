
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title><?=$app_list[$app_name]['title']?></title>
<style type="text/css">
body,ul,li,dl,dt,dd{margin:0;padding:0;}
body{ background:url(../file/imgs/mobile/bg.png);background-size:16px 7px;padding-bottom:120px;}
.face{width:296px;height:251px;margin:32px auto 0 auto;background:url(../file/imgs/mobile/a.png) no-repeat; background-size:296px 251px;}
.loading{ padding:124px 0 0 47px; font-size:0;}
.loading .l{width:8px;height:17px;background:url(../file/imgs/mobile/loading.png) no-repeat;background-size:9px 89px;}
.loading .r{width:9px;height:17px;background:url(../file/imgs/mobile/loading.png) 0 -72px no-repeat;background-size:9px 89px;}
.loading .c{height:17px;background:url(../file/imgs/mobile/loading.png) 0 -54px repeat-x;background-size:9px 89px;}
.loading .j1{float:left;height:17px;background:url(../file/imgs/mobile/loading.png) 0 -18px repeat-x;background-size:9px 89px;}
.loading .j2{float:left; width:9px;height:17px;background:url(../file/imgs/mobile/loading.png) 0 -36px no-repeat;background-size:9px 89px;}
.txt{ text-align:center; font-size:24px;font-weight:bold; color:#ED7705; padding-top:22px;}
</style>
<?php 
require_once './../a_include/header_stat.php';
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
			window.location='../mbresult.php';
		}
	},20)
}
</script>

<?php 
require_once './../a_include/footer_stat.php';
?>
<?php 
require_once './../a_include/admobilebuttom.php';
?>
</body></html>
<?php 
// } 
?>