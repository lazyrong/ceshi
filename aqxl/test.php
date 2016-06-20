<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='aqxl';
reset_appstatus ( $app_name );

$questionAnswerList = array(
		array('question'=>'如果朋友临时取消约会，你会怎么安排自己的时间',
				'answers'=>array(
						array('option'=>'去逛逛早就想逛的地方', 'value'=>'5' ),
						array('option'=>'赶快打电话找别的朋友出来', 'value'=>'3' ),
						array('option'=>'无所事事，心情很闷地到处乱晃', 'value'=>'1' ),
				)),
		array('question'=>'在网路上的聊天室遇到陌生人跟你搭讪，你会作何处理',
				'answers'=>array(
						array('option'=>'先试著聊天看看，如果还不错就留下E-mail', 'value'=>'3' ),
						array('option'=>'保持暧昧空间地跟对方谈话', 'value'=>'5' ),
						array('option'=>'立刻跑掉或是完全不回应他', 'value'=>'1' ),
				)),
		array('question'=>'如果你收到情人送你的戒指，你会戴在哪只手指上呢',
				'answers'=>array(
						array('option'=>'中指', 'value'=>'1' ),
						array('option'=>'无名指', 'value'=>'5' ),
						array('option'=>'小指', 'value'=>'3' ),
				)),
		array('question'=>'若是情人讨厌你的某位朋友，你会…',
				'answers'=>array(
						array('option'=>'从此跟那位朋友断绝关系', 'value'=>'1' ),
						array('option'=>'瞒著情人跟那位朋友联络', 'value'=>'3' ),
						array('option'=>'完全不理情人的抱怨', 'value'=>'5' ),
				)),
		array('question'=>'当情人要求你当街亲吻他，你会…',
				'answers'=>array(
						array('option'=>'拥吻有何不可？立刻热烈地回应', 'value'=>'1' ),
						array('option'=>'表示自己会害羞，亲吻对方的脸颊或手作为让步', 'value'=>'5' ),
						array('option'=>'断然拒绝', 'value'=>'3' ),
				)),
		array('question'=>'白雪公主的故事中，你最喜欢哪一幕',
				'answers'=>array(
						array('option'=>'白雪公主在小矮人家睡著', 'value'=>'3' ),
						array('option'=>'小矮人们为公主制作玻璃棺', 'value'=>'5' ),
						array('option'=>'王子扶起公主使毒苹果掉出，而公主醒来', 'value'=>'1' ),
				)),
		array('question'=>'一出演出夫妻外遇的连续剧，你最容易认同那个角色',
				'answers'=>array(
						array('option'=>'外遇的一方', 'value'=>'5' ),
						array('option'=>'苦情守候的一方', 'value'=>'1' ),
						array('option'=>'第三者', 'value'=>'3' ),
				)),
		array('question'=>'你看到路边有个人一边等候一边不停的看表，你认为他是',
				'answers'=>array(
						array('option'=>'跟情人约会，但对方迟到了', 'value'=>'1' ),
						array('option'=>'等公车，车再不来他就会迟到', 'value'=>'3' ),
						array('option'=>'朋友或情人进银行去办事，他在等对方何时才把事情忙完', 'value'=>'5' ),
				)),
		array('question'=>'你和情人约在一家新餐厅共进晚餐，你会挑选哪个座位',
				'answers'=>array(
						array('option'=>'窗边的座位', 'value'=>'1' ),
						array('option'=>'最能欣赏到钢琴演奏的位置', 'value'=>'5' ),
						array('option'=>'最角落的位置', 'value'=>'3' ),
				)),
		array('question'=>'你走过一家店，传来一阵香味，你觉得那是',
				'answers'=>array(
						array('option'=>'刚烤好的面包香', 'value'=>'3' ),
						array('option'=>'带有果香味的香水', 'value'=>'5' ),
						array('option'=>'咖啡香', 'value'=>'1' ),
				)),
		array('question'=>'你看到两个人正在说悄悄话，你觉得听的那个人会有何反应',
				'answers'=>array(
						array('option'=>'皱著眉头不说话', 'value'=>'5' ),
						array('option'=>'强力忍著笑意', 'value'=>'3' ),
						array('option'=>'到处东张西望', 'value'=>'1' ),
				)),
		array('question'=>'如果你可以选择一个梦境，你会选择什么样的梦',
				'answers'=>array(
						array('option'=>'梦到自己是个万人迷，每个认识的人都想向自己表示爱意', 'value'=>'3' ),
						array('option'=>'梦中自己是个亿万富翁，能够呼风唤雨', 'value'=>'5' ),
						array('option'=>'梦见自己是个平凡的人，有平凡的家庭，一家人和乐融融', 'value'=>'1' ),
				)),
		array('question'=>'你将在三个你喜欢的对象中挑选一位交往，但她（他）们各有缺点，你会选择谁',
				'answers'=>array(
						array('option'=>'样样都好，就是非常穷', 'value'=>'1' ),
						array('option'=>'有钱、体贴、风趣、年轻，但是很花心', 'value'=>'3' ),
						array('option'=>'平凡却老实，有点年纪', 'value'=>'5' ),
				)),
		array('question'=>'你打翻了一个杯子，你觉得里面装的是',
				'answers'=>array(
						array('option'=>'葡萄酒', 'value'=>'1' ),
						array('option'=>'满满的白开水', 'value'=>'5' ),
						array('option'=>'空的', 'value'=>'3' ),
				)),
		array('question'=>'你睡得正熟时，突然地震了，你的第一个反应是',
				'answers'=>array(
						array('option'=>'赶快找个地方躲', 'value'=>'3' ),
						array('option'=>'赶快逃出去', 'value'=>'1' ),
						array('option'=>'先继续睡，如果摇得厉害再作反应', 'value'=>'5' ),
				)),
);

if (is_mobile()) {
	require_once './../a_include/question_test_mobile.php';
} else {
	require_once './../a_include/question_test.php';
}
?>