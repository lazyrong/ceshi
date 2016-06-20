
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?=$app_list[$app_name]['title']?></title>
<link rel="shortcut icon" href="../file/imgs/favicon.ico" />
<link rel="icon" href="../file/imgs/favicon.ico" type="image/x-icon" />
<link href="../file/css/app.css" rel="stylesheet" type="text/css" />
<link href="../file/css/show-min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body{background:#EEEFEF;}
.main .head{height:168px;width:760px;overflow:hidden;}
.main .cont{height:170px;width:540px;padding-left:280px;padding-top:40px;background:url(imgs/head2.jpg) no-repeat;overflow:hidden;}
.main .cont ul{float:left;width:280px;}
.main .cont .btn{float:left;width:280px;padding-top:20px;padding-left:50px;}
.main .cont li{padding:10px 0;font-size:18px;font-family:"微软雅黑";color:#363636;}
.main .cont .txt{height:30px;line-height:30px;width:160px;padding:2px 5px;}
.main .cont li span{font-weight:bold;margin-right:5px;color:#FFFFFF}
.main .cont #b{margin-left:5px;}
.main .cont label{cursor:pointer;padding:0 30px 0 10px;font-weight:bold;color:#FFFFFF;}
.main .m_bottom{height:102px;width:760px;overflow:hidden;}


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

<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/ad960x90.php';
?>
<div class="paneAllWrapper">
	<div class="paneLeftWrapper">
		<div style="background:url(<?php if (!empty($app_bg_pic)) {?><?=$app_bg_pic?><?php } else {?>imgs/pre.jpg<?php }?>) 0 0 no-repeat;" class="imageWrapper">		
			<div class="imageActionWrapper">
				<div class="titleDetail"><?=$app_list[$app_name]['title']?></div>
				<div class="titleDetailSC"><?=$app_intro?></div>
				<a href="./test.php" class="actionProcessButton">开始测试</a>
			</div>
		</div>
		<div class="actionWrapper">
			
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/ad760x90.php';
?>
		</div>	
	</div>
	<div class="clear"></div>	
</div>

<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/footer_stat.php';
require_once dirname ( dirname ( __FILE__) ).'/a_include/adfloat.php';
?>
</body></html>
