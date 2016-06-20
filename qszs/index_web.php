<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?=$app_list[$app_name]['title']?></title>
<link rel="shortcut icon" href="<?=$static_file_path?>/imgs/favicon.ico" />
<link rel="icon" href="<?=$static_file_path?>/imgs/favicon.ico" type="image/x-icon" />
<link href="../file/css/app.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.main .head{height:150px;width:760px;overflow:hidden;}
.main .cont{height:195px;width:538px;padding-left:222px;background:url(imgs/head2.jpg) no-repeat;overflow:hidden;padding-top:20px;}
.main .cont input{float:left;height:30px;line-height:30px;width:224px;padding:2px 5px;font-size:18px;font-family:"微软雅黑";}
.main .cont span{float:left;height:40px;line-height:40px;font-weight:bold;padding-right:10px;color:#494343;font-size:18px;font-family:"微软雅黑";color:#EC1D25;}
.main .cont .btn{width:180px;padding-top:82px;padding-left:86px;}
.main .m_bottom{height:115px;width:760px;overflow:hidden;}
</style>
<?php 
require_once '../a_include/header_stat.php';
?>
<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
</head>

<body>
<div class="header"> 
	<div class="c">
		<div class="logo"><a href="/" target="_blank"><img src="http://app.qpic.cn/mblogpic/3ad571c3942b830d9ee6/2000" height="30"></a></div>
		<div class="l">
			<ul>
				<li><a href="/">大家都在玩</a></li>
				<li><a href="/hot.php">热门测试</a></li>
				<li><a href="/love.php">缘分爱情</a></li>
				<li><a href="/xingzuo.php">星座测试</a></li>
				<li><a href="/xingge.php">性格测试</a></li>
				<li><a href="/fangyan.php">方言测试</a></li>
                <li><a href="/">更多应用</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="main">
	<div class="head">
		<div class="hd1"><img src="imgs/head5.jpg" width="760" height="88" /></div>
		<div class="hd2"><img src="imgs/head4.jpg" width="760" height="62" /></div>
	</div><!--/head-->
    <div class="cont">
		<div style="height:40px;"><span>输入昵称：</span><input type="text" name="name" id="name" value="<?=$_COOKIE['v_nick']?>"/></div>
		<div class="btn"><a href="javascript:void(0);" onclick="javascript:goUrl();"><img src="./imgs/btn1.gif" height="49" width="169" /></a></div>
	</div><!--/cont-->
	<div class="m_bottom">
		<div class="bot1"><img src="imgs/head3.jpg" width="760" height="115" /></div>
	</div>
</div><!--/main-->

<script>
window.onload=function(){
	document.getElementById("name").focus();
}
function goUrl(){
	var name=$.trim($('#name').val());
	if(name.length<=0){
		alert('姓名不能为空！');
		$('#name').val('').focus();
		return false;
	}
	window.location="./view.php?name="+name;
	return false;
}
</script>
<?php 
require_once '../a_include/footer_stat.php';
?>
</body></html>
