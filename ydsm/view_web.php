<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?=$app_list[$app_name]['title']?>_微测试</title>
<link rel="shortcut icon" href="<?=$static_file_path?>/imgs/favicon.ico" />
<link rel="icon" href="<?=$static_file_path?>/imgs/favicon.ico" type="image/x-icon" />
<link href="../file/css/app.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.main .head{height:85px;width:760px;overflow:hidden;}
.main .cont{height:113px;width:460px;padding-left:300px;padding-top:60px;background:url(images/head2.jpg) no-repeat;overflow:hidden;}
.main .bottom{height:222px;width:460px;padding-left:300px;background:url(imgs/head3.jpg) no-repeat;overflow:hidden;}
.main .tip{height:30px;font-size:20px;color:red;font-family:"微软雅黑";padding-top:10px;overflow:hidden;}
.loading{display:none;position:absolute;width:200px;top:200px;color:#2b2b2b; padding:42px 72px;background:#FFFFFF;}
.load1{float:left;width:200px;height:12px;overflow:hidden; padding:1px;border:#8FCC52 1px solid;}
.load2{background:#8FCC52;height:12px;}
.txt{text-align:center;clear:both;float:left; width:200px;padding-top:12px;}
.posbg{position:absolute;width:100%;height:100%;top:0;background:#000;filter:alpha(opacity=50);-moz-opacity:0.5;-khtml-opacity: 0.5;opacity:0.5;}
</style>
<?php 
require_once '../a_include/header_stat.php';
?>
<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>

</head>

<body>

	<div class="header">
		<div class="c">
			<div class="logo">
				<a href="/" target="_blank"><img
					src="http://app.qpic.cn/mblogpic/3ad571c3942b830d9ee6/2000"
					height="30"></a>
			</div>
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
		<div class="hd1"><img src="imgs/head1.jpg" width="760" height="85" /></div>
	</div><!--/head-->
    <div class="cont">
        <div class="tip">测试完成，查看结果</div>
        <a href="../result.php" ><img src="../file/imgs/view_result.gif" width="200" height="48"/></a>
    </div>
	<div class="bottom">
	</div>
</div><!--/main-->
<?php 
require_once '../a_include/ad960x90.php';
?>
	<div class="posbg" id="posbg"></div>
<div class="loading" id="loading">
	<div class="load1">
		<div class="load2" id="load2"></div>
	</div>
	<div class="txt" id="loadtxt">正在分析你的个人信息</div>
</div>
<script type="text/javascript">
var txt=new Array(
	'正在分析你的性格','正在分析你的前世','正在分析你的空间记录','正在分析你的情感','正在分析你的生活'
);
var at;
var at2;
var num=0;
var color=new Array('009898','FE8060','9832CB','9B9B47','CB326C','A1A31A');
jQuery(function($) {
	var w=10;
	var bw=document.body.clientWidth;
	var bh=window.screen.availHeight;
	bw=(bw-344)/2;
	//alert(navigator.userAgent);
	if(navigator.userAgent.indexOf("MSIE 6.0")!=-1)
	{
		document.getElementById("posbg").style.height='660px';
	}
	document.getElementById("loading").style.left=bw+'px';
	document.getElementById("loading").style.display='block';
	at=setInterval(function(){
		document.getElementById("load2").style.width=w+'px';
		if(w>=200)
		{
			clearInterval(at);
			document.getElementById("posbg").style.display='none';
			document.getElementById("loading").style.display='none';
		}
		w+=2;
	},18);
	at2=setInterval(function(){
		document.getElementById("loadtxt").style.color='#'+color[num];
		document.getElementById("loadtxt").innerHTML=txt[num];
		if(num==4)
		{
			clearInterval(at2);
			
		}
		num++;
	},500);
});
</script>
<?php 
require_once '../a_include/adfloat.php';
?>
<?php 
require_once '../a_include/footer_stat.php';
?>
</body>
</html>
