<?
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name = 'xlnl';

$app_intro = '
想知道你的心理年龄和实际年龄的差距吗？
<br />
这是一套专业的心理年龄测试题，一定要耐心做完哦~
';

$questionAnswerList = array (
		array (
				'question' => '一旦下决心做某事后便会立刻就去做。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '0' 
						),
						array (
								'option' => 'B、不是',
								'value' => '2' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '往往喜欢凭自己经验办事。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '对任何事情都有探索精神。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '0' 
						),
						array (
								'option' => 'B、不是',
								'value' => '4' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '2' 
						) 
				) 
		),
		array (
				'question' => '说话慢而且比较爱啰嗦。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '4' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '2' 
						) 
				) 
		),
		array (
				'question' => '健忘。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '4' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '2' 
						) 
				) 
		),
		array (
				'question' => '怕烦心、怕做事、不想活动。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '4' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '2' 
						) 
				) 
		),
		array (
				'question' => '比较容易计较小事。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '喜欢参加各种活动。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '0' 
						),
						array (
								'option' => 'B、不是',
								'value' => '2' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '越来越变得固执起来。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '4' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '2' 
						) 
				) 
		),
		array (
				'question' => '对什么事情都有好奇心。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '0' 
						),
						array (
								'option' => 'B、不是',
								'value' => '2' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '有强烈的生活追求。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '0' 
						),
						array (
								'option' => 'B、不是',
								'value' => '4' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '2' 
						) 
				) 
		),
		array (
				'question' => '经常难以控制自己的感情。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '0' 
						),
						array (
								'option' => 'B、不是',
								'value' => '2' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '容易嫉妒别人，容易悲伤。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '见到不合理的事不再那么气愤了。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '不喜欢看推理小说。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '对电影和爱情小说日益失去兴趣。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '做事情往往不能坚持到底。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '4' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '2' 
						) 
				) 
		),
		array (
				'question' => '不愿意改变旧习惯。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '喜欢回忆过去。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '4' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '2' 
						) 
				) 
		),
		array (
				'question' => '学习新鲜事物感到困难。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '十分注意自己身体的变化。 ',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '生活兴趣的范围变小了。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '看书的速度变快了。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '觉得自己有时候动作不够灵活。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '容易感到疲劳。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '晚上不如早晨和上午头脑清醒。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '对生活中的挫折感到烦恼。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '比较缺乏自信心。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '很难集中精力思考。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		),
		array (
				'question' => '工作效率越来越低。',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '2' 
						),
						array (
								'option' => 'B、不是',
								'value' => '0' 
						),
						array (
								'option' => 'C、不一定',
								'value' => '1' 
						) 
				) 
		) 
);
setcookie ( 'v_appname', $app_name, time () + 3000, '/' );
if (is_mobile ()) {
	if ($_POST ['i1'] != '' && $_POST ['i30'] != '' && islogined ()) {
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
	if ($_POST ['i1'] != '' && $_POST ['i30'] != '' && islogined ()) {
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