<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='alxz';

$app_intro= '
哪个星座在暗恋你？
<br />
通过对你的星座性格进行分析，找出那个暗恋你的星座有缘人~
';
setcookie('v_appname',$app_name, time()+3000, '/');
if (is_mobile()) {
	if($_POST['i1']!='' && islogined ())
	{
		check_appstatus ( $app_name );
		require_once '../a_include/func/Funcs.inc.php';
		require_once './send_post.php';
		require_once './../a_include/rt_mobile.php';
	}
	else
	{
		reset_appstatus ( $app_name );
		if(islogined ())
		{
			// 获取粉丝列表
			require_once './../a_include/func/Funcs.inc.php';
			getFansList();
			require_once './../a_include/app_mobile_xingzuo.php';
		} else {
			require_once './../a_include/app_mobile.inc.php';
		}
	}
} else {
if($_POST['i1']!='' && islogined ())
{
	check_appstatus ( $app_name );
	require_once '../a_include/func/Funcs.inc.php';
	require_once './send_post.php';
	require_once './../a_include/header.php';
	require_once './../a_include/rt_main.php';
}
else
{
	reset_appstatus ( $app_name );
	if(islogined ())
	{
		// 获取粉丝列表
		require_once './../a_include/func/Funcs.inc.php';
		getFansList();
	}
	require_once './../a_include/header.php';
	require_once './../a_include/app_main2.inc.php';
	require_once './../a_include/main_r.php';
}
require_once './../a_include/footer.php';
}