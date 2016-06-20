<?
require_once './../a_include/q_appkey.php';
set_include_path(dirname(dirname(__FILE__)) . '/a_SDK/');
require_once 'OpenSDK/Tencent/SNS.php';
OpenSDK_Tencent_SNS::init($appkey, $appsecret);

OpenSDK_Tencent_SNS::setParam(OpenSDK_Tencent_SNS::ACCESS_TOKEN, $_COOKIE['v_o_t_']);
OpenSDK_Tencent_SNS::setParam(OpenSDK_Tencent_SNS::OAUTH_TOKEN_SECRET, $_COOKIE['v_o_t_s_']);
OpenSDK_Tencent_SNS::setParam(OpenSDK_Tencent_SNS::OAUTH_OPENID, $_COOKIE['v_o_t_openid']);
//OpenSDK_Tencent_SNS2::setOauth($_COOKIE['v_o_t_'],$_COOKIE['v_o_t_s_']);
?>