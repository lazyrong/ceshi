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

$app_name='nsns';

$app_intro= '面对这套残酷的、调皮的、有节操的测试题。骚年们，你敢接受拷问吗？';

$question_num = 8;
setcookie('v_appname',$app_name, time()+3000, '/');
setcookie ( 'app_'.$app_name.'_sex', NULL, - 3000, '/' );
reset_appstatus ( $app_name );
if (is_mobile()) {
	require_once './question_index_mobile.php';
} else {
	require_once './question_index.php';
}
?>