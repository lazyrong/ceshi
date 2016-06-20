<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?=$app_list[$app_name]['title']?>_微测试</title>
<link rel="shortcut icon" href="<?=$static_file_path?>/imgs/favicon.ico" />
<link rel="icon" href="<?=$static_file_path?>/imgs/favicon.ico" type="image/x-icon" />
<link href="../file/css/app.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
<style type="text/css">
body{background:#EEEFEF;}
.main .head{height:85px;width:760px;overflow:hidden;}
.main .cont{height:173px;width:712px;padding-left:48px;background:url(imgs/head2.jpg) no-repeat;overflow:hidden;}
.main .bottom{height:222px;width:712px;padding-left:48px;background:url(imgs/head3.jpg) no-repeat;overflow:hidden;}
.main .cont ul{float:left;}
.main .cont li{float:left;padding-left:25px;padding-top:10px;}
.main .bottom ul{float:left;}
.main .bottom li{float:left;padding-left:25px;}
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
	<div class="head">
		<div class="hd1"><img src="imgs/head1.jpg" width="760" height="85" /></div>
	</div><!--/head-->
    <div class="cont">
		<ul>
			<li><a href="#" onclick="goUrl(1);"><img src="imgs/bt1.gif" /></a></li>
			<li><a href="#" onclick="goUrl(2);"><img src="imgs/bt2.gif" /></a></li>
			<li><a href="#" onclick="goUrl(3);"><img src="imgs/bt1.gif" /></a></li>
			<li><a href="#" onclick="goUrl(4);"><img src="imgs/bt2.gif" /></a></li>
			<li><a href="#" onclick="goUrl(5);"><img src="imgs/bt1.gif" /></a></li>
		</ul>
    </div>
	<div class="bottom">
		<ul>
			<li><a href="#" onclick="goUrl(6);"><img src="imgs/bt1.gif" /></a></li>
			<li><a href="#" onclick="goUrl(7);"><img src="imgs/bt2.gif" /></a></li>
			<li><a href="#" onclick="goUrl(8);"><img src="imgs/bt1.gif" /></a></li>
			<li><a href="#" onclick="goUrl(9);"><img src="imgs/bt2.gif" /></a></li>
			<li><a href="#" onclick="goUrl(3);"><img src="imgs/bt1.gif" /></a></li>
		</ul>
	</div>
	<div id="result" style=" visibility:hidden">
    	<form method="post" target="_self" id="form" action="view.php" name="pubForm">
            <input type="hidden" id="score" name="score" value="50" />
        </form>
	</div><!--/cont-->
</div><!--/main-->

<script>
function goUrl(v){
	$('#score').val(v);
	$('#form').submit();
}
</script>
<?php 
require_once '../a_include/adfloat.php';
?>
<?php 
require_once '../a_include/footer_stat.php';
?>
</body></html>
