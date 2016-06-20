<?
function jssj($start, $end = '', $dec = 4) {
	static $_info = array ();
	static $_mem = array ();
	if (is_float ( $end )) { // 记录时间
		$_info [$start] = $end;
	} elseif (! empty ( $end )) { // 统计时间和内存使用
		if (! isset ( $_info [$end] ))
			$_info [$end] = microtime ( TRUE );
		if (MEMORY_LIMIT_ON && $dec == 'm') {
			if (! isset ( $_mem [$end] ))
				$_mem [$end] = memory_get_usage ();
			return number_format ( ($_mem [$end] - $_mem [$start]) / 1024 );
		} else {
			return number_format ( ($_info [$end] - $_info [$start]), $dec );
		}
	
	} else { // 记录时间和内存使用
		$_info [$start] = microtime ( TRUE );
		if (MEMORY_LIMIT_ON)
			$_mem [$start] = memory_get_usage ();
	}
}
// 添加文字到图片
function createImg($img, $str, $x, $y, $length = 20, $angle = 0, $size = 12, $color = '39f', $font = 'kanghua') {
	switch ($color) {
		case '19f' :
			$color = imagecolorallocate ( $img, 22, 157, 252 );
			break; // 淡蓝色
		case 'f37' :
			$color = imagecolorallocate ( $img, 255, 51, 119 );
			break; // 淡粉色
		case '63a' :
			$color = imagecolorallocate ( $img, 68, 172, 106 );
			break; // 淡紫色
		case 'f90' :
			$color = imagecolorallocate ( $img, 255, 158, 3 );
			break; // 淡黄色
		case 'a60' :
			$color = imagecolorallocate ( $img, 172, 106, 0 );
			break; // 淡褐色
		case '790' :
			$color = imagecolorallocate ( $img, 113, 149, 13 );
			break; // 淡绿色
		case 'fff' :
			$color = imagecolorallocate ( $img, 255, 255, 255 );
			break; // 白色
		case 'f00' :
			$color = imagecolorallocate ( $img, 255, 0, 0 );
			break; // 红色
		case '000' :
			$color = imagecolorallocate ( $img, 0, 0, 0 );
			break; // 黑色
		case 'A7253D' :
			$color = imagecolorallocate ( $img, 167, 37, 62 );
			break; // 橘红色
		default :
			$color = imagecolorallocate ( $img, 67, 157, 252 ); // 淡蓝色
	}
	$root_path = dirname ( dirname ( dirname ( __FILE__ ) ) );
	switch ($font) {
		case 'kanghua' :
			$font = $root_path.'/a_include/font/kanghua.ttf';
			break; // 华康少女体
		case 'shishang' :
			$font = $root_path.'/a_include/font/shishang.ttf';
			break; // 时尚中黑简体
		case 'yahei' :
			$font = $root_path.'/a_include/font/yahei.ttf';
			break; // 微软雅黑
		case 'katong' :
			$font = $root_path.'/a_include/font/katong.ttf';
			break; // 方正卡通简体
		case 'zhiyi' :
			$font = $root_path.'/a_include/font/zhiyi.ttf';
			break; // 方正稚艺简体
		case 'yegenyou1' :
			$font = $root_path.'/a_include/font/yegenyou1.ttf';
			break; // 方正卡通简体
		case 'yegenyou2' :
			$font = $root_path.'/a_include/font/yegenyou2.ttf';
			break; // 方正稚艺简体
		case 'yinbi' :
			$font = $root_path.'/a_include/font/yinbi.ttf';
			break; // 硬笔书法
		case 'boyang7000' :
			$font = $root_path.'/a_include/font/boyang7000.TTF';
			break; // 博扬7000草书
		case '2001' :
			$font = $root_path.'/a_include/font/2001.ttf';
			break; // 一笔签起始姓氏
		case '2002' :
			$font = $root_path.'/a_include/font/2002.ttf';
			break; // 一笔签中间字体
		case '2003' :
			$font = $root_path.'/a_include/font/2003.ttf';
			break; // 一笔签结尾字体
		case '1001' :
			$font = $root_path.'/a_include/font/1001.ttf';
			break; // 一笔签结尾字体
		case '1002' :
			$font = $root_path.'/a_include/font/1002.ttf';
			break; // 一笔签结尾字体
		case '1003' :
			$font = $root_path.'/a_include/font/1003.ttf';
			break; // 一笔签结尾字体
		default :
			$font = $root_path.'/a_include/font/kanghua.ttf'; // 华康少女体;
	}
	$str = wordwrap_utf8 ( $str, $length );
	imagettftext ( $img, $size, $angle, $x, $y, $color, $font, $str );
	return $img;

} // 获取图片类型
function getImgType($img_path) {
	$img = getimagesize ( $img_path );
	if (!$img) {
		sae_debug('iamge_notfound : app:'.$_COOKIE ['v_appname'].' picpath:'.$img_path);
	}
	switch ($img [2]) {
		case 1 :
			$img = @imagecreatefromgif ( $img_path );
			break;
		case 2 :
			$img = @imagecreatefromjpeg ( $img_path );
			break;
		case 3 :
			$img = @imagecreatefrompng ( $img_path );
			break;
		default :
			$img = @imagecreatefrompng ( $img_path );
	}
	return $img;
}
function wordwrap_utf8($string, $length = 20, $break = "\n", $cut = false) {
	if ($length == 0) {
		return $string;
	}
	preg_match_all ( "/./u", $string, $matches );
	$s = $matches [0];
	$ct = count ( $s );
	for($i = 0; $i < ceil ( $ct / $length ); $i ++) {
		$ns .= implode ( "", array_slice ( $s, $i * $length, $length ) ) . $break;
	}
	return $ns;
}

