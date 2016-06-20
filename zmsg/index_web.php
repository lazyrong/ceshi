<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?=$app_list[$app_name]['title']?></title>
<link rel="shortcut icon" href="<?=$static_file_path?>/imgs/favicon.ico" />
<link rel="icon" href="<?=$static_file_path?>/imgs/favicon.ico" type="image/x-icon" />
<link href="../file/css/app.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.main .head{height:197px;width:760px;overflow:hidden;}
.main .cont{height:137px;width:520px;padding-top:20px;padding-left:240px;background:url(imgs/head3.jpg) no-repeat;overflow:hidden;}
.main .cont ul{float:left;width:360px;}
.main .mybtn{height:92px;width:520px;padding-left:240px;background:url(imgs/head4.jpg) no-repeat;overflow:hidden;}
.main .mybtn .btn{float:left;width:280px;padding-left:65px;}
.main .cont li{padding:15px 0;font-size:18px;font-family:"微软雅黑";color:#363636;}
.main .cont .txt{height:30px;line-height:30px;width:180px;padding:2px 5px;}
.main .cont li span{height:38px;line-height:38px;font-weight:bold;margin-right:10px;color:#8b0f0d;float:left;}
.main .cont label{height:38px;line-height:38px;cursor:pointer;padding:0 30px 0 10px;font-weight:bold;color:#8b0f0d;}
.main .m_bottom{height:34px;width:760px;overflow:hidden;}
</style>
<?php 
require_once '../a_include/header_stat.php';
?>
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
		<div class="hd1"><img src="imgs/head1.jpg" width="760" height="100" /></div>
		<div class="hd2"><img src="imgs/head2.jpg" width="760" height="97" /></div>
	</div><!--/head-->
    <div class="cont">
		<ul>
			<li><span>姓名：</span><input name="name" id="name" class="txt" type="text" value="<?=$t_nick?>"></li>
			<li><span>性别：</span><input name="sex" value="1" id="b" <?php if ($t_sex != 2) {?>checked="checked"<?php } ?> type="radio"><label for="b">男</label><input name="sex" value="2" id="g" type="radio" <?php if ($t_sex == 2) {?>checked="checked"<?php } ?>><label for="g">女</label></li>
		</ul>
	</div><!--/cont-->
	<div class="mybtn">
		<div class="btn"><a href="#" onclick="goUrl();"><img src="imgs/bt2.gif" height="60" width="192" /></a></div>
	</div>
	<div class="m_bottom">
		<div class="bot1"><img src="imgs/head5.jpg" width="760" height="34" /></div>
	</div>
</div><!--/main-->

<div style="display:none">
</div>

<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
<script>
window.onload=function(){
	document.getElementById("name").focus();
}
function goUrl(){
	var name=$.trim($('#name').val());
	var sex=$('input[name="sex"]:checked').val();	
	if(name.length<=0){
		alert('姓名不能为空！');
		$('#name').val('').focus();
		return false;
	}
	if(!sex){
		alert('请选择性别！');
		return false;
	}
	window.location="./view.php?name="+name+"&sex="+sex;
	return false;
}
</script>
<?php 
require_once '../a_include/footer_stat.php';
?>
</body></html>
