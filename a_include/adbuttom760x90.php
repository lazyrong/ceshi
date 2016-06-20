<?
$appname = $app_name ? $app_name : $_COOKIE['v_appname'];
if (in_array($appname, $app_showad_withoutlogin)) {
	$allow_ad_without_login = 1;
}
if($allow_ad_without_login || islogined()) {
?>
<div class="ad c_box">
<script type="text/javascript">
    /*760*90 创建于 2014-08-29*/
    var cpro_id = "u1686723";
</script>
<script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
</div>
<?
} else  if (0) {
?>
<div class="ad c_box">
<iframe src="http://www.37cs.com/html/click/14341_2506.html" width="960" height="90" marginheight="0" marginwidth="0" scrolling="no" frameborder="0"></iframe>
</div>
<?php 
}
?>