// 获取昵称的数值
function str_to_num($str, $app_name, $count = -2) {
	$str = $str . $app_name;
	$m = md5 ( $str );
	$chars = str_split ( $m );
	foreach ( $chars as $char ) {
		$num = $num + ord ( $char );
	}
	$num = substr ( $num, $count );
	if ($count == - 3) {
		if (substr ( $num, 0, 1 ) == '0') {
			$num = substr ( $num, - 2 );
		}
	}
	if (substr ( $num, 0, 1 ) == '0') {
		$num = substr ( $num, - 1 );
	}
	return $num;
}

// 判断查看的是否是自己
function get_user_info() {
	if ($_POST ['t_name'] == $_COOKIE ['v_name']) {
		$name = '我';
	} else {
		//$name = '@' . $_POST ['t_name'] . ' ';
		$name = $_POST ['t_nick']?$_POST ['t_nick'].' ':'@' . $_POST ['t_name'] . ' ';
	}
	
	$nick = mb_substr ( $_POST ['t_nick'], 0, 6, 'utf-8' );
	
	$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
	$url = str_replace ( 'index.php', '', $url );
	// $url = $url.'?'.time();
	//$url = $url . '?' . uniqid ();
	//$url = getShortUrl ( $url );
	$infos ['name'] = $name;
	$infos ['nick'] = $nick;
	$infos ['url'] = $url;
	
	return $infos;
}
// 腾讯api错误返回
function rt_error_t($rt_info) {
	// var_dump( $rt_info);
	$icon_class = 'error';
	switch ($rt_info ['ret']) {
		case '0' :
			
			if ($_COOKIE ['v_type'] == 'q') {
				// $msg='恭喜！已成功将结果分享到空间~';
				$msg = '恭喜！请查看结果~';
			} else {
				// $msg='恭喜！已成功将结果发送到微博~';
				$msg = '恭喜！请查看结果~';
			}
			$icon_class = 'ok';
			break;
		
		case '1' :
			$msg = '发送失败！参数错误啦，请联系微测试官方微博~';
			break;
		case '2' :
			$msg = '发送失败！频率受限啦，你玩的次数太多了，稍后在玩吧~';
			break;
		case '3' :
			$msg = '发送失败！鉴权失败啦，请退出后重新登陆授权~';
			break;
		case '4' :
			$msg = '发送失败！腾讯内部服务器抽风啦~稍后再试吧~';
			break;
		case '5' :
			$msg = '发送失败！不能连续发布同样的微博，测测好友们的吧！';
			break;
		default :
			$msg = '未返回信息，无法确认是否发送成功，请自行查看~';
			;
	}
	switch ($rt_info ['errcode']) {
		case '4' :
			$msg = '发送失败啦，原因：微博内容有过多脏话。';
			break;
		case '5' :
			$msg = '发送失败啦，原因：你所在地禁止访问。';
			break;
		case '6' :
			$msg = '发送失败啦，原因：该记录不存在。';
			break;
		case '8' :
			$msg = '发送失败啦，原因：微博内容超过420字节。 ';
			break;
		case '9' :
			$msg = '发送失败啦，原因：服务器正忙，请稍后再试。';
			break; // 内容包含垃圾或广告信息
		case '10' :
			$msg = '发送失败啦，原因：发表太快，被频率限制。';
			break;
		case '11' :
			$msg = '发送失败啦，原因：源消息已删除。';
			break;
		case '12' :
			$msg = '发送失败啦，原因：源消息审核中。';
			break;
		case '13' :
			$msg = '发送失败！不能连续发布同样的微博，测测好友们的吧！';
			break;
	}
	$result ['icon'] = $icon_class;
	$result ['msg'] = $msg;
	return $result;
}

// 新浪返回错误信息
function rt_error_s($rt_info) {
	$icon_class = 'ok';
	if ($_COOKIE ['v_type'] == 'q') {
		// $msg='恭喜！已成功将结果分享到空间~';
		$msg = '恭喜！请查看结果~';
	} else {
		// $msg='恭喜！已成功将结果发送到微博~';
		$msg = '恭喜！请查看结果~';
	}
	if ($rt_info ['error_code']) {
		$icon_class = 'error';
		switch ($rt_info ['error_code']) {
			case 20019 :
				$msg = '发送失败！不能连续发布同样的微博，测测好友们的吧！';
				break;
			case 21332 :
				$msg = '发送失败！授权失效，请点击右上角安全退出后重新登录~';
				break;
			default :
				$msg = '发送失败！未知错误，请稍后返回重试或私信官方微博';
		}
	}
	$result ['icon'] = $icon_class;
	$result ['msg'] = $msg;
	return $result;
}

// 获取新应用图片中昵称左距离
function get_left_px($nick) {
	$nick_len = mb_strlen ( $nick, 'UTF8' );
	switch ($nick_len) {
		case 1 :
			$left_px = 130;
			break;
		case 2 :
			$left_px = 120;
			break;
		case 3 :
			$left_px = 110;
			break;
		case 4 :
			$left_px = 100;
			break;
		case 5 :
			$left_px = 90;
			break;
		case 6 :
			$left_px = 80;
			break;
		case 7 :
			$left_px = 70;
			break;
		case 8 :
			$left_px = 60;
			break;
		case 9 :
			$left_px = 50;
			break;
		case 10 :
			$left_px = 40;
			break;
		case 11 :
			$left_px = 30;
			break;
		default :
			$left_px = 20;
	}
	return $left_px;
}

