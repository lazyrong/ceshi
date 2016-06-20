
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?=$app_list[$app_name]['title']?></title>

<link rel="shortcut icon" href="<?=$static_file_path?>/imgs/favicon.ico" />
<link rel="icon" href="<?=$static_file_path?>/imgs/favicon.ico" type="image/x-icon" />
<link href="../file/css/app.css" rel="stylesheet" type="text/css" />
<link href="../file/css/show-min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body{background:#EEEFEF;}
.main .head{height:238px;width:760px;overflow:hidden;}
.main .cont{height:166px;width:511px;padding-left:249px;padding-top:10px;background:url(imgs/head10.jpg) no-repeat;overflow:hidden;}
.main .cont p{color:#155072;font-size:16px;margin-bottom:50px;line-height:32px;font-weight:bold;}
.main .ft{height:66px;width:760px;background:url(imgs/head5.jpg) no-repeat;overflow:hidden;}
.cont_box {
    background: none repeat scroll 0 0 #EEEEEE;
    border: 1px solid #BBBBBB;
    margin: 15px auto 0;
    width: 960px;
}
</style>

<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/header_stat.php';
?>
</head>

<body>
<div class="header"> 
	<div class="c">
		<div class="logo"><a href="/" target="_blank"><img src="http://app.qpic.cn/mblogpic/3ad571c3942b830d9ee6/2000" height="30"></a></div>
		<div class="l">
			<ul>
			  <li><a href="../hot.php">热门测试</a></li>
			  <li><a href="../love.php">缘分爱情</a></li>
			  <li><a href="../xingzuo.php">星座运势</a></li>
			  <li><a href="../xingge.php">性格测试</a></li>
			  <li><a href="../fangyan.php">疯狂的方言</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="main">
	<div class="head">
		<div class="hd1"><img src="imgs/head1.jpg" width="760" height="76" /></div>
		<div class="hd2"><img src="imgs/head2.jpg" width="760" height="70" /></div>
		<div class="hd3"><img src="imgs/head3.jpg" width="760" height="92" /></div>
	</div>
    <div class="cont">
		<p>面对这套残酷的、调皮的、有节操的测试题。<br />骚年们，你敢接受拷问吗？</p>
		<a href="test.php?sex=1"><img width="124" height="36" src="imgs/bt1.gif" /></a>
		<a href="test.php?sex=2"><img width="122" height="35" style="margin-left:35px;" src="imgs/bt2.gif" /></a>
	</div>
	<div class="ft"></div>
</div><!--/main-->

<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/ad960x90.php';
?>
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/footer_stat.php';
require_once dirname ( dirname ( __FILE__) ).'/a_include/adfloat.php';
?>
</body></html>
