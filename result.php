<?php 

require_once './global.inc.php';
require_once './a_cache/app_top.php';
$mmc=@memcache_init();
$result_info = $mmc->get('app_result_'.cookie('v_o_t_openid'));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="%E8%B6%A3%E5%AE%9D%E8%B4%9D%E6%B5%8B%E8%AF%95%E7%BB%93%E6%9E%9C%E9%A1%B5_files/jquery_132.js"></script>
<title>查看测试结果-微测试</title>
<style type="text/css">
/* chenjianyu 2012-06-20*/
body,h1,h2,h3,h4,h5,h6,hr,p,blockquote,dl,dt,dd,ul,ol,li,pre,form,fieldset,legend,button,input,textarea,th,td{margin:0;padding:0;}
body,button,input,select,textarea{font:12px arial,\5b8b\4f53,sans-serif;}
h1,h2,h3,h4,h5,h6{font-size:100%;}address,cite,dfn,em,var{font-style:normal;}code,kbd,pre,samp{font-family:courier new,courier,monospace;}small{font-size:12px;}ul,ol{list-style:none;}a{text-decoration:none;}a:hover{text-decoration:underline;}sup{vertical-align:text-top;}sub{vertical-align:text-bottom;}legend{color:#000;}fieldset,img{border:0;}button,input,select,textarea{font-size:100%;}table{border-collapse:collapse;border-spacing:0;}.col-main{float:left;width:100%;min-height:1px;}.hidden{display:none;}.invisible{visibility:hidden;}
.clear:after{content:'\20';display:block;height:0;clear:both;}.clear{*zoom:1;font-size:0;clear:both;}
a:link,a:visited{color:#000;text-decoration:none;}
a:hover{color:#c00;text-decoration:underline;}
img{border:0;-ms-interpolation-mode:bicubic;}
.clearfix:after{content:".";display:block;height:0;clear:both;visibility:hidden}
* html>body .clearfix{display:inline-block;width:100%}
* html .clearfix{/* Hides from IE-mac \*/ height:1%;/* End hide from IE-mac */ }
*+html .clearfix{min-height:1%}

body{background:#EEEFEF;}
.header{width:100%;height:35px;background:#515151;border-bottom:#989898 2px solid;left:0;}
.top{width:784px;margin:0 auto;height:35px;padding:0 8px;}
.top .logo{ float:left;padding-top:2px;}
.top .qlogo{ float:right;padding-top:2px;}
.footer{background:#515151;border-top:#989898 4px solid;text-align:center;line-height:1.8em;color:#ccc;padding:24px 0 48px 0;}
.footer a,.footer a:visited{color:#ccc;margin:0 2px;}

.main{clear:both;width:860px;margin:0 auto;padding:20px 50px 18px;_padding:20px 50px 18px;background:#FFFFFF;}
.head{height:318px;}
.left{float:left;width:478px;height:318px;background:url(images/rs.gif) no-repeat;}
.left .pic{float:left;display:inline;width:230px;height:230px;margin:40px 0 0 14px;padding:2px;border:#e4eaee 1px solid;}
.left .link{float:left;margin:210px 0 0 30px;font-size:14px;}
.left .link a{margin:0 5px;color:#1D71F5;}
.left .link a:hover{color:#c00;text-decoration:underline;}
.right{float:left;display:inline;width:350px;margin-left:30px;}
.right .title{height:26px;line-height:26px;padding-left:10px;border-bottom:#4dafea 1px solid;}
.right .title .t1{color:#2879B1;font-size:18px;font-weight:bold;}
.right .title .t2{color:#2879B1;font-size:14px;margin-left:170px;}
.right .hot{margin-top:10px;padding-left:10px;}
.right .hot .num{float:left;display:inline;width:15px;height:247px;margin:6px 5px 0 0;background:url(images/num.jpg) no-repeat;}
.right .hot .ord{color:#797979;margin-top:2px;}
.right .hot .ord a{color:#373536;font-size:14px;}
.right .hot .ord a:hover{color:#c00;text-decoration:underline;}
.right .hot .ord span{color:#F87C74;}
.app .tit{height:45px;background:url(images/tit.gif) no-repeat;}
.app .tit li{float:left;display:inline;width:126px;height:26px;line-height:28px;background:url(images/li.gif) no-repeat;font-size:14px;text-align:center;cursor:pointer;}
.app .tit .on{color:#126197;background:url(images/on.gif) no-repeat;}
.app .list{height:300px;border:#7face0 1px solid;border-top:0;}
.app .list li{float:left;width:214px;height:70px;text-align:center;}
.app .list li img{font-size:0;border:#E1E1E1 1px solid;}
.app .list li a:hover img{border:#FF2462 1px solid;}
.loadapp{padding:52px 86px;font-size:44px;background:#FC6363;color:#fff;}
</style>
<?php 
require_once './a_include/header_stat.php';
?>
</head>

<body>
<style type="text/css">
.loadapp2{display:none;height:250px;padding:16px 0 0;background:url(http://baby.ci123.com/yunqi/m2/images/loadbg.gif) repeat-x;background-size:1px 320px;}
.loadapp2 li{padding:4px 0;color:#535353;font-size:38px;}
.loadapp2 .a{font-size:46px;}
.loadapp2 .c{padding-left:80px;}
.loadapp2 .bt{float:left;border:#FF8D81 1px solid;padding:6px 24px;background:#ff8d81;color:#fff;border-radius:4px;}
</style>
<style type="text/css">
	a:hover{ text-decoration:none;}
	.header{width:100%;height:35px;background: url(http://app.qpic.cn/mblogpic/22cb546505a4c7fba47e/2000) repeat-x;border-bottom:#989898 2px solid;left:0;z-index:1000;}
	.header .c{width:956px;margin:0 auto;height:35px;padding:0 0;}
	.header .c .logo{float:left;}
	.header .c .qlogo{float:right;padding-top:2px;}
	.c ul{float:left;font-size:14px; padding-left:18px;}
	.c ul li{float:left;width:auto;}
	.c li a:link,.c li a:visited,.c li a:hover,.c li a:active{color:#fff;text-decoration:none;display:block;padding:10px 18px 9px 18px;}
	/*.cur {background:url(images/top_line.gif) repeat-x;}*/
	.c li a:hover{ background-color:#666;}
	.c .h_r {  float:right; padding:10px 120px 0 0; color:#fff;}
	.h_r a:link,.h_r a:visited{ color:#CCC; text-decoration:none;}
	.h_r a:hover{text-decoration:underline;color:#CCC;}
	.c .l { float:left;}
.cont_box {
    background: none repeat scroll 0 0 #EEEEEE;
    border: 1px solid #BBBBBB;
    margin: 15px auto 0;
    width: 960px;
}    
</style>
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
require_once './a_include/ad960x90.php';
?>
<div class="main">
	<div class="head">
    	<div class="left">
        	<ul>
            	<li class="pic"><img src="<?=$result_info['result_img']?>" height="230" width="230"></li>
                <li class="link">
                <?php if ($result_info['url']) {?>
                	<a href="<?=$result_info['url']?>" target="_blank">再测一次</a>
                	<?php } else {?>
                	<a href="/" target="_blank">再测一次</a>
                	<?php }?>
                    <a href="http://qzone.qq.com/" target="_blank">我的QQ空间</a>
                </li>
            </ul>
        	
        </div><!--left-->
        <div class="right">
        	<div class="title">
				<span class="t1">热门测试</span>
				<span class="t2">使用人数</span>
			</div>
			<div class="hot">
				<div class="num"></div>
				<div class="ord">
						<table>
													<tbody>
 <?php 
 	$idx = 0;
      foreach ($app_recommend_list as $top_app) {
      	if (!empty($app_list[$top_app])) {
      ?>
<tr height="26">
  <td width="228"><strong><?=$idx+1?>、</strong><a href="./<?=$top_app?>" target="_blank"><?=$app_list[$top_app]['title']?></a></td>
  <td align="right"><span><?=$app_list[$top_app]['num']?></span>人</td>
</tr>
      <?php 
      $idx++;
		}
		if ($idx == 10) {
			break;
		}
      }
      ?>
												</tbody></table>	
				</div>
			</div>
        </div><!--right-->
    </div><!--head-->
<?php 
require_once './a_include/ad760x90.php';
?>
    <div class="app clearfix" style="margin-top:5px;">
        <ul class="tit">
            <li id="cate1" onclick="changeCate(1);" class="on">最新测试</li>
            <li id="cate2" onclick="changeCate(2);">趣味测试</li>
            <li id="cate3" onclick="changeCate(3);">专业测试</li>
        </ul>
        <ul class="list" id="list1">
        
<li> <a target="_blank" href="./xbb" title="<?=$app_list['xbb']['title']?>，<?=$app_list['xbb']['num']?>人在玩~"><img src="<?=$app_list['xbb']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./sjhm" title="<?=$app_list['sjhm']['title']?>，<?=$app_list['sjhm']['num']?>人在玩~"><img src="<?=$app_list['sjhm']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./xsd" title="<?=$app_list['xsd']['title']?>，<?=$app_list['xsd']['num']?>人在玩~"><img src="<?=$app_list['xsd']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./iq" title="<?=$app_list['iq']['title']?>，<?=$app_list['iq']['num']?>人在玩~"><img src="<?=$app_list['iq']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./eq" title="<?=$app_list['eq']['title']?>，<?=$app_list['eq']['num']?>人在玩~"><img src="<?=$app_list['eq']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./xlnl" title="<?=$app_list['xlnl']['title']?>，<?=$app_list['xlnl']['num']?>人在玩~"><img src="<?=$app_list['xlnl']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./aln" title="<?=$app_list['aln']['title']?>，<?=$app_list['aln']['num']?>人在玩~"><img src="<?=$app_list['aln']['logo']?>" height width="165" /></a> </li>
<li> <a target="_blank" href="./mzjz" title="<?=$app_list['mzjz']['title']?>，<?=$app_list['mzjz']['num']?>人在玩~"><img src="<?=$app_list['mzjz']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./qqhy" title="<?=$app_list['qqhy']['title']?>，<?=$app_list['qqhy']['num']?>人在玩~"><img src="<?=$app_list['qqhy']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./lol" title="<?=$app_list['lol']['title']?>，<?=$app_list['lol']['num']?>人在玩~"><img src="<?=$app_list['lol']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./qqjz" title="<?=$app_list['qqjz']['title']?>，<?=$app_list['qqjz']['num']?>人在玩~"><img src="<?=$app_list['qqjz']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./mzhy" title="<?=$app_list['mzhy']['title']?>，<?=$app_list['mzhy']['num']?>人在玩~"><img src="<?=$app_list['mzhy']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./hsjh" title="<?=$app_list['hsjh']['title']?>，<?=$app_list['hsjh']['num']?>人在玩~"><img src="<?=$app_list['hsjh']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./alxz" title="<?=$app_list['alxz']['title']?>，<?=$app_list['alxz']['num']?>人在玩~"><img src="<?=$app_list['alxz']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./dyxx" title="<?=$app_list['dyxx']['title']?>，<?=$app_list['dyxx']['num']?>人在玩~"><img src="<?=$app_list['dyxx']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./bzl" title="<?=$app_list['bzl']['title']?>，<?=$app_list['bzl']['num']?>人在玩~"><img src="<?=$app_list['bzl']['logo']?>" height="60" width="165" /></a> </li>
        </ul>
        <ul class="list" id="list2" style="display:none;">
        
<li> <a target="_blank" href="./yjzq" title="<?=$app_list['yjzq']['title']?>，<?=$app_list['yjzq']['num']?>人在玩~"><img src="<?=$app_list['yjzq']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./jxrg" title="<?=$app_list['jxrg']['title']?>，<?=$app_list['jxrg']['num']?>人在玩~"><img src="<?=$app_list['jxrg']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./sch" title="<?=$app_list['sch']['title']?>，<?=$app_list['sch']['num']?>人在玩~"><img src="<?=$app_list['sch']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./hfxx" title="<?=$app_list['hfxx']['title']?>，<?=$app_list['hfxx']['num']?>人在玩~"><img src="<?=$app_list['hfxx']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./dszs" title="<?=$app_list['dszs']['title']?>，<?=$app_list['dszs']['num']?>人在玩~"><img src="<?=$app_list['dszs']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./xsm" title="<?=$app_list['xsm']['title']?>，<?=$app_list['xsm']['num']?>人在玩~"><img src="<?=$app_list['xsm']['logo']?>" height width="165" /></a></li>
<li> <a target="_blank" href="./lym" title="<?=$app_list['lym']['title']?>，<?=$app_list['lym']['num']?>人在玩~"><img src="<?=$app_list['lym']['logo']?>" height width="165" /></a></li>
<li> <a target="_blank" href="./msg" title="<?=$app_list['msg']['title']?>，<?=$app_list['msg']['num']?>人在玩~"><img src="<?=$app_list['msg']['logo']?>" height width="165" /></a></li>
<li> <a target="_blank" href="./zhz" title="<?=$app_list['zhz']['title']?>，<?=$app_list['zhz']['num']?>人在玩~"><img src="<?=$app_list['zhz']['logo']?>" height width="165" /></a></li>
<li> <a target="_blank" href="./lyb2" title="<?=$app_list['lyb2']['title']?>，<?=$app_list['lyb2']['num']?>人在玩~"><img src="<?=$app_list['lyb2']['logo']?>" height="60" width="165"  /></a></li>
<li> <a target="_blank" href="./jggj" title="<?=$app_list['jggj']['title']?>，<?=$app_list['jggj']['num']?>人在玩~"><img src="<?=$app_list['jggj']['logo']?>" height="60" width="165"  /></a></li>
<li> <a target="_blank" href="./xmyf" title="<?=$app_list['xmyf']['title']?>，<?=$app_list['xmyf']['num']?>人在玩~"><img src="<?=$app_list['xmyf']['logo']?>" height width="165" /></a></li>
<li> <a target="_blank" href="./xzyf" title="<?=$app_list['xzyf']['title']?>，<?=$app_list['xzyf']['num']?>人在玩~"><img src="<?=$app_list['xzyf']['logo']?>" height width="165" /></a></li>
<li> <a target="_blank" href="./tygn" title="<?=$app_list['tygn']['title']?>，<?=$app_list['tygn']['num']?>人在玩~"><img src="<?=$app_list['tygn']['logo']?>" height width="165" /></a></li>
<li> <a target="_blank" href="./cygd" title="<?=$app_list['cygd']['title']?>，<?=$app_list['cygd']['num']?>人在玩~"><img src="<?=$app_list['cygd']['logo']?>" height width="165" /></a></li>  
<li> <a target="_blank" href="./ywmz" title="<?=$app_list['ywmz']['title']?>，<?=$app_list['ywmz']['num']?>人在玩~"><img src="<?=$app_list['ywmz']['logo']?>" height width="165" /></a></li>

                    </ul>
        <ul class="list" id="list3" style="display:none;">
        
<li> <a target="_blank" href="./fcsj" title="<?=$app_list['fcsj']['title']?>，<?=$app_list['fcsj']['num']?>人在玩~"><img src="<?=$app_list['fcsj']['logo']?>" height width="165"  /></a></li>
<li> <a target="_blank" href="./xbz" title="<?=$app_list['xbz']['title']?>，<?=$app_list['xbz']['num']?>人在玩~"><img src="<?=$app_list['xbz']['logo']?>" height width="165" /></a></li>
<li> <a target="_blank" href="./smm" title="<?=$app_list['smm']['title']?>，<?=$app_list['smm']['num']?>人在玩~"><img src="<?=$app_list['smm']['logo']?>" height width="165" /></a></li>
<li> <a target="_blank" href="./smzy" title="<?=$app_list['smzy']['title']?>，<?=$app_list['smzy']['num']?>人在玩~"><img src="<?=$app_list['smzy']['logo']?>" height width="165" /></a></li>
<li> <a target="_blank" href="./hyyz" title="<?=$app_list['hyyz']['title']?>，<?=$app_list['hyyz']['num']?>人在玩~"><img src="<?=$app_list['hyyz']['logo']?>" height width="165" /></a></li>
<li> <a target="_blank" href="./ngcs" title="<?=$app_list['ngcs']['title']?>，<?=$app_list['ngcs']['num']?>人在玩~"><img src="<?=$app_list['ngcs']['logo']?>" height width="165" /></a></li>
<li> <a target="_blank" href="./wlqt" title="<?=$app_list['wlqt']['title']?>，<?=$app_list['wlqt']['num']?>人在玩~"><img src="<?=$app_list['wlqt']['logo']?>" height="60" width="165"  /></a></li>
<li> <a target="_blank" href="./adj" title="<?=$app_list['adj']['title']?>，<?=$app_list['adj']['num']?>人在玩~"><img src="<?=$app_list['adj']['logo']?>" height width="165" /></a></li>
<li> <a target="_blank" href="./lyb" title="<?=$app_list['lyb']['title']?>，<?=$app_list['lyb']['num']?>人在玩~"><img src="<?=$app_list['lyb']['logo']?>" height width="165" /></a> </li>
<li> <a target="_blank" href="./ajg" title="<?=$app_list['ajg']['title']?>，<?=$app_list['ajg']['num']?>人在玩~"><img src="<?=$app_list['ajg']['logo']?>" height width="165" /></a> </li>
<li> <a target="_blank" href="./yyzs" title="<?=$app_list['yyzs']['title']?>，<?=$app_list['yyzs']['num']?>人在玩~"><img src="<?=$app_list['yyzs']['logo']?>" height width="165" /></a> </li>
<li> <a target="_blank" href="./zdsj" title="<?=$app_list['zdsj']['title']?>，<?=$app_list['zdsj']['num']?>人在玩~"><img src="<?=$app_list['zdsj']['logo']?>" height width="165" /> </a></li>
<li> <a target="_blank" href="./thzs" title="<?=$app_list['thzs']['title']?>，<?=$app_list['thzs']['num']?>人在玩~"><img src="<?=$app_list['thzs']['logo']?>" height width="165" /></a> </li>
<li> <a target="_blank" href="./wlzy" title="<?=$app_list['wlzy']['title']?>，<?=$app_list['wlzy']['num']?>人在玩~"><img src="<?=$app_list['wlzy']['logo']?>" height width="165" /></a> </li>
<li> <a target="_blank" href="./qssf" title="<?=$app_list['qssf']['title']?>，<?=$app_list['qssf']['num']?>人在玩~"><img src="<?=$app_list['qssf']['logo']?>" height="60" width="165" /></a> </li>
<li> <a target="_blank" href="./zhh" title="<?=$app_list['zhh']['title']?>，<?=$app_list['zhh']['num']?>人在玩~"><img src="<?=$app_list['zhh']['logo']?>" height width="165" /></a> </li>

                    </ul>
        <div style="clear:both;"></div>
        
        
        
        
    </div>
</div><!--/main-->

<div class="footer">
	2013 &copy; Copyright <a href="./">微测试</a>. All Rights Reserved
</div>
<script type="text/javascript">
var _cate = 1;
function changeCate(n) {
	if(n != _cate)
	{
		document.getElementById("cate"+n).className="on";
		document.getElementById("cate"+_cate).className="";
		document.getElementById("list"+n).style.display="block";
		document.getElementById("list"+_cate).style.display="none";
		_cate=n;
	}
}
</script>

<?php 
require_once './a_include/adfloat.php';
require_once './a_include/footer_stat.php';
?>

</body></html>