// 判断性别
function get_sex() {
	if ($_POST ['t_name'] == $_COOKIE ['v_name']) {
		$sex = substr ( $_COOKIE ['v_sex'], 0, 1 );
	} else {
		$root_path = dirname ( dirname ( dirname ( __FILE__ ) ) );
		if ($_COOKIE ['v_type'] == 't') {
			$app_name = $_COOKIE ['v_appname'];
			require_once $root_path.'/a_include/read_t_sdk.php';
			$infos = OpenSDK_Tencent_Weibo::call ( 'user/other_info', array (
					'name' => $_POST ['t_name'],
					'flag' => '1' 
			) );
			$infos = $infos ['data'];
			$sex = $infos ['sex'];
		
		} elseif ($_COOKIE ['v_type'] == 'q') {
			$app_name = $_COOKIE ['v_appname'];
			require_once $root_path.'/a_include/read_q_sdk.php';
			$infos = OpenSDK_Tencent_SNS2::call ( 'user/get_other_info' ,array(
					'name' => $_POST ['t_name'],
					));
			$infos = $infos ['data'];
			$sex = $infos ['sex'];
		
		} elseif ($_COOKIE ['v_type'] == 's') {
			require_once $root_path.'/a_include/read_s_sdk.php';
			$infos = OpenSDK_Sina_Weibo2::call ( 'users/show', array (
					'screen_name' => $_POST ['t_name'] 
			) );
			$sex = $infos ['gender'];
			$sex = $sex == 'f' ? '2' : '1';
		}
	}
	return $sex;
}
// 发送到微博
function post_send($content, $img, $type = 'png', $title) {
	if ($type == 'jpg') {
		$img_filename = SAE_TMP_PATH . '/' . $_COOKIE ['v_o_t_'] . '.jpg';
		imagejpeg ( $img, $img_filename );
	} else {
		$img_filename = SAE_TMP_PATH . '/' . $_COOKIE ['v_o_t_'] . '.png';
		imagepng ( $img, $img_filename );
	}
	imagedestroy ( $img );
	$root_path = dirname ( dirname ( dirname ( __FILE__ ) ) );
	if ($_COOKIE ['v_type'] == 't') {
		$app_name = $_COOKIE ['v_appname'];
		require_once $root_path.'/a_include/read_t_sdk.php';
		$rt_info = OpenSDK_Tencent_Weibo::call ( 't/add_pic', array (
				'content' => $content,
				'clientip' => $_SERVER ['REMOTE_ADDR'] 
		), 'POST', array (
				'pic' => $img_filename 
		) );
		// var_dump($rt_info);
		$rt_info = rt_error_t ( $rt_info );
		
		// if($_POST['follow']=='1')
		// {
		// OpenSDK_Tencent_Weibo::call('friends/add',
		// array('name'=>'vqu_cc'),'POST');
		// setcookie('follow','1', time()+3000);
		// }
		$weibo_url = 'http://t.qq.com/';
		setcookie ( 'ad_tan', '1', time () + 3000, '/' );
	} elseif ($_COOKIE ['v_type'] == 'q') {
		$app_name = $_COOKIE ['v_appname'];
		require_once $root_path.'/a_include/read_q_sdk.php';
		
		$rt_info = OpenSDK_Tencent_SNS2::call ( 'share/add_share', array (
				// feeds的标题，最长36个中文字，超出部分会被截断。
				'title' => '开始测试->' . $title,
				// 分享所在网页资源的链接，点击后跳转至第三方网页，对应上文接口说明中2的超链接。请以http://开头。
				'url' => 'http://' . $_SERVER ['HTTP_HOST'] . str_replace ( "index.php", "", $_SERVER ['PHP_SELF'] ),
				// 所分享的网页资源的摘要内容，或者是网页的概要描述，最长80个中文字，
				'comment' => $content,
				'summary' => $title . ' http://' . $_SERVER ['HTTP_HOST'] . str_replace ( "index.php", "", $_SERVER ['PHP_SELF'] ),
				'images' => $img_filename,
				// 值为1时，表示分享不默认同步到微博，其他值或者不传此参数表示默认同步到微博。
				'nswb' => 1,
				// 分享的来源说明
				'site' => '微测试' 
		), 'POST' );
		
		// var_dump($rt_info);
		$rt_info = rt_error_t ( $rt_info );
		// if($_POST['follow']=='1')
		// {
		// OpenSDK_Tencent_Weibo::call('friends/add',
		// array('name'=>'vqu_cc'),'POST');
		// setcookie('follow','1', time()+3000);
		// }
		$weibo_url = 'http://t.qq.com/';
		setcookie ( 'ad_tan', '1', time () + 3000, '/' );
	} elseif ($_COOKIE ['v_type'] == 's') {
		require_once $root_path.'/a_include/read_s_sdk.php';
		$rt_info = OpenSDK_Sina_Weibo2::call ( 'statuses/upload', array (
				'status' => $content 
		), 'POST', array (
				'pic' => $img_filename 
		) );
		// var_dump($rt_info);
		$rt_info = rt_error_s ( $rt_info );
		
		// if($_POST['follow']=='1')
		// {
		// OpenSDK_Sina_Weibo2::call('friendships/create',
		// array('uid'=>'2424597930'),'POST');
		// setcookie('follow','1', time()+3000);
		// }
		$weibo_url = 'http://www.weibo.com/';
		setcookie ( 'ad_tan', '1', time () + 3000, '/' );
	}
	//unlink ( $img_filename ); // 删除临时生成图片
	$rt_info ['wb_url'] = $weibo_url;
	return $rt_info;
}

