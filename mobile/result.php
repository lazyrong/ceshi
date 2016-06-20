<?php 

require_once '../global.inc.php';
require_once '../a_cache/app_top.php';
$mmc=@memcache_init();
$result_info = $mmc->get('app_result_'.$_COOKIE ['v_o_t_openid']);

$nick=$app_nick;
$u_num=$app_usenum;
$app_name_r=array_keys($nick);
$app_nick_r=array_values ($nick);
$app_usenum_r=array_values ($u_num);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
<title>查看测试结果-微测试</title>
<style type="text/css">
body,ul,li,dl,dt,dd{margin:0;padding:0;}
body{background:url(images/bg.png);background-size:16px 7px;padding-bottom:120px;}
.result{margin:12px 6px; background:#F9F2E7;font-size:18px;padding:8px 28px;text-align:center;color:#333333;box-shadow:0 3px 10px #888;}
.result span{color:#FF0000;}

.main{ display:none;padding:10px 0 10px 0px;margin:8px 6px;background:#FFFFFF;box-shadow:0 3px 10px #888;}
.main td{color:#747B7E;}
.a{font-size:22px;font-weight:bold;}
.b{font-size:16px;font-weight:bold;}
.c{font-size:12px;padding-top:8px;}
.t{font-size:14px;padding-top:4px; line-height:16px;}
.download{text-align:center;padding:4px 0 2px 0;}
.downgif{ margin:12px 6px; padding-top:25px; height:100px;line-height:100px; background:url(images/gifbg.jpg); text-align:center;}
.recommend ul,.recommend li{ list-style:none;}
.recommend li{ float:left; width:150px;margin-left:6px;}
</style>

<?php 
require_once '../a_include/header_stat.php';
?>
</head>

<body>
<div class="result">
	<img src="<?=$result_info['result_img']?>" width="230">
</div>
<div class="recommend" >
	<ul>
	<?
$rank_num=0;
while($rank_num<6)
{
	
?>
<li><a href="../<?=$app_name_r[$rank_num]?>" target="_blank"><img src="<?=$file_logo[$app_name_r[$rank_num]]?>" width="150"></a></li>
<?
$rank_num++;
}
?>
		 
	</ul>
</div>
<?php 
require_once '../a_include/footer_stat.php';
?>
<?php 
require_once './../a_include/admobilebuttom.php';
?>
</body></html>