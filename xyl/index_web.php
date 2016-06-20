<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?=$app_list[$app_name]['title']?></title>
<link rel="shortcut icon" href="<?=$static_file_path?>/imgs/favicon.ico" />
<link rel="icon" href="<?=$static_file_path?>/imgs/favicon.ico" type="image/x-icon" />
<link href="../file/css/app.css" rel="stylesheet" type="text/css" />
<style type="text/css">


.main .head{height:170px;width:760px;overflow:hidden;}
.main .cont{height:262px;width:514px;background:url(imgs/head2.jpg) no-repeat;padding-left:246px;padding-top:48px;overflow:hidden;}
.main .cont ul{float:left;width:360px;}
.main .cont li{padding:15px 0;font-size:18px;font-family:"微软雅黑";color:#363636;}
.main .cont .txt{height:30px;line-height:30px;width:180px;padding:2px 5px;}
.main .cont span{height:38px;line-height:38px;font-weight:bold;margin-right:10px;color:#444641;float:left;}
.main .cont .btn{float:left;width:280px;padding-top:5px;padding-left:65px;}
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
		<div class="hd1"><img src="imgs/head1.jpg" width="760" height="170" /></div>
	</div><!--/head-->
    <div class="cont">
		<ul>
			<li><span>姓名：</span><input type="text" name="name" id="name" class="txt" maxlength="5" value="<?=$t_nick?>"/></li>
			<li><span>生日：</span><select name="y" id="y" onchange="changeY(this.value);">
																								<option value="1970">1970</option>
																																<option value="1971">1971</option>
																																<option value="1972">1972</option>
																																<option value="1973">1973</option>
																																<option value="1974">1974</option>
																																<option value="1975">1975</option>
																																<option value="1976">1976</option>
																																<option value="1977">1977</option>
																																<option value="1978">1978</option>
																																<option value="1979">1979</option>
																																<option value="1980" selected="selected">1980</option>
																																<option value="1981">1981</option>
																																<option value="1982">1982</option>
																																<option value="1983">1983</option>
																																<option value="1984">1984</option>
																																<option value="1985">1985</option>
																																<option value="1986">1986</option>
																																<option value="1987">1987</option>
																																<option value="1988">1988</option>
																																<option value="1989">1989</option>
																																<option value="1990">1990</option>
																																<option value="1991">1991</option>
																																<option value="1992">1992</option>
																																<option value="1993">1993</option>
																																<option value="1994">1994</option>
																																<option value="1995">1995</option>
																																<option value="1996">1996</option>
																																<option value="1997">1997</option>
																																<option value="1998">1998</option>
																																<option value="1999">1999</option>
																																<option value="2000">2000</option>
																																<option value="2001">2001</option>
																																<option value="2002">2002</option>
																																<option value="2003">2003</option>
																																<option value="2004">2004</option>
																																<option value="2005">2005</option>
																																<option value="2006">2006</option>
																																<option value="2007">2007</option>
																																<option value="2008">2008</option>
																																<option value="2009">2009</option>
																																<option value="2010">2010</option>
																																<option value="2011">2011</option>
																																<option value="2012">2012</option>
																																<option value="2013">2013</option>
																					</select>年
						<select name="m" id="m" onchange="changeM(this.value);">
							 								<option value="1">1</option>
							 								<option value="2">2</option>
							 								<option value="3">3</option>
							 								<option value="4">4</option>
							 								<option value="5">5</option>
							 								<option value="6">6</option>
							 								<option value="7">7</option>
							 								<option value="8">8</option>
							 								<option value="9">9</option>
							 								<option value="10">10</option>
							 								<option value="11">11</option>
							 								<option value="12">12</option>
							 						</select>月
						<select name="d" id="d" colNum="3" colWidth="90">
							 								<option value="1" >1</option>
							 								<option value="2" >2</option>
							 								<option value="3" >3</option>
							 								<option value="4" >4</option>
							 								<option value="5" >5</option>
							 								<option value="6" >6</option>
							 								<option value="7" >7</option>
							 								<option value="8" >8</option>
							 								<option value="9" >9</option>
							 								<option value="10" >10</option>
							 								<option value="11" >11</option>
							 								<option value="12" >12</option>
							 								<option value="13" >13</option>
							 								<option value="14" >14</option>
							 								<option value="15" >15</option>
							 								<option value="16" >16</option>
							 								<option value="17" >17</option>
							 								<option value="18" >18</option>
							 								<option value="19" >19</option>
							 								<option value="20" >20</option>
							 								<option value="21" >21</option>
							 								<option value="22" >22</option>
							 								<option value="23" >23</option>
							 								<option value="24" >24</option>
							 								<option value="25" >25</option>
							 								<option value="26" >26</option>
							 								<option value="27" >27</option>
							 								<option value="28" >28</option>
							 								<option value="29" >29</option>
							 								<option value="30" >30</option>
							 								<option value="31" >31</option>
							 						</select>日
			</li>
		</ul>
		<div class="btn"><a href="#" onclick="goUrl();"><img src="imgs/bt1.gif" height="56" width="194" /></a></div>
	</div>
</div><!--/main-->
<div style="display:none">
</div>

<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
<script>
var year=0;
var month=1;
var day=0;
window.onload=function(){
	document.getElementById("name").focus();
}
var days=new Array(0,31,0,31,30,31,30,31,31,30,31,30,31);
function changeY(y){
	document.getElementById('m').innerHTML='';
	var minM=1;
	var maxM=12;
	for(var i=minM;i<=maxM;i++){
		document.getElementById('m').options.add(new Option(i,i));
	}
	changeM(minM);
}
function changeM(m){
	document.getElementById('d').innerHTML='';
	var y=document.getElementById('y').value;
	getRun(y);
	var maxD=days[m];
	document.getElementById('d').innerHTML=maxD;
	for(var i=1;i<=maxD;i++){
		document.getElementById('d').options.add(new Option(i,i));
	}
}
function getRun(y)
{
	if(y%4==0&&(y%100!=0||y%400==0)){var max_m_day=29;}else{var max_m_day=28;}
	days[2]=max_m_day;
}
function goUrl(){
	var name=$.trim($('#name').val());	
	year=document.getElementById('y').value;
	month=document.getElementById('m').value;
	day=document.getElementById('d').value;
	if(name.length<=0){
		alert('姓名不能为空！');
		$('#name').val('').focus();
		return false;
	}
	window.location="view.php?name="+name+"&year="+year+"&month="+month+"&day="+day;;
	return false;
}
</script>
<?php 
require_once '../a_include/footer_stat.php';
?>
</body></html>
