<?
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name = 'yjzq';

$app_intro = '
想知道对方眼里的你，是漂亮、温柔还是固执？<br />
测试一下吧！
';

$questionAnswerList = array (
		array (
				'question' => '橘色糖果比绿色糖果吃了让你更忘记烦恼',
				'answers' => array (
						array (
								'option' => 'YES，是的',
								'value' => '1' 
						),
						array (
								'option' => 'NO，不是',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '你觉得好哦个葡萄比青葡萄贵',
				'answers' => array (
						array (
								'option' => 'YES，是的',
								'value' => '1' 
						),
						array (
								'option' => 'NO，不是',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '你觉得粉红色的花比黄色的花更适合摆在房间里',
				'answers' => array (
						array (
								'option' => 'YES，是的',
								'value' => '1' 
						),
						array (
								'option' => 'NO，不是',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '浅黄色的心形图案比浅蓝色的心形图案让你更有初恋的感觉',
				'answers' => array (
						array (
								'option' => 'YES，是的',
								'value' => '1' 
						),
						array (
								'option' => 'NO，不是',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '你觉得将分手的信装在黄色的信封里比装在蓝色的信封里更合适',
				'answers' => array (
						array (
								'option' => 'YES，是的',
								'value' => '1' 
						),
						array (
								'option' => 'NO，不是',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '你觉得天变地动前月亮为橘色的可能大于紫色',
				'answers' => array (
						array (
								'option' => 'YES，是的',
								'value' => '1' 
						),
						array (
								'option' => 'NO，不是',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '你觉得红色比黄色更能指引方向',
				'answers' => array (
						array (
								'option' => 'YES，是的',
								'value' => '1' 
						),
						array (
								'option' => 'NO，不是',
								'value' => '0' 
						) 
				) 
		) 
);
setcookie ( 'v_appname', $app_name, time () + 3000, '/' );
if (is_mobile ()) {
	if ($_POST ['i1'] != '' && $_POST ['i7'] != '' && islogined ()) {
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
	if ($_POST ['i1'] != '' && $_POST ['i7'] != '' && islogined ()) {
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