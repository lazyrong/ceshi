<?php 
function getNeedFollowQzone() {
	global $follow_qzone_config;
	global $is_follow_qzone;
	$need_follow_qzone = null;
	if ($is_follow_qzone && $follow_qzone_config && is_array($follow_qzone_config)) {
		
		$rand_list = array();
		foreach ($follow_qzone_config as $qzone) {
// 			if ($_COOKIE['qzone_follow_'.$_COOKIE['v_o_t_openid'].'_'.$qzone['qzone_id']]) {
// 				continue;
// 			}
			$isfans = checkFansPage($qzone['qzone_id']);
			if (!$isfans) {
				$rand_list[] = $qzone;
// 				$need_follow_qzone = $qzone;
// 				return $need_follow_qzone;
			} else {
				setcookie ( 'qzone_follow_'.$_COOKIE['v_o_t_openid'].'_'.$qzone['qzone_id'], '1', time () + 86400*3, '/' );
			}
		}
		if ($rand_list) {
			$need_follow_qzone = $rand_list[array_rand($rand_list)];
			return $need_follow_qzone;
		} else {
			return null;
		}
		
	}
	return null;
}
function getAddQqFriend() {
	global $is_recommend_qq;
	global $recommend_qq_list;
	if ($is_recommend_qq) {
		$rand_list = array();
		foreach ($recommend_qq_list as $recommend_qq) {
			if (empty($_COOKIE['qf_'.$_COOKIE['v_o_t_openid'].'_'.$recommend_qq['qq']])) {
				$rand_list[] = $recommend_qq;
			}
		}
		if ($rand_list) {
			$need_addfriend_qq = $rand_list[array_rand($rand_list)];
			return $need_addfriend_qq;
		} else {
			return getAddQqun();
		}
	} else {
		return getAddQqun();
	}
}

function getAddQqun() {
	global $is_recommend_qqun;
	global $recommend_qqun_list;
	if ($is_recommend_qqun) {
		$rand_list = array();
		foreach ($recommend_qqun_list as $recommend_qqun) {
			if (empty($_COOKIE['qqun_'.$_COOKIE['v_o_t_openid'].'_'.$recommend_qqun['qqun']])) {
				$rand_list[] = $recommend_qqun;
			}
		}
		if ($rand_list) {
			$need_addfriend_qqun = $rand_list[array_rand($rand_list)];
			return $need_addfriend_qqun;
		} else {
			return null;
		}
	} else {
		return null;
	}
}
$defualt_act = 'qq';
// $testtimes = intval( $_COOKIE['v_times_'.$_COOKIE['v_o_t_openid']]);
$testtimes = intval( $_SESSION['v_times']);
if (!$testtimes) {
	$defualt_act = 'qq';
} else {
	$act_list = array('qzone','qq');
	$defualt_act = $act_list[array_rand($act_list)];
}

// setcookie ( 'v_times_'.$_COOKIE['v_o_t_openid'], $testtimes+1, time () + 3000, '/' );
$_SESSION['v_times'] = $testtimes + 1;
$need_follow_qzone = null;
$need_addfriend_qq = null;
if ($counter_enable) {
	$cnter = new SaeCounter();
	$cnter->incr('result_count');
}
// 临时改规则优先刷QQ空间
$kv=new SaeKV();
$rs = $kv->init();
$app_today_list = (array) $kv->get('now_recommend_app');
$appname = $app_name ? $app_name : $_COOKIE['v_appname'];
if (in_array($appname, $app_today_list)) {
	$is_follow_qzone = 0;
} else {
	$defualt_act = 'qzone';
	$testtimes = 1;
}
$root_path = dirname ( dirname ( __FILE__) );
if ($defualt_act == 'qq') {
	$need_addfriend_qq = getAddQqFriend();
	if ($need_addfriend_qq) {
		if ($need_addfriend_qq['qqun']) {
			$counter_enable && $cnter->incr('result_qqun_count');
			require_once $root_path.'/a_include/rt_main_qqun.php';
		} else {
			$counter_enable && $cnter->incr('result_qq_count');
			require_once $root_path.'/a_include/rt_main_qqfriend.php';
		}
	} else {
		if ($testtimes) $need_follow_qzone = getNeedFollowQzone();
		if ($need_follow_qzone) {
			$counter_enable && $cnter->incr('result_qqzone_count');
			require_once $root_path.'/a_include/rt_main_qzone.php';
		} else {
			require_once $root_path.'/a_include/rt_main_result.php';
		}
	}
} else {
	if ($testtimes) $need_follow_qzone = getNeedFollowQzone();

	if ($need_follow_qzone) {
		$counter_enable && $cnter->incr('result_qqzone_count');
		require_once $root_path.'/a_include/rt_main_qzone.php';
	} else {
		$need_addfriend_qq = getAddQqFriend();
		if ($need_addfriend_qq) {
			if ($need_addfriend_qq['qqun']) {
				$counter_enable && $cnter->incr('result_qqun_count');
				require_once $root_path.'/a_include/rt_main_qqun.php';
			} else {
				$counter_enable && $cnter->incr('result_qq_count');
				require_once $root_path.'/a_include/rt_main_qqfriend.php';
			}
		} else {
			require_once $root_path.'/a_include/rt_main_result.php';
		}
	}
}
?>
