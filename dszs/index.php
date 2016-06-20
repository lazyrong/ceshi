<?
session_start ();
header ( 'Content-Type: text/html; charset=utf-8' );
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name = 'dszs';

$app_intro = '
韩寒说，我是纯正的上海郊区“屌丝”；人气乐团“五月天”说，走下舞台我们就是“屌丝”。<br />全民皆屌丝时代，你是真屌丝还是假高富帅，屌丝指数测试拉你出来遛一遛！
';

$questionAnswerList = array (
		array (
				'question' => '身高：175，已经非常高了，可以用屌丝的极限来形容。女神眼里178以上才算个男人。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '体重：要么瘦小要么肥胖，高富帅们从小营养好且注重健身，基本上身材都很健美。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '手机：用的都是一k多不超过2K的入门智能机，以前的NOKIA5230，现在的小米等安卓机。高富帅在诺基亚时代都用N73之类，在苹果时代都用IPHONE',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '电子产品：喜欢研究各种电子产品如相机的品牌、型号、配置，聊天的时候能说的头头是到。高富帅甚至不知道自己的索尼是什么型号',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '衣着：真维斯、李宁、安踏、德尔惠、乔丹、361度、地摊货、淘宝便宜货。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '衣着：偶尔也会在打折的时候买一条里维斯，但不会顺便买一条300块钱里维斯的皮带。细节是区别的最大体现，吊丝是没有资本追求细节的。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '饮食：高富帅经常出入星巴克，而屌丝也去过星巴克和吃哈根达斯，但是次数不会超过3次。而且女屌丝会拍照片上传到网上，并附上一句：XXX是我的最爱~',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '抽烟：高帅富抽的烟两三十块的很正常，而屌丝在人前也会抽这种烟，但是只在人前抽，其实背地里都是抽的红双喜、红塔山之流',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '游戏：屌丝们喜欢在dota等竞技性游戏或者没有人民币玩家的网游里寻求优越感，因而高富帅通常喜欢的是各种日本的游戏机或者可以砸钱的快餐网游',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '旅行：屌丝们没有出过国，但是说起美利坚、大日本等国的时候都分析的头头是道，李菊福，这方面完爆高富帅。高富帅唯一的优势是，这些地方他们都去过',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '饮料：康师傅系列，脉动，鲜橙多，快活林',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '食品：沙县小吃，黑暗料理，路边摊，鸡蛋灌饼，豆浆，油条，包子，馒头，牛肉面，回锅肉炒饭',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '发型：平头，刘海很长或奇形怪状的发型，碎发',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '网络：QQ永远在线，但几乎从来不会有人主动来搭讪。终于鼓起勇气跟女神搭讪，换来的也只是一句：呵呵',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '通信：手机不离身，拉屎也要带着。每次有信息来都迫不及待地打开看，然后发现是10086发的。每个月的包月短信总是用不完。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '微信：几乎每天都要摇一摇，却总是摇到跟自己一样的屌丝。好不容易摇到个女的，各种跪拜和赞美之后换来一句：呵呵。女屌丝一直在‘附近的人’里面显示，却在资料里写着：勿勾搭',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '胆小猥琐，即使在网上各种风趣幽默，现实里看见7分女就脸红，不敢说话',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '无女友。见到美女和男的恩爱就在心里感慨好B都被XX了。谈起这个话题就说：现在的女的都太TM现实了。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '坐位置一定要选在后面，迟到了总想从后门进，害怕“高帅富”和“女神”的眼光。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '讨厌别人用照相机拍自己，因为一副搓B相。或者干脆破罐破摔，摆出一些鬼脸表情。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '不敢穿颜色鲜艳的衣服，也不敢穿戴特别潮的衣服和饰品。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '喜欢看小说，特别是YY小说、休闲小说。经常把自己幻想成小说或者电影里的英雄。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '没有特长，平平淡淡，也没有除了打游戏和女神之外的爱好。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '不爱运动，早上经常睡到10点。最近一次去操场锻炼是上体育课。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '拥有“美国梦”（留学，出国，移民），在网上常有愤青言论或者想法，哀叹自己没有生在美利坚。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '看到高富帅，白富美顿时没了自信，低头，或者掏出自己的渣手机乱按着。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '带女神出去撮一顿得吃一周馒头和稀饭。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '嘴上一直说自己是屌丝，其实心里根本不承认。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '看到比自己还搓的男的挽着还比较漂亮的女生时，各种羡慕嫉妒狠，心里却又自我安慰着——宁缺毋滥。',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
						) 
				) 
		),
		array (
				'question' => '做完了网上的屌丝指数测试之后，高富帅顺手就分享了因为有底气，不虚，屌丝要忐忐忑忑左顾右盼视结果情况而定',
				'answers' => array (
						array (
								'option' => '中枪！！',
								'value' => '1' 
						),
						array (
								'option' => '中一半',
								'value' => '0' 
						),
						array (
								'option' => '逆袭一个',
								'value' => '-1' 
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