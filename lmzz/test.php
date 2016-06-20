<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='lmzz';
reset_appstatus($app_name);
$t_nick=$_COOKIE['v_nick'];
$t_sex=$_COOKIE ['v_sex'];
if (is_mobile()) {
	require_once './test_mobile.php';
} else {
	require_once './index_web.php';
}
?>