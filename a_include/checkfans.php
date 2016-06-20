<?php 
if ($_REQUEST[qzoneID]) {
// 	if ($counter_enable) {
		$cnter = new SaeCounter();
		$cnter->incr('check_qqzone_count');
// 	}
	$flwkey = 'qzone_follow_'.$_COOKIE['v_o_t_openid'].'_'.$_REQUEST[qzoneID];
	if (0 && $_COOKIE[$flwkey]) {
		$isfans = intval($_COOKIE[$flwkey]) == 1?1:0;
		echo $isfans;
	} else {
		$root_path = dirname ( dirname ( __FILE__) );
		require_once $root_path.'/a_include/read_q_sdk.php';
		$rt_info2=OpenSDK_Tencent_SNS2::call(
				'user/check_page_fans',
				array(
						// feeds的标题，最长36个中文字，超出部分会被截断。
						'page_id'=>$_REQUEST[qzoneID],
				),
				'GET'
		);
		$isfans = $rt_info2[isfans]?1:0;
		if ($isfans) {
			setcookie ( $flwkey, 1, time () + 86400*3, '/' );
			$cnter->incr('check_qqzone_yes_count');
		} else {
			$cnter->incr('check_qqzone_no_count');
		}
		echo $isfans;
	}
} else {
	echo 0;
}
?>