<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='jiehun';
$t_nick=$_COOKIE['v_nick'];
setcookie('v_appname',$app_name, time()+3000, '/');
setcookie ( 'app_' . $app_name . '_name', null, - 3000, '/' );
reset_appstatus ( $app_name );
if (is_mobile()) {
	require_once './test_mobile.php';
} else {
	require_once './index_web.php';
}

?>
