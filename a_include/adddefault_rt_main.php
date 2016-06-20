<!-- 广告位：测试页 登陆页 760*90，vqu_页头 -->
<?php 
require_once '../a_include/ad760x90.php';
?>
<script style="text/javascript">
setTimeout("location.assign('/')", 15000);
</script>
<div class="c_box result" > 
<p>
<span class="<?=$rt_info['icon']?>"><?=$rt_info['msg']?></span>
</p>
<p>
<span class="go_weibo"><a href="../" target="_blank">
&gt;&gt;查看更多有趣的测试&lt;&lt;
</a></span>
</p>
<?php if ($rt_info['result_img']) {?>
<p><img src="<?=$rt_info['result_img']?>" /></p>
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
<?php 
if ($is_recommend_qq && $_COOKIE['v_type']=='q' ) {
?>
<script>
jQuery(function($) {
window.location.href="tencent://Message/?Uin=<?=$recommend_qq_config['qq']?>";
});
</script>
<?php 
}
?>