
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?=$app_list[$app_name]['title']?></title>
	<link rel="shortcut icon"
		href="<?=$static_file_path?>/imgs/favicon.ico" />
	<link rel="icon" href="<?=$static_file_path?>/imgs/favicon.ico"
		type="image/x-icon" />
	<link href="../file/css/app.css" rel="stylesheet" type="text/css" />
	<link href="../file/css/general-min.css" rel="stylesheet"
		type="text/css">
		<link href="../file/css/quiz-min.css" rel="stylesheet" type="text/css">
	
	
	<link href="../file/css/show-min.css" rel="stylesheet" type="text/css" />

<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/header_stat.php';
?>


</head>

<body>
	<div class="shareAllPaneWrapper">
		<div class="shareAllPane"
			style="width: 787px; height: 507px; left: 120px;">
			<div class="shareAllUpPane" style="height: 493px;">
				<div class="leftShareAllWrapper"
					style="float: left; padding-right: 15px;">
					<div class="imgShowWrapper"
						style="width: 378px; height: 308px; background: url(./imgs/loadingImage.gif) 0 0 no-repeat; float: none;">
						<img
							src="./imgs/0.jpe"
							class="photoLeftItem" style="width: 378px; height: 308px;"><a
							style="">返回</a>
					
					</div>
					<div class="leftSelectFriendWrapper"
						style="padding: 20px 0 0 40px;">
						<div class="leftSideIntro"
							style="float: left; font-family: 微软雅黑; padding-right: 10px; padding-top: 7px;">左</div>
						<div class="inputContainer"
							style="position: relative; padding-right: 20px; float: left;">
							<input class="sideFriendBox" id="sideFriendBoxA"
								name="sideFriendBoxA"
								style="width: 130px; background-color: #FFFFFF; border: 1px solid #80A1C1; box-shadow: 0 1px 2px #D0D0D0 inset; color: #80A1C1; font-size: 1.16667em; height: 20px; padding: 7px 9px 6px;"
								onfocus="checkInput(this,0)" onblur="checkInput(this,1)"
								type="text"><span class="checkInput"
								style="position: absolute; left: 12px; top: 10px; color: #ccc; font-size: 12px;"
								onclick="checkInput(this,2)">输入或选择姓名..</span>
						
						</div>
						<div class="leftSideIntro"
							style="float: left; font-family: 微软雅黑; padding-right: 10px; padding-top: 7px;">右</div>
						<div class="inputContainer"
							style="position: relative; float: left;">
							<input class="sideFriendBox" id="sideFriendBoxB"
								name="sideFriendBoxB"
								style="width: 130px; margin-right: 20px; background-color: #FFFFFF; border: 1px solid #80A1C1; box-shadow: 0 1px 2px #D0D0D0 inset; color: #80A1C1; font-size: 1.16667em; height: 20px; padding: 7px 9px 6px;"
								onfocus="checkInput(this,0)" onblur="checkInput(this,1)"
								type="text"><span class="checkInput"
								style="position: absolute; left: 12px; top: 10px; color: #ccc; font-size: 12px;"
								onclick="checkInput(this,2)">输入或选择姓名..</span>
						
						</div>
						<div class="clear"></div>
					</div>
					<a class="submitAllShare" style="left: 150px; top: 413px"
						onclick='buildMindMap("50409","生俊","1","renren");'>查看战斗力</a>
				</div>
				<div class="rightAllSharePane"
					style="width: 320px; padding-left: 0;">
					<div class="rightTopWrapper" style="padding-right: 32px;">
						<div class="rightTopIntroDo"
							style="float: left; color: #777; font-family: 微软雅黑; font-size: 14px;">与谁争锋</div>
						<div class="rightTopButton"
							style="float: right; color: #1c87be; font-family: 微软雅黑; font-size: 14px; cursor: pointer;"
							onclick="changeFriend();" num="0">换一换</div>
						<div class="clear"></div>
					</div>
					<div class="rightNamesWrapper" num="0" style="padding-top: 10px;">
						<a class="hoverPhoto 0m"
							style="float: left; cursor: pointer; margin-right: 10px; width: 67px; margin-bottom: 15px; height: 69px;"
							onclick="fillFriend(this)"><div class="photoImageWrapper"
								style="padding: 0 0 4px 8px;">
								<img
									src="%E6%88%98%E6%96%97%E5%8A%9B%E6%B5%8B%E8%AF%95%E4%BB%AAceshi%20_%20%E6%B5%8B%E6%97%B6%E5%85%89_files/h_large_FBwN_62170000290d1375.jpe"
									style="width: 50px; border: none;">
							
							</div>
							<div class="hoverNameWrapper"
								style="font-size: 12px; color: #1c87be; height: 15px; line-height: 15px; overflow: hidden; text-align: center;">生俊</div></a><a
							class="hoverPhoto 0m"
							style="float: left; cursor: pointer; margin-right: 10px; width: 67px; margin-bottom: 15px; height: 69px;"
							onclick="fillFriend(this)"><div class="photoImageWrapper"
								style="padding: 0 0 4px 8px;">
								<img
									src="%E6%88%98%E6%96%97%E5%8A%9B%E6%B5%8B%E8%AF%95%E4%BB%AAceshi%20_%20%E6%B5%8B%E6%97%B6%E5%85%89_files/women_tiny.gif"
									style="width: 50px; border: none;">
							
							</div>
							<div class="hoverNameWrapper"
								style="font-size: 12px; color: #1c87be; height: 15px; line-height: 15px; overflow: hidden; text-align: center;">李倩</div></a><a
							class="hoverPhoto 0m"
							style="float: left; cursor: pointer; margin-right: 10px; width: 67px; margin-bottom: 15px; height: 69px;"
							onclick="fillFriend(this)"><div class="photoImageWrapper"
								style="padding: 0 0 4px 8px;">
								<img
									src="%E6%88%98%E6%96%97%E5%8A%9B%E6%B5%8B%E8%AF%95%E4%BB%AAceshi%20_%20%E6%B5%8B%E6%97%B6%E5%85%89_files/tiny_uzoe_661j000001.jpe"
									style="width: 50px; border: none;">
							
							</div>
							<div class="hoverNameWrapper"
								style="font-size: 12px; color: #1c87be; height: 15px; line-height: 15px; overflow: hidden; text-align: center;">王帅</div></a><a
							class="hoverPhoto 0m"
							style="float: left; cursor: pointer; margin-right: 10px; width: 67px; margin-bottom: 15px; height: 69px;"
							onclick="fillFriend(this)"><div class="photoImageWrapper"
								style="padding: 0 0 4px 8px;">
								<img
									src="%E6%88%98%E6%96%97%E5%8A%9B%E6%B5%8B%E8%AF%95%E4%BB%AAceshi%20_%20%E6%B5%8B%E6%97%B6%E5%85%89_files/men_tiny.gif"
									style="width: 50px; border: none;">
							
							</div>
							<div class="hoverNameWrapper"
								style="font-size: 12px; color: #1c87be; height: 15px; line-height: 15px; overflow: hidden; text-align: center;">吴海丰</div></a><a
							class="hoverPhoto 0m"
							style="float: left; cursor: pointer; margin-right: 10px; width: 67px; margin-bottom: 15px; height: 69px;"
							onclick="fillFriend(this)"><div class="photoImageWrapper"
								style="padding: 0 0 4px 8px;">
								<img
									src="%E6%88%98%E6%96%97%E5%8A%9B%E6%B5%8B%E8%AF%95%E4%BB%AAceshi%20_%20%E6%B5%8B%E6%97%B6%E5%85%89_files/women_tiny.gif"
									style="width: 50px; border: none;">
							
							</div>
							<div class="hoverNameWrapper"
								style="font-size: 12px; color: #1c87be; height: 15px; line-height: 15px; overflow: hidden; text-align: center;">雷娟</div></a><a
							class="hoverPhoto 0m"
							style="float: left; cursor: pointer; margin-right: 10px; width: 67px; margin-bottom: 15px; height: 69px;"
							onclick="fillFriend(this)"><div class="photoImageWrapper"
								style="padding: 0 0 4px 8px;">
								<img
									src="%E6%88%98%E6%96%97%E5%8A%9B%E6%B5%8B%E8%AF%95%E4%BB%AAceshi%20_%20%E6%B5%8B%E6%97%B6%E5%85%89_files/tiny_yIBM_316o204197.jpe"
									style="width: 50px; border: none;">
							
							</div>
							<div class="hoverNameWrapper"
								style="font-size: 12px; color: #1c87be; height: 15px; line-height: 15px; overflow: hidden; text-align: center;">米米</div></a><a
							class="hoverPhoto 0m"
							style="float: left; cursor: pointer; margin-right: 10px; width: 67px; margin-bottom: 15px; height: 69px;"
							onclick="fillFriend(this)"><div class="photoImageWrapper"
								style="padding: 0 0 4px 8px;">
								<img
									src="%E6%88%98%E6%96%97%E5%8A%9B%E6%B5%8B%E8%AF%95%E4%BB%AAceshi%20_%20%E6%B5%8B%E6%97%B6%E5%85%89_files/women_tiny.gif"
									style="width: 50px; border: none;">
							
							</div>
							<div class="hoverNameWrapper"
								style="font-size: 12px; color: #1c87be; height: 15px; line-height: 15px; overflow: hidden; text-align: center;">徐鹏</div></a><a
							class="hoverPhoto 0m"
							style="float: left; cursor: pointer; margin-right: 10px; width: 67px; margin-bottom: 15px; height: 69px;"
							onclick="fillFriend(this)"><div class="photoImageWrapper"
								style="padding: 0 0 4px 8px;">
								<img
									src="%E6%88%98%E6%96%97%E5%8A%9B%E6%B5%8B%E8%AF%95%E4%BB%AAceshi%20_%20%E6%B5%8B%E6%97%B6%E5%85%89_files/women_tiny.gif"
									style="width: 50px; border: none;">
							
							</div>
							<div class="hoverNameWrapper"
								style="font-size: 12px; color: #1c87be; height: 15px; line-height: 15px; overflow: hidden; text-align: center;">张朵朵</div></a><a
							class="hoverPhoto 0m"
							style="float: left; cursor: pointer; margin-right: 10px; width: 67px; margin-bottom: 15px; height: 69px;"
							onclick="fillFriend(this)"><div class="photoImageWrapper"
								style="padding: 0 0 4px 8px;">
								<img
									src="%E6%88%98%E6%96%97%E5%8A%9B%E6%B5%8B%E8%AF%95%E4%BB%AAceshi%20_%20%E6%B5%8B%E6%97%B6%E5%85%89_files/women_tiny.gif"
									style="width: 50px; border: none;">
							
							</div>
							<div class="hoverNameWrapper"
								style="font-size: 12px; color: #1c87be; height: 15px; line-height: 15px; overflow: hidden; text-align: center;">史秀宁</div></a><a
							class="hoverPhoto 0m"
							style="float: left; cursor: pointer; margin-right: 10px; width: 67px; margin-bottom: 15px; height: 69px;"
							onclick="fillFriend(this)"><div class="photoImageWrapper"
								style="padding: 0 0 4px 8px;">
								<img
									src="%E6%88%98%E6%96%97%E5%8A%9B%E6%B5%8B%E8%AF%95%E4%BB%AAceshi%20_%20%E6%B5%8B%E6%97%B6%E5%85%89_files/tiny_wS3P_76072k000001.jpe"
									style="width: 50px; border: none;">
							
							</div>
							<div class="hoverNameWrapper"
								style="font-size: 12px; color: #1c87be; height: 15px; line-height: 15px; overflow: hidden; text-align: center;">刘宇</div></a><a
							class="hoverPhoto 0m"
							style="float: left; cursor: pointer; margin-right: 10px; width: 67px; margin-bottom: 15px; height: 69px;"
							onclick="fillFriend(this)"><div class="photoImageWrapper"
								style="padding: 0 0 4px 8px;">
								<img
									src="%E6%88%98%E6%96%97%E5%8A%9B%E6%B5%8B%E8%AF%95%E4%BB%AAceshi%20_%20%E6%B5%8B%E6%97%B6%E5%85%89_files/tiny_rzHF_30824f206132.jpe"
									style="width: 50px; border: none;">
							
							</div>
							<div class="hoverNameWrapper"
								style="font-size: 12px; color: #1c87be; height: 15px; line-height: 15px; overflow: hidden; text-align: center;">唐果</div></a><a
							class="hoverPhoto 0m"
							style="float: left; cursor: pointer; margin-right: 10px; width: 67px; margin-bottom: 15px; height: 69px;"
							onclick="fillFriend(this)"><div class="photoImageWrapper"
								style="padding: 0 0 4px 8px;">
								<img
									src="%E6%88%98%E6%96%97%E5%8A%9B%E6%B5%8B%E8%AF%95%E4%BB%AAceshi%20_%20%E6%B5%8B%E6%97%B6%E5%85%89_files/tiny_tIDS_34432m204196.jpe"
									style="width: 50px; border: none;">
							
							</div>
							<div class="hoverNameWrapper"
								style="font-size: 12px; color: #1c87be; height: 15px; line-height: 15px; overflow: hidden; text-align: center;">栾瑶</div></a><a
							class="hoverPhoto 0m"
							style="float: left; cursor: pointer; margin-right: 10px; width: 67px; margin-bottom: 15px; height: 69px;"
							onclick="fillFriend(this)"><div class="photoImageWrapper"
								style="padding: 0 0 4px 8px;">
								<img
									src="%E6%88%98%E6%96%97%E5%8A%9B%E6%B5%8B%E8%AF%95%E4%BB%AAceshi%20_%20%E6%B5%8B%E6%97%B6%E5%85%89_files/men_tiny.gif"
									style="width: 50px; border: none;">
							
							</div>
							<div class="hoverNameWrapper"
								style="font-size: 12px; color: #1c87be; height: 15px; line-height: 15px; overflow: hidden; text-align: center;">胡鹤林</div></a>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="shareAllDownPane"></div>
			<a class="closePane" onclick='nextPane("")'></a>
		</div>
	</div>

	<div class="header">
		<div class="c">
			<div class="logo">
				<a href="/" target="_blank"><img
					src="http://app.qpic.cn/mblogpic/3ad571c3942b830d9ee6/2000"
					height="30"></a>
			</div>
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
	<div class="paneAllWrapper">
		<div class="paneLeftWrapper">
			<div style="background:url(<?php if (!empty($app_bg_pic)) {?><?=$app_bg_pic?><?php } else {?>imgs/pre.jpg<?php }?>) 0 0 no-repeat;" class="imageWrapper">
				<div class="imageActionWrapper">
					<div class="titleDetail"><?=$app_list[$app_name]['title']?></div>
					<div class="titleDetailSC"><?=$app_intro?></div>
					<a href="./test.php" class="actionProcessButton">开始测试</a>
				</div>
			</div>
			<div class="actionWrapper"></div>
		</div>
		<div class="clear"></div>
	</div>

	<script language="javascript">
	$(document).ready(function(){
		buildShare('战斗力测试仪');
		var process = 'ok';
		var preType = 'renren';
		$("#adPane").css({"z-index":"2000"});
		$("#adPane").children().css({"z-index":"2000"});
		if(process=='ok'){
			var preUname = '生俊';
			var preSex = '1';
			var preUnum = '50409';
			fromCallback(preUnum,preUname,preSex,'','',preType);
		}
	});

	function fromCallback(name_num,user_name,sex,birthday,photo,type){

$("body").append("<div class='quizi_patShadow'><div class='quizi_patWrapper'><div class='quizi_patImage'></div><div class='quizi_patInner'>正在分析中...</div><div class='clear'></div></div></div>");
		var countResult = 0;
		var detailGetTitle = "<div class='detailTitleBottom'>战斗力测试仪 "+user_name+"</div>";
		$(".actionWrapper").html(detailGetTitle);
		

		
		getFriends(name_num,user_name,type,sex)
		
		return 0;
	}
	function getFriends(name_num,user_name,type,sex){
		$.ajax({
			type:"POST",
			url:base_url+"quizajax/getFriend",
			data:{type:type,user_name:user_name},
			dataType:"json",
			cache:false,
			success:function(data){
				var str = '';
				var count = 0;
				var displayNum =0;
				var displayPart = new Array();
				displayPart[0] = new Array();
				displayPart[0]['mark'] = 0;
				displayPart[0]['count'] = 0;
				jQuery.each(data,function(i,item){
					if(item.name=='')return true;
					if(displayPart[displayNum]['mark']!=0){var style_mark = 'display:none;';}else{var style_mark = '';}
					
					str = str+'<a class="hoverPhoto '+displayPart[displayNum]['mark']+'m" style="float:left;cursor:pointer;margin-right:10px;width:67px;margin-bottom:15px;height:69px;'+style_mark+'" onclick="fillFriend(this)"><div class="photoImageWrapper" style="padding:0 0 4px 8px;"><img src="'
					+item.thumb
					+'" style="width:50px;border:none;"/></div><div class="hoverNameWrapper" style="font-size:12px;color:#1c87be;height:15px;line-height:15px;overflow:hidden; text-align:center;">'
					+item.name
					+'</div></a>';
					if(count>=19){
						displayNum++;
						displayPart[displayNum] = new Array();
						displayPart[displayNum]['mark'] = displayNum;
						count = 0;
					}else{					
						displayPart[displayNum]['count'] ++;
						count++;
					}
				});
				//var json = new Function("return"+data)();
				//data.each(function(){
					//alert(1);	
					
				//});
				selectFriendsList(name_num,user_name,type,sex,str);			
			}
		});		
		return 0;
	}
	function fillFriend(node){
		var nodes = $(node);
		var name = nodes.children(".hoverNameWrapper").text();		
		var pic_path =nodes.children(".photoImageWrapper").children().attr("src");

		if($("#sideFriendBoxA").val()==''){
			
			$("#sideFriendBoxA").val(name);
			$("#sideFriendBoxA").attr("path",pic_path);
			$("#sideFriendBoxA").parent(".inputContainer").children(".checkInput").hide();
		}else if($("#sideFriendBoxB").val()==''){
			
			$("#sideFriendBoxB").val(name);
			$("#sideFriendBoxB").parent(".inputContainer").children(".checkInput").hide();
			$("#sideFriendBoxB").attr("path",pic_path);
		}else{
			var pic_path =nodes.children(".photoImageWrapper").children(".photoImageWrapper").attr("src");
			var currentType = $(".rightNamesWrapper").attr("num");
			if(currentType=='0'){
				$("#sideFriendBoxA").val(name);
				$("#sideFriendBoxA").attr("path",pic_path);
				$(".rightNamesWrapper").attr("num","1");
				$("#sideFriendBoxA").parent(".inputContainer").children(".checkInput").hide();
			}else{
				$("#sideFriendBoxB").val(name);
				$("#sideFriendBoxB").attr("path",pic_path);
				$(".rightNamesWrapper").attr("num","0");
				$("#sideFriendBoxB").parent(".inputContainer").children(".checkInput").hide();
			}
		}
		
		
		return 0;	
	}
	function checkInput(node,num){
		var nodes=$(node);
		if(num==0){
			nodes.parent(".inputContainer").children(".checkInput").hide();			
		}
		if(num==1){
			if(nodes.val()==''){
				nodes.parent(".inputContainer").children(".checkInput").show();				
			}
		}
		if(num==2){
			nodes.hide();
			nodes.parent(".inputContainer").children(".sideFriendBox").focus();
		}
		nodes.removeAttr("path");
		
	}
	function selectFriendsList(name_num,user_name,type,sex,str){
		$(".quizi_patWrapper").remove();
		

		
		var sharePane = "<div class='shareAllPaneWrapper'>"
		+"<div class='shareAllPane' style='width:787px;height:507px;left:120px;'>"
		
		+"<div class='shareAllUpPane' style='height:493px;'>"
		
		+"<div class='leftShareAllWrapper' style='float:left;padding-right:15px;'>"
		
		+"<div class='imgShowWrapper' style='width:378px;height:308px;background:url(http://img3.ceshiguang.com/pr/ui/loadingImage.gif) 0 0 no-repeat;float:none;'><img src='http://img3.ceshiguang.com/pr/59n/0.jpg' class='photoLeftItem' style='width:378px;height:308px;'/><a style=>返回</a></div>"
		
		+"<div class='leftSelectFriendWrapper' style='padding:20px 0 0 40px;'>"
		+"<div class='leftSideIntro' style='float:left;font-family:微软雅黑;padding-right:10px;padding-top:7px;'>左</div>"
		+"<div class='inputContainer' style='position:relative;padding-right:20px;float:left;'>"
		+"<input type='text' class='sideFriendBox' id='sideFriendBoxA' name = 'sideFriendBoxA' style='width:130px;background-color: #FFFFFF;border: 1px solid #80A1C1;box-shadow: 0 1px 2px #D0D0D0 inset;color: #80A1C1;font-size: 1.16667em;height: 20px;padding: 7px 9px 6px;' onfocus='checkInput(this,0)' onblur='checkInput(this,1)'/>"
		+"<span class='checkInput' style='position:absolute; left:12px;top:10px;color:#ccc;font-size:12px;'onclick='checkInput(this,2)'>输入或选择姓名..</span>"
		+"</div>"
		+"<div class='leftSideIntro' style='float:left;font-family:微软雅黑;padding-right:10px;padding-top:7px;'>右</div>"
		+"<div class='inputContainer' style='position:relative;float:left;'>"
		+"<input type='text' class='sideFriendBox' id='sideFriendBoxB' name = 'sideFriendBoxB'  style='width:130px;margin-right:20px;background-color: #FFFFFF;border: 1px solid #80A1C1;box-shadow: 0 1px 2px #D0D0D0 inset;color: #80A1C1;font-size: 1.16667em;height: 20px;padding: 7px 9px 6px;' onfocus='checkInput(this,0)' onblur='checkInput(this,1)'/>"
		+"<span class='checkInput' style='position:absolute; left:12px;top:10px;color:#ccc;font-size:12px;' onclick='checkInput(this,2)'>输入或选择姓名..</span>"
		+"</div>"
		+"<div class='clear'></div>"
		+"</div>"
		+"<a class='submitAllShare' style='left:150px;top:413px' onclick='buildMindMap(\""+name_num+"\",\""+user_name+"\",\""+sex+"\",\""+type+"\");'>查看战斗力</a>"		
		+"</div>"
		
		
		+"<div class='rightAllSharePane' style='width:320px;padding-left:0;'>"
		+"<div class='rightTopWrapper' style='padding-right:32px;'>"
		
		+"<div class='rightTopIntroDo' style='float:left;color:#777;font-family:微软雅黑;font-size:14px;'>与谁争锋</div>"
		+"<div class='rightTopButton' style='float:right;color:#1c87be;font-family:微软雅黑;font-size:14px;cursor:pointer;' onclick='changeFriend();' num=0>换一换</div>"
		+"<div class='clear'></div>"
		+"</div>"
		+"<div class='rightNamesWrapper' num='0' style='padding-top:10px;'>"
		+str
		+"<div class='clear'></div></div>"
	
		+"</div>"
		
		+"<div class='clear'></div></div>"
		+"<div class='shareAllDownPane'></div>"

		+"<a class='closePane' onclick='nextPane(\"\")'></a>"
		
		+"</div></div>";
		$("body").prepend(sharePane);			
		
		
	}
	function changeFriend(){
		var page = parseInt($('.rightTopButton').attr("num"));
		
		if($("."+(page+1)+"m").length<=0){
			$("."+page+"m").hide();
			page = -1;
		}
		
		
		$("."+page+"m").hide();
		$("."+(page+1)+"m").show();
		$('.rightTopButton').attr("num",(page+1));
		
		return 0;
		
	}
	function buildMindMap(name_num,user_name,sex,sns_type){
		var nameA = $("#sideFriendBoxA").val();
		var nameB = $("#sideFriendBoxB").val();
		if(nameA==''){
			$("#sideFriendBoxA").parent(".inputContainer").children(".checkInput").show();
			$("#sideFriendBoxA").parent(".inputContainer").children(".checkInput").html("请输入或选择姓名");
			$("#sideFriendBoxA").parent(".inputContainer").children(".checkInput").css({"color":"#C30"});
			return 0;
		}
		if(nameB==''){
			$("#sideFriendBoxB").parent(".inputContainer").children(".checkInput").show();
			$("#sideFriendBoxB").parent(".inputContainer").children(".checkInput").html("请输入或选择姓名");
			$("#sideFriendBoxB").parent(".inputContainer").children(".checkInput").css({"color":"#C30"});
			return 0;
		}
		var AUrl = $("#sideFriendBoxA").attr("path");
		var BUrl = $("#sideFriendBoxB").attr("path");

		$.ajax({
			type:"POST",
			url:base_url+"quizajax/buildImageSC",
			data:{dataA:nameA,dataB:nameB,dataC:AUrl,dataD:BUrl},
			dataType:"html",
			cache:false,
			success:function(data){
				var json = new Function("return"+data)();
				setTimeout("showResult("+name_num+",\'"+user_name+"\',"+sex+",\'"+sns_type+"\',\'"+json.pic_in+"\',\'"+json.pic_out+"\',\'"+nameA+"\',\'"+nameB+"\');",2000);
							
			}
		});	
	}

	function showResult(name_num,user_name,sex,sns_type,in_path,out_path,nameA,nameB){
		var resultTitleData = new Array("吕子乔","曾小贤","陆展博","关谷神奇");
		var resultTitleGirlData = new Array("胡一菲","林宛瑜","唐悠悠","陈美嘉");
		$(".imageActionWrapper").fadeOut("fast");
		
		if(sns_type=='sina'){
			var emotion = '[吃惊]';
		}else if(sns_type=='qq'){
			var emotion = '/惊讶 ';
		}else{
			var emotion = ' ';
		}
	
		var finalNum = name_num%4;
		if(sex==1){
			var finalScore=resultTitleData[finalNum];
		}else{
			var finalScore=resultTitleGirlData[finalNum];	
		}
		var final_title=finalScore;
		
		if(sns_type=="renren"){

			var share_content = nameA+' 与'+nameB+' 的战斗力对比哦～【测测两个人的战斗力】  传送门：http://www.ceshiguang.com/quizitem/show/59/renren/0/1';
		}else{
			var share_content = '@'+nameA+' 与@'+nameB+' 的战斗力对比哦～【测测两个人的战斗力】  ';
		}
		
var qq_content = '传说中的战斗力图哦～ 【测测两个人战斗时会怎样】：';
		var qq_friend_str = '';
		
		
		$(".shareIconsWrapper").html('');
		
		$("#rNameSc").html('结果是?');		
		$("#rName").html("战斗力测试仪");
/*		$(".analyticsResultContent").html(resultContentData[finalNum]);*/
		$("#rPhoto").attr("src","http://img3.ceshiguang.com/pr/59n/m.jpg");
		//setTimeout('$("#bgImage").attr("src","http://img3.ceshiguang.com/pr/59n/mBG.jpg")',500);
		$("#rName").show();
		$("#rPhoto").show();
		$(".analyticsResultContent").hide();		
		$("#step1").hide();
		$("#step2").fadeIn("slow");
		
		$("body").append("<div class='patShadow2' style='background: url(http://img3.ceshiguang.com/pr/ui/mainInputBG.png) repeat scroll 0 0 transparent;height: 100%;left: 0;position: fixed;top: 0; width: 100%; z-index: 25000;'></div>");
		var sharePane = "<div class='shareAllPaneWrapperUp' style='margin: 0 auto;position: relative;width: 980px;z-index: 30000;'>"
		+"<div class='shareAllPane' style='width:787px;height:420px;left:120px;top:120px;'>"
		+"<div class='shareAllUpPane' style='height:405px;'><div class='imgShowWrapper' style='width:378px;height:348px;background:url(http://img3.ceshiguang.com/pr/ui/loadingImage.gif) 0 0 no-repeat;position:relative;'><img src='"+out_path+"' class='photoLeftItem' style='width:378px;'/><a style='background:url(http://img3.ceshiguang.com/pr/ui/mainInputBG.png) 0 0 repeat;display:block;cursor:pointer;width:378px;position:absolute;bottom:0;left:0;height:40px;text-align:center;color:#fff;font-size:14px;font-family:微软雅黑;line-height:40px;' onclick='backToDo();'>返回重新测试</a></div><div class='rightAllSharePane'><div class='rightShareST'>经分析,系统认为</div><div class='rightShareSC'><span class='rightShareName'>"+nameA+"与"+nameB+"</span><span class='rightShareDetail'>战斗力对比图是:</span></div><div class='detailResult'><div class='arrowLeftItem' style='background:url(http://img3.ceshiguang.com/pr/ui/arrow.png) 0 0 repeat-x #fff;width:52px;height:36px;'></div></div><textarea id='shareInputContent' name='shareInputContent'>"+share_content+"</textarea>"
		

		
		+"<div class='checkFollow'><input name='checkFollow' type='checkbox' id='checkFollow'/><label class='followTwitter' for='checkFollow'>关注我们的微博</label><div class='clear'></div></div></div><div class='clear'></div></div>"
		+"<div class='shareAllDownPane'></div>"
		+"<a class='submitAllShare' style='left:150px;' onclick='submitToSNS(\""+finalNum+"\",\""+user_name+"\",\""+final_title+"\",\""+share_content+"\",\""+sns_type+"\",this,\"none\",\""+qq_content+"\",\""+qq_friend_str+"\",\""+in_path+"\",\""+out_path+"\")'>传相册</a>"
		+"<a class='closePane' onclick='backToDo();'></a>"
		+"</div></div>";
		$("body").prepend(sharePane);
		
		return 0;
	}
	function backToDo(){
		$(".shareAllPaneWrapperUp").remove();
		$(".patShadow2").remove();
		return 0;
			
		
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
	function nextPane(name){		
	if($(".shareAllPane").attr("pro")=="on")return;
	$(".shareAllPane").attr("pro","on");
	var quiz_id = '59';
		$(".shareAllUpPane").html("");
	$.ajax({
		type:"POST",
		url:base_url+"quizajax/buildSug",
		data:{quiz_id:quiz_id},
		dataType:"html",
		cache:false,
		success:function(data){
			var str = buildSugInnerHTML("no");
		$(".shareAllUpPane").html(str);
		$("#scroller").html(data);					
		}
	});	
	$(".submitAllShare").html("返回");
	$(".submitAllShare").removeAttr("onclick");		
	var screenHeight =  parseInt($(window).height());
	$("#adPane").hide();
	var fixHeight = ((screenHeight-585)/2); 
	$(".shareAllUpPane").css({"height":"572px"});		
	$(".shareAllPane").css({"height":"585px","width":"975px","left":"2px" ,"top":fixHeight+"px"});
	$(".submitAllShare").css({"left":"420px"});		
	setTimeout('$(".submitAllShare").attr("href","'+base_url+'quiz");',1000);
	$(".closePane").removeAttr("onclick");
	setTimeout('$(".closePane").attr("href","'+base_url+'quizitem/show/59");',1000);
	return 0;		
}

	function buildShare(share_content){
		/****
			*新浪微博分享
			*/
		var _w = 16 , _h = 16;
		var param = {
		  url:location.href,
		  type:'3',
		  count:'', /**是否显示分享数，1显示(可选)*/
		  appkey:'1704377248', /**您申请的应用appkey,显示分享来源(可选)*/
		  title:share_content, /**分享的文字内容(可选，默认为所在页面的title)*/		  
		  pic:'http://img3.ceshiguang.com/pr/59n/ms.jpg', /**分享图片的路径(可选)*/		  
		  rnd:new Date().valueOf()
		}
		var temp = [];
		for( var p in param ){
		  temp.push(p + '=' + encodeURIComponent( param[p] || '' ) )
		}
		var sinaStr = "<a class='sinaShare' onclick='javascript:window.open(\"http://service.weibo.com/share/share.php?"+temp.join('&')+"\",\"newwindow\",\"width=615,height=505,resizable=yes\");'></a>";
	
		/****
			*Qzone分享
			*/
		var p = {
			url:location.href,
			showcount:'0',
			desc:'',
			summary:'',
			title:share_content,
			site:'',
			pics:'http://img3.ceshiguang.com/pr/59n/ms.jpg', 
			style:'203',
			width:98,
			height:22
		};
		var s = [];
		for(var i in p){
			s.push(i + '=' + encodeURIComponent(p[i]||''));
		}
		var qzoneStr = ['<a version="1.0" class="qzoneShare" onclick=\'javascript:window.open(\"http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?',s.join('&'),'\",\"newwindow\",\"scrollbars=no,width=600,height=450,left=75,top=20,status=no,resizable=yes\" );\' ></a>'].join('');				

		/****
			*人人网分享
			*/
		var renren_title = share_content;
		var rrShareParam = {
				resourceUrl : '',	//分享的资源Url
				pic : 'http://img3.ceshiguang.com/pr/59n/ms.jpg', 		//分享的主题图片Url
				title : renren_title,		//分享的标题
				description : '快来试试吧~'	//分享的详细描述
		};

		var renrenStr = '<a class="renrenShare" ></a>';
		$(".shareIconsWrapper").prepend(sinaStr+qzoneStr+renrenStr);	
		
		$(".renrenShare").click(function(){rrShareOnclick(rrShareParam)});
		return 0;
	}
	function submitToSNS(final_num,user_name,final_title,share_content,type,node,renren,qq_content,qq_friend_str,in_path,out_path){
		/****
			* final_num 最终测试结果序列例如0,2,13等，字母序列0对应A 1对应B以此类推
			* final_title 为最终测试出的标题内容，也可能是一个分数，包括单位
			* type 为sns类别
			* renren 是预设的存储图片文件名
			* category 有三种预设值 no_image:不发送图片(少有) with_image:发送图片 //发送音乐的类型由另一个do_x.php单独处理
			*/
		var circle='0';
		var category = 'with_image';
		$(".analyticsResultTitle").html(final_title);
		
		var node =$(node);
		node.html("加载中");
		if($("#followNow").attr("checked")==false){
			var checkDo = 0;
		}else{
			var checkDo = 1;
		}
		if(node.attr("proc")=='on')return 0;
		node.attr("proc","on");
		var renren_content = $("#shareInputContent").val();
		var share_content = $("#shareInputContent").val();
		$("#rNameSc").html(final_title);
		$("#rPhoto").attr("src","http://img3.ceshiguang.com/pr/59n/"+final_num+".jpg");
		var renren_type='photo';
		var pic_type = 'pre';
		$.ajax({
			type:"POST",
			url:base_url+"quizajax/submitToSNS",
			data:{final_num:final_num,user_name:user_name,final_title:final_title,type:type,checkDo:checkDo,renren:renren,category:category,share_content:share_content,renren_content:renren_content,qq_content:qq_content,qq_friend_str:qq_friend_str,circle:circle,renren_type:renren_type,pic_type:pic_type,in_path:in_path,out_path:out_path},
			dataType:"html",
			cache:false,
			success:function(data){
				backToDo();		
			},
			error:function(){
					
			}
		});	
	}

</script>
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/ad960x90.php';
?>
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/footer_stat.php';
require_once dirname ( dirname ( __FILE__) ).'/a_include/adfloat.php';
?>
</body>
</html>
