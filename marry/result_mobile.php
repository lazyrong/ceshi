<?php 
function getNeedFollowQzone() {
	global $follow_qzone_config;
	global $is_follow_qzone_mobile;
	$need_follow_qzone = null;
	if ($is_follow_qzone_mobile && $follow_qzone_config && is_array($follow_qzone_config)) {
		
		$rand_list = array();
		foreach ($follow_qzone_config as $qzone) {
			if ($_COOKIE['qzone_follow_'.$_COOKIE['v_o_t_openid'].'_'.$qzone['qzone_id']]) {
				continue;
			}
			$isfans = checkFansPage($qzone['qzone_id']);
			if (!$isfans) {
				$rand_list[] = $qzone;
			} else {
				setcookie ( 'qzone_follow_'.$_COOKIE['v_o_t_openid'].'_'.$qzone['qzone_id'], '1', time () + 86400*3, '/' );
			}
		}
		if ($rand_list) {
			$need_follow_qzone = $rand_list[array_rand($rand_list)];
			return $need_follow_qzone;
		} else {
			return null;
		}
		
	}
	return null;
}
$need_follow_qzone = getNeedFollowQzone();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title><?=$app_list[$app_name]['title']?></title>
<link rel="stylesheet" href="<?=$static_file_path?>/css/jquery.mobile-1.3.1.min.css">
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="http://libs.baidu.com/jquerymobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>

<script>
 $(document).ready(function() {
  $.mobile.ajaxLinksEnabled = false;
 });
</script>
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/header_stat.php';
?>
<script>

function checkFans()
{
	var qzoneID = '<?=$need_follow_qzone['qzone_id']?>';
	
	$.get('../a_include/checkfans.php?qzoneID='+qzoneID+'&v='+Math.random(), function(data){
		if(data==1){
			$('#followQZone').hide();
			$('#viewresult').show();
			//window.event.returnValue=false;
			//setTimeout("location.assign('/')", 15000);
		}else{
			$("#gzbtn").show();
			return false;
		}
	});
	return false;
} 
jQuery(function($) {

	<?php 
	if ($need_follow_qzone) {
	?>
	$('#viewresult').hide();
	$('#viewResultBtn').click(function (){
		checkFans();
	});
	<?php } else {?>
	$('#viewresult').show();
	<?php }?>
	$('#result_img').attr('src', '<?=$rt_info['result_img']?>');
});

//setTimeout("location.assign('/')", 15000);
</script>
</head>
<body class="ui-overlay-c" style="cursor: auto;">
<div  data-role="page" id="resultpage" data-theme="c">
	<div data-role="header" data-theme="c">
			<a href="/" data-icon="home" data-ajax="false" class="ui-link">首页</a>
			<h3 ><?=$app_list[$app_name]['title']?></h3>
			<a href="/" data-icon="arrow-l" data-ajax="false" class="ui-link">返回</a>
	</div>
	
	<div data-role="content" id="resultcontent">

	<?php 
	if ($need_follow_qzone) {
	?>
			<div style="text-align: center;" id='followQZone'>
				<p>请先关注我们的QQ空间</p>
				<p>
				<iframe src="http://open.qzone.qq.com/like?url=http%3A%2F%2Fuser.qzone.qq.com%2F<?=$need_follow_qzone['qzone_id']?>&type=button&width=100&height=30&style=3" allowtransparency="true" scrolling="no" border="0" frameborder="0" style="width:60px;height:24px;border:none;overflow:hidden;"></iframe>
				</p>
				<p id="gzbtn" style="display:none;">
				<img src="/file/imgs/follow_qzone_tip_up.gif" />
				</p>
				<p><img src="/file/imgs/viewresult.gif" id="viewResultBtn"></p>
			</div>
			
	<?php 
	}
	?>
			<div id="viewresult" style="display:none">
				<p style="text-align: center;">你的测试结果：</p>
				<p style="text-align: center;">
				<img id="result_img" src="<?=$rt_info['result_img']?>" width="95%" >
				</p>
				<p style="text-align: center;">
				<a data-ajax="false" href="/" style="font-color: rgb(255, 0, 0);">查看更多有趣的测试！</a>
				</p>
			</div>

<?php 
//require_once '../a_include/ad_mobile_20x5.php';
?>	
<?php 
require_once '../a_include/ad_app_down.php';
?>
		<div data-cid="text5" style="">
			<br />
			<p style="text-align: center;">2013 &copy; Copyright 微测试</p>
			<br />
		</div>
		</div>

	</div>

			<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/footer_stat.php';
?>
<?php 
require_once './../a_include/admobilebuttom.php';
?>
</body>
</html>
