<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?=$app_list[$app_name]['title']?>_微测试</title>
<link rel="shortcut icon" href="<?=$static_file_path?>/imgs/favicon.ico" />
<link rel="icon" href="<?=$static_file_path?>/imgs/favicon.ico" type="image/x-icon" />
<link href="../file/css/app.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body{background:#29aae4 url(./imgs/bg.gif) repeat-x 0 35px;}
.title{width:960px;margin:0 auto;padding-top:35px;text-align:center;background:url(./imgs/tp.gif) no-repeat 0 bottom;height:174px;}
.main{width:651px;margin:0 auto;padding:0 0 0 20px;}
.main .center{margin-top:16px;background:url(./imgs/cbg.gif) repeat-y;}
.main .t{background:url(./imgs/ct.gif) no-repeat;height:32px;font-size:0;display:block;}
.main .b{background:url(./imgs/cb.gif) no-repeat;height:31px;font-size:0;display:block;}
.main .cont{height:352px;}
.main .center .char{color:#555;font-size:24px;line-height:36px;letter-spacing:2px;text-indent:1.1em;font-family:"黑体";margin:8px 58px 0 76px;}
.main .center .go{margin:27px 0 0 70px;}
.main .center .go span{float:left;margin-right:83px;}
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

<?php 
require_once '../a_include/ad960x90.php';
?>
<div class="title"><img src="./imgs/top2.jpg" width="716" height="174" /></div>
<div class="main">
	<div class="center">
		<s class="t"></s>
		<div class="cont">
			<div class="char">想知道你的媳妇or老公值多少钱么？如果TA会做饭，如果TA还会游泳，那可是值很多钱的哦。快来测试一下吧，简单有趣的测试迅速计算出TA的真实价值。</div>
			<div class="go">
				<span><a href="test.php?who=lg"><img src="./imgs/btn1_on.gif" width="216" height="80" onmouseover="this.src='./imgs/btn1.gif';" onmouseout="this.src='./imgs/btn1_on.gif';" /></a></span>
				<a href="test.php?who=lp"><img src="./imgs/btn2_on.gif" width="216" height="80"onmouseover="this.src='./imgs/btn2.gif';" onmouseout="this.src='./imgs/btn2_on.gif';" /></a>
			</div>
		</div>
		<s class="b"></s>
	</div>
</div><!--/main-->

<?php 
require_once '../a_include/adfloat.php';
?>
<?php 
require_once '../a_include/footer_stat.php';
?>
</body></html>
