<!-- 广告位：测试页 登陆页 760*90，vqu_页头 -->
<?php 
require_once '../a_include/ad760x90.php';
?>
<style type="text/css">
*{ margin:0; padding:0; border:0 none;}
.clear{ clear:both;}
body a{ text-decoration:none;}
.weibo_ri{ width:800px; height:auto; margin:20px auto;}
.weibo_ri_top{ padding:20px 20px 30px; border-bottom:1px dashed #cfcfcf;}
.weibo_pic{ width:60px; height:60px; padding:1px; border:1px solid #ccc; float:left; margin:30px 18px 0 188px; display:inline;}
.weibo_ri_text{ width:200px; height:120px; float:left; margin-top:24px; overflow:hidden;}
.weibo_ri_text .weibo_ri_title{ font-size:16px; padding:3px 0;font-family:"微软雅黑","黑体",Hei,"宋体",Songti宋体,SimSun,Verdana,Helvetica,sans-serif;}
.weibo_ri_text .weibo_ri_con{ font-size:12px; padding:3px 0;}
.weibo_ri_text .weibo_ri_btn {
padding: 5px 0;
margin-top: 5px;
}

.weibo_follow_pic {
width: 128px;
height: 40px;
padding: 1px;
float: left;
margin: -40px 0px 0px 55px;
display: inline;
}
.weibo_ri_fot{ text-align:center; font-size:14px; color:#646464; padding:20px 0;}
.weibo_ri_fot_btn {cursor:pointer;color:#fff; background:url(<?=$static_file_path?>/imgs/viewresult.gif) no-repeat; width:117px; height:39px; line-height:39px; display:inline-block; font-size:14px; }
</style>
<script>
function checkFans()
{
	var qzoneID = '<?=$need_follow_qzone['qzone_id']?>';
	
	$.get('../a_include/checkfans.php?qzoneID='+qzoneID+'&v='+Math.random(), function(data){
		if(data==1){
			$('#followQZone').hide();
			$('#viewresult').show();
			//window.event.returnValue=false;
			setTimeout("location.assign('/')", 15000);
		}else{
			$("#gzbtn").show();
			return false;
		}
	});
	return false;
} 
jQuery(function($) {
	$('#viewresult').hide();
	$('#viewResultBtn').click(function (){
		checkFans();
	});
	$('#result_img').attr('src', '<?=$rt_info['result_img']?>');
});
</script>
<div class="weibo_ri c_box " id="followQZone">
	<div class="weibo_ri_top">
    	<div class="weibo_pic"><a href="javascript:void(0)"><img src="<?=$need_follow_qzone['pic']?>" width="60" height="60" /></a></div>
        <div class="weibo_ri_text">
            <div class="weibo_ri_con">欢迎关注我们的QQ空间</div>
        	<div class="weibo_ri_btn"><iframe src="http://open.qzone.qq.com/like?url=http%3A%2F%2Fuser.qzone.qq.com%2F<?=$need_follow_qzone['qzone_id']?>&type=button&width=400&height=30&style=3" allowtransparency="true" scrolling="no" border="0" frameborder="0" style="width:400px;height:24px;border:none;overflow:hidden;"></iframe></div>
        <div class="weibo_follow_pic" style="display:none" id="gzbtn">
		<img  src="../file/imgs/follow_qzone_tip.gif">
		</div>
        </div>
        <div class="clear"></div>
    </div>
 <div class="clear"></div>
     <div class="weibo_ri_fot">
      请先 关注我们的QQ空间，然后 &nbsp;<span class="weibo_ri_fot_btn" id="viewResultBtn">&nbsp;</span>
    </div>
</div>
<div id="viewresult" style="display:none">
<div class="c_box result" > 
<p style="text-align: center;">
<span>你的测试结果是：</span>
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
require_once '../a_include/ad468x60.php';
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

