<?
$root_path = dirname ( dirname ( __FILE__ ) );
require_once $root_path.'/a_include/q_appkey.php';
require_once $root_path.'/a_SDK/OpenSDK/Tencent/SNS2.php';
OpenSDK_Tencent_SNS2::init($appkey, $appsecret);

OpenSDK_Tencent_SNS2::setParam(OpenSDK_Tencent_SNS2::ACCESS_TOKEN, $_COOKIE['v_o_t_']);
OpenSDK_Tencent_SNS2::setParam(OpenSDK_Tencent_SNS2::REFRESH_TOKEN, $_COOKIE['v_o_t_s_']);
OpenSDK_Tencent_SNS2::setParam(OpenSDK_Tencent_SNS2::OPENID, $_COOKIE['v_o_t_openid']);
//OpenSDK_Tencent_SNS2::setOauth($_COOKIE['v_o_t_'],$_COOKIE['v_o_t_s_']);
?>