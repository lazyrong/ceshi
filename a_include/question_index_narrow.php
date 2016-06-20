
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?=$app_list[$app_name]['title']?></title>
<link rel="icon" href="../file/imgs/favicon.ico" type="image/x-icon" />
<link href="../file/css/app.css" rel="stylesheet" type="text/css" />
<link href="../file/css/general-min.css" rel="stylesheet" type="text/css" />
<link href="../file/css/quiz-min.css" rel="stylesheet" type="text/css" />

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
<div class="quizi_allWrapper">
	<div class="quizi_leftWrapper">
		<div class="quizi_leftQuizMainWrapper" style="background:url(http://img3.ceshiguang.com/pr/132n/pre.jpg) 0 0 no-repeat;">
			<div class="quizi_titleWrapper">
				<h1 class="quizi_titleContent"><?=$app_list[$app_name]['title']?></h1>
				<div class="quizi_titleStar" style="width:80px;"></div>
				<a class="quizi_LoginButton" href="./test.php">我要测试</a>
			</div>
		</div>
		<div class="quizi_leftQuizSu">
		<!-- 廣告728*90 -->
		</div>
	</div>
	<div class="quizi_rightWrapper">
		<h3 class="quizi_rightTitle">超人气测试推荐</h3>
		  <a class="quizi_sugItem" href="/jccs">
			  <img src="<?=$app_list['jccs']['logo']?>" class="quizi_sugImage" alt="<?=$app_list['jccs']['title']?>"/>
			  <div class="quizi_sugBGWrapper">
				  <div class="quizi_sugItemTitle"><?=$app_list['jccs']['title']?></div>
				  <div class="quizi_sugItemAction">
					  <div class="quizi_sugStar" style="width:80px;"></div>
					  <div class="quizi_sugView"><?=$app_list['jccs']['num']?></div>
					  <div class="quizi_sugViewIcon"></div>
					  <div class="clear"></div>
				  </div>
			  </div>
		  </a>
		  <div class="quizi_sugIntro"><?=$app_list['jccs']['title']?></div>
		  <div class="quizi_sugSuper">
		  <!-- 广告 300*250 -->
		   </div>
	</div>
	<div class="clear"></div>
