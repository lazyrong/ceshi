<?php
$uagent = strtolower($_SERVER['HTTP_USER_AGENT']);
// $is_android = (strpos($uagent, 'android')) ? true : false;
 $is_android = false;
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
<base href=".">
<meta charset="utf-8">
<meta content="width=device-width, minimum-scale=1, maximum-scale=1,initial-scale=1.0, user-scalable=no" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title><?=$app_list[$app_name]['title']?></title>
<link rel="stylesheet" href="<?=$static_file_path?>/css/jquery.mobile-1.3.1.min.css">
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="http://libs.baidu.com/jquerymobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
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
	$('#share_result').show();
	<?php }?>
	/*$('#result_img').attr('src', '<?=$pagrams['img']?>');*/
});
function after_download() {
	$('#download_app_result').hide();
	$('#share_result').show();
}
function openQzoneShareDialog() {
    var desc = '<?=$rt_info['pagram']['content']?>';
    var title = '<?=$rt_info['pagram']['title']?>';
    var url = '<?=$rt_info['pagram']['url']?>';
    var pic = '<?=$rt_info['result_img']?>';
    var summary = '<?=$rt_info['pagram']['summary']?>';

    var p = {url:url,showcount:'1',summary:summary,title:title,desc:desc,site:'微测试',pics:pic};
    var s = [];
    for(var idx in p){s.push(idx + '=' + encodeURIComponent(p[idx]||''));}
    s=s.join('&');
    var url='http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?'+s;

    $('#goto_share').attr('href', url);
}
var is_shared = false;
jQuery(function($) {
		openQzoneShareDialog();
	$('#goto_share').click(function () {
		is_shared = true;
		$('#share_result').slideUp(1000, function() {
			$('#viewresult').slideDown(2000);
        });
		update_click('share_to_qzone_num');
		//$('#share_result').show();
		return true;
	});

	$('#viewResultBtn2').click(function () {
		if (!is_shared) {
		$("#share_to_qzone_tip").show();
		}
	});
});
//setTimeout("location.assign('/')", 15000);
</script>
</head>
<body  class="ui-overlay-c" style="cursor: auto; zoom: 1;">
	<div data-role="page" data-url="/" tabindex="0" style="min-height: 572px;">
	<div id="page_app" data-role="page_app" data-theme="a">
	<div data-role="header" data-theme="a">
		<a href="/" data-icon="home" data-ajax="false" class="ui-link">首页</a>
		<h3 ><?=$app_list[$app_name]['title']?></h3>
		<a href="/" data-icon="arrow-l" data-ajax="false" class="ui-link">返回</a>
	</div>

			<?php
			//require_once '../a_include/ad_mobile_6x5.php';
			?>
	<div data-role="content" style="margin:0px 5px;">
<?php
//require_once dirname ( dirname ( __FILE__) ).'/a_include/ad_app_down.php';
?>
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

<?php
	if ($is_android) {
?>
<div id="download_app_result">
<p style="text-align:center" >
请先下载APP，然后才能查看最终详细结果
</p>
<p style="text-align:center" >
<a href="http://dl.app.ifengcdn.com/other/201412/2000_Android_2.3_V4.3.6_2461.apk" id="goto_download" target="_blank" onclick="after_download();"><img src="/file/imgs/view_app_result.png" id="btn_download_app"/></a>
</div>
<?php
	}
?>

	<div id="share_result">
<p style="text-align:center" >
请先分享到空间，然后才能查看最终详细结果
</p>
<p style="text-align:center" >
<a href="#" id="goto_share" target="_blank"><img src="/file/imgs/share_to_qzone.png" id="btn_share_to_qzone"/></a>

<font id="share_to_qzone_tip" style="display:none" color="red">
请先分享
</font>
</p>
<p style="text-align:center" >
请先分享到空间，然后<img src="/file/imgs/viewresult.gif" id="viewResultBtn2"/>
</p>
</div>

<script>
jQuery(function($) {
	<?php
	if ($is_android) {
	?>
		$('#share_result').hide();
	<?php
	}
	?>
});
</script>

			<div id="viewresult" style="display:none">
				<div style="text-align: center;">你的测试结果：
				<?if (!empty($rt_info['result_title'])) echo '<br /><font color="red">'.$rt_info['result_title'].'</font>';?>
				</div>
				<?php
				if ($rt_info['result_remark']) {
				?>
				<div>
				<?=$rt_info['result_remark']?>
				</div>
				<?php
				} else {
				?>
				<p style="text-align: center;">
				<img id="result_img" src="1.png" width="80%" >
				</p>
				<?php
				}
				?>
			</div>

		<div>
			<br />
			<p style="text-align: center;">2013 &copy; Copyright 微测试</p>
			<br />
		</div>
		</div>


<div role="navigation" class="ui-footer ui-footer-fixed ui-bar-a ui-navbar ui-mini" data-cid="tabbar1" data-role="tabbar" data-iconpos="top" data-theme="a">
    <ul class="ui-grid-c">
    <li class="ui-block-a"><a data-inline="true" data-iconpos="top" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" class="ui-link ui-btn ui-btn-up-a ui-btn-inline ui-btn-icon-left" href="/hot.php" data-ajax="false" data-transition="none" data-theme="a" data-icon="star"><span class="ui-btn-inner"><span class="ui-btn-text">热门</span><span class="ui-icon ui-icon-home ui-icon-shadow">&nbsp;</span></span></a></li>
    <li class="ui-block-b"><a data-inline="true" data-iconpos="top" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" class="ui-link ui-btn ui-btn-up-a ui-btn-inline ui-btn-icon-left" href="/love.php" data-ajax="false" data-transition="none" data-theme="a" data-icon="star"><span class="ui-btn-inner"><span class="ui-btn-text">缘分</span><span class="ui-icon ui-icon-star ui-icon-shadow">&nbsp;</span></span></a></li>
    <li class="ui-block-c"><a data-inline="true" data-iconpos="top" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" class="ui-link ui-btn ui-btn-up-a ui-btn-inline ui-btn-icon-left" href="/xingge.php" data-ajax="false" data-transition="none" data-theme="a" data-icon="star"><span class="ui-btn-inner"><span class="ui-btn-text">性格</span><span class="ui-icon ui-icon-star ui-icon-shadow">&nbsp;</span></span></a></li>
    <li class="ui-block-d"><a data-inline="true" data-iconpos="top" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" class="ui-link ui-btn ui-btn-inline ui-btn-icon-left ui-btn-up-a" href="/xingzuo.php" data-ajax="false" data-transition="none" data-theme="a" data-icon="star"><span class="ui-btn-inner"><span class="ui-btn-text">星座</span><span class="ui-icon ui-icon-star ui-icon-shadow">&nbsp;</span></span></a></li>
    </ul>
</div>
	</div>
</div>

<?php
require_once dirname ( dirname ( __FILE__) ).'/a_include/footer_stat.php';
?>
<?php
//require_once dirname ( dirname ( __FILE__) ).'/a_include/admobilebuttom.php';
?>
</body>
</html>
