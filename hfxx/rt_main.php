<div class="c_box result"> 
<p>
<span class="<?=$rt_info['icon']?>"><?=$rt_info['msg']?></span>
</p>
<p>
<span>你的得分是：<?=$score?></span>
</p>
<p><span>经测试你属于：<?=$jieguo?></span></p>
<p style="font-size:14px"><span>告诉你一个小密码：多数男性的分数会分布在0-150分之间；多数女性的分数会分布在180-300分之间哦~</span></p>

<!-- 广告位：结果页 468*60广告位置 -->
<?php 
require_once './a_include/ad468x60.php';
?>
<p>
<span class="go_weibo"><a href="<?=$rt_info['wb_url']?>" target="_blank">
<?php 
if ($_COOKIE['v_type']=='q') {
?>
>>查看我的空间<<
<?php
} else {
?>
>>查看我的微博<<
<?php
}
?>
</a></span>
</p>
<p class="go_more">
<span><a href="./">>>测测好友们的<<</a></span>
<span><a href="../">>>查看更多应用<<</a></span>
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