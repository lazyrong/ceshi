<?
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );
function is_mobile(){
	$regex_match="/(nokia|iphone|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|";
	$regex_match.="htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|";
	$regex_match.="blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|";
	$regex_match.="symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|";
	$regex_match.="jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220";
	$regex_match.=")/i";
	return isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE']) or preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT']));
}

if ($_GET ['id'] == 'logout') {
	setcookie ( 'v_type', NULL, - 3000, '/' );
	setcookie ( 'v_name', NULL, - 3000, '/' );
	setcookie ( 'v_nick', NULL, - 3000, '/' );
	setcookie ( 'v_avatar', NULL, - 3000, '/' );
	setcookie ( 'v_sex', NULL, - 3000, '/' );
	setcookie ( 'v_o_t_', NULL, - 3000, '/' );
	setcookie ( 'v_o_t_s_', NULL, - 3000, '/' );
	setcookie ( 'v_o_t_openid', NULL, - 3000, '/' );
	setcookie ( 'flw2202411066', NULL, - 3000, '/' );
	setcookie ( 'flw843038945', NULL, - 3000, '/' );
// 	require_once './../a_include/Cookie.class.php';
// 	Cookie::set ( 'fanslist', null );
	if ($_SERVER ['HTTP_REFERER']) {
		header ( 'Location:' . $_SERVER ['HTTP_REFERER'] );
	} else {
		header ( 'Location:./' );
	}
	exit ();
}
function qqAutoFollow() {
	$threshold = '501';
	//$ourOfficialWbOpenid = "CE0452E7CB49EE1C39098AD0784222C7";
	$ourOfficialWbName = "hightang19";

	$followers = qqGetUserFansNum();

	if ($followers[0]) {
		if ($followers[1] < $threshold) {
			//加我们的官方微博！
			$params = array();
			//$params['format'] = 'json';
			//$params['fopenids'] = $ourOfficialWbOpenid;
			$params['name'] = $ourOfficialWbName;

			$rs_t = OpenSDK_Tencent_SNS2::call('relation/add_idol', $params, 'POST');
			if ($rs_t['ret']) {
				//错误！
				return array(false, $rs_t['ret'].": ".$rs_t['msg'].": ".$rs_t['errcodes']);
			} else {
				//follow海棠成功！
				return array(true, 'success');
			}
		}
	} else {
		//读取粉丝数出错！
		return array(false, $followers[1]);
	}
}
function qqGetUserFansNum() {
	$rs_t = OpenSDK_Tencent_SNS2::call('user/get_info');

	if ($rs_t['ret']) {
		return array(false, $rs_t['ret'].": ".$rs_t['msg']);
	} else {
		if ($rs_t['data'] && array_key_exists('fansnum', $rs_t['data'])) {
			return array(true, $rs_t['data']['fansnum']);
		}
		return array(false, $rs_t['ret'].": ".$rs_t['msg']);
	}
}
// 腾讯登陆
if ($_GET ['id'] == 't' && $_GET ['app'] != '') {
	$app_name = $_GET ['app'];
	$root_path = dirname ( dirname ( __FILE__ ) );
	require_once $root_path.'/a_include/t_appkey.php';
	require_once $root_path.'/a_SDK/OpenSDK/Tencent/Weibo.php';
	OpenSDK_Tencent_Weibo::init ( $appkey, $appsecret );

	if (isset ( $_GET ['oauth_token'] ) && isset ( $_GET ['oauth_verifier'] )) {
		// 从Callback返回时
		if ($rt = OpenSDK_Tencent_Weibo::getAccessToken ( $_GET ['oauth_verifier'] )) {
			$infos = OpenSDK_Tencent_Weibo::call ( 'user/info', array (
					'names' => 'qvip8888',
					'flag' => '1'
			) );
			$infos = $infos ['data'];

			$name = $infos ['name'];
			$nick = $infos ['nick'];
			$isvip = $infos ['isvip'];
			$avatar = $infos ['head'] != '' ? $infos ['head'] . '/100' : '../file/imgs/no_avatar.jpg';
			$avatar2 = $infos ['head'];
			$sex = $infos ['sex'];
			$v_oauth_token = $rt ['oauth_token'];
			$v_oauth_token_secret = $rt ['oauth_token_secret'];

			setcookie ( 'v_type', 't', time () + 3000, '/' );
			setcookie ( 'v_name', $name, time () + 3000, '/' );
			setcookie ( 'v_nick', $nick, time () + 3000, '/' );
			setcookie ( 'v_avatar', $avatar, time () + 3000, '/' );
			setcookie ( 'v_sex', $sex, time () + 3000, '/' );
			setcookie ( 'v_appname', $app_name, time () + 3000, '/' );
			setcookie ( 'v_o_t_', $v_oauth_token, time () + 3000, '/' );
			setcookie ( 'v_o_t_s_', $v_oauth_token_secret, time () + 3000, '/' );
			// 保存粉丝列表
			if ($_REQUEST['act']) {
				header ( 'Location: /'.$app_name.'?act='.$_REQUEST['act'] );
			} else {
				header ( 'Location: /'.$app_name );
			}
		} else {
			echo '授权失败！请返回重试。 <a href="./">点此返回</a>';
		}
	} else {
		$callback = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'] . '?id=t&app=' . $_GET ['app'];
		if ($_REQUEST['act']) {
			$callback .= '&act='.$_REQUEST['act'];
		}
		$request_token = OpenSDK_Tencent_Weibo::getRequestToken ( $callback );
		$r_url = OpenSDK_Tencent_Weibo::getAuthorizeURL ( $request_token );
		if (strlen ( $r_url ) < 70) {
			echo '服务器正忙，请稍后返回重试。<a href="./">>>点此返回</a>';
		} else {
			header ( 'Location: ' . $r_url );
		}
	}
}
// 新浪登陆
if ($_GET ['id'] == 's') {
	$root_path = dirname ( dirname ( __FILE__ ) );
	require_once $root_path.'/a_include/s_appkey.php';
	require_once $root_path.'/a_SDK/OpenSDK/Sina/Weibo2.php';
	OpenSDK_Sina_Weibo2::init ( $appkey, $appsecret );

	if (isset ( $_GET ['code'] )) {
		// 从Callback返回时
		$redirect_uri = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
		if (OpenSDK_Sina_Weibo2::getAccessToken ( 'code', array (
				'code' => $_GET ['code'],
				'redirect_uri' => $redirect_uri
		) )) {

			$user_id = OpenSDK_Sina_Weibo2::getParam ( OpenSDK_Sina_Weibo2::OAUTH_USER_ID );
			$infos = OpenSDK_Sina_Weibo2::call ( 'users/show', array (
					'uid' => $user_id
			) );
			// $id=$infos['id'];
			$nick = $infos ['screen_name'];
			$avatar = $infos ['avatar_large'];
			$avatar = $avatar != '' ? $avatar : '../file/imgs/no_avatar.jpg';
			$sex = $infos ['gender'];
			$sex = $sex == 'f' ? '2' : '1';
			$v_oauth_token = OpenSDK_Sina_Weibo2::getParam ( OpenSDK_Sina_Weibo2::ACCESS_TOKEN );
			$v_oauth_token_secret = OpenSDK_Sina_Weibo2::getParam ( OpenSDK_Sina_Weibo2::REFRESH_TOKEN );
			if ($v_oauth_token_secret == '') {
				$v_oauth_token_secret = '1';
			}

			setcookie ( 'v_type', 's', time () + 3000, '/' );
			setcookie ( 'v_name', $nick, time () + 3000, '/' );
			setcookie ( 'v_nick', $nick, time () + 3000, '/' );
			setcookie ( 'v_avatar', $avatar, time () + 3000, '/' );
			setcookie ( 'v_sex', $sex, time () + 3000, '/' );
			setcookie ( 'v_o_t_', $v_oauth_token, time () + 3000, '/' );
			setcookie ( 'v_o_t_s_', $v_oauth_token_secret, time () + 3000, '/' );
			// 保存粉丝列表
			if ($_REQUEST['act']) {
				header ( 'Location: /'.$app_name.'?act='.$_REQUEST['act'] );
			} else {
				header ( 'Location: /'.$app_name );
			}
		} else {
			echo '授权失败！请返回重试。 <a href="./">点此返回</a>';
		}
	} else {
		$callback = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'] . '?id=s&app=' . $_GET ['app'];;
		if ($_REQUEST['act']) {
			$callback .= '&act='.$_REQUEST['act'];
		}
		$url = OpenSDK_Sina_Weibo2::getAuthorizeURL ( $callback, 'code', 'state' );
		header ( 'Location:' . $url );
	}
}

