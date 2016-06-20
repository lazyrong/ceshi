<?
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name = 'gkcj';

$app_intro = '
大多数人一生中将面临一次高考。
<br />
其实你的成绩上帝已经决定了，想知道自己能考几分吗？来测一下吧！
';

$questionAnswerList = array (
		array (
				'question' => '你喜爱哪门学科？',
				'answers' => array (
						array (
								'option' => 'A、语文',
								'value' => '0' 
						),
						array (
								'option' => 'B、数学',
								'value' => '2' 
						),
						array (
								'option' => 'C、英语',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '你每天运动多少时间？',
				'answers' => array (
						array (
								'option' => 'A、一小时以内',
								'value' => '2' 
						),
						array (
								'option' => 'B、一小时以上',
								'value' => '0' 
						),
						array (
								'option' => 'C、从不运动',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '你喜爱哪种几何图形？',
				'answers' => array (
						array (
								'option' => 'A、矩形',
								'value' => '0' 
						),
						array (
								'option' => 'B、三角形',
								'value' => '1' 
						),
						array (
								'option' => 'C、圆形',
								'value' => '2' 
						) 
				) 
		),
		array (
				'question' => '你喜爱哪个作家？',
				'answers' => array (
						array (
								'option' => 'A、鲁迅',
								'value' => '1' 
						),
						array (
								'option' => 'B、韩寒',
								'value' => '0' 
						),
						array (
								'option' => 'C、巴金',
								'value' => '2' 
						) 
				) 
		),
		array (
				'question' => '你喜爱哪个科学家？',
				'answers' => array (
						array (
								'option' => 'A、爱因斯坦',
								'value' => '1' 
						),
						array (
								'option' => 'B、牛顿',
								'value' => '0' 
						),
						array (
								'option' => 'C、霍金',
								'value' => '2' 
						) 
				) 
		),
		array (
				'question' => '你的近视眼度数是？',
				'answers' => array (
						array (
								'option' => 'A、小于100',
								'value' => '1' 
						),
						array (
								'option' => 'B、100—500',
								'value' => '0' 
						),
						array (
								'option' => 'C、500以上',
								'value' => '2' 
						) 
				) 
		),
		array (
				'question' => '你喜爱哪个诗人？',
				'answers' => array (
						array (
								'option' => 'A、杜甫',
								'value' => '2' 
						),
						array (
								'option' => 'B、李白',
								'value' => '0' 
						),
						array (
								'option' => 'C、白居易',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '高考后你想做的事是？',
				'answers' => array (
						array (
								'option' => 'A、旅行',
								'value' => '0' 
						),
						array (
								'option' => 'B、烧书',
								'value' => '2' 
						),
						array (
								'option' => 'C、睡觉',
								'value' => '1' 
						) 
				) 
		),
		
);
setcookie ( 'v_appname', $app_name, time () + 3000, '/' );
if (is_mobile ()) {
	if ($_POST ['i1'] != '' && $_POST ['i8'] != '' && islogined ()) {
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
	if ($_POST ['i1'] != '' && $_POST ['i8'] != '' && islogined ()) {
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