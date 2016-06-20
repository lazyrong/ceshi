<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='lglp';

if (islogined () && ($_REQUEST['act'] == 'view')) {
	header('Location:./view.php');
	exit;
}
setcookie('v_appname',$app_name, time()+3000, '/');
reset_appstatus($app_name);
setcookie('app_'.$app_name.'_who',null, -3000, '/');

if (is_mobile()) {
	require_once './index_mobile.php';
} else {
	require_once './index_web.php';
}
?>