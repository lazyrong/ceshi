<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='hafoxx';
setcookie('v_appname',$app_name, time()+3000, '/');
reset_appstatus ( $app_name );
$questionAnswerList = array(
		array('question'=>'你擅长分辨动物的声音，并模仿动物的声音吗？',
				'answers'=>array(
						array('option'=>'A、不太擅长', 'value'=>'15' ),
						array('option'=>'B、还可以', 'value'=>'5' ),
						array('option'=>'C、很棒', 'value'=>'-5' ),
				)),
		array('question'=>'你在看地图,或街上指示时,你会:',
				'answers'=>array(
						array('option'=>'A、会有困难,而找人协助', 'value'=>'15' ),
						array('option'=>'B、把地图转过来,面对你要走的方向', 'value'=>'5' ),
						array('option'=>'C、没有任何困难', 'value'=>'-5' ),
				)),
		array('question'=>'你在准备一道做法复杂的菜时,一边正在播放收音机, 还有朋友的来电.你会:',
				'answers'=>array(
						array('option'=>'A、三件事同时进行', 'value'=>'15' ),
						array('option'=>'B、关掉收音机,但嘴巴和手都没有停', 'value'=>'5' ),
						array('option'=>'C、告诉朋友,你做好菜后马上回电话给他', 'value'=>'-5' ),
				)),
		array('question'=>'朋友要来参观你的新家,问你该怎么走,你会:',
				'answers'=>array(
						array('option'=>'A、画一张标示清楚的地图寄给他们,或是请别人替你说明该如何走', 'value'=>'15' ),
						array('option'=>'B、问她们有没有熟悉的地标,然后告诉他们该怎么走', 'value'=>'5' ),
						array('option'=>'C、口头上告诉他们该怎么走', 'value'=>'-5' ),
				)),
		array('question'=>'解释一个想法或概念时,你很可能会怎么做:',
				'answers'=>array(
						array('option'=>'A、会利用铅笔、纸和肢体语言', 'value'=>'15' ),
						array('option'=>'B、口头解释加上肢体语言', 'value'=>'5' ),
						array('option'=>'C、口头上清楚简单的解释', 'value'=>'-5' ),
				)),
		array('question'=>'看完一场很棒的电影回家后,你喜欢:',
				'answers'=>array(
						array('option'=>'A、在脑海里回想电影的画面', 'value'=>'15' ),
						array('option'=>'B、把画面及角色的台词说出来', 'value'=>'5' ),
						array('option'=>'C、主要引述电影里的对话', 'value'=>'-5' ),
				)),
		array('question'=>'在电影院里你最喜欢坐在:',
				'answers'=>array(
						array('option'=>'A、电影院的右边', 'value'=>'15' ),
						array('option'=>'B、不在意坐在哪里', 'value'=>'5' ),
						array('option'=>'C、电影院的左边', 'value'=>'-5' ),
				)),
		array('question'=>'一个朋友的机器出了问题,你会:',
				'answers'=>array(
						array('option'=>'A、深表同情,并和他们讨论他们的感觉', 'value'=>'15' ),
						array('option'=>'B、介绍一个值得信任的人去修理', 'value'=>'5' ),
						array('option'=>'C、弄清楚它的构造,想帮他们修理好', 'value'=>'-5' ),
				)),
		array('question'=>'在不熟悉的地方,有人问你北方是哪个方向,你会:',
				'answers'=>array(
						array('option'=>'A、坦白说你不知道', 'value'=>'15' ),
						array('option'=>'B、思考一会儿后,推测大约的方向', 'value'=>'5' ),
						array('option'=>'C、毫无困难的指出北方方向', 'value'=>'-5' ),
				)),
		array('question'=>'你找到一个停车位,可是空间很小,必须用倒车才能停进去,你会: ',
				'answers'=>array(
						array('option'=>'A、宁愿找另一个车位', 'value'=>'15' ),
						array('option'=>'B、试图小心的停进去', 'value'=>'5' ),
						array('option'=>'C、很顺利的倒出车停进去', 'value'=>'-5' ),
				)),
		array('question'=>'你在看电视时,这时电话响了,你会: ',
				'answers'=>array(
						array('option'=>'A、接电话,电视开着', 'value'=>'15' ),
						array('option'=>'B、把音量转小后才接电话', 'value'=>'5' ),
						array('option'=>'C、关掉电视,叫其他人安静后才接电话', 'value'=>'-5' ),
				)),
		array('question'=>'你听到一首新歌,是你喜欢的歌手唱的,通常你会:',
				'answers'=>array(
						array('option'=>'A、听完后,你可以毫无困难的跟着唱', 'value'=>'15' ),
						array('option'=>'B、如果是首很简单的歌,听过后你可以跟着哼唱一小段', 'value'=>'5' ),
						array('option'=>'C、很难记得歌曲的旋律,但是你可以回想起部分歌词', 'value'=>'-5' ),
				)),
		array('question'=>'你对事情的结局如何会有强烈的预感,是借着: ',
				'answers'=>array(
						array('option'=>'A、直觉', 'value'=>'15' ),
						array('option'=>'B、可靠的资讯和大胆的假设,才做出判断', 'value'=>'5' ),
						array('option'=>'C、事实统计数字和资料', 'value'=>'-5' ),
				)),
		array('question'=>'你忘了把钥匙时放在哪里,你会:',
				'answers'=>array(
						array('option'=>'A、先做别的事,等到自然想起为止', 'value'=>'15' ),
						array('option'=>'B、做别的事,但同时试着回想你把钥匙放在哪里', 'value'=>'5' ),
						array('option'=>'C、在心理回想刚刚做了哪些事,藉此想起放在何处', 'value'=>'-5' ),
				)),
		array('question'=>'你在饭店里,听到远处传来警报,你会:',
				'answers'=>array(
						array('option'=>'A、指出声音来源', 'value'=>'15' ),
						array('option'=>'B、如果你够专心,可以指出声音来源', 'value'=>'5' ),
						array('option'=>'C、没办法知道声音来源', 'value'=>'-5' ),
				)),
		array('question'=>'你参加一个社交宴会时,有人向你介绍七八位新朋友,隔天你会:',
				'answers'=>array(
						array('option'=>'A、可以轻易想起他们的长相', 'value'=>'15' ),
						array('option'=>'B、只能记得其中几个的长相 ', 'value'=>'5' ),
						array('option'=>'C、比较可能记住他们的名字', 'value'=>'-5' ),
				)),
		array('question'=>'你想去乡间度假时,但是你的伴侣想去海边的渡假胜地.你要怎么说服他呢?',
				'answers'=>array(
						array('option'=>'A、和颜悦色的说你的感觉:你喜欢乡间的悠闲,小孩和家人在乡间过得很快乐。', 'value'=>'15' ),
						array('option'=>'B、告诉他如果能去乡间渡假,你会感到很愉快,下次你会很乐意去海边', 'value'=>'5' ),
						array('option'=>'C、说出事实:乡间渡假区比较近,比较便宜,有规划适当的休闲设施', 'value'=>'-5' ),
				)),
		array('question'=>'规划日常生活时,通常你会:',
				'answers'=>array(
						array('option'=>'A、列张清单,这样一来该做什么事一目了然', 'value'=>'15' ),
						array('option'=>'B、考虑你该做哪些事', 'value'=>'5' ),
						array('option'=>'C、在心里想你会见到哪些人,会到哪些地方,以及你得处理哪些事', 'value'=>'-5' ),
				)),
		array('question'=>'一个朋友有了困难,他来找你商量,你会: ',
				'answers'=>array(
						array('option'=>'A、表示同情,还有你能理解他的困难', 'value'=>'15' ),
						array('option'=>'B、说事情并不如他想的严重,并加以解', 'value'=>'5' ),
						array('option'=>'C、给他建议,或是合理的忠告,告诉他该如何解决', 'value'=>'-5' ),
				)),
		array('question'=>'两个已婚的朋友有了外遇,你会如何发现:',
				'answers'=>array(
						array('option'=>'A、你会很早就察觉', 'value'=>'15' ),
						array('option'=>'B、经过一段时间后才察觉', 'value'=>'5' ),
						array('option'=>'C、根本不会察觉', 'value'=>'-5' ),
				)),
		array('question'=>'你的生活态度为何?',
				'answers'=>array(
						array('option'=>'A、交很多朋友,和周围的人和谐相处', 'value'=>'15' ),
						array('option'=>'B、友善的对待他人,但保持个人隐私', 'value'=>'5' ),
						array('option'=>'C、完成某个伟大目标,赢得别人的尊敬,名望及获得晋升', 'value'=>'-5' ),
				)),
		array('question'=>'如果有选择,你会喜欢什么样的工作:',
				'answers'=>array(
						array('option'=>'A、和可以相处的人一起工作', 'value'=>'15' ),
						array('option'=>'B、有其他同事,但也保有自己的空间 ', 'value'=>'5' ),
						array('option'=>'C、独自工作', 'value'=>'-5' ),
				)),
		array('question'=>'你喜欢读的书是: ',
				'answers'=>array(
						array('option'=>'A、小说,其他文学作品', 'value'=>'15' ),
						array('option'=>'B、报章杂志', 'value'=>'5' ),
						array('option'=>'C、非文学类,传记', 'value'=>'-5' ),
				)),
		array('question'=>'购物时你倾向:',
				'answers'=>array(
						array('option'=>'A、常常是一时冲动,尤其是特殊物品', 'value'=>'15' ),
						array('option'=>'B、有个粗略的计画,可是心血来潮时也会买', 'value'=>'5' ),
						array('option'=>'C、读标签,比较价钱', 'value'=>'-5' ),
				)),
		array('question'=>'睡觉起床吃饭,你比较喜欢怎么做: ',
				'answers'=>array(
						array('option'=>'A、随心所欲', 'value'=>'15' ),
						array('option'=>'B、依据一定的计画,但弹性很大', 'value'=>'5' ),
						array('option'=>'C、每天几乎有固定的时间', 'value'=>'-5' ),
				)),
		array('question'=>'你开始一个新的工作,认识许多新同事.其中一个打电话到家里找你, 你会 :',
				'answers'=>array(
						array('option'=>'A、轻易的认出他的声音', 'value'=>'15' ),
						array('option'=>'B、谈了一会儿话后,才知道他是谁', 'value'=>'5' ),
						array('option'=>'C、无法从声音辨认他到底是谁', 'value'=>'-5' ),
				)),
		array('question'=>'和别人有争论时,什么事会令你很生气:',
				'answers'=>array(
						array('option'=>'A、沉默或是没有反应', 'value'=>'15' ),
						array('option'=>'B、他们不了解你的观点', 'value'=>'5' ),
						array('option'=>'C、追根究底的问问题,或是提出质疑,或是评论', 'value'=>'-5' ),
				)),
		array('question'=>'你对学校的拼字测验以及作文课有何感觉?',
				'answers'=>array(
						array('option'=>'A、觉得两项都很简单', 'value'=>'15' ),
						array('option'=>'B、其中一项还可以,另一项就不是很好', 'value'=>'5' ),
						array('option'=>'C、两项都不好', 'value'=>'-5' ),
				)),
		array('question'=>'碰到固定的舞步或是爵士舞时,你会:',
				'answers'=>array(
						array('option'=>'A、听到音乐就会想起学过的舞步', 'value'=>'15' ),
						array('option'=>'B、只能跳一点点,大多想不起来', 'value'=>'5' ),
						array('option'=>'C、抓不准时间和旋律', 'value'=>'-5' ),
				)),
		array('question'=>'一天结束后,你喜欢:',
				'answers'=>array(
						array('option'=>'A、和朋友或家人谈谈你这一天过得如何', 'value'=>'15' ),
						array('option'=>'B、听别人谈他这一天过得如何', 'value'=>'5' ),
						array('option'=>'C、看报纸电视,不会聊天', 'value'=>'-5' ),
				)),
);
if (is_mobile()) {
	require_once './../a_include/question_test_mobile.php';
} else {
	require_once './../a_include/question_test.php';
}
?>