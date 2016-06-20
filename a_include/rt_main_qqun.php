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

jQuery(function($) {
	$('#viewresult').hide();
	$('#addfriend').click(function (){
		var expires = new Date();
		expires.setTime(expires.getTime() + 700000000);
		$.cookie('qqun_<?=$_COOKIE['v_o_t_openid']?>_<?=$need_addfriend_qq['qqun']?>',1,{expires:expires,path:'/',domain:'<?=$_SERVER['HTTP_HOST']?>'});
		//window.location.href="http://wp.qq.com/wpa/qunwpa?idkey=<?=$need_addfriend_qq['idkey']?>";
		hadadded = true;
		return true;
	});
	$('#viewResultBtn').click(function (){		
		if (hadadded) {
			$('#followQZone').hide();
			$('#viewresult').show();
			setTimeout("location.assign('/<?=$rt_info['back_url']?>')", 15000);
		} else {
			$("#gzbtn").show();
			return false;
		}
	});
	$('#result_img').attr('src', '<?=$rt_info['result_img']?>');
});
</script>
<div class="weibo_ri c_box " id="followQZone">
    
    <div class="weibo_ri_top">
    <div style="width: 300px;height: 120px;  text-align:center ;margin: 0 auto;padding-top: 20px;">
    	<div class="weibo_pic">
    	
    	<a href="javascript:void(0)"><img src="<?=$need_addfriend_qq['pic']?>" height="60" width="60"></a>
    	</div>
        <div class="weibo_ri_text">
            <div class="weibo_ri_con">欢迎加入QQ群</div>
        	<div class="weibo_ri_btn">
        	<a id="addfriend" class="addfri" target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=<?=$need_addfriend_qq['idkey']?>"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" ></a>
        	</div>
        <div class="weibo_follow_pic" style="display:none" id="gzbtn">
		<img src="../file/imgs/add_qqun_tip.gif">
		</div>
        </div>
     </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
     <div class="weibo_ri_fot">
       加入我们的QQ群，然后 &nbsp;<span class="weibo_ri_fot_btn" id="viewResultBtn">&nbsp;</span>
    </div>
</div>

<div id="viewresult" style="display:none">
<div class="c_box result" > 
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