<?
session_start();
require_once dirname(__FILE__).'/function.inc.php';
$allow_ad_without_login = 0;
//是否强制关注qzone
$is_follow_qzone = 0;
// 手机端是否强制关注qzone
$is_follow_qzone_mobile = 0;
$follow_qzone_config = array(
// 		'QQ号' => array('qzone_id'=>QQ号,'name'=>'空间名','pic'=>'图片地址'),
// 		'2736837032' => array('qzone_id'=>2736837032,'name'=>'潮流街','pic'=>'../file/imgs/chaoliujie.jpg'),
//		'2023731529' => array('qzone_id'=>2023731529,'name'=>'搞笑图网','pic'=>'http://qlogo2.store.qq.com/qzone/2023731529/2023731529/100'),
//  		'2756830039' => array('qzone_id'=>2756830039,'name'=>'阳光文学网','pic'=>'http://app.qpic.cn/mblogpic/2f904e8993e3791e31fe/80'),
		);

$is_recommend_qq = 1;
$recommend_qq_list = array(
//  		array('qq'=>QQ号,'mode'=>'client|web','pic'=>'图片地址80*80'),
//  		array('qq'=>1625569741,'pic'=>'http://app.qpic.cn/mblogpic/2ede8eec9881ecb0dcc4/80'),
//		array('qq'=>2742258686,'pic'=>'http://app.qpic.cn/mblogpic/653c5560af3f5cb8c8e4/80'),
//  		array('qq'=>2499543858,'pic'=>'http://app.qpic.cn/mblogpic/90457af753f1c2090c78/80'),
//  		array('qq'=>2740499596,'pic'=>'http://app.qpic.cn/mblogpic/32d4d7b5175e6f1928dc/80'),
 		array('qq'=>1958696430,'pic'=>'http://app.qpic.cn/mblogpic/0eaad96e50cde4174e88/80'),
);
$is_recommend_qqun = 0;
$recommend_qqun_list = array(
		array('qqun'=>152502837,'idkey'=>'a6f0d7e25f150857dac8ea87b4bd16d0cabd35b46121211a6b0a43097fd8890b','pic'=>'http://app.qpic.cn/mblogpic/b79c08172d08ad63dd4a/80'),
);
$regex_match="/(nokia|iphone|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|";
$regex_match.="htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|";
$regex_match.="blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|";
$regex_match.="symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|";
$regex_match.="jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220";
$regex_match.=")/i";
$ismobile = (isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE']) or preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT'])));
if ($ismobile) {
	$is_recommend_qq = 0;
}
// 1:强制不显示2：显示默认勾选 3：显示默认不勾选 4：不显示不强制
// 默认选项：显示默认勾选
$at_fans_mode = 4;

// 展示广告标记
$show_ad_flag = 0;
// 移动端是否显示广告
$show_ad_mobile_flag = 0;

// 开启计数器
$counter_enable = 1;

// 资源文件路径 本地 ../file/
$static_file_path = "http://funny.xiaonimei.com/file";

$mobile_redirect_url = 'http://funny.xiaonimei.com';
// 是否控制多次点击
$is_control_multi_click = 1;
if(function_exists('saeAutoLoader')){
	define('CLUSTER_NAME', 'SAE');
} else if(isset($_SERVER['HTTP_BAE_ENV_APPID'])){
	$_SERVER['PHP_SELF']=$_SERVER['SCRIPT_NAME'];
	define('CLUSTER_NAME', 'BAE');
} else {
	$counter_enable = 0;
	define('CLUSTER_NAME', 'LOCAL');
}
define('WEB_ROOT_PATH', dirname(__FILE__).'/');
//require_once './a_include/urlredirect.php';
$login_host = 'http://funny.xiaonimei.com';
// include_once dirname(__FILE__).'/appconfig.inc.php';
//优先使用结果图片设置 sina，tencent
$result_pic_pf = 'tencent';
?>