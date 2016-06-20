<?
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name = 'ajg';

$app_intro = '
每个人的一生都有属于自己的几段感情~
<br />
你的一生会爱上几个人？快来测测吧~不准不要钱哦，亲~
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