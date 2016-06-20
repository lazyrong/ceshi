<?
$appname = $app_name ? $app_name : $_COOKIE['v_appname'];
if (in_array($appname, $app_showad_withoutlogin)) {
	$allow_ad_without_login = 1;
}
if($allow_ad_without_login || islogined()) {
?>
<script type="text/javascript">
    /*120*270 创建于 2014-08-29*/
var cpro_id = "u1686793";
</script>
<script src="http://cpro.baidustatic.com/cpro/ui/f.js" type="text/javascript"></script>
<?
} else  if (0) {
	?>
	<script language="javascript" src="http://rrr.youle55.com/rich/fl.php?uid=14341&pid=5527"></script>
	<?php 
}
?>