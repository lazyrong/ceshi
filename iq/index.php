<?
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name = 'iq';

$app_intro = '
想检验自己的智商是多少吗？很简单！
<br />
以下就是一份权威的IQ测试题，请在10分钟内完成~
';
$questionAnswerList = array (
		array (
				'question' => '选出不同的一项：',
				'answers' => array (
						array (
								'option' => 'A、蛇',
								'value' => '0' 
						),
						array (
								'option' => 'B、大树',
								'value' => '5' 
						),
						array (
								'option' => 'C、老虎',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '在下列分数中，选出不同类的一项：',
				'answers' => array (
						array (
								'option' => 'A、3/5',
								'value' => '0' 
						),
						array (
								'option' => 'B、3/7',
								'value' => '0' 
						),
						array (
								'option' => 'C、3/9',
								'value' => '5' 
						) 
				) 
		),
		array (
				'question' => '男孩对男子，正如女孩对：',
				'answers' => array (
						array (
								'option' => 'A、青年',
								'value' => '0' 
						),
						array (
								'option' => 'B、孩子',
								'value' => '0' 
						),
						array (
								'option' => 'C、夫人',
								'value' => '0' 
						),
						array (
								'option' => 'D、姑娘',
								'value' => '0' 
						),
						array (
								'option' => 'E、妇女',
								'value' => '5' 
						) 
				) 
		),
		array (
				'question' => '如果笔相对于写字，那么书相对于：',
				'answers' => array (
						array (
								'option' => 'A、娱乐',
								'value' => '0' 
						),
						array (
								'option' => 'B、阅读',
								'value' => '5' 
						),
						array (
								'option' => 'C、学文化',
								'value' => '0' 
						),
						array (
								'option' => 'D、解除疲劳',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '马之于马厩，正如人之于：',
				'answers' => array (
						array (
								'option' => 'A、牛棚',
								'value' => '0' 
						),
						array (
								'option' => 'B、马车',
								'value' => '0' 
						),
						array (
								'option' => 'C、房屋',
								'value' => '5' 
						),
						array (
								'option' => 'D、农场',
								'value' => '0' 
						),
						array (
								'option' => 'E、楼房',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '2、8、14、20、（）请写出" （ ） "处的数字：',
				'answers' => array (
						array (
								'option' => 'A、24',
								'value' => '0' 
						),
						array (
								'option' => 'B、25',
								'value' => '0' 
						),
						array (
								'option' => 'C、38',
								'value' => '0' 
						),
						array (
								'option' => 'D、26',
								'value' => '5' 
						) 
				) 
		),
		array (
				'question' => '下列四个词是否可以组成一个正确的句子：“生活”、“水里”、“鱼”、“在”',
				'answers' => array (
						array (
								'option' => 'A、是',
								'value' => '5' 
						),
						array (
								'option' => 'B、否',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '下列六个词是否可以组成一个正确的句子：“球棒”、“的”、“用来”、“是”、“棒球”、“打”',
				'answers' => array (
						array (
								'option' => 'A、是',
								'value' => '5' 
						),
						array (
								'option' => 'B、否',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '动物学家与社会学家相对应，正如动物与（）相对：',
				'answers' => array (
						array (
								'option' => 'A、人类',
								'value' => '5' 
						),
						array (
								'option' => 'B、问题',
								'value' => '0' 
						),
						array (
								'option' => 'C、社会',
								'value' => '0' 
						),
						array (
								'option' => 'D、社会学',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '如果所有的妇女都有大衣，那么漂亮的妇女会有：',
				'answers' => array (
						array (
								'option' => 'A、更多的大衣',
								'value' => '0' 
						),
						array (
								'option' => 'B、时髦的大衣',
								'value' => '0' 
						),
						array (
								'option' => 'C、大衣',
								'value' => '5' 
						),
						array (
								'option' => 'D、昂贵的大衣',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '1、3、2、4、6、5、7、（），请写出" （ ） "处的数字：',
				'answers' => array (
						array (
								'option' => 'A、8',
								'value' => '0' 
						),
						array (
								'option' => 'B、9',
								'value' => '0' 
						),
						array (
								'option' => 'C、10',
								'value' => '5' 
						),
						array (
								'option' => 'D、13',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '南之于西北，正如西之于：',
				'answers' => array (
						array (
								'option' => 'A、西北',
								'value' => '0' 
						),
						array (
								'option' => 'B、东北',
								'value' => '5' 
						),
						array (
								'option' => 'C、西南',
								'value' => '0' 
						),
						array (
								'option' => 'D、东南',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '找出不同类的一项：',
				'answers' => array (
						array (
								'option' => 'A、铁锅',
								'value' => '0' 
						),
						array (
								'option' => 'B、小勺',
								'value' => '0' 
						),
						array (
								'option' => 'C、米饭',
								'value' => '5' 
						),
						array (
								'option' => 'D、碟子',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '9、7、8、6、7、5、（），请写出" （ ） "处的数字：',
				'answers' => array (
						array (
								'option' => 'A、4',
								'value' => '5' 
						),
						array (
								'option' => 'B、5',
								'value' => '0' 
						),
						array (
								'option' => 'C、6',
								'value' => '0' 
						),
						array (
								'option' => 'D、7',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '找出不同类的一项：',
				'answers' => array (
						array (
								'option' => 'A、写字台',
								'value' => '0' 
						),
						array (
								'option' => 'B、沙发',
								'value' => '0' 
						),
						array (
								'option' => 'C、电视',
								'value' => '5' 
						),
						array (
								'option' => 'D、桌布',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '961、（25）、432、932、（ ）、731 ，请写出（）内的数字：',
				'answers' => array (
						array (
								'option' => 'A、38',
								'value' => '5' 
						),
						array (
								'option' => 'B、25',
								'value' => '0' 
						),
						array (
								'option' => 'C、14',
								'value' => '0' 
						),
						array (
								'option' => 'D、09',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '选项ABCD中，哪一个应该填在"XOOOOXXOOOXXX"后：',
				'answers' => array (
						array (
								'option' => 'A、XOO',
								'value' => '0' 
						),
						array (
								'option' => 'B、OO',
								'value' => '5' 
						),
						array (
								'option' => 'C、OOX',
								'value' => '0' 
						),
						array (
								'option' => 'D、OXX',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '望子成龙的家长往往（）苗助长：',
				'answers' => array (
						array (
								'option' => 'A、揠',
								'value' => '5' 
						),
						array (
								'option' => 'B、堰',
								'value' => '0' 
						),
						array (
								'option' => 'C、偃',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '填上空缺的词：金黄的头发（黄山）刀山火海，赞美人生（ ）卫国战争：',
				'answers' => array (
						array (
								'option' => 'A、人生',
								'value' => '0' 
						),
						array (
								'option' => 'B、美国',
								'value' => '5' 
						),
						array (
								'option' => 'C、赞美 ',
								'value' => '0' 
						),
						array (
								'option' => 'D、生卫',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '选出不同类的一项：',
				'answers' => array (
						array (
								'option' => 'A、地板',
								'value' => '0' 
						),
						array (
								'option' => 'B、壁橱',
								'value' => '0' 
						),
						array (
								'option' => 'C、窗户 ',
								'value' => '0' 
						),
						array (
								'option' => 'D、窗帘',
								'value' => '5' 
						) 
				) 
		),
		array (
				'question' => '1、8、27、（），请写出（）内的数字。',
				'answers' => array (
						array (
								'option' => 'A、45',
								'value' => '0' 
						),
						array (
								'option' => 'B、64',
								'value' => '5' 
						),
						array (
								'option' => 'C、81 ',
								'value' => '0' 
						),
						array (
								'option' => 'D、100',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '填上空缺的词：罄竹难书（书法）无法无天，作奸犯科（ ）教学相长',
				'answers' => array (
						array (
								'option' => 'A、教学',
								'value' => '0' 
						),
						array (
								'option' => 'B、教科',
								'value' => '0' 
						),
						array (
								'option' => 'C、科学',
								'value' => '5' 
						),
						array (
								'option' => 'D、科长',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '在括号内填上一个字，使其与括号前后的字都能组成一个词：款（ ）样',
				'answers' => array (
						array (
								'option' => 'A、子',
								'value' => '0' 
						),
						array (
								'option' => 'B、爷',
								'value' => '0' 
						),
						array (
								'option' => 'C、式',
								'value' => '5' 
						),
						array (
								'option' => 'D、美',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '填入空缺的数字16、（96）、12、10、（ ）、7.5',
				'answers' => array (
						array (
								'option' => 'A、45',
								'value' => '0' 
						),
						array (
								'option' => 'B、60',
								'value' => '5' 
						),
						array (
								'option' => 'C、36',
								'value' => '0' 
						),
						array (
								'option' => 'D、72',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '找出不同类的一项：',
				'answers' => array (
						array (
								'option' => 'A、斑马',
								'value' => '0' 
						),
						array (
								'option' => 'B、军马',
								'value' => '0' 
						),
						array (
								'option' => 'C、赛马',
								'value' => '0' 
						),
						array (
								'option' => 'D、骏马',
								'value' => '0' 
						),
						array (
								'option' => 'E、驸马',
								'value' => '5' 
						) 
				) 
		),
		array (
				'question' => '在括号上填上一个字，使其与括号前后的字都能组成一个词：祭（ ）定',
				'answers' => array (
						array (
								'option' => 'A、奠',
								'value' => '5' 
						),
						array (
								'option' => 'B、祀',
								'value' => '0' 
						),
						array (
								'option' => 'C、一',
								'value' => '0' 
						),
						array (
								'option' => 'D、确',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '在括号内填上一个字：头部（ ）震荡',
				'answers' => array (
						array (
								'option' => 'A、脑',
								'value' => '5' 
						),
						array (
								'option' => 'B、胸',
								'value' => '0' 
						),
						array (
								'option' => 'C、颈',
								'value' => '0' 
						),
						array (
								'option' => 'D、头',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '填入空缺的数字65、37、17、（ ）',
				'answers' => array (
						array (
								'option' => 'A、5',
								'value' => '5' 
						),
						array (
								'option' => 'B、6',
								'value' => '0' 
						),
						array (
								'option' => 'C、7',
								'value' => '0' 
						),
						array (
								'option' => 'D、8',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '填入空缺的数字41、（28）、27、83、（ ）、65',
				'answers' => array (
						array (
								'option' => 'A、36',
								'value' => '5' 
						),
						array (
								'option' => 'B、30',
								'value' => '0' 
						),
						array (
								'option' => 'C、45',
								'value' => '0' 
						),
						array (
								'option' => 'D、54',
								'value' => '0' 
						) 
				) 
		),
		array (
				'question' => '填上空缺的字母   CFI DHL EJ（ ）',
				'answers' => array (
						array (
								'option' => 'A、E',
								'value' => '0' 
						),
						array (
								'option' => 'B、O',
								'value' => '5' 
						),
						array (
								'option' => 'C、G',
								'value' => '0' 
						),
						array (
								'option' => 'D、H',
								'value' => '0' 
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