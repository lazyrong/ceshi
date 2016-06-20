<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/ad760x90.php';
?>
<style type="text/css">
*{ margin:0; padding:0; border:0 none;}
.clear{ clear:both;}
.weibo_ri_fot{ text-align:center; font-size:14px; color:#646464; padding:20px 0;}
.weibo_ri_fot_btn {cursor:pointer;color:#fff; background:url(<?=$static_file_path?>/imgs/viewresult.gif) no-repeat; width:117px; height:39px; line-height:39px; display:inline-block; font-size:14px; }

</style>
<div class="c_box result" id="share_result"> 
<p style="text-align: center;">
<span>请先分享到空间，然后才能查看最终详细结果！</span>
</p>
<p style="text-align: center;">
<a href="javascript:void(0);">
<img src="../file/imgs/share_to_qzone.png" id="btn_share_to_qzone">
<img src="../file/imgs/share_to_qzone_tip.png" id="share_to_qzone_tip" style="display:none;">
</a>
</p>
<div class="clear"></div>
     <div class="weibo_ri_fot">
       请先分享到空间，然后 &nbsp;<span class="weibo_ri_fot_btn" id="viewResultBtn2">&nbsp;</span>
    </div>
</div>
<div class="c_box result" id="test_result" style="display:none"> 
<p style="text-align: center;">
<span>你的测试结果是：<font color="red"><?if (!empty($rt_info['result_title'])) echo $rt_info['result_title'];?></font></span>
</p>
<?php if ($rt_info['result_remark']) {?>
<div style="text-align: center;color:#000000;padding:0 150px;">
<?=$rt_info['result_remark']?>
</div>
<?php }?>
<?php if ($rt_info['result_img']) {?>
<p><img id="result_img" src="<?=$rt_info['result_img']?>" /></p>
<?php }?>
<!-- 广告位：结果页 468*60广告位置-->
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/ad468x60.php';
?>
<p class="go_more">
<span><a href="./">&gt;&gt;测测好友们的&lt;&lt;</a></span>
<span><a href="../">&gt;&gt;查看更多应用&lt;&lt;</a></span>
</p>
</div>
<div class="c_box apps_box" style="margin-bottom:0px;"> <p>==========好 友 们 玩 过 的==========</p></div>
<div class="c_box apps_box" >
<?php 
 	$idx = 0;
      foreach ($app_hot_list as $top_app) {
      	if (!empty($app_list[$top_app])) {
      		$no_border='';
      		if($idx % 4 == 3)
      		{
      			$no_border='class="no_border"';
      		}
      ?>
<a href="/<?=$top_app?>" title="<?=$app_list[$top_app]['title']?>" target="_blank"><img src="<?=$app_list[$top_app]['logo']?>" <?=$no_border?>/></a>
      <?php 
      $idx++;
		}
		if ($idx == 16) {
			break;
		}
      }
      ?>
<div class="clear"></div>
</div><!--/apps_box-->
<script>

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

    var g = 700;
    var m = 560;
    var f = window.screen.height / 2 - (m / 2);
    var i = window.screen.width / 2 - (g / 2);
    var l = window.open(url, "Share", "status=1,height=" + m + ",width=" + g + ",top=" + f + ",left=" + i + ",toolbar=no, menubar=no,modal=yes, scrollbars=yes, location=no,status=no,resizable=0");
    window.onfocus=function (){l.focus();};
    window.onclick=function (){l.focus();};
    $('#share_result').slideUp(5000, function() {
			$('#test_result').slideDown(5000);
        });
}
jQuery(function($) {
	$('#result_img').attr('src', '<?=$rt_info['result_img']?>');
	$('#btn_share_to_qzone').click(function () {
		openQzoneShareDialog();
		});

	$('#viewResultBtn2').click(function () {
		$("#share_to_qzone_tip").show();
	});
});
//setTimeout("location.assign('/<?=$rt_info['back_url']?>')", 150000);
</script>
