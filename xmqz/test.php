<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='xmqz';
reset_appstatus ( $app_name );
if (is_mobile()) {
	require_once './test_mobile.php';
} else {
	require_once './index_web.php';
}
?>