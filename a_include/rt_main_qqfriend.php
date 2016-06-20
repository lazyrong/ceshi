<!-- 广告位：测试页 登陆页 760*90，vqu_页头 -->
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/ad760x90.php';
?>
<script type="text/javascript" src="<?=$static_file_path?>/js/jquery.cookie.min.js"></script>
<style type="text/css">
*{ margin:0; padding:0; border:0 none;}
.clear{ clear:both;}
body a{ text-decoration:none;}
.weibo_ri{ width:800px; height:auto; margin:20px auto;}
.weibo_ri_top{ padding:20px 20px 30px; border-bottom:1px dashed #cfcfcf;}
.weibo_pic {width: 60px;height: 60px;padding: 1px;border: 1px solid #ccc;float: left;margin: 10px 20px 0 0;display: inline;}
.weibo_ri_text {float: left;margin-top: 7px;}
.weibo_ri_text .weibo_ri_con {font-size: 18px;padding: 5px 0;text-align: left;color: #646464;}
.weibo_ri_text .weibo_ri_btn {float: left;}
.weibo_ri_text .weibo_ri_btn a {color:#58B4EB;padding: 5px 0;font-size: 12px;width: 70px;height: 18px;border: 1px solid #e0e0e0;text-align: center;float: left;display: block;background: #efefef;}
.weibo_ri_text .weibo_ri_btn a:hover {background:#FFFFCC;}
.weibo_follow_pic {float: left;margin-top: -5px;margin-left: 5px;}
.weibo_ri_fot{ text-align:center; font-size:14px; color:#646464; padding:20px 0;}
.weibo_ri_fot_btn {cursor:pointer;color:#fff; background:url(<?=$static_file_path?>/imgs/viewresult.gif) no-repeat; width:117px; height:39px; line-height:39px; display:inline-block; font-size:14px; }

</style>
<script>
var hadadded = false;
var hadShowResult = false;
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
    $('#share_result').slideUp(100, function() {
		$('#test_result').slideDown(1000);
    });
}
jQuery(function($) {
	$('#viewresult').hide();
	$('#addfriend').click(function (){
		var expires = new Date();
		expires.setTime(expires.getTime() + 700000000);
		$.cookie('qf_<?=$_COOKIE['v_o_t_openid']?>_<?=$need_addfriend_qq['qq']?>',1,{expires:expires,path:'/',domain:'<?=$_SERVER['HTTP_HOST']?>'});
		window.location.href="tencent://Message/?Uin=<?=$need_addfriend_qq['qq']?>";
		hadadded = true;
	});
	$('#viewResultBtn').click(function (){		
		if (hadadded) {
			$('#followQZone').hide();
			$('#viewresult').show();
			//setTimeout("location.assign('/<?=$rt_info['back_url']?>')", 15000);
		} else {
			$("#gzbtn").show();
			return false;
		}
	});
	$('#result_img').attr('src', '<?=$rt_info['result_img']?>');
	$('#btn_share_to_qzone').click(function () {
		openQzoneShareDialog();
		hadShowResult = true;
		});
	$('#viewResultBtn2').click(function () {
		$("#share_to_qzone_tip").show();
	});

	
});
</script>
<div class="weibo_ri c_box " id="followQZone">
    
    <div class="weibo_ri_top">
    <div style="width: 300px;height: 120px;  text-align:center ;margin: 0 auto;padding-top: 20px;">
    	<div class="weibo_pic">
    	
    	<a href="javascript:void(0)"><img src="<?=$need_addfriend_qq['pic']?>" height="60" width="60"></a>
    	</div>
        <div class="weibo_ri_text">
            <div class="weibo_ri_con">欢迎添加我为QQ好友</div>
        	<div class="weibo_ri_btn">
        	<a id="addfriend" class="addfri" href="javascript:void(0);">添加好友</a>
        	</div>
        <div class="weibo_follow_pic" style="display:none" id="gzbtn">
		<img src="../file/imgs/add_qqfriend_tip.gif">
		</div>
        </div>
     </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
     <div class="weibo_ri_fot">
       添加我为QQ好友，然后 &nbsp;<span class="weibo_ri_fot_btn" id="viewResultBtn">&nbsp;</span>
    </div>
</div>

<div id="viewresult" style="display:none">
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
<div class="c_box result"  id="test_result" style="display:none"> 
<p style="text-align: center;">
<span>你的测试结果是：<font color="red"><?if (!empty($rt_info['result_title'])) echo $rt_info['result_title'];?></font></span>
</p>
<?php if ($rt_info['result_remark']) {?>
<div style="text-align: center;padding:0 150px;">
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
</div>