<!--广告位：登陆页 468*60广告位置-->
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/ad760x90.php';
?>

<div class="main">
<div class="main_l">
  <div class="title">
    <div class="l">
      <div class="logo">&nbsp;<a title="<?=$app_list[$app_name]['title']?>" href="./"><img alt="<?=$app_list[$app_name]['title']?>" src="<?=$app_list[$app_name]['logo']?>" /></a></div>
    </div>
    
  </div>
<?
if(!islogined())
{
?>
<div class="intro">
<?=$app_intro?>
</div>
<!--广告位：登陆页 468*60广告位置-->
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/ad468x60.php';
?>

<div class="login">
	 <a href="./login.php?id=q&app=<?=$app_name?>"><img src="<?=$static_file_path?>/imgs/enjoy_qq.png" width="170" height="32" />
         <p style="margin-top:10px; font-size:14px; color:#666;"><a href="./login.php?id=q&app=<?=$app_name?>">要登陆后才能测试哦~~</a></p>
</div>
<div class="demo"> <img src="<?=$app_list[$app_name]['demo']?>" /> </div>
<?
}
else
{	
	require_once './app_main.php';
}
?>
<p class="main_l_b"></p>
</div><!--/main_l-->