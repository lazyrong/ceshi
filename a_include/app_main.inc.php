<!-- 广告位：测试页 登陆页 760*90，vqu_页头 -->
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
	$t_nick=$_COOKIE['v_nick'];
	$t_name=$_COOKIE['v_name'];
	$t_avatar=$_COOKIE['v_avatar'];
?>
<?php 
if (0 && $_COOKIE['v_type']=='q') {
?>
<div style="font-size:18px; color:#00a0e9;"><?=$t_nick?>，还差最后一步，请先点击<font style="color:#ff0000">【一键收听】</font>测试就完成啦！</div>
<div style="clear:both"></div>
<div style="padding:5px; text-align:center">
    <span style="display:inline-block; margin-right:10px; position:relative;">
       <iframe src="http://follow.v.t.qq.com/index.php?c=follow&a=quick&name=qvip8888&style=2&t=1369356194946&f=0" marginwidth="0" marginheight="0" allowtransparency="true" frameborder="0" height="38" scrolling="auto" width="136"></iframe>
        <div style="width:236px; height:37px; position:absolute; bottom:18px;left:200px;"><img src="<?=$static_file_path?>/imgs/pic_bg.png"></div>
    </span>
</div>
<div style=”clear:both”></div>
<div style="font-size:18px; color:# 609c17; padding:3px; text-align:center;"> 请先点击上面的 <font style="color:#ff0000">↑【一键收听】</font>完成最后的测试！</div>

<div style="clear:both; width:100%; height:10px;  border-bottom:1px dashed #ddd;"></div>
<?php
}
?>
<p style="color:#f60; text-align:center; margin:20px 0px;">名字：
<input style='font-family:"微软雅黑",Arial,sans-serif,"新宋体";font-size:15px;color:#06f;border:1px solid #ddd;width:153px;padding:2px 2px;text-align:center;' id="my_nick" type="text" value="<?=$t_nick?>" /> *最多6字</p>

<!--广告位：登陆页 468*60广告位置-->
<?php 
require_once dirname ( dirname ( __FILE__) ).'/a_include/ad468x60.php';
?>

<p style="color:#f60; text-align:center; margin:10px 0px 20px; cursor:pointer">
<img src="<?=$static_file_path?>/imgs/share.gif" alt="开始测试" title="开始测试" id="btn_submit_img" onclick="my_on_submit('<?=$t_name?>');" />
<img id='load_pic' src='http://app.qpic.cn/mblogpic/240dcbe326654d4738c8/460' style='display:none;'/>
</p>
<!-- 
<p style="color:#f60; text-align:center; margin:10px 0; cursor:pointer"><img src="http://app.qpic.cn/mblogpic/05f902135224a3463866/2000" width="160" height="32" alt="查看结果，并发送微博" title="查看结果，并发送微博" onclick="my_on_submit('<?=$t_name?>');" /></p>
 -->
 
<form action="./" method="post" id="form1" name="form1" style="margin-top:20px; font-size:14px; color:#666;text-align:center;">
<input type="hidden" id="t_name" name="t_name" />
<input type="hidden" id="t_nick" name="t_nick" />
<input type="hidden" id="follow" name="follow" />

    <?php 
    switch ($at_fans_mode) {
    	case 1:
    		echo '<input type="hidden" id="invite" name="invite" value="1" />';
    		break;
    	case 2:
    		echo '<input type="checkbox" id="invite" name="invite" value="1" checked /><span style="color:#cccccc;font-size:12px;">邀请好友试试</span>';
    		break;
    	case 3:
    		echo '<input type="checkbox" id="invite" name="invite" value="1"  /><span style="color:#cccccc;font-size:12px;">邀请好友试试</span>';
    		break;
    	case 4:
    		
    		break;
    
    	default:
    		echo '<input type="checkbox" id="invite" name="invite" value="1" checked /><span style="color:#cccccc;font-size:12px;">邀请好友试试</span>';
    		break;
    }
    ?>
</form>
<br />

  <div class="friends">
    <div class="t">查看好友们的：<a title="点此换一批好友" id="next_friends" href="javascript:void(0);" onclick="next_friends();" style="margin-left:360px">>>换一批</a></div>
    <ul class="clearfix" id="friends_conts">
    <p>正在加载好友列表...</p>
    </ul>
  </div><!--/friends--> 
<?php if ($is_control_multi_click == 1) {?>
<script src="<?=$static_file_path?>/js/info_post2.js"></script>
	<?php } else {?>
<script src="<?=$static_file_path?>/js/info_post.js"></script>
	<?php }?>
<?
}
?>
<p class="main_l_b"></p>
</div><!--/main_l-->
