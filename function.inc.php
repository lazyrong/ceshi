<?php 
function _request($name) {
	if('' === $name) {
		return $_REQUEST;
	}
	return isset($_REQUEST[$name])?$_REQUEST[$name]:false;
}
function _get($name) {
	if('' === $name) {
		return $_GET;
	}
	return isset($_GET[$name])?$_GET[$name]:false;
}
function _post($name) {
	if('' === $name) {
		return $_POST;
	}
	return isset($_POST[$name])?$_POST[$name]:false;
}
function _cookie($name) {
	if('' === $name) {
		return $_COOKIE;
	}
	return isset($_COOKIE[$name])?$_COOKIE[$name]:false;
}
function getUserInfo() {
	if ($_SESSION['userinfo']) {
		return $_SESSION['userinfo'];
	}
}
function islogined() {
// 	if (empty($_COOKIE['v_o_t_']) || empty($_COOKIE['v_o_t_s_']) ) {
// 		return true;
// 	} else {
// 		return true;
// 	}
    return true;
}
function reset_appstatus($app_name) {
	$_SESSION['app_'.$app_name.'_reseted'] = 1;
}
function check_appstatus($app_name) {
	if (empty($_SESSION['app_'.$app_name.'_reseted'])) {
		return_app_index($app_name);
	}
	unset($_SESSION['app_'.$app_name.'_reseted']);
}
function return_app_index($app_name) {
	header('Location:./');
	exit;
}

/**
 * Cookie 设置、获取、删除
 * @param string $name cookie名称
 * @param mixed $value cookie值
 * @param mixed $options cookie参数
 * @return mixed
 */
function cookie($name, $value='', $option=null) {
	// 默认设置
	$config = array(
			'prefix'    =>  '', // cookie 名称前缀
			'expire'    =>  '3600', // cookie 保存时间
			'path'      =>  '/', // cookie 保存路径
			'domain'    =>  $_SERVER["HTTP_HOST"], // cookie 有效域名
	);
	// 参数设置(会覆盖黙认设置)
	if (!is_null($option)) {
		if (is_numeric($option))
			$option = array('expire' => $option);
		elseif (is_string($option))
		parse_str($option, $option);
		$config     = array_merge($config, array_change_key_case($option));
	}
	// 清除指定前缀的所有cookie
	if (is_null($name)) {
		if (empty($_COOKIE))
			return;
		// 要删除的cookie前缀，不指定则删除config设置的指定前缀
		$prefix = empty($value) ? $config['prefix'] : $value;
		if (!empty($prefix)) {// 如果前缀为空字符串将不作处理直接返回
			foreach ($_COOKIE as $key => $val) {
				if (0 === stripos($key, $prefix)) {
					setcookie($key, '', time() - 3600, $config['path'], $config['domain']);
					unset($_COOKIE[$key]);
				}
			}
		}
		return;
	}
	$name = $config['prefix'] . $name;
	if ('' === $value) {
		if(isset($_COOKIE[$name])){
			$value =    $_COOKIE[$name];
			if(0===strpos($value,'vceshi:')){
				$value  =   substr($value,7);
				return array_map('urldecode',json_decode(MAGIC_QUOTES_GPC?stripslashes($value):$value,true));
			}else{
				return $value;
			}
		}else{
			return null;
		}
	} else {
		if (is_null($value)) {
			setcookie($name, '', time() - 3600, $config['path'], $config['domain']);
			unset($_COOKIE[$name]); // 删除指定cookie
		} else {
			// 设置cookie
			if(is_array($value)){
				$value  = 'vceshi:'.json_encode(array_map('urlencode',$value));
			}
			$expire = !empty($config['expire']) ? time() + intval($config['expire']) : 0;
			setcookie($name, $value, $expire, $config['path'], $config['domain']);
			$_COOKIE[$name] = $value;
		}
	}
}
function is_mobile(){
	$regex_match="/(nokia|iphone|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|";
	$regex_match.="htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|";
	$regex_match.="blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|";
	$regex_match.="symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|";
	$regex_match.="jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220";
	$regex_match.=")/i";
	return isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE']) or preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT']));
	// 	return false;
}

function is_apple() {
	$userAgent = $_SERVER['HTTP_USER_AGENT'];
	if(strpos($userAgent,"iPhone") || strpos($userAgent,"iPad") || strpos($userAgent,"iPod")){
		return true;
	} else {
		return false;
	}
}
?>