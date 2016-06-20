<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?=$app_list[$app_name]['title']?></title>
<link rel="shortcut icon" href="<?=$static_file_path?>/imgs/favicon.ico" />
<link rel="icon" href="<?=$static_file_path?>/imgs/favicon.ico" type="image/x-icon" />
<link href="../file/css/app.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.main{background:url(./imgs/bg.jpg) no-repeat center bottom;}
.main .t{height:190px;}
.main .cs_form{margin-left:190px;}
.main .cs_form .uname{float:left;width:240px;height:46px;line-height:46px;padding-left:16px;font-size:16px;background:url(../file/imgs/mobile/input.gif) no-repeat;border:none;color:#333;}
.main .cs_form .submit{float:left;width:121px;height:46px;background:url(../file/imgs/mobile/start.gif) no-repeat;border:none;cursor:pointer;}
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
	<div class="t"></div>
    <div class="cs_form">
    <form action="./view.php" method="post" name="Myform" onsubmit="return check(this);">
    	<input class="uname" type="text" id="name" name="nick" placeholder="请输入你要测试的名字" value="<?=$_COOKIE['v_nick']?>" maxlength="10"  />
        <input type="submit" class="submit" value="" name="Sub" />
    </form>
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
	var name=$('#name').val();
	var sex=$('input[name="sex"]:checked').val();	
	if(name.length<=0 ){
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