// 替换短网址
function getShortUrl($url) {
	// 使用goo.gl短网址
	$root_path = dirname ( dirname ( dirname ( __FILE__ ) ) );
	include_once $root_path.'/a_include/ShortUrl/SinaShortUrlHooks.class.php';
	$shorten = new SinaShortUrlHooks ();
	$shortenUrl = $shorten->getShortUrl ( $url, "3965451412" );
	if (! $shortenUrl) {
		$shortenUrl = $url;
	}
	return $shortenUrl;
}
// 发送到微博
function post_send3($pagram) {
	//TODO
	record_app();
	if ($pagram ['img'] && !$pagram['pic']) {
		if ($pagram ['type'] == 'jpg') {
			$img_filename = SAE_TMP_PATH . '/' . $_COOKIE ['v_o_t_'] . '.jpg';
			imagejpeg ( $pagram ['img'], $img_filename );
		} else {
			$img_filename = SAE_TMP_PATH . '/' . $_COOKIE ['v_o_t_'] . '.png';
			imagepng ( $pagram ['img'], $img_filename );
		}
		imagedestroy ( $pagram ['img'] );
	}
	$pagram ['content'] = str_replace('#', '', $pagram ['content']);
	$root_path = dirname ( dirname ( dirname ( __FILE__ ) ) );
	if ($_COOKIE ['v_type'] == 't') {
		$app_name = $_COOKIE ['v_appname'];
		require_once $root_path.'/a_include/read_t_sdk.php';
		$rt_info = OpenSDK_Tencent_Weibo::call ( 't/add_pic', array (
				'content' => $pagram [content] . $pagram [idolArr],
				'clientip' => $_SERVER ['REMOTE_ADDR'] 
		), 'POST', array (
				'pic' => $img_filename 
		) );
		$rt_info = rt_error_t ( $rt_info );
		$rt_info [result_img] = $rt_info [imgurl] . '/2000';
		
		// if($_POST['follow']=='1')
		// {
		// OpenSDK_Tencent_Weibo::call('friends/add',
		// array('name'=>'vqu_cc'),'POST');
		// setcookie('follow','1', time()+3000);
		// }
		$weibo_url = 'http://t.qq.com/';
	} elseif ($_COOKIE ['v_type'] == 'q') {
		//jssj ( 'app_send_txpic_start' );
		$app_name = $_COOKIE ['v_appname'];
		require_once $root_path.'/a_include/read_q_sdk.php';
		//$pagram [idolArr] = $_POST ['invite'] ? $pagram [idolArr] : "";
		if ($_POST ['invite']) {
			$backinfos = getFansList ();
			if ($backinfos && is_array ( $backinfos )) {
				$fansnum = count ( $backinfos );
				$num = 15;
				$start = 0;
				if ($fansnum < $num) {
					$num = $fansnum;
					$end = $fansnum - 1;
				}
				if ($num <= $fansnum && $fansnum < 30) {
					$end = $fansnum - 1;
				}
				if ($fansnum >= 30) {
					$end = 29;
				}
				$connt = 0;
				$pagram [idolArr] = '';
				
				$numbers = range ( $start, $end );
				// shuffle 将数组顺序随即打乱
				shuffle ( $numbers );
				// array_slice 取该数组中的某一段
				$ary = array_slice ( $numbers, 0, $num );
				for($i = 0; $i < $num; $i ++) {
					if ($backinfos [$ary [$i]]) {
						$pagram [idolArr] = $pagram [idolArr] . ' @' . $backinfos [$ary [$i]] . ' ';
					}
				}
			}
		}
		if (!$pagram['pic']) {
			$rt_info3 = OpenSDK_Tencent_SNS2::call ( 't/add_pic_t', array (
					'content' => $pagram [content] . $pagram [idolArr],
					'pic' => $img_filename 
			), 'POST', array (
					'pic' => $img_filename 
			) );

			$imgurl = $rt_info3 [imgurl];
			if (! $rt_info3 [ret]) {
				$nswb = 1;
			} else {
				$nswb = 0;
			}
			$rt_info3 = rt_error_t ( $rt_info3 );
		} else {
			$imgurl = $pagram['pic'];
			$nswb = 0;
		}
		//jssj ( 'app_send_txpic_end' );
		//sae_debug ( 'app_send_txpic_time:' . jssj ( 'app_send_txpic_start', 'app_send_txpic_end' ) . '  pathurl：' . $_SERVER ['PHP_SELF'] );
		
		//$pagram [title] = $pagram [title].' '.$pagram [url];
		if ($imgurl) {
			$imgurl = $imgurl . '/2000';
			//jssj ( 'app_send_add_sharewithpic_start' );
			$rt_info = OpenSDK_Tencent_SNS2::call ( 'share/add_share', array (
					// feeds的标题，最长36个中文字，超出部分会被截断。
					'title' => $pagram [title],
					// 分享所在网页资源的链接，点击后跳转至第三方网页，对应上文接口说明中2的超链接。请以http://开头。
					'url' => $pagram [url],
					// 所分享的网页资源的摘要内容，或者是网页的概要描述，最长80个中文字，
					'comment' => $pagram ['content'],
					'summary' => $pagram ['summary'],
					'images' => $imgurl,
					// 值为1时，表示分享不默认同步到微博，其他值或者不传此参数表示默认同步到微博。
					'nswb' => $nswb,
					// 分享的来源说明
					'site' => '微测试' 
			), 'POST' );

			if ($rt_info [ret]) {
				sae_set_display_errors ( false );
				sae_debug('API share/add_share 1 失败：ret:'.$rt_info [ret].'   code:'.$rt_info [errcode].'  详细:'.var_export($rt_info,true).'   用户IP：'.getClientIP());
			}
			//jssj ( 'app_send_add_sharewithpic_end' );
			//sae_debug ( 'app_send_add_share_withtxpic_time:' . jssj ( 'app_send_add_sharewithpic_start', 'app_send_add_sharewithpic_end' ) . '  pathurl：' . $_SERVER ['PHP_SELF'] );
		
		} else {
			if ($pagram [img]) {
				//jssj ( 'app_send_add_saestoragepic_start' );
				$stor = new SaeStorage ();
				$destFileName = '';
				if ($pagram [type] == 'jpg') {
					$destFileName = 'result/QZone/' . date ( 'Ymd', time () ) . '/' . $_COOKIE [v_o_t_openid] . uniqid () . '.jpg';
				} else {
					$destFileName = 'result/QZone/' . date ( 'Ymd', time () ) . '/' . $_COOKIE [v_o_t_openid] . uniqid () . '.png';
				}
				$uploadfile = $stor->upload ( 'vceshi2', $destFileName, $img_filename );
				if ($uploadfile) {
					$cdnurl = $stor->getCDNUrl ( 'vceshi2', $destFileName );
					$uploadfile = $cdnurl ? $cdnurl : $stor->getUrl ( 'vceshi2', $destFileName );
					//sae_set_display_errors ( false );
					//sae_debug ( 'storage 上传成功，文件：' . $destFileName );
				} else {
					// 记录日志不将日志打印出来
					sae_set_display_errors ( false );
					sae_debug ( 'storage 上传失败，Error No:' . $stor->errno () . 'Error message:' . $stor->errmsg () . '文件：' . $destFileName );
					// var_dump($stor->errmsg());
				}
				//jssj ( 'app_send_add_saestoragepic_end' );
				//sae_debug ( 'app_send_add_saestoragepic_time:' . jssj ( 'app_send_add_saestoragepic_start', 'app_send_add_saestoragepic_end' ) . '  pathurl：' . $_SERVER ['PHP_SELF'] );
			}
			
			//jssj ( 'app_send_add_sharewithstorage_start' );
			$imgurl = $uploadfile;
			$rt_info = OpenSDK_Tencent_SNS2::call ( 'share/add_share', array (
					// feeds的标题，最长36个中文字，超出部分会被截断。
					'title' => $pagram [title],
					// 分享所在网页资源的链接，点击后跳转至第三方网页，对应上文接口说明中2的超链接。请以http://开头。
					'url' => $pagram [url],
					// 所分享的网页资源的摘要内容，或者是网页的概要描述，最长80个中文字，
					'comment' => $pagram ['content'],
					'summary' => $pagram ['summary'],
					'images' => $imgurl,
					// 值为1时，表示分享不默认同步到微博，其他值或者不传此参数表示默认同步到微博。
					'nswb' => $nswb,
					// 分享的来源说明
					'site' => '微测试' 
			), 'POST' );

			if ($rt_info [ret]) {
				sae_set_display_errors ( false );
				sae_debug('API share/add_share 2 失败：ret:'.$rt_info [ret].'   code:'.$rt_info [errcode].'  详细:'.var_export($rt_info,true).'   用户IP：'.getClientIP());
			}
			//jssj ( 'app_send_add_sharewithstorage_end' );
			//sae_debug ( 'app_send_add_share_withstorage_time:' . jssj ( 'app_send_add_sharewithstorage_start', 'app_send_add_sharewithstorage_end' ) . '  pathurl：' . $_SERVER ['PHP_SELF'] );
		
		}
		// $rt_info_ret = $rt_info[ret];
		$rt_info = rt_error_t ( $rt_info );
		$rt_info ['result_img'] = $imgurl;
		$rt_info ['result_img1'] = $img_filename;
		// if (!$rt_info_ret) {
		//jssj ( 'app_send_checkfans_start' );
// 		global $follow_qzone_config;
// 		if ($follow_qzone_config && is_array($follow_qzone_config)) {
// 			foreach ($follow_qzone_config as $qzone) {
// 				$isfans = checkFansPage($qzone['qzone_id']);
// 				if (!$isfans) {
// 					$rt_info['need_follow'] = $qzone;
// 					break;
// 				}
// 			}
// 		}
		/*
		$rt_info2 = OpenSDK_Tencent_SNS2::call ( 'user/check_page_fans', array (
				'page_id' => '2202411066' 
		), 'GET' );
		$rt_info ['isfans'] = $rt_info2 ['isfans'] ? 1 : 0;
		
		if ($rt_info ['isfans']) {
			$rt_info2 = OpenSDK_Tencent_SNS2::call ( 'user/check_page_fans', array (
					'page_id' => '843038945' 
			), 'GET' );
			$rt_info [isfans2] = $rt_info2 [isfans] ? 1 : 0;
		}
		*/
		//jssj ( 'app_send_checkfans_end' );
		//sae_debug ( 'app_send_checkfans_time:' . jssj ( 'app_send_checkfans_start', 'app_send_checkfans_end' ) . '  pathurl：' . $_SERVER ['PHP_SELF'] );
		// } else {
		// $rt_info[isfans] = 1;
		// }
		$weibo_url = 'http://qzone.qq.com/';
	
	} elseif ($_COOKIE ['v_type'] == 's') {
		if ($img_filename) {
			$stor = new SaeStorage ();
			$destFileName = '';
			if ($pagram [type] == 'jpg') {
				$destFileName = 'result/Sina/' . date ( 'Ymd', time () ) . '/' . time () . uniqid () . '.jpg';
			} else {
				$destFileName = 'result/Sina/' . date ( 'Ymd', time () ) . '/' . time () . uniqid () . '.png';
			}
			$uploadfile = $stor->upload ( 'avatar', $destFileName, $img_filename );
			if ($uploadfile) {
				$cdnurl = $stor->getCDNUrl ( 'avatar', $destFileName );
				$uploadfile = $cdnurl ? $cdnurl : $stor->getUrl ( 'avatar', $destFileName );
			}
		}
		require_once $root_path.'/a_include/read_s_sdk.php';
		$rt_info = OpenSDK_Sina_Weibo2::call ( 'statuses/upload', array (
				'status' => $pagram ['content'] . $pagram ['idolArr'] 
		), 'POST', array (
				'pic' => $img_filename 
		) );
		$rt_info = rt_error_s ( $rt_info );
		$rt_info [result_img] = $uploadfile;
		
		// if($_POST['follow']=='1')
		// {
		// OpenSDK_Sina_Weibo2::call('friendships/create',
		// array('uid'=>'2424597930'),'POST');
		// setcookie('follow','1', time()+3000);
		// }
		$weibo_url = 'http://www.weibo.com/';
		setcookie ( 'ad_tan', '1', time () + 3000, '/' );
	}
	$rt_info['pagram'] = $pagram;
	//unlink ( $img_filename ); // 删除临时生成图片
	$rt_info ['wb_url'] = $weibo_url;
	return $rt_info;
}
function post_send2($pagram) {
//     取cookie 图片
// 	if ($pagram ['img'] ) {
// 		if ($pagram ['type'] == 'jpg') {
// 			$img_filename = SAE_TMP_PATH . '/' . $_COOKIE ['v_o_t_'] . '.jpg';
// 			imagejpeg ( $pagram ['img'], $img_filename );
// 		} else if ($pagram ['type'] == 'gif') {
// 			$img_filename = SAE_TMP_PATH . '/' . $_COOKIE ['v_o_t_'] . '.png';
// 			imagegif ( $pagram ['img'], $img_filename );
// 		} else {
// 			$img_filename = SAE_TMP_PATH . '/' . $_COOKIE ['v_o_t_'] . '.png';
// 			imagepng ( $pagram ['img'], $img_filename );
// 		}
// 		imagedestroy ( $pagram ['img'] );
// 	}
	$pagram ['content'] = str_replace('#', '', $pagram ['content']);
	$root_path = dirname ( dirname ( dirname ( __FILE__ ) ) );
	$app_name = $_COOKIE ['v_appname'];
	require_once $root_path.'/a_include/read_q_sdk.php';
	if ($_POST ['invite']) {
		$backinfos = getFansList ();
		if ($backinfos && is_array ( $backinfos )) {
			$fansnum = count ( $backinfos );
			$num = 15;
			$start = 0;
			if ($fansnum < $num) {
				$num = $fansnum;
				$end = $fansnum - 1;
			}
			if ($num <= $fansnum && $fansnum < 30) {
				$end = $fansnum - 1;
			}
			if ($fansnum >= 30) {
				$end = 29;
			}
			$connt = 0;
			$pagram ['idolArr'] = '';
			
			$numbers = range ( $start, $end );
			// shuffle 将数组顺序随即打乱
			shuffle ( $numbers );
			// array_slice 取该数组中的某一段
			$ary = array_slice ( $numbers, 0, $num );
			for($i = 0; $i < $num; $i ++) {
				if ($backinfos [$ary [$i]]) {
					$pagram ['idolArr'] = $pagram ['idolArr'] . ' @' . $backinfos [$ary [$i]] . ' ';
				}
			}
		}
	}
	if ($pagram['img']) {
		$rt_info = OpenSDK_Tencent_SNS2::call ( 't/add_pic_t', array (
				'content' => $pagram ['content'] . $pagram ['idolArr'],
				'pic' => $img_filename 
		), 'POST', array (
				'pic' => $img_filename 
		) );

		$imgurl = $rt_info [imgurl];
		$rt_info = rt_error_t ( $rt_info );
		if ($imgurl) {
			$imgurl = preg_replace('/http:\/\/(\w+).qpic.cn/','http://app.qpic.cn',$imgurl);
			$imgurl = $imgurl . '/2000';
		}
	}
	if ($pagram['pic']) {
		$rt_info['result_img'] = $pagram['pic'];
	} else {
		if ($imgurl) {
			$rt_info['result_img'] = $imgurl;
		} else {
			$stor = new SaeStorage ();
			$destFileName = '';
			if ($pagram [type] == 'jpg') {
				$destFileName = 'result/QZone/' . date ( 'Ymd', time () ) . '/' . $_COOKIE [v_o_t_openid] . uniqid () . '.jpg';
			} else {
				$destFileName = 'result/QZone/' . date ( 'Ymd', time () ) . '/' . $_COOKIE [v_o_t_openid] . uniqid () . '.png';
			}
			$uploadfile = $stor->upload ( 'vceshi2', $destFileName, $img_filename );
			if ($uploadfile) {
				$cdnurl = $stor->getCDNUrl ( 'vceshi2', $destFileName );
				$uploadfile = $cdnurl ? $cdnurl : $stor->getUrl ( 'vceshi2', $destFileName );
				$rt_info['result_img'] = $uploadfile;
			} else {
				// 记录日志不将日志打印出来
			}
		}
	}
	$rt_info2 = OpenSDK_Tencent_SNS2::call ( 'share/add_share', array (
			// feeds的标题，最长36个中文字，超出部分会被截断。
			'title' => $pagram [title],
			// 分享所在网页资源的链接，点击后跳转至第三方网页，对应上文接口说明中2的超链接。请以http://开头。
			'url' => $pagram [url],
			// 所分享的网页资源的摘要内容，或者是网页的概要描述，最长80个中文字，
			'comment' => $pagram ['content'],
			'summary' => $pagram ['summary'],
			'images' => $rt_info['result_img'],
			// 值为1时，表示分享不默认同步到微博，其他值或者不传此参数表示默认同步到微博。
			'nswb' => 1,
			// 分享的来源说明
			'site' => '微测试'
	), 'POST' );
	$rt_info['pagram'] = $pagram;
	//unlink ( $img_filename ); // 删除临时生成图片
	return $rt_info;
}

