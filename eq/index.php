<?
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name = 'eq';

$app_intro = '
情商往往比智商更重要，这是一套欧洲非常流行的EQ测试题~
<br />
可口可乐、麦当劳、诺基亚等世界500强众多企业，<br />
曾以此作为员工EQ测试的模板！<br />
快来测测你的情商吧~要选择和自己最切合的答案哦~
';
$questionAnswerList = array (
		array (
				'question' => '面对困难的时候：',
				'answers' => array (
						array (
								'option' => 'A、我有能力克服它',
								'value' => '6' 
						),
						array (
								'option' => 'B、我不一定能克服它',
								'value' => '3' 
						),
						array (
								'option' => 'C、我不能克服它',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '如果我能到一个新的环境，我要把生活安排得：',
				'answers' => array (
						array (
								'option' => 'A、和从前相仿',
								'value' => '6' 
						),
						array (
								'option' => 'B、不一定',
								'value' => '3' 
						),
						array (
								'option' => 'C、和从前不一样',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '对于人生的目标：',
				'answers' => array (
						array (
								'option' => 'A、我觉得我有生之年一定能够实现',
								'value' => '6' 
						),
						array (
								'option' => 'B、我觉得我不一定能实现',
								'value' => '3' 
						),
						array (
								'option' => 'C、我肯定不能实现我的梦想了',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '不知为什么，有些人总是回避或冷淡我：',
				'answers' => array (
						array (
								'option' => 'A、不会',
								'value' => '6' 
						),
						array (
								'option' => 'B、有时候会出现这种情况',
								'value' => '3' 
						),
						array (
								'option' => 'C、一直是的',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '在大街上，我常常避开我不愿打招呼的人：',
				'answers' => array (
						array (
								'option' => 'A、从未如此',
								'value' => '6' 
						),
						array (
								'option' => 'B、偶尔如此',
								'value' => '3' 
						),
						array (
								'option' => 'C、总是如此',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '当我集中精力工作时，假使有人在旁边高谈阔论：',
				'answers' => array (
						array (
								'option' => 'A、我仍能专心工作',
								'value' => '6' 
						),
						array (
								'option' => 'B、会受到影响，但仍能工作',
								'value' => '3' 
						),
						array (
								'option' => 'C、我不能专心且感到愤怒',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '我的方向感：',
				'answers' => array (
						array (
								'option' => 'A、不管什么地方，我都能辨别方向',
								'value' => '6' 
						),
						array (
								'option' => 'B、有时候能够较好地辨别方向',
								'value' => '3' 
						),
						array (
								'option' => 'C、基本上是路痴',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '对于我所学的专业或者所从事的工作：',
				'answers' => array (
						array (
								'option' => 'A、我热爱它，并且能够享受在其中',
								'value' => '6' 
						),
						array (
								'option' => 'B、说不上热爱，但是也不讨厌',
								'value' => '3' 
						),
						array (
								'option' => 'C、我很讨厌它，并且会影响我的情绪',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '气候的变化不会影响我的情绪：',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '6' 
						),
						array (
								'option' => 'B、有时候会',
								'value' => '3' 
						),
						array (
								'option' => 'C、不是的',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '面对流言蜚语：',
				'answers' => array (
						array (
								'option' => 'A、我会为此而生气',
								'value' => '5' 
						),
						array (
								'option' => 'B、有时候会生气，有时觉得无所谓',
								'value' => '2' 
						),
						array (
								'option' => 'C、我不会受到影响，淡然面对',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '我善于控制自己的面部表情：',
				'answers' => array (
						array (
								'option' => 'A、是的',
								'value' => '5' 
						),
						array (
								'option' => 'B、不确定',
								'value' => '2' 
						),
						array (
								'option' => 'C、不是的',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '在就寝时，我常常：',
				'answers' => array (
						array (
								'option' => 'A、极易入睡',
								'value' => '5' 
						),
						array (
								'option' => 'B、看情况',
								'value' => '2' 
						),
						array (
								'option' => 'C、不易入睡',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '有人侵扰我时，我会：',
				'answers' => array (
						array (
								'option' => 'A、不露声色',
								'value' => '5' 
						),
						array (
								'option' => 'B、可能会很愤怒，也可能会一笑了之',
								'value' => '2' 
						),
						array (
								'option' => 'C、大声抗议，以泄己愤',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '在和人争辩或工作出现失误后：',
				'answers' => array (
						array (
								'option' => 'A、我会感到筋疲力尽，不能安心工作',
								'value' => '5' 
						),
						array (
								'option' => 'B、情绪受到影响，还是能够继续工作',
								'value' => '2' 
						),
						array (
								'option' => 'C、能够保持积极的情绪继续工作下去',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '我常常被一些无谓的小事困扰：',
				'answers' => array (
						array (
								'option' => 'A、不会的',
								'value' => '5' 
						),
						array (
								'option' => 'B、有时候会这样',
								'value' => '2' 
						),
						array (
								'option' => 'C、会',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '我喜欢的居住的地方是：',
				'answers' => array (
						array (
								'option' => 'A、僻静的郊区，远离城市的喧嚣',
								'value' => '5' 
						),
						array (
								'option' => 'B、郊区和城市都能接受',
								'value' => '2' 
						),
						array (
								'option' => 'C、热闹的市区会让我活得更加开心',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '我被朋友、同事起过绰号，挖苦过：',
				'answers' => array (
						array (
								'option' => 'A、从来没有',
								'value' => '5' 
						),
						array (
								'option' => 'B、偶尔有过',
								'value' => '2' 
						),
						array (
								'option' => 'C、这是常有的事',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '有一种食物使我吃后呕吐：',
				'answers' => array (
						array (
								'option' => 'A、没有',
								'value' => '5' 
						),
						array (
								'option' => 'B、记不清',
								'value' => '2' 
						),
						array (
								'option' => 'C、有',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '除去看见的世界外，我的心中没有另外的世界：',
				'answers' => array (
						array (
								'option' => 'A、没有',
								'value' => '5' 
						),
						array (
								'option' => 'B、记不清',
								'value' => '2' 
						),
						array (
								'option' => 'C、有',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '我会想到若干年后有什么使自己极为不安的事：',
				'answers' => array (
						array (
								'option' => 'A、从来没有想过',
								'value' => '5' 
						),
						array (
								'option' => 'B、偶尔想到过',
								'value' => '2' 
						),
						array (
								'option' => 'C、经常想到',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '我常常觉得自己的家庭对自己不好，但是我又确切地知道他们的确对我好：',
				'answers' => array (
						array (
								'option' => 'A、否',
								'value' => '5' 
						),
						array (
								'option' => 'B、说不清楚',
								'value' => '2' 
						),
						array (
								'option' => 'C、是',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '每天我一回家就立刻把门关上：',
				'answers' => array (
						array (
								'option' => 'A、否',
								'value' => '5' 
						),
						array (
								'option' => 'B、偶尔是',
								'value' => '2' 
						),
						array (
								'option' => 'C、是',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '我坐在小房间里把门关上，但我仍觉得心里不安：',
				'answers' => array (
						array (
								'option' => 'A、否',
								'value' => '5' 
						),
						array (
								'option' => 'B、偶尔是',
								'value' => '2' 
						),
						array (
								'option' => 'C、是',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '当一件事需要我作决定时，我常觉得很难：',
				'answers' => array (
						array (
								'option' => 'A、否',
								'value' => '5' 
						),
						array (
								'option' => 'B、偶尔是',
								'value' => '2' 
						),
						array (
								'option' => 'C、是',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '我常常用抛硬币、翻纸、抽签之类的游戏来预测凶吉：',
				'answers' => array (
						array (
								'option' => 'A、否',
								'value' => '5' 
						),
						array (
								'option' => 'B、偶尔是',
								'value' => '2' 
						),
						array (
								'option' => 'C、是',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '为了工作我早出晚归，早晨起床我常常感到疲惫不堪：',
				'answers' => array (
						array (
								'option' => 'A、是',
								'value' => '0' 
						),
						array (
								'option' => 'B、否',
								'value' => '5' 
						) 
				) 
		),
		array (
				'question' => '在某种心境下，我会因为困惑陷入空想，将工作搁置下来：',
				'answers' => array (
						array (
								'option' => 'A、是',
								'value' => '0' 
						),
						array (
								'option' => 'B、否',
								'value' => '5' 
						) 
				) 
		),
		array (
				'question' => '我的神经脆弱，稍有刺激就会使我战栗：',
				'answers' => array (
						array (
								'option' => 'A、是',
								'value' => '0' 
						),
						array (
								'option' => 'B、否',
								'value' => '5' 
						) 
				) 
		),
		array (
				'question' => '睡梦中，我常常被噩梦惊醒：',
				'answers' => array (
						array (
								'option' => 'A、是',
								'value' => '0' 
						),
						array (
								'option' => 'B、否',
								'value' => '5' 
						) 
				) 
		),
		array (
				'question' => '工作中我愿意挑战艰巨的任务：',
				'answers' => array (
						array (
								'option' => 'A、从不',
								'value' => '1' 
						),
						array (
								'option' => 'B、几乎不',
								'value' => '2' 
						),
						array (
								'option' => 'C、一半时间',
								'value' => '3' 
						),
						array (
								'option' => 'D、大多数时间',
								'value' => '4' 
						),
						array (
								'option' => 'E、总是',
								'value' => '5' 
						) 
				) 
		),
		array (
				'question' => '我善于发现别人好的一面：',
				'answers' => array (
						array (
								'option' => 'A、从不',
								'value' => '1' 
						),
						array (
								'option' => 'B、几乎不',
								'value' => '2' 
						),
						array (
								'option' => 'C、一半时间',
								'value' => '3' 
						),
						array (
								'option' => 'D、大多数时间',
								'value' => '4' 
						),
						array (
								'option' => 'E、总是',
								'value' => '5' 
						) 
				) 
		),
		array (
				'question' => '能听取不同的意见，包括对自己的批评：',
				'answers' => array (
						array (
								'option' => 'A、从不',
								'value' => '1' 
						),
						array (
								'option' => 'B、几乎不',
								'value' => '2' 
						),
						array (
								'option' => 'C、一半时间',
								'value' => '3' 
						),
						array (
								'option' => 'D、大多数时间',
								'value' => '4' 
						),
						array (
								'option' => 'E、总是',
								'value' => '5' 
						) 
				) 
		),
		array (
				'question' => '我时常勉励自己，对未来充满希望：',
				'answers' => array (
						array (
								'option' => 'A、从不',
								'value' => '1' 
						),
						array (
								'option' => 'B、几乎不',
								'value' => '2' 
						),
						array (
								'option' => 'C、一半时间',
								'value' => '3' 
						),
						array (
								'option' => 'D、大多数时间',
								'value' => '4' 
						),
						array (
								'option' => 'E、总是',
								'value' => '5' 
						) 
				) 
		) 
);
setcookie ( 'v_appname', $app_name, time () + 3000, '/' );
if (is_mobile ()) {
	if ($_POST ['i1'] != '' && $_POST ['i33'] != '' && islogined ()) {
		check_appstatus ( $app_name );
		require_once '../a_include/func/Funcs.inc.php';
		require_once './send_post.php';
		require_once './../a_include/rt_mobile.php';
	} else {
		reset_appstatus ( $app_name );
		if (islogined ()) {
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
	if ($_POST ['i1'] != '' && $_POST ['i33'] != '' && islogined ()) {
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