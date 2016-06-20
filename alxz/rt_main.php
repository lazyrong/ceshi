<div class="c_box result"> 
<p>
<span class="<?=$rt_info['icon']?>"><?=$rt_info['msg']?></span>
</p>
<p>
<span>经测试，<?=$lian?>的某个人暗恋着<?=$xingzuo?>的你~</span>
</p>
<p><span><img src="<?=$pic?>" /></span></p>
<!-- 广告位：测试页 登陆页 760*90，vqu_页头 -->
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
<?
$app_names=array_keys($app_nick_n);
$app_nicks=array_values ($app_nick_n);
$rank_num=0;
while($rank_num<16)
{
	$app_name_n=$app_names[$rank_num];
	$no_border='';
	if($rank_num==3||$rank_num==7||$rank_num==11||$rank_num==15)
	{
		$no_border='class="no_border"';
	}
?>
    <a href="../<?=$app_name_n?>" title="<?=$app_nicks[$rank_num]?>" target="_blank"><img src="<?=$file_logo[$app_name_n]?>" <?=$no_border?>/></a>
<?
	$rank_num++;
}
?>
<div class="clear"></div>
</div><!--/apps_box-->