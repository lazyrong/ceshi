<?
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name = 'lyb2';

$app_intro = '
想不想知道你未来的另一半长什么样子？
<br />
赶快预测一下~马上知晓啦！（最新版）
';
setcookie ( 'v_appname', $app_name, time () + 3000, '/' );
if (is_mobile ()) {
	if (! empty ( $_POST ['t_name'] ) && islogined ()) {
		check_appstatus ( $app_name );
		require_once '../a_include/func/Funcs.inc.php';
		require_once './send_post.php';
		require_once './../a_include/rt_mobile.php';
	} else {
		reset_appstatus ( $app_name );
		if (islogined ()) {
			require_once '../a_include/func/Funcs.inc.php';
			// 获取粉丝列表
			$fl = getFansList ();
		
		}
		require_once './../a_include/app_mobile.inc.php';
	}
} else {
	if (! empty ( $_POST ['t_name'] ) && islogined ()) {
		check_appstatus ( $app_name );
		require_once '../a_include/func/Funcs.inc.php';
		require_once './send_post.php';
		require_once './../a_include/header.php';
		require_once './../a_include/rt_main.php';
	} else {
		reset_appstatus ( $app_name );
		if (islogined ()) {
			// 获取粉丝列表
			require_once './../a_include/func/Funcs.inc.php';
			getFansList ();
		}
		require_once './../a_include/header.php';
		require_once './../a_include/app_main.inc.php';
		require_once './../a_include/main_r.php';
	}
	require_once './../a_include/footer.php';
}