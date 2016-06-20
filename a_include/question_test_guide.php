
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?=$app_list[$app_name]['title']?>-微测试</title>
<link rel="shortcut icon" href="<?=$static_file_path?>/imgs/favicon.ico" />
<link rel="icon" href="<?=$static_file_path?>/imgs/favicon.ico" type="image/x-icon" />
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
<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
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
	<?php if (!empty($app_pre_img)) {?>
	<div style="background:url(<?=$app_pre_img?>) 0 0 no-repeat;" class="imageWrapper">
	<?php } else {?>
	<div style="background:url(imgs/pre.jpg) 0 0 no-repeat;" class="imageWrapper">
	<?php }?>
		
		<form name="answerform" id="answerform"  action="./view.php" method="post">
		<div class="allQuestionBuildWrapper">
		<div class="rightQuestionTitle" id="rightQuestionTitle"></div>
		<div class="answerWrapper"  id="answerWrapper">
		</div>
			<div class="processBar">
			<div id="processOn" style="width:760px;">
			</div>
			</div>
		</div>
		</form>
		</div>
		<div class="actionWrapper"><div class="detailTitleBottom">
		<?php 
		echo !empty($app_pre_img)?$app_title:$app_list[$app_name]['title'];
		?>
		</div></div>	
	</div>
	<div class="clear"></div>	
</div>
<script>
var optiondatastr = '<?=$optiondata?>';
var optiondata = eval('(' + optiondatastr + ')');
var Questionpage = {
	options:[],
	submited:0,
    init:function() {
        $.each(optiondata, function(i, question){
        	Questionpage.options.push(question);
        });
        Questionpage.show(0);
    },
    show:function(idx) {
	  	var question =  Questionpage.options[idx];
	  	$('#rightQuestionTitle').text(question.question);
	  	$('#answerWrapper').html('');
	  	var htmlstr = '';
	  	$.each(question.answers, function(i, answer){
        	if (answer.return_value) {
        		htmlstr += '<a class="questionAnswer" onclick="Questionpage.submit(\''+answer.return_value+'\');">'+answer.option+'</a>';
            } else {
            	htmlstr += '<a class="questionAnswer" onclick="Questionpage.show(\''+answer.value+'\');">'+answer.option+'</a>';
            }
        });
	  	$('#answerWrapper').html(htmlstr);
    },
    submit:function(score) {
        if (Questionpage.submited == 0) {
		location.href = './view.php?score='+score;
		Questionpage.submited = 1;
        }
    }
}
Questionpage.init();
</script>
<div style="display:none">
</div>

<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/footer_stat.php';

require_once dirname ( dirname ( __FILE__) ).'/a_include/adfloat.php';
?>

</body></html>
