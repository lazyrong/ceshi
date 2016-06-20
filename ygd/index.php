<?
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name = 'ygd';

$app_intro = '
你是一个敢于追求爱情的人吗？别不好意思。追求爱是天性。<br />
今天用一个测试的小游戏来测量一下自己对爱情的胆子大不大。
';
$questionAnswerList = array (
		array (
				'question' => '朋友聚餐，最爱吃的菜离你很远，这是你会怎么办？',
				'answers' => array (
						array (
								'option' => 'A、站起来吃',
								'value' => '1' 
						),
						array (
								'option' => 'B、请接近的人帮忙夹一块',
								'value' => '2' 
						),
						array (
								'option' => 'C、请对方整盘递过来，换一下位置',
								'value' => '3' 
						),
						array (
								'option' => 'D、忍住口腹之欲，不吃了',
								'value' => '4' 
						) 
				) 
		) 
);
setcookie ( 'v_appname', $app_name, time () + 3000, '/' );
if (is_mobile ()) {
	if ($_POST ['i1'] != '' && islogined ()) {
		check_appstatus ( $app_name );
		require_once '../a_include/func/Funcs.inc.php';
		require_once './send_post.php';
		require_once './../a_include/rt_mobile.php';
	} else {
		reset_appstatus ( $app_name );
		if (islogined()) {
			// 获取粉丝列表
			require_once './../a_include/func/Funcs.inc.php';
			getFansList ();
			// require_once './app_mobile.php';
			require_once './../a_include/app_mobile_question.php';
		} else {
			require_once './../a_include/app_mobile.inc.php';
		}
	}
} else {
	if ($_POST ['i1'] != '' && islogined ()) {
		check_appstatus ( $app_name );
		require_once '../a_include/func/Funcs.inc.php';
		require_once './send_post.php';
		require_once './../a_include/header.php';
		require_once './../a_include/rt_main.php';
	} else {
		reset_appstatus ( $app_name );
		if (islogined ()) {
			// 获取粉丝列表
			require_once './../a_include/func/Funcs.inc.php';
			getFansList ();
		}
		require_once './../a_include/header.php';
		require_once './../a_include/app_main2.inc.php';
		require_once './../a_include/main_r.php';
	}
	require_once './../a_include/footer.php';
}