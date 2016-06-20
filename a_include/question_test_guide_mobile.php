<?php 
$questionsize = count($questionAnswerList);
?>
<!DOCTYPE html>
<html>
<head>
<base href=".">
<meta charset="utf-8">
<meta
	content="width=device-width, minimum-scale=1, maximum-scale=1,initial-scale=1.0, user-scalable=no"
	name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title><?=$app_list[$app_name]['title']?></title>
<link rel="stylesheet"
	href="<?=$static_file_path?>/css/jquery.mobile-1.3.1.min.css">
<style>
.app_content {
	margin: 1px auto;
	width: 95%;
	text-align: center;
	margin-bottom: 20px
}

.app_content .question {
	padding: 10px 0;
}
</style>
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script
	src="http://libs.baidu.com/jquerymobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/header_stat.php';
?>
<script>
var btn_enable = 1;
var optiondatastr = '<?=$optiondata?>';
var optiondata = eval('(' + optiondatastr + ')');
var Questionpage = {
	options:[],
    init:function() {
        $.each(optiondata, function(i, question){
        	Questionpage.options.push(question);
        });
        Questionpage.show(0);
    },

    
    show:function(idx) {
	  	var question =  Questionpage.options[idx];
	  	$('#question_option').html('');
	  	var htmlstr = '';
	  	htmlstr += '<fieldset data-role="controlgroup" class="ui-corner-all ui-controlgroup ui-controlgroup-vertical" aria-disabled="false" data-disabled="false" data-shadow="false" data-corners="true" data-exclude-invisible="true" data-type="vertical" data-mini="false" data-init-selector=":jqmData(role=\'controlgroup\')">';
		htmlstr += '<div role="heading" class="ui-controlgroup-label"><legend style="color:#27F;text-align:left;font-size:20px;" >'+question.question+'</legend></div>';
		htmlstr += '<div class="ui-controlgroup-controls">';
		var isoption = ' '; 
		var optionlength = question.answers.length;
	  	$.each(question.answers, function(i, answer){
		  	htmlstr += '<div class="ui-radio">';
		  	if (i == 0) {
		  		isoption = ' ui-first-child ';
			 } else if (i == optionlength - 1) {
				 isoption = ' ui-last-child ';
			 } else {
				 isoption = ' ';
		    }
        	if (answer.return_value) {
    	  		htmlstr += '<input type="radio" name="i'+idx+'" id="i'+idx+''+i+'" value="'+answer.return_value+'" class="question_item" onclick="Questionpage.submit(\''+answer.return_value+'\');">';
    	  		htmlstr += '<label for="i'+idx+''+i+'" onclick="Questionpage.submit(\''+answer.return_value+'\');" data-corners="true" data-shadow="false" data-iconshadow="true" data-wrapperels="span" data-icon="radio-off" data-theme="c" data-mini="false" class="ui-radio-off ui-btn ui-btn-corner-all ui-fullsize ui-btn-icon-left '+isoption+' ui-btn-up-c"><span class="ui-btn-inner"><span class="ui-btn-text">'+answer.option+'</span><span class="ui-icon ui-icon-radio-off ui-icon-shadow">&nbsp;</span></span></label>';
            } else {
    	  		htmlstr += '<input type="radio" name="i'+idx+'" id="i'+idx+''+i+'" value="'+answer.value+'" class="question_item" onclick="Questionpage.show(\''+answer.value+'\');">';
    	  		htmlstr += '<label for="i'+idx+''+i+'" onclick="Questionpage.show(\''+answer.value+'\');" data-corners="true" data-shadow="false" data-iconshadow="true" data-wrapperels="span" data-icon="radio-off" data-theme="c" data-mini="false" class="ui-radio-off ui-btn ui-btn-corner-all ui-fullsize ui-btn-icon-left '+isoption+' ui-btn-up-c"><span class="ui-btn-inner"><span class="ui-btn-text">'+answer.option+'</span><span class="ui-icon ui-icon-radio-off ui-icon-shadow">&nbsp;</span></span></label>';
            }
        	isoption = '';
        	htmlstr += '</div>';
        });
	  	
	  	htmlstr += '</div></fieldset>';
	  	$('#question_option').html(htmlstr);
	  	//$(htmlstr).appendto($('#question_option'));
    },
    submit:function(score) {
        //$('#form1').attr('action', $('#form1').attr('baseaction')+'?score='+score);
    	//$('#view-result').show();
    	$('#question_option').html('系统正在努力分析中...');
		location.href = './view.php?score='+score;
    }
}
jQuery(function($) {
Questionpage.init();
});
function on_submit() {

	<?php if ($is_control_multi_click == 1) {?>
	if (btn_enable == 0) {
		return;
	} else {
		btn_enable = 0;
		$('#btn_submit_img').hide();$('#load_pic').show();
		setTimeout(function(){btn_enable = 1;$('#load_pic').hide();$('#btn_submit_img').show();},10000);
	}
	<?php }?>
	var form1=document.getElementById('form1');
	form1.submit();
}
</script>
</head>
<body class="ui-overlay-c" style="cursor: auto; zoom: 1;">
	<div data-role="page" data-url="/" tabindex="0"
		style="min-height: 572px;">
		<div id="page_app" data-role="page_app" data-theme="a">
			<div data-role="content">
				<div class="app_content">
				<form action="/<?=$app_name?>/view.php" baseaction="/<?=$app_name?>/view.php" method="post" id="form1" name="form1">
						<div data-role="controlgroup" class="question" style="display: block;" id="question_option">
						</div>
				</form>
					<p id="view-result" style="text-align: center; margin-buttom: 30px; display: none;">
						<a href="#" class="ui-link" data-ajax="false" onclick="on_submit(); return false;">
						<img id="btn_submit_img" src="<?=$static_file_path?>/imgs/share.gif" /></a> 
						<img id='load_pic' src='http://app.qpic.cn/mblogpic/240dcbe326654d4738c8/460' style='display: none;' />
					</p>
					<p style="text-align: center; margin-top: 10px;">
		    <?php 
		    switch ($at_fans_mode) {
		    	case 1:
		    		echo '<input type="hidden" id="invite" name="invite" value="1" />';
		    		break;
		    	case 2:
		    		echo '<input type="checkbox" id="invite" name="invite" value="1" checked /><span style="color:#cccccc;font-size:12px;">邀请好友试试</span>';
		    		break;
		    	case 3:
		    		echo '<input type="checkbox" id="invite" name="invite" value="1"  /><span style="color:#cccccc;font-size:12px;">邀请好友试试</span>';
		    		break;
		    	case 4:
		    		break;
		    	default:
		    		break;
		    }
		    ?>
		    </p>
	
				</div>
			</div>

<?php 
//require_once dirname ( dirname ( __FILE__) ).'/a_include/ad_mobile_20x5.php';
?>
<?php 
//require_once dirname ( dirname ( __FILE__) ).'/a_include/ad_app_down.php';
?>
			<div>
				<br>
				<p style="text-align: center;">2013 &copy; Copyright 微测试</p>
				<br>
			</div>
		</div>
　 <?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/footer_stat.php';
?>
</div>
<?php 
//require_once dirname ( dirname ( __FILE__) ).'/a_include/admobilebuttom.php';
?>
</body>
</html>
