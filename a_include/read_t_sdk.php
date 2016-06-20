<?
$root_path = dirname ( dirname ( __FILE__ ) );
require_once $root_path.'/a_include/t_appkey.php';
require_once $root_path.'/a_SDK/OpenSDK/Tencent/Weibo.php';
OpenSDK_Tencent_Weibo::init($appkey, $appsecret);
OpenSDK_Tencent_Weibo::setOauth($_COOKIE['v_o_t_'],$_COOKIE['v_o_t_s_']);
?>