</div>
<script language="javascript">
	function process(){
		$("body").append("<div class='quizi_patShadow'><div class='quizi_patWrapper'><div class='quizi_patImage'></div><div class='quizi_patInner'>正在分析中...</div><div class='clear'></div></div></div>");
		buildQuizImage();
	}
	function jumpProcess(){		
		$(".quizi_titleWrapper").ready(function(){
			$(".quizi_titleWrapper").hide();
		
			var str = '<div class="quizi_processJumpOn">'					
					 +'</div>';			
			$(".quizi_leftQuizMainWrapper").append(str);
			buildJumpQuestion(0);
		});		
	}
	function scoreProcess(){
		$(".quizi_titleWrapper").ready(function(){
			$(".quizi_titleWrapper").hide();
		
			var str = '<div class="quizi_processJumpOn">'					
					 +'</div>';			
			$(".quizi_leftQuizMainWrapper").append(str);
			buildScoreQuestion(0);
		});	
	}
	function jumpDoneProcess(){
		$("body").append("<div class='quizi_patShadow'><div class='quizi_patWrapper'><div class='quizi_patImage'></div><div class='quizi_patInner'>正在分析中...</div><div class='clear'></div></div></div>");
		buildQuizImage();	
	}
	function buildScoreQuestion(num){

		finalScore +=parseInt(num);
		var str = '<div class="quizi_titleRow">'+(nowJumpNum)+'. '+quizJumpQuestion[nowJumpNum-1]+'</div>';	
		for(var i=0;i<eval("quizJumpAn_"+(nowJumpNum-1)+".length");i++){
			var getScore = eval("quizJumpVa_"+[nowJumpNum-1]+"["+i+"]");
			
			if(nowJumpNum<quizJumpQuestion.length){
			   str+= '<a class="quizi_answerButton" onclick="buildScoreQuestion(\''+getScore+'\')">'+eval("quizJumpAn_"+(nowJumpNum-1)+"["+i+"]")+'</a>';	
			}else{
			   //finish the jump get result
			   
			   str+= '<a class="quizi_answerButton" onclick="finalBuildScore(\''+getScore+'\',\''+jumpLink+'\');">'+eval("quizJumpAn_"+(nowJumpNum-1)+"["+i+"]")+'</a>';
			}		
		}

		$(".quizi_processJumpOn").html(str);
		nowJumpNum++;
	}
	function finalBuildScore(num,link){
		finalScore +=parseInt(num);
		setCookie('j_result',finalScore,3);
		location.href=link;
		
	}
	function finalBuildJump(num,link){

		setCookie('j_result',num,3);
		location.href=link;
		
	}
	function buildJumpQuestion(num){		
		var str = '<div class="quizi_titleRow">'+(nowJumpNum)+'. '+quizJumpQuestion[num]+'</div>';	
		for(var i=0;i<eval("quizJumpAn_"+num+".length");i++){
			var jumpTo = eval("quizJumpVa_"+num+"["+i+"]");
			if(!isNaN(jumpTo)){
			   str+= '<a class="quizi_answerButton" onclick="buildJumpQuestion(\''+jumpTo+'\')">'+eval("quizJumpAn_"+num+"["+i+"]")+'</a>';	
			}else{
			   //finish the jump get result
			   str+= '<a class="quizi_answerButton" onclick="finalBuildJump(\''+jumpTo+'\',\''+jumpLink+'\');">'+eval("quizJumpAn_"+num+"["+i+"]")+'</a>';
			}		
		}			
		$(".quizi_processJumpOn").html(str);
		nowJumpNum++;
	}
	function buildQuizImage(){
		var data_json = '{"quiz_id":"132","unum":0,"result_id_arr":0,"result_title_arr":0}';

		$.ajax({
			type:"POST",
			url:base_url+"quizajax/buildImage",
			data:{quiz_data:data_json},
			dataType:"html",
			cache:false,
			success:function(data){
				var json = new Function("return"+data)();
				
				setTimeout("showQuizResult('"+json.in_path+"','"+json.out_path+"','"+json.width+"','"+json.height+"')",2000);
			}
		});		
		
	}
	function showQuizResult(in_path,out_path,src_width,src_height){

		$(".quizi_patWrapper").remove();
		var str = "<div class='quizi_shareAllPane'>  <div class='quizi_shareAllUpPane'><div class='quizi_imgShowWrapper' >  <img src='[-out_path-]' class='quizi_photoLeftItem'/></div><div class='quizi_rightAllSharePane'>  <div class='quizi_rightShareST'></div>  <div class='quizi_rightShareSC'><span class='quizi_rightShareName'></span>  </div>  <div class='quizi_detailResult' ></div>  <textarea id='quizi_shareInputContent' name='quizi_shareInputContent'></textarea></div><div class='clear'></div>  </div>  <div class='quizi_shareAllDownPane'></div>  <a class='quizi_submitAllShare' onclick='submitToSNS(\"renren\",\"132\",\"0\",\"\",\"[-in_path-]\",\"返回\")'>传相册</a>  <a class='quizi_closePane' onclick='nextPane(132,\"返回\")'></a></div>";
		str = str.replace("[-out_path-]",out_path);
		str = str.replace("[-in_path-]",in_path);
		$("body").append(str);
		fixPicSize(src_width,src_height);
		repositionSharePane();
	}
	function repositionSharePane(){
		if($(".quizi_shareAllPane").length>=1){
			var windowHeight = parseInt($(window).height());
			var windowWidth= parseInt($(window).width());
			var itemHeight = $(".quizi_shareAllPane").height();
			var itemWidth = $(".quizi_shareAllPane").width();
			var targetLeft = (windowWidth - itemWidth)/2;
			if(targetLeft<0)targetLeft=0;
			var targetTop = (windowHeight - itemHeight)/2;
			if(targetTop<0)targetTop=0;
			if(targetTop>50)targetTop = 50;
			$(".quizi_shareAllPane").css({"left":targetLeft+"px","top":targetTop+"px"});
			$(".quizi_leftQuizSu").css({"position":"absolute","width":"100%","top":targetTop+itemHeight+40+"px"});

		}	
	}
	function repositionSharePaneSug(){
		if($(".quizi_shareAllPane").length>=1){
			var windowWidth= parseInt($(window).width());
			$(".quizi_shareAllPane").css({"width":windowWidth+"px"});
			$(".quizi_shareAllPane").css({"width":windowWidth+"px"});
			$(".quizi_shareAllPane").css({"top":"0px"});
			$(".quizi_shareAllPane").css({"left":"0px"});
			window.scrollTo(0,1);
		}
	}
	function repositionShareButton(){
		if($(".quizi_submitAllShare").length>=1){
			var buttonWidth = $(".quizi_submitAllShare").width();
			var paneWidth = $(".quizi_shareAllPane").width();
			var fixPos = (paneWidth-buttonWidth)/2;
			$(".quizi_submitAllShare").css({"left":fixPos+"px"});
		}
		
	}
	function fixPicSize(src_width,src_height){
		$(".quizi_imgShowWrapper").ready(function(){
			src_height = parseInt(src_height);
			src_width = parseInt(src_width);
			var boxWidth = $(".quizi_imgShowWrapper").width();
			var boxHeight = $(".quizi_imgShowWrapper").height();
			if((boxWidth/boxHeight)>(src_width/src_height)){
				var targetWidth = boxWidth;
				
				$(".quizi_photoLeftItem").css({"width":targetWidth+"px"});
			}else{
				var targetHeight = boxHeight;
				var targetWidth = (boxWidth/boxHeight)*src_height;
				var fixPosX = (targetWidth-src_width)/2;

				$(".quizi_photoLeftItem").css({"height":targetHeight+"px","margin-left":(fixPosX)+"px"});
				
			}
			
			
		});		
	}
	function submitToSNS(type,quiz_id,circle,url_title,in_path,buttonName){
		var share_content = $("#quizi_shareInputContent").val();
		$.ajax({
			type:"POST",
			url:base_url+"quizajax/submitToQuizSNS",
			data:{type:type,share_content:share_content,quiz_id:quiz_id,circle:circle,url_title:url_title,in_path:in_path},
			dataType:"html",
			cache:false,
			success:function(data){
				nextPane(quiz_id,buttonName);		
			},
			error:function(){
					
			}
		});			
		
		
	}
	function buildSugInnerHTML(mobile){
		var str = '<div class="sug_allWrapper">'
		+'<div class="sug_allTitle"><div class="sug_titleContent">猜你喜欢</div><div class="sug_userName">生俊</div><div class="clear"></div></div>'
		+'<div class="sug_areaAllWrapper" id="sug_areaAllWrapper">'
		+'<div class="sug_areaScrollWrapper" id="scroller">';
		if(mobile=="yes"){
			str = str+'<ul id="thelist">';
		}	

		if(mobile=="yes"){
			str = str+'</ul>';
		}	
		str = str+'</div></div></div>';
		return str;
	}
	function nextPane(quiz_id,buttonName){
		//alert(3);
		if($(".quizi_shareAllPane").attr("pro")=="on")return;
		$(".quizi_shareAllPane").attr("pro","on");
		var mobile = "no";		
		$(".quizi_shareAllUpPane").html("");
		$(".quizi_submitAllShare").html(buttonName);
		$(".quizi_submitAllShare").removeAttr("onclick");		
		var screenHeight =  parseInt($(window).height());
		var screenWidth =  parseInt($(window).width()); 
		$(".quizi_leftQuizSu").hide();
		var fixHeight = ((screenHeight-585)/2); 
		if(fixHeight<0)fixHeight=0;
		var fixLeft = (screenWidth-975)/2
		
		if(mobile=="yes"){
			$(".quizi_shareAllUpPane").css({"height":"432px"});	
			$(".quizi_shareAllPane").css({"height":"355px"});
		}else{		
			$(".quizi_shareAllUpPane").css({"height":"572px"});		
			$(".quizi_shareAllPane").css({"height":"585px","width":"975px","left":fixLeft+"px" ,"top":fixHeight+"px"});
			$(".quizi_submitAllShare").css({"left":"420px"});	
			//alert(3);	
		}
		
		var str = buildSugInnerHTML(mobile);
		$(".quizi_shareAllUpPane").html(str);
		
		window.scrollTo(0,1);

		$.ajax({
			type:"POST",
			url:base_url+"quizajax/buildSug",
			data:{quiz_id:quiz_id,mobile:mobile},
			dataType:"html",
			cache:false,
			success:function(data){
				if(mobile=="yes"){
					$("#thelist").html(data);
					var myScroll = new iScroll('sug_areaAllWrapper',{ vScrollbar: false,vScroll:false});
				}else{
					$("#scroller").html(data);
				}		
			}
		});		
					
		setTimeout('$(".quizi_submitAllShare").attr("href","'+base_url+'quiz");',1000);
		$(".quizi_closePane").removeAttr("onclick");
		setTimeout('$(".quizi_closePane").attr("href","'+base_url+'quizitem/show/'+quiz_id+'");',1000);
		return 0;				
	}

	function orientationChange(){
		var mobile = "no";
		if(mobile=="no")return;
		repositionSharePaneSug();
		repositionSharePane();
		repositionShareButton();
		switch(window.orientation) {
			
			case 0: // Portrait
			case 180: // Upside-down Portrait	
			break;
			case -90: // Landscape: turned 90 degrees counter-clockwise
			case 90: // Landscape: turned 90 degrees clockwise
			break;
		}
	}
	window.addEventListener("onorientationchange" in window ? "orientationchange" : "resize", orientationChange, false);
</script>

<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/ad960x90.php';
?>
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/footer_stat.php';
require_once dirname ( dirname ( __FILE__) ).'/a_include/adfloat.php';
?>
</body></html>
