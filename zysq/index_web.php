<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?=$app_list[$app_name]['title']?>_微测试</title>
<link rel="shortcut icon" href="<?=$static_file_path?>/imgs/favicon.ico" />
<link rel="icon" href="<?=$static_file_path?>/imgs/favicon.ico" type="image/x-icon" />
<link href="../file/css/app.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body{background:#FFF;}
.main{background:url(imgs/bg.jpg) no-repeat center bottom;}
.main .t{height:190px;}
.main .cs_form{margin-left:190px;}
.main .cs_form .uname{float:left;width:240px;height:28px;line-height:28px;padding:8px 0 10px 16px;font-size:16px;background:url(../file/imgs/mobile/input.gif) no-repeat;border:none;color:#333;}
.main .cs_form .submit{float:left;width:121px;height:46px;background:url(../file/imgs/mobile/start.gif) no-repeat;border:none;cursor:pointer;}
</style>
<?php 
require_once '../a_include/header_stat.php';
?>
<script type="text/javascript">
function check(f){
	var name = f.nick.value;
	name = name.replace(/[ ]/g,"");
	if(name.length<1 || name.length>10){
		alert('请输入1-10个长度的名字');
		f.nick.value='';
		f.nick.focus();
		return false;
	}else if(name=='请输入你要测试的名字'){
		alert('请输入你要测试的名字');
		f.nick.value='';
		f.nick.focus();
		return false;
	}
	return true;
}
</script>
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

<?php 
require_once '../a_include/ad960x90.php';
?>
<div class="main">
	<div class="t"></div>
    <div class="cs_form">
    <form action="view.php" method="post" name="Myform" onsubmit="return check(this);">
    	<input class="uname" type="text" name="nick" value="<?php if (empty($_COOKIE['v_nick'])) {?>请输入你要测试的名字<?php } else {?><?=$_COOKIE['v_nick']?><?php }?>" maxlength="10" onclick="if(this.value=='请输入你要测试的名字'){this.value='';}" onblur="if(this.value==''){this.value='请输入你要测试的名字';}"  />
        <input type="submit" class="submit" value="" name="Sub" />
    </form>
    </div>
</div><!--/main-->

<div style="display:none">
</div>
<?php 
require_once '../a_include/adfloat.php';
?>
<?php 
require_once '../a_include/footer_stat.php';
?>
</body></html>
