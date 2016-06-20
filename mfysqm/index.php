<?
// header('Location: http://www.vceshi.net/ysqm');exit;
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='mfysqm';

$app_intro= '
没有好看的签名？快来免费设计一个吧！
<br />
登陆后就能马上拥有为您量身设计的绝美艺术签名了！
<br />
记得帮朋友也设计一个哦~
';
setcookie('v_appname',$app_name, time()+3000, '/');
if($_POST['t_name']&&islogined())
{
	require_once '../a_include/func/Funcs.inc.php';
	require_once './send_post.php';
	require_once './../a_include/header.php';
	require_once './../a_include/rt_main.php';
}
else
{
	if(islogined())
	{
		// 获取粉丝列表
		require_once './../a_include/func/Funcs.inc.php';
		getFansList();
	}
	require_once './../a_include/header.php';
	require_once './../a_include/app_main.inc.php';
	require_once './../a_include/main_r.php';
}
require_once './../a_include/footer.php';