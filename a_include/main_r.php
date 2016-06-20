<div class="main_r">
<!--广告位：右侧 200*200广告位置-->
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/ad200x200.php';
?>
<ul class="ads">
<?php 
 	$idx = 0;
      foreach ($app_top_list as $top_app) {
      	if (!empty($app_list[$top_app])) {
      ?>
      <li><a href="/<?=$top_app?>" title="<?=$app_list[$top_app]['title']?>" target="_blank"><img src="<?=$app_list[$top_app]['logo']?>"/></a></li>
      <?php 
      $idx++;
		}
		if ($idx == 4) {
			break;
		}
      }
      ?>
</ul>
  <dl class="rlist">
    <dt><strong>热门应用</strong></dt>
    <dd>
      <ul>
      <?php 
 	$idx = 0;
      foreach ($app_recommend_list as $top_app) {
      	if (!empty($app_list[$top_app])) {
      ?>
      <li><a href="/<?=$top_app?>" title="<?=$app_list[$top_app]['title']?>" target="_blank"><?=$app_list[$top_app]['title']?></a></li>
      <?php 
      $idx++;
		}
		if ($idx == 10) {
			break;
		}
      }
      ?>
 <li><a href="../" target="_blank">>>更多应用<<</a></li>
      </ul>
    </dd>
  </dl><!--/rlist-->

</div><!--/main_r-->
<div class="clear"></div>
</div><!--/main-->