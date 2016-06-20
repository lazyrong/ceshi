<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:xn="http://www.renren.com/2009/xnml">
	<head>
		<title>测测谁和你结婚</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="<?=$static_file_path?>/imgs/favicon.ico" />
<link rel="icon" href="<?=$static_file_path?>/imgs/favicon.ico" type="image/x-icon" />
<link href="../file/css/app.css" rel="stylesheet" type="text/css" />
<link href="../file/css/show-min.css" rel="stylesheet" type="text/css" />
		<meta content="IE=EmulateIE7 http-equiv=X-UA-Compatible">
		<meta name="GENERATOR" content="MSHTML 9.00.8112.16437">
		<style type="text/css">
			#main-content{
				background: url('imgs/bg.jpg') no-repeat center top;
				margin:20px auto;
				padding:0px;
				text-align:center;	
				font-family:"Microsoft YaHei";
				
			}
			div{
				padding:0px;
				font-size:16px;
			}
			
			#container{
				margin-top:0px;
				margin-left:auto;
				margin-right:auto;
				width:760px;
				text-align:left;
				padding:0px;
			}
			
			#setting{
				height:588px;
				background:url("imgs/tip.gif") no-repeat center top;
			}
			#setting #start1{
				position:absolute;
				width:180px;
				top:458px;
				margin-left:350px;
			}
			#setting #start1:hover{
				top:456px;
				width:184px;
				cursor:pointer;
			}
			
			#reCheckSetting{
				float:right;
				margin-top:80px;
				margin-right:70px;
				z-index:1000;
			}
			
			#settingPic{
				position:absolute;
				top:55px;
				z-index:900;
				
			}
		
			
			#questions{
				height:588px;
				background:url("imgs/shuzhi.gif") no-repeat center top;
			}
			
			#question{
				position:absolute;
				top:175px;
				margin-left:230px;
				width:300px;
			}
			#questions #nav{
				margin-top:180px;
				margin-left:180px;
			}
			#title{
				font-size:19px;
			}
			
			#answer{
				position:absolute;
				top:330px;	
				margin-left:400px;
			}
			
			#questions #answer div{
				text-align:center;
				line-height:32px;
				width:256px;
				height:32px;
				border:0px;
				background:url("imgs/questionbar.gif");
				margin-bottom:5px;
			}
			#questions #answer div:hover{
				cursor:pointer;
				width:257px;
				background:url("imgs/questionbar1.gif");
			}
			
			#result{
				height:588px;
				margin-top:0px;
				margin-left:200px;
				padding-top:80px;
			}
			#result span{
				font-size:30px;
				color:red;
			}
			#result #rank{
				margin-top:20px;
			}
			#result #comment{
				width:470px;
				margin-top:20px;
				margin-left:10px;
			}
			#result #uploadToAlbum1{
				position:absolute;
				top:415px;
				width:180px;
				margin-left:150px;				
			}
			#result #uploadToAlbum1:hover{
				top:415px;
				width:184px;
				cursor:pointer;
			}
			#result #uploadToAlbum2{
				/*position:absolute;
				top:357px;
				margin-top:10px;
			*/
				width:60px;
				margin-left:180px;							
			}
			#restart{
				position:absolute;
				top:586px;
				margin-left:400px;
			}
			#restart img:hover{
				cursor:pointer;
				top:586px;
				width:156px;
				height:40px;
			}
			/*
			#restart a{
				text-decoration:none;
				color:white;
			}
			*/
		</style>
		<script type="text/javascript">
			var questions = [
				"你觉得B真是因为爱Y才和TA结婚的吗？",
				"B出轨了但依然对Y很好，你认为TA更多是因为害怕，还是愧疚？",
				"B重新爱上曾拒绝过自己的人，你觉得TA是出于以下哪种原因？",
				"当发现你爱的人不爱你，你会继续追逐，用爱感动对方吗？",
				"假设你是Y，当B说依然爱你，依然把你当成生命的唯一时，你还会相信吗？",
				"你觉得一个人能同时爱两个人吗？",
				"如果B哀求Y的原谅，并承诺跟第三者分手，你认为Y应该选择原谅，还是选择离婚？",
				"假设Y和B已经有了小宝宝，但已没有感情，为了宝宝，他们是否应该勉强在一起？",
				"若是B已经不再爱Y，你是Y 的话你会怎么做？",
				"精神的背叛和肉体的背叛，你更不能接受哪种？",
				"“爱的人都没了，还要钱干什么”，如果当一个人因另一半出轨而离婚，却不接受财产的补偿，你会认为这个人…?",
				"假设你是故事中的那位第三者，你会接受一个曾经拒绝过的人吗？",
			];
			var answers = [
				["是","不是"],
				["前者","后者"],
				["余情未了，深埋的感情重新复活","未完成情节，为证明自己的魅力"],
				["会","不会"],
				["信","压根不信"],
				["不能","能"],
				["原谅","离婚"],
				["是的","不应该"],
				["成全B的幸福","你不好过，也让他们不好过"],
				["精神的","肉体的"],
				["高尚，维护了尊严","傻得无药可救"],
				["可能会，这世界唯一不变的就是变","不会，好马不吃回头草"],
			];
			var comments=[
				["12~23分。结婚对象：<br><span>你不爱也不爱你的人</span>", "你的爱情道路并不平坦，在经历了刻骨铭心的情伤之后，对于爱情会无法再保持原先那种最纯粹的信念，为了不再受伤，于是你会选择没有感情付出的婚姻，你认为只有这样才能掌控自己。或是因为现实环境的逼迫而进行妥协，比如接受父母安排的相亲婚姻，利益关系的政治婚姻等。但是你也别觉得沮丧，只要积极乐观的精神还在，在婚姻中培养出感情，你也能比别人幸福。"],
				["24~35分。结婚对象：<br><span>爱你的人</span> ","在寻找爱情的旅途中你也和大多数人一样，会执着于爱情，执着于与所爱之人携手一生，但寻寻觅觅，磕磕绊绊之后，你会领悟到世间最珍贵的不是“得不到”和“已失去”，而是现在能把握的幸福。当一个人为你而改变，把你的兴趣变成他的兴趣，对你无悔的付出，你的心会很容易便沦陷。没有谁规定因为感动的爱情就不是爱情，当还能拥有时，好好珍惜吧，幸福要认真抓住。"],
				["36~47分。结婚对象：<br><span>你爱的也爱你的人</span> ","你是一位很幸运的人，童话中王子和公主的幸福结局能发生在你身上。虽然运气有着不可代替的作用，让你在茫茫人海中遇到那个让你心动，同样也为你着迷的人，但更多的是出于你们的努力，因为懂得彼此珍惜，所以不轻易放弃，因为懂得经营爱情，所以能让感情长久。可婚姻比爱情更复杂，也更现实，若想让婚后的几十年长久且甜蜜的走下去，别忘了理解，包容与信任，也别忘了保持良好的互动。"],
				["48~60分。结婚对象：<br><span>你爱的人</span>","你是一个对爱情很有毅力的人，有一颗坚如磐石的心。只要认定一个人，便会付出一切努力去得到他。宁为玉碎不为瓦全，便是你的写照，你的坚韧能让对方感动而对你倾心，但同样过于执着，不择手段去得到他的人，只会让你的婚姻很不堪。幸福与彼此折磨的结局就在你的一念之间，始终坚持真诚与爱才能得到你想要得到的一切。婚姻不是爱的终点，你能得到的幸福应该更多。"],
			];

			//用户信息
			var name='';
			var headrul='';	
		</script>
		<script type="text/javascript">					
			//开始测试
			function start11(){
				document.getElementById("setting").style.display="none";
				document.getElementById("questions").style.display="block";
				document.getElementById("reCheckSetting").style.display="block";
			}

			//查看情景
			function huiguing(){
				document.getElementById("reCheckSetting").style.cursor="pointer";
				document.getElementById("reCheckSetting").style.width="82px";
				document.getElementById("settingPic").style.display="block";				
			}
			function huigued(){
				document.getElementById("settingPic").style.display="none";
				document.getElementById("reCheckSetting").style.width="80px";
			}
			var score = 12;//全选B，总分为12分
			var rank = 0;//分数段
			var index = 0;//题号
			var length=questions.length;
			//alert(length);
			function nextQuestion(ans){
				if(ans == "A"){
					score += 4;
				}
				if(index == 11){
					location.href="./view.php?score="+score;
					/*
					//alert("你得分："+score+"分");
					document.getElementById("questions").style.display = "none";
					document.getElementById("result").style.display = "block";
					document.getElementById("reCheckSetting").style.display="none";
					document.getElementById("score").innerHTML = "你的得分为：<span>"+score+"</span>";					
					if(score <= 23){
					}else if(score <= 35){
						rank = 1;
					}else if(score <= 47){
						rank = 2;
					}else{
						rank = 3;
					}
					document.getElementById("rank").innerHTML = comments[rank][0];
					document.getElementById("comment").innerHTML = comments[rank][1];	
					*/				
				}else{
					index++;
					document.getElementById("title").innerHTML = questions[index];
					document.getElementById("A").innerHTML = answers[index][0];
					document.getElementById("B").innerHTML = answers[index][1];
				}				
			}

		</script>
		
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
			  <li><a href="../hot.php">热门测试</a></li>
			  <li><a href="../love.php">缘分爱情</a></li>
			  <li><a href="../xingzuo.php">星座运势</a></li>
			  <li><a href="../xingge.php">性格测试</a></li>
			  <li><a href="../fangyan.php">疯狂的方言</a></li>
			</ul>
		</div>
	</div>
</div>
		<div id="main-content">
		<div id="container">
			<div id="result">
				<div id="score" >你的得分为：<span><?=$score?></span></div>
				<div id="rank" ><?=$result['range']?>。结婚对象：<span><?=$result['text']?></span></div>
				<div id="comment"><?=$result['remark']?></div>
				<div id="uploadToAlbum">
				</div>
				<div id="restart"><img src="imgs/retry.png" onclick="javascript:top.location.href='index.php'"/></div>
				<!-- <a href="javascript:top.location.href='http://apps.renren.com/marrywho/'" >重新开始</a> -->
			</div>
		</div>
		</div>

<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/ad960x90.php';
?>
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/footer_stat.php';
require_once dirname ( dirname ( __FILE__) ).'/a_include/adfloat.php';
?>
	</body>
</html>