function record_app() {
	$c = new SaeCounter();
	$app_name = $_COOKIE ['v_appname'];
	$key = "app_result_count_".$app_name;
	if ($c->get($key)) {
		$c->incr($key);
	} else {
		$c->create($key,1);
	}

}
/*
 * 上传图片
 */
function upload($sUrl, $aPOSTParam, $aFileParam) {
	// 防止请求超时
	set_time_limit ( 0 );
	$oCurl = curl_init ();
	if (stripos ( $sUrl, "https://" ) !== FALSE) {
		curl_setopt ( $oCurl, CURLOPT_SSL_VERIFYPEER, FALSE );
		curl_setopt ( $oCurl, CURLOPT_SSL_VERIFYHOST, false );
	}
	$aPOSTField = array ();
	foreach ( $aPOSTParam as $key => $val ) {
		if (preg_match ( "/^@/i", $val ) > 0) {
			$aPOSTField [$key] = " " . $val;
		} else {
			$aPOSTField [$key] = $val;
		}
	}
	foreach ( $aFileParam as $key => $val ) {
		$aPOSTField [$key] = "@" . $val; // 此处对应的是文件的绝对地址
	}
	curl_setopt ( $oCurl, CURLOPT_URL, $sUrl );
	curl_setopt ( $oCurl, CURLOPT_POST, true );
	curl_setopt ( $oCurl, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt ( $oCurl, CURLOPT_POSTFIELDS, $aPOSTField );
	$sContent = curl_exec ( $oCurl );
	$aStatus = curl_getinfo ( $oCurl );
	curl_close ( $oCurl );
	
	echo "<tr><td class='narrow-label'>请求地址:</td><td><pre>" . $sUrl . "</pre></td></tr>";
	
	echo "<tr><td class='narrow-label'>POST参数:</td><td><pre>" . var_export ( $aPOSTParam, true ) . "</pre></td></tr>";
	echo "<tr><td class='narrow-label'>文件参数:</td><td><pre>" . var_export ( $aFileParam, true ) . "</pre></td></tr>";
	
	echo "<tr><td class='narrow-label'>请求信息:</td><td><pre>" . var_export ( $aStatus, true ) . "</pre></td></tr>";
	
	if (intval ( $aStatus ["http_code"] ) == 200) {
		
		echo "<tr><td class='narrow-label'>返回结果:</td><td><pre>" . $sContent . "</pre></td></tr>";
		
		if ((@$aResult = json_decode ( $sContent, true ))) {
			
			echo "<tr><td class='narrow-label'>结果集合解析:</td><td><pre>" . var_export ( $aResult, true ) . "</pre></td></tr>";
		
		}
	
	}
	
	if (intval ( $aStatus ["http_code"] ) == 200) {
		return $sContent;
	} else {
		echo "<tr><td class='narrow-label'>返回出错:</td><td><pre>" . $aStatus ["http_code"] . ",请检查参数或者确实是腾讯服务器出错咯。</pre></td></tr>";
		return FALSE;
	}
}

function get_idols($vtype = '') {
	$root_path = dirname ( dirname ( dirname ( __FILE__ ) ) );
	require_once $root_path.'/a_include/Cookie.class.php';
	$uinfo = $_COOKIE ['v_o_t_'];
	if (empty ( $uinfo )) {
		Cookie::set ( 'fanslist', null );
		return;
	}
	$fanlist = Cookie::get ( 'fanslist' );
	if (empty ( $fanlist ) || ! is_array ( $fanlist )) {
		if ($vtype == 't' || $_COOKIE ['v_type'] == 't') {
			require_once $root_path.'/a_include/read_t_sdk.php';
			// 加载粉丝列表
			$backinfos = OpenSDK_Tencent_Weibo::call ( 'friends/fanslist_s', array (
					'reqnum' => '200',
					'startindex' => 0 
			) );
			$backinfos = $backinfos ['data'] ['info'];
			foreach ( $backinfos as $value ) {
				$fanslist [] = $value ['name'];
			}
			Cookie::set ( 'fanslist', $fanslist, 1000 );
			return $fanslist;
		} elseif ($vtype == 's' || $_COOKIE ['v_type'] == 's') {
			require_once $root_path.'/a_include/read_s_sdk.php';
			// 加载粉丝列表
			$backinfos = OpenSDK_Sina_Weibo2::call ( 'friendships/followers', array (
					'screen_name' => $screen_name,
					'count' => 200,
					'cursor' => $page 
			) );
			$backinfos = $backinfos ['users'];
			$fansnum = count ( $backinfos );
			foreach ( $backinfos as $value ) {
				$fanslist [] = $value [name];
			}
			Cookie::set ( 'fanslist', $fanslist, 1000 );
			return $fanslist;
		} elseif ($vtype == 'q' || $_COOKIE ['v_type'] == 'q') {
			//jssj ( 'app_get_fanslist_start' );
			require_once $root_path.'/a_include/read_q_sdk.php';
			// 加载粉丝列表
			$backinfos = OpenSDK_Tencent_SNS2::call ( 'relation/get_fanslist', array (
					'reqnum' => '30',
					'startindex' => 0,
					'mode' => 0 
			) );
			$backinfos = $backinfos ['data'] ['info'];
			if ($backinfos && is_array($backinfos)) {
				foreach ( $backinfos as $value ) {
					$fanslist [] = $value ['name'];
				}
				if ($fanslist && is_array($fanslist)) {
					Cookie::set ( 'fanslist', $fanslist, 1000 );
				}
			}
			Cookie::set ( 'fanslist', $fanslist, 1000 );
			//jssj ( 'app_get_fanslist_end' );
			//sae_debug ( "app_get_fanslist_time:" . jssj ( 'app_get_fanslist_start', 'app_get_fanslist_end' ) );
			return $fanslist;
		}
	} else {
		return $fanlist;
	}
}

function getFansList() {
	$root_path = dirname ( dirname ( dirname ( __FILE__ ) ) );
	require_once $root_path.'/a_include/Cookie.class.php';
	$uinfo = $_COOKIE ['v_o_t_'];
	if (empty ( $uinfo )) {
		Cookie::set ( 'fanslist', null );
		return;
	}
	$fanlist = Cookie::get ( 'fanslist' );
	if (empty ( $fanlist ) || ! is_array ( $fanlist )) {
		if ($vtype == 't' || $_COOKIE ['v_type'] == 't') {
			require_once $root_path.'/a_include/read_t_sdk.php';
			// 加载粉丝列表
			$backinfos = OpenSDK_Tencent_Weibo::call ( 'friends/fanslist_s', array (
					'reqnum' => '200',
					'startindex' => 0 
			) );
			$backinfos = $backinfos ['data'] ['info'];
			foreach ( $backinfos as $value ) {
				$fanslist [] = $value ['name'];
			}
			Cookie::set ( 'fanslist', $fanslist, 1000 );
			return $fanslist;
		} elseif ($vtype == 's' || $_COOKIE ['v_type'] == 's') {
			require_once $root_path.'/a_include/read_s_sdk.php';
			// 加载粉丝列表
			$backinfos = OpenSDK_Sina_Weibo2::call ( 'friendships/followers', array (
					'screen_name' => $screen_name,
					'count' => 200,
					'cursor' => $page 
			) );
			$backinfos = $backinfos ['users'];
			$fansnum = count ( $backinfos );
			if ($backinfos) {
				foreach ( $backinfos as $value ) {
					$fanslist [] = $value [name];
				}
			}
			Cookie::set ( 'fanslist', $fanslist, 1000 );
			return $fanslist;
		} elseif ($vtype == 'q' || $_COOKIE ['v_type'] == 'q') {
			//jssj ( 'app_get_fanslist_start' );
			require_once $root_path.'/a_include/read_q_sdk.php';
			// 加载粉丝列表
			$backinfos = OpenSDK_Tencent_SNS2::call ( 'relation/get_fanslist', array (
					'reqnum' => '30',
					'startindex' => 0,
					'mode' => 0 
			) );
			$fanslist = array();
			$backinfos = $backinfos ['data'] ['info'];
			if ($backinfos && is_array($backinfos)) {
				foreach ( $backinfos as $value ) {
					$fanslist [] = $value ['name'];
				}
				if ($fanslist && is_array($fanslist)) {
					Cookie::set ( 'fanslist', $fanslist, 1000 );
				}
			}
			//jssj ( 'app_get_fanslist_end' );
			//sae_debug ( "app_get_fanslist_time:" . jssj ( 'app_get_fanslist_start', 'app_get_fanslist_end' ) );
			return $fanslist;
		}
	} else {
		return $fanlist;
	}
}
function checkFansPage($qzoneId) {
	if ($_COOKIE ['v_type'] != 'q') {
		return 0;
	}
	if ($qzoneId) {
		$flwkey = 'qzone_follow_'.$_COOKIE['v_o_t_openid'].'_'.$qzoneId;
		if (0 && $_COOKIE[$flwkey]) {
			$isfans = intval($_COOKIE[$flwkey]) == 1?1:0;
			return $isfans;
		} else {
			$root_path = dirname ( dirname ( dirname ( __FILE__ ) ) );
			require_once $root_path.'/a_include/read_q_sdk.php';
			$rt_info2=OpenSDK_Tencent_SNS2::call(
					'user/check_page_fans',
					array(
							// feeds的标题，最长36个中文字，超出部分会被截断。
							'page_id'=>$qzoneId,
					),
					'GET'
			);
			$isfans = $rt_info2[isfans]?1:0;
			if ($isfans) {
				setcookie ( $flwkey, 1, time () + 86400*3, '/' );
			}
			return $isfans;
		}
	} else {
		return 0;
	}
}


function getClientIP() {
	if (isset ( $_SERVER )) {
		if (isset ( $_SERVER ['HTTP_X_FORWARDED_FOR'] )) {
			$aIps = explode ( ',', $_SERVER ['HTTP_X_FORWARDED_FOR'] );
			foreach ( $aIps as $sIp ) {
				$sIp = trim ( $sIp );
				if ($sIp != 'unknown') {
					$sRealIp = $sIp;
					break;
				}
			}
		} elseif (isset ( $_SERVER ['HTTP_CLIENT_IP'] )) {
			$sRealIp = $_SERVER ['HTTP_CLIENT_IP'];
		} else {
			if (isset ( $_SERVER ['REMOTE_ADDR'] )) {
				$sRealIp = $_SERVER ['REMOTE_ADDR'];
			} else {
				$sRealIp = '0.0.0.0';
			}
		}
	} else {
		if (getenv ( 'HTTP_X_FORWARDED_FOR' )) {
			$sRealIp = getenv ( 'HTTP_X_FORWARDED_FOR' );
		} elseif (getenv ( 'HTTP_CLIENT_IP' )) {
			$sRealIp = getenv ( 'HTTP_CLIENT_IP' );
		} else {
			$sRealIp = getenv ( 'REMOTE_ADDR' );
		}
	}
	return $sRealIp;
}
?>