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

$app_name='hfrg';
$app_intro= '来自哈佛的测试题，通过生活习惯可以测出你的人格，快来测测吧！';
$question_num = 15;
setcookie('v_appname',$app_name, time()+3000, '/');
setcookie ( 'app_'.$app_name.'_score', NULL, - 3000, '/' );
reset_appstatus ( $app_name );
if (is_mobile()) {
	require_once './../a_include/question_index_mobile.php';
} else {
	require_once './../a_include/question_index.php';
}
?>