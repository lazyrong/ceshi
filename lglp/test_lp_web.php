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
.main .cont{padding:0 0 14px 14px;}
.main .cont .tt{background:url(./imgs/start.gif) no-repeat;font-size:18px;font-family:"黑体";color:#212121;padding:18px 0 0 189px;height:18px;overflow:hidden;margin-bottom:21px;}
.main .cont .jd{ text-align:center; margin:5px 0 15px;}
.main .cont dl{margin-left:17px;width:570px;font-size:14px;padding:0 0 0 20px;}
.main .cont dl.on{background:#d7d7d7;}
.main .cont dt{font-weight:bold;height:30px;line-height:30px;}
.main .cont dd{margin-left:14px;height:25px;line-height:25px;}
.main .cont label{cursor:pointer;}
.main .cont dl input{margin-right:6px;}
</style>
<?php 
require_once '../a_include/header_stat.php';
?>

<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>

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
<div class="title"><img src="./imgs/top2.jpg" width="716" height="174" /></div>
<div class="main">
	<div class="center">
		<s class="t"></s>
		<div class="cont" id="box1">
        	<div class="jd"><img src="./imgs/1.png" width="481" height="15" /></div>
			<div class="tt">共20题</div>
            			<dl id="tm1" onmouseover="change1(1);" onmouseout="change2(1);">
				<dt id="t1">1、她的身高是多少？</dt>
                				<dd>
                	<input type="radio" id="list10" name="a1" value="-20" onclick="check(1,1)"  />
					<label for="list10" onmouseover="this.className='red'" onmouseout="this.className=''">A、低于155cm</label>
                </dd>
                				<dd>
                	<input type="radio" id="list11" name="a1" value="0" onclick="check(1,1)"  />
					<label for="list11" onmouseover="this.className='red'" onmouseout="this.className=''">B、155-165cm</label>
                </dd>
                				<dd>
                	<input type="radio" id="list12" name="a1" value="20" onclick="check(1,1)"  />
					<label for="list12" onmouseover="this.className='red'" onmouseout="this.className=''">C、165-175cm</label>
                </dd>
                				<dd>
                	<input type="radio" id="list13" name="a1" value="-10" onclick="check(1,1)"  />
					<label for="list13" onmouseover="this.className='red'" onmouseout="this.className=''">D、超过175cm</label>
                </dd>
                			</dl>
            			<dl id="tm2" onmouseover="change1(2);" onmouseout="change2(2);">
				<dt id="t2">2、是否会织毛衣？</dt>
                				<dd>
                	<input type="radio" id="list20" name="a2" value="20" onclick="check(1,2)"  />
					<label for="list20" onmouseover="this.className='red'" onmouseout="this.className=''">A、会</label>
                </dd>
                				<dd>
                	<input type="radio" id="list21" name="a2" value="0" onclick="check(1,2)"  />
					<label for="list21" onmouseover="this.className='red'" onmouseout="this.className=''">B、不会</label>
                </dd>
                			</dl>
            			<dl id="tm3" onmouseover="change1(3);" onmouseout="change2(3);">
				<dt id="t3">3、是否喜欢操持家务？</dt>
                				<dd>
                	<input type="radio" id="list30" name="a3" value="10" onclick="check(1,3)"  />
					<label for="list30" onmouseover="this.className='red'" onmouseout="this.className=''">A、喜欢</label>
                </dd>
                				<dd>
                	<input type="radio" id="list31" name="a3" value="0" onclick="check(1,3)"  />
					<label for="list31" onmouseover="this.className='red'" onmouseout="this.className=''">B、不喜欢</label>
                </dd>
                			</dl>
            			<dl id="tm4" onmouseover="change1(4);" onmouseout="change2(4);">
				<dt id="t4">4、是否会使用电熨斗？</dt>
                				<dd>
                	<input type="radio" id="list40" name="a4" value="0" onclick="check(1,4)"  />
					<label for="list40" onmouseover="this.className='red'" onmouseout="this.className=''">A、会使用</label>
                </dd>
                				<dd>
                	<input type="radio" id="list41" name="a4" value="-10" onclick="check(1,4)"  />
					<label for="list41" onmouseover="this.className='red'" onmouseout="this.className=''">B、不会使用</label>
                </dd>
                			</dl>
            			<dl id="tm5" onmouseover="change1(5);" onmouseout="change2(5);">
				<dt id="t5">5、是否喜欢泡KTV？</dt>
                				<dd>
                	<input type="radio" id="list50" name="a5" value="-20" onclick="check(1,5)"  />
					<label for="list50" onmouseover="this.className='red'" onmouseout="this.className=''">A、喜欢</label>
                </dd>
                				<dd>
                	<input type="radio" id="list51" name="a5" value="0" onclick="check(1,5)"  />
					<label for="list51" onmouseover="this.className='red'" onmouseout="this.className=''">B、不喜欢</label>
                </dd>
                			</dl>
            			<dl id="tm6" onmouseover="change1(6);" onmouseout="change2(6);">
				<dt id="t6">6、她的体重？</dt>
                				<dd>
                	<input type="radio" id="list60" name="a6" value="-20" onclick="check(1,6)"  />
					<label for="list60" onmouseover="this.className='red'" onmouseout="this.className=''">A、不足85斤</label>
                </dd>
                				<dd>
                	<input type="radio" id="list61" name="a6" value="20" onclick="check(1,6)"  />
					<label for="list61" onmouseover="this.className='red'" onmouseout="this.className=''">B、85-90斤</label>
                </dd>
                				<dd>
                	<input type="radio" id="list62" name="a6" value="10" onclick="check(1,6)"  />
					<label for="list62" onmouseover="this.className='red'" onmouseout="this.className=''">C、90-100斤</label>
                </dd>
                				<dd>
                	<input type="radio" id="list63" name="a6" value="0" onclick="check(1,6)"  />
					<label for="list63" onmouseover="this.className='red'" onmouseout="this.className=''">D、100-120斤</label>
                </dd>
                				<dd>
                	<input type="radio" id="list64" name="a6" value="-50" onclick="check(1,6)"  />
					<label for="list64" onmouseover="this.className='red'" onmouseout="this.className=''">E、超过120斤</label>
                </dd>
                			</dl>
            			<dl id="tm7" onmouseover="change1(7);" onmouseout="change2(7);">
				<dt id="t7">7、她是否戴眼镜，近视程度怎么样？</dt>
                				<dd>
                	<input type="radio" id="list70" name="a7" value="20" onclick="check(1,7)"  />
					<label for="list70" onmouseover="this.className='red'" onmouseout="this.className=''">A、不近视</label>
                </dd>
                				<dd>
                	<input type="radio" id="list71" name="a7" value="-20" onclick="check(1,7)"  />
					<label for="list71" onmouseover="this.className='red'" onmouseout="this.className=''">B、戴隐形眼镜</label>
                </dd>
                				<dd>
                	<input type="radio" id="list72" name="a7" value="10" onclick="check(1,7)"  />
					<label for="list72" onmouseover="this.className='red'" onmouseout="this.className=''">C、近视小于300度</label>
                </dd>
                				<dd>
                	<input type="radio" id="list73" name="a7" value="-10" onclick="check(1,7)"  />
					<label for="list73" onmouseover="this.className='red'" onmouseout="this.className=''">D、300-500度</label>
                </dd>
                				<dd>
                	<input type="radio" id="list74" name="a7" value="-20" onclick="check(1,7)"  />
					<label for="list74" onmouseover="this.className='red'" onmouseout="this.className=''">E、500-700度</label>
                </dd>
                				<dd>
                	<input type="radio" id="list75" name="a7" value="-30" onclick="check(1,7)"  />
					<label for="list75" onmouseover="this.className='red'" onmouseout="this.className=''">F、大于700度</label>
                </dd>
                			</dl>
            			<dl id="tm8" onmouseover="change1(8);" onmouseout="change2(8);">
				<dt id="t8">8、她的恋爱经历？</dt>
                				<dd>
                	<input type="radio" id="list80" name="a8" value="20" onclick="check(1,8)"  />
					<label for="list80" onmouseover="this.className='red'" onmouseout="this.className=''">A、没谈过</label>
                </dd>
                				<dd>
                	<input type="radio" id="list81" name="a8" value="10" onclick="check(1,8)"  />
					<label for="list81" onmouseover="this.className='red'" onmouseout="this.className=''">B、唯一的一次恋爱进行中</label>
                </dd>
                				<dd>
                	<input type="radio" id="list82" name="a8" value="-20" onclick="check(1,8)"  />
					<label for="list82" onmouseover="this.className='red'" onmouseout="this.className=''">C、被甩一次</label>
                </dd>
                				<dd>
                	<input type="radio" id="list83" name="a8" value="20" onclick="check(1,8)"  />
					<label for="list83" onmouseover="this.className='red'" onmouseout="this.className=''">D、甩别人一次</label>
                </dd>
                				<dd>
                	<input type="radio" id="list84" name="a8" value="-50" onclick="check(1,8)"  />
					<label for="list84" onmouseover="this.className='red'" onmouseout="this.className=''">E、被甩过n次</label>
                </dd>
                				<dd>
                	<input type="radio" id="list85" name="a8" value="-50" onclick="check(1,8)"  />
					<label for="list85" onmouseover="this.className='red'" onmouseout="this.className=''">F、甩过别人n次</label>
                </dd>
                			</dl>
            			<dl id="tm9" onmouseover="change1(9);" onmouseout="change2(9);">
				<dt id="t9">9、她的年龄？</dt>
                				<dd>
                	<input type="radio" id="list90" name="a9" value="0" onclick="check(1,9)"  />
					<label for="list90" onmouseover="this.className='red'" onmouseout="this.className=''">A、小于20岁</label>
                </dd>
                				<dd>
                	<input type="radio" id="list91" name="a9" value="10" onclick="check(1,9)"  />
					<label for="list91" onmouseover="this.className='red'" onmouseout="this.className=''">B、20-25岁</label>
                </dd>
                				<dd>
                	<input type="radio" id="list92" name="a9" value="0" onclick="check(1,9)"  />
					<label for="list92" onmouseover="this.className='red'" onmouseout="this.className=''">C、26-30岁</label>
                </dd>
                				<dd>
                	<input type="radio" id="list93" name="a9" value="-10" onclick="check(1,9)"  />
					<label for="list93" onmouseover="this.className='red'" onmouseout="this.className=''">D、大于30岁</label>
                </dd>
                			</dl>
            			<dl id="tm10" onmouseover="change1(10);" onmouseout="change2(10);">
				<dt id="t10">10、是否做过文秘？</dt>
                				<dd>
                	<input type="radio" id="list100" name="a10" value="0" onclick="check(1,10)"  />
					<label for="list100" onmouseover="this.className='red'" onmouseout="this.className=''">A、做过</label>
                </dd>
                				<dd>
                	<input type="radio" id="list101" name="a10" value="20" onclick="check(1,10)"  />
					<label for="list101" onmouseover="this.className='red'" onmouseout="this.className=''">B、没做过</label>
                </dd>
                			</dl>
            		</div>
        
        <div class="cont" id="box2" style="display:none;">
        	<div class="jd"><img src="./imgs/2.png" width="481" height="15" /></div>
			<div class="tt">共20题</div>
            			<dl id="tm11" onmouseover="change1(11);" onmouseout="change2(11);">
				<dt id="t11">11、是否会开车？</dt>
                				<dd>
                	<input type="radio" id="list110" name="a11" value="10" onclick="check(2,11)"  />
					<label for="list110" onmouseover="this.className='red'" onmouseout="this.className=''">A、会开</label>
                </dd>
                				<dd>
                	<input type="radio" id="list111" name="a11" value="0" onclick="check(2,11)"  />
					<label for="list111" onmouseover="this.className='red'" onmouseout="this.className=''">B、不会开</label>
                </dd>
                			</dl>
            			<dl id="tm12" onmouseover="change1(12);" onmouseout="change2(12);">
				<dt id="t12">12、她的英语水平？</dt>
                				<dd>
                	<input type="radio" id="list120" name="a12" value="-10" onclick="check(2,12)"  />
					<label for="list120" onmouseover="this.className='red'" onmouseout="this.className=''">A、没过四级</label>
                </dd>
                				<dd>
                	<input type="radio" id="list121" name="a12" value="20" onclick="check(2,12)"  />
					<label for="list121" onmouseover="this.className='red'" onmouseout="this.className=''">B、过了四级</label>
                </dd>
                				<dd>
                	<input type="radio" id="list122" name="a12" value="10" onclick="check(2,12)"  />
					<label for="list122" onmouseover="this.className='red'" onmouseout="this.className=''">C、过了六级</label>
                </dd>
                			</dl>
            			<dl id="tm13" onmouseover="change1(13);" onmouseout="change2(13);">
				<dt id="t13">13、她的歌声</dt>
                				<dd>
                	<input type="radio" id="list130" name="a13" value="-30" onclick="check(2,13)"  />
					<label for="list130" onmouseover="this.className='red'" onmouseout="this.className=''">A、五音不全</label>
                </dd>
                				<dd>
                	<input type="radio" id="list131" name="a13" value="0" onclick="check(2,13)"  />
					<label for="list131" onmouseover="this.className='red'" onmouseout="this.className=''">B、唱得不错</label>
                </dd>
                				<dd>
                	<input type="radio" id="list132" name="a13" value="30" onclick="check(2,13)"  />
					<label for="list132" onmouseover="this.className='red'" onmouseout="this.className=''">C、专业水平</label>
                </dd>
                			</dl>
            			<dl id="tm14" onmouseover="change1(14);" onmouseout="change2(14);">
				<dt id="t14">14、是否喜欢养宠物？</dt>
                				<dd>
                	<input type="radio" id="list140" name="a14" value="10" onclick="check(2,14)"  />
					<label for="list140" onmouseover="this.className='red'" onmouseout="this.className=''">A、喜欢</label>
                </dd>
                				<dd>
                	<input type="radio" id="list141" name="a14" value="0" onclick="check(2,14)"  />
					<label for="list141" onmouseover="this.className='red'" onmouseout="this.className=''">B、不喜欢</label>
                </dd>
                			</dl>
            			<dl id="tm15" onmouseover="change1(15);" onmouseout="change2(15);">
				<dt id="t15">15、是否会打麻将？</dt>
                				<dd>
                	<input type="radio" id="list150" name="a15" value="-20" onclick="check(2,15)"  />
					<label for="list150" onmouseover="this.className='red'" onmouseout="this.className=''">A、会</label>
                </dd>
                				<dd>
                	<input type="radio" id="list151" name="a15" value="0" onclick="check(2,15)"  />
					<label for="list151" onmouseover="this.className='red'" onmouseout="this.className=''">B、不会</label>
                </dd>
                			</dl>
            			<dl id="tm16" onmouseover="change1(16);" onmouseout="change2(16);">
				<dt id="t16">16、是否会喝酒？</dt>
                				<dd>
                	<input type="radio" id="list160" name="a16" value="10" onclick="check(2,16)"  />
					<label for="list160" onmouseover="this.className='red'" onmouseout="this.className=''">A、不会喝酒</label>
                </dd>
                				<dd>
                	<input type="radio" id="list161" name="a16" value="-30" onclick="check(2,16)"  />
					<label for="list161" onmouseover="this.className='red'" onmouseout="this.className=''">B、喝的很强</label>
                </dd>
                				<dd>
                	<input type="radio" id="list162" name="a16" value="0" onclick="check(2,16)"  />
					<label for="list162" onmouseover="this.className='red'" onmouseout="this.className=''">C、一般般</label>
                </dd>
                			</dl>
            			<dl id="tm17" onmouseover="change1(17);" onmouseout="change2(17);">
				<dt id="t17">17、三围是否标准？（36-24-36）</dt>
                				<dd>
                	<input type="radio" id="list170" name="a17" value="20" onclick="check(2,17)"  />
					<label for="list170" onmouseover="this.className='red'" onmouseout="this.className=''">A、绝对标准</label>
                </dd>
                				<dd>
                	<input type="radio" id="list171" name="a17" value="10" onclick="check(2,17)"  />
					<label for="list171" onmouseover="this.className='red'" onmouseout="this.className=''">B、还可以</label>
                </dd>
                				<dd>
                	<input type="radio" id="list172" name="a17" value="-20" onclick="check(2,17)"  />
					<label for="list172" onmouseover="this.className='red'" onmouseout="this.className=''">C、有点差距</label>
                </dd>
                				<dd>
                	<input type="radio" id="list173" name="a17" value="-30" onclick="check(2,17)"  />
					<label for="list173" onmouseover="this.className='red'" onmouseout="this.className=''">D、水桶</label>
                </dd>
                			</dl>
            			<dl id="tm18" onmouseover="change1(18);" onmouseout="change2(18);">
				<dt id="t18">18、她的小姐妹对你是否恭维有加？</dt>
                				<dd>
                	<input type="radio" id="list180" name="a18" value="20" onclick="check(2,18)"  />
					<label for="list180" onmouseover="this.className='red'" onmouseout="this.className=''">A、是</label>
                </dd>
                				<dd>
                	<input type="radio" id="list181" name="a18" value="-20" onclick="check(2,18)"  />
					<label for="list181" onmouseover="this.className='red'" onmouseout="this.className=''">B、否</label>
                </dd>
                			</dl>
            			<dl id="tm19" onmouseover="change1(19);" onmouseout="change2(19);">
				<dt id="t19">19、当你与朋友高谈阔论时，她是否保持沉默？</dt>
                				<dd>
                	<input type="radio" id="list190" name="a19" value="20" onclick="check(2,19)"  />
					<label for="list190" onmouseover="this.className='red'" onmouseout="this.className=''">A、是</label>
                </dd>
                				<dd>
                	<input type="radio" id="list191" name="a19" value="-20" onclick="check(2,19)"  />
					<label for="list191" onmouseover="this.className='red'" onmouseout="this.className=''">B、否</label>
                </dd>
                			</dl>
            			<dl id="tm20" onmouseover="change1(20);" onmouseout="change2(20);">
				<dt id="t20">20、是否喜欢唠叨？</dt>
                				<dd>
                	<input type="radio" id="list200" name="a20" value="0" onclick="check(2,20)"  />
					<label for="list200" onmouseover="this.className='red'" onmouseout="this.className=''">A、不喜欢</label>
                </dd>
                				<dd>
                	<input type="radio" id="list201" name="a20" value="-50" onclick="check(2,20)"  />
					<label for="list201" onmouseover="this.className='red'" onmouseout="this.className=''">B、喜欢</label>
                </dd>
                				<dd>
                	<input type="radio" id="list202" name="a20" value="-20" onclick="check(2,20)"  />
					<label for="list202" onmouseover="this.className='red'" onmouseout="this.className=''">C、有一点</label>
                </dd>
                			</dl>
            		</div>
		<s class="b"></s>
	</div>
</div><!--/main-->

<script language="javascript">
//滑动参数
var _total_page=2; //总页数
var _echo_num=10; //每页题目数
var _total_num=20; //题目总数
var _page_id='box'; //每页的id,$('#'+_page_id+n)
var _question_id='tm'; //每题的id,$('#'+_question_id+n)
var _arrow_id='arrow'; //箭头的id,$('#'+_arrow_id)
var _arrow_time=200; //箭头移动一次花费的时间（单位：微秒）
var _move_time=300; //上下移动一次花费的时间（单位：微秒）
var _go_top_time=500; //返回顶部花费的时间（单位：微秒）
var _arrow_top=35; //箭头div顶部相对于当前题目div顶部的距离
var _arrow_left=70; //箭头div左侧相对于当前题目div左侧的距离

function showTips(n){
	$('#tip'+n).slideDown();	
}
//鼠标移动变色
function change1(id){
	$('#'+_question_id+id).css({background:'#D7D7D7'});
}
function change2(id){
	$('#'+_question_id+id).css({background:''});
}
//滑动代码
function check(m,id){
	if(m==_total_page){
		var last_id=_total_num;
	}else{
		var last_id=_echo_num*m;	
	}
	showMiss(m,last_id,id);
}
function showMiss(m,last_id,id){//滑动到未选择的题目
	var start_id=(m-1)*_echo_num+1;
	for(var i=start_id;i<=last_id;i++){
		var v_id=getv(i);
		if(!v_id){
			if(id>i){
				//moveArrow(i);
				moveUp(id,i);
				return false;
			}else{
				//moveArrow(i);
				moveDown(id,i);
				return false;	
			}
		}	
	}
	//翻页或计算结果，生成cookie
	if(m==_total_page){
		var num=1;
		var score=0;
		while(num<=_total_num){
			score+=Number(getv(num));
			num++;	
		}
		//document.cookie='SCORES='+score;
		window.location.href='view.php?score='+score+'&who=<?=$_REQUEST['who']?>';
	}else{
		goTop(m);
	}
}
function moveArrow(id){//箭头移动
	var p=$('#'+_question_id+id).offset();
	$('#'+_arrow_id).animate({top:p.top+_arrow_top+'px'},_arrow_time,'swing');	
}
function moveDown(id,i){//向下滑动
	var h1=0;
	for(var j=id;j<i;j++){
		h1+=$('#'+_question_id+j).height();				
	}
	var h=$(document).scrollTop();
	$('html,body').animate({scrollTop:h+h1+'px'},_move_time,'swing',function(){
		//增加浏览器窗口文档的高度
		var w_h=$(window).height(); //浏览器时窗口可视区域高度  
		var d_h=$(document).height(); //浏览器时窗口文档的高度
		var t_h=$(document).scrollTop(); //获取滚动条到顶部的垂直高度	
		var l_h=d_h-w_h-t_h;
		if(l_h<=180){
			$('body').css({height:d_h+180});	
		}
	});	
}
function moveUp(id,i){//向上滑动
	var h1=0;
	for(var j=id;j>i;j--){
		h1+=$('#'+_question_id+j).height();				
	}
	var h=$(document).scrollTop();
	$('html,body').animate({scrollTop:h-h1+'px'},_move_time,'swing');		
}
function goTop(m){//返回顶部
	var next=m+1;
	$('#'+_page_id+m).hide();
	$('#'+_page_id+next).show();
	$('html,body').animate({scrollTop:0},_go_top_time,'swing',function(){
		var top_id=m*_echo_num+1;
		//moveArrow(top_id);	
	});
}
function getv(n){//获取radio值
	var radioes=document.getElementsByName('a'+n);
	for(var i=0;i<radioes.length;i++){
		 if(radioes[i].checked){
		  return radioes[i].value;
		 }
	}	
}
/*function getPosition(){//设置箭头初始位置
	var p=$('#'+_question_id+'1').offset();
	$('#'+_arrow_id).css({left:p.left-_arrow_left+'px',top:p.top+_arrow_top+'px'});
	$('#'+_arrow_id).fadeIn(1000);	
}
window.onload=getPosition;*/
</script>
<?php 
require_once '../a_include/adfloat.php';
?>
<?php 
require_once '../a_include/footer_stat.php';
?>
</body></html>