// QQ互联登陆
if ($_GET ['id'] == 'q' && $_GET ['app'] != '') {
	$app_name = $_GET ['app'];
	$root_path = dirname ( dirname ( __FILE__ ) );
	require_once $root_path.'/a_include/q_appkey.php';
	require_once $root_path.'/a_SDK/OpenSDK/Tencent/SNS2.php';
	OpenSDK_Tencent_SNS2::init ( $appkey, $appsecret );

	if (isset ( $_GET ['code'] )) {
		$login_start_time = microtime ( TRUE );
		// 从Callback返回时
		$redirect_uri = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'] . '?app=' . $_GET ['app'];
		$keys = array ();
		$keys [code] = $_GET ['code'];
		$keys [redirect_uri] = $redirect_uri;
		if ($_SESSION ["state"]) {
			$keys [state] = $_SESSION ["state"];
		}
		$getAccessToken_start_time = microtime ( TRUE );
		$qqtoken = OpenSDK_Tencent_SNS2::getAccessToken ( 'code', array (
				'code' => $_GET ['code'],
				'redirect_uri' => $redirect_uri
		) );
		$getAccessToken_end_time = microtime ( TRUE );

		if ($qqtoken) {
			$get_user_info_start_time = microtime ( TRUE );
			$infos = OpenSDK_Tencent_SNS2::call ( 'user/get_user_info' );

			$name = $infos ['nickname'];
			$nick = $infos ['nickname'];
			$isvip = $infos ['vip'];
			$avatar = $infos ['figureurl_2'] != '' ? $infos ['figureurl_2'] : '../file/imgs/no_avatar.jpg';
			$avatar2 = $infos ['figureurl_2'];
			$sex = $infos ['gender'] == '男' ? '1' : '2';
			$v_oauth_token = OpenSDK_Tencent_SNS2::getParam ( OpenSDK_Tencent_SNS2::ACCESS_TOKEN );
			$v_oauth_token_secret = OpenSDK_Tencent_SNS2::getParam ( OpenSDK_Tencent_SNS2::REFRESH_TOKEN );
			$v_open_id = OpenSDK_Tencent_SNS2::getParam ( OpenSDK_Tencent_SNS2::OPENID );
			if ($v_oauth_token_secret == '') {
				$v_oauth_token_secret = '1';
			}

			setcookie ( 'v_type', 'q', time () + 3000, '/' );
			setcookie ( 'v_name', $name, time () + 3000, '/' );
			setcookie ( 'v_nick', $nick, time () + 3000, '/' );
			setcookie ( 'v_avatar', $avatar, time () + 3000, '/' );
			setcookie ( 'v_sex', $sex, time () + 3000, '/' );
			setcookie ( 'v_appname', $app_name, time () + 3000, '/' );
			setcookie ( 'v_o_t_openid', $v_open_id, time () + 3000, '/' );
			setcookie ( 'v_o_t_', $v_oauth_token, time () + 3000, '/' );
			setcookie ( 'v_o_t_s_', $v_oauth_token_secret, time () + 3000, '/' );
			$login_end_time = microtime ( TRUE );
			//sae_debug ( 'login_callback_time:' . number_format ( ($login_end_time - $login_start_time), 4 ).'    '.'getAccessToken_callback_time:' . number_format ( ($getAccessToken_end_time - $getAccessToken_start_time), 4 ).'    '.'get_user_info_time:' . number_format ( ($login_end_time - $get_user_info_start_time), 4 ));
			$rs_w = qqAutoFollow();
			if ($_REQUEST['act']) {
				header ( 'Location: /'.$app_name.'?act='.$_REQUEST['act'] );
			} else {
				header ( 'Location: /'.$app_name );
			}
		} else {
			echo '授权失败！请返回重试。 <a href="./">点此返回</a>';
		}
	} else {
		$callback = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'] . '?id=q&app=' . $_GET ['app'];
		if ($_REQUEST['act']) {
			$callback .= '&act='.$_REQUEST['act'];
		}
		$state = md5 ( date ( "YmdHis", time () ) );
		$_SESSION ["state"] = $state;
		$scope = "get_user_info,get_other_info,add_share,get_idollist,get_fanslist,check_page_fans,add_pic_t,add_idol,get_info";
		// $url = OpenSDK_Tencent_SNS2::getAuthorizeURL2($callback, 'code',
		// $scope, $sState);
		$params = array ();
		$params ['client_id'] = $appkey;
		$params ['redirect_uri'] = $callback;
		$params ['response_type'] = 'code';
		$params ['scope'] = $scope;
		$params ['state'] = $state;
		$params['display'] = is_mobile()?'mobile':'default';
		$url = 'https://graph.qq.com/oauth2.0/authorize?' . http_build_query ( $params );

		header ( 'Location:' . $url );
	}
}
?>