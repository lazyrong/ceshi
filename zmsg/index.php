<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

if (islogined () && ($_REQUEST['act'] == 'view')) {
	header('Location:./view.php');
	exit;
}
$app_name='zmsg';
$t_nick=$_COOKIE['v_nick'];
$t_sex=$_COOKIE ['v_sex'];
setcookie('v_appname',$app_name, time()+3000, '/');
reset_appstatus ( $app_name );
if (is_mobile()) {
	require_once './index_mobile.php';
} else {
	require_once './index_web.php';
}

?>
