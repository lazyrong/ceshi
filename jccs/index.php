<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';


if (islogined () && ($_REQUEST['act'] == 'view')) {
	header('Location:./view.php');
	exit;
}
if (islogined () && ($_REQUEST['act'] == 'test')) {
	header('Location:./test.php');
	exit;
}

$app_name='jccs';

$app_intro= '回答5道题，看看你的节操还剩多少？';

$question_num = 5;
setcookie('v_appname',$app_name, time()+3000, '/');
setcookie ( 'app_'.$app_name.'_score', NULL, - 3000, '/' );
reset_appstatus ( $app_name );
if (is_mobile()) {
	require_once './../a_include/question_index_mobile.php';
} else {
	require_once './../a_include/question_index.php';
}
?>