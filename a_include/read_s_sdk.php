<?
$root_path = dirname ( dirname ( __FILE__ ) );
require_once $root_path.'/a_include/s_appkey.php';
require_once $root_path.'/a_SDK/OpenSDK/Sina/Weibo2.php';
OpenSDK_Sina_Weibo2::init($appkey, $appsecret);
OpenSDK_Sina_Weibo2::setOauth($_COOKIE['v_o_t_'],$_COOKIE['v_o_t_s_']);
?>