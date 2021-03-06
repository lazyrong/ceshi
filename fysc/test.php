<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='fysc';
setcookie('v_appname',$app_name, time()+3000, '/');
reset_appstatus ( $app_name );
$questionAnswerList = array(
		array('question'=>'女：啥子事？男：关你求事！问：男的意思是什么？',
				'answers'=>array(
						array('option'=>'求我我才告诉你', 'value'=>'0' ),
						array('option'=>'不关你的事', 'value'=>'6' ),
						array('option'=>'和你的球有关', 'value'=>'0' ),
						array('option'=>'以上答案均不对', 'value'=>'0' ),
				)),
		array('question'=>'张三：哈哈,这道题张三我做出来了！李四,你做出来没有？李四：早十八年就做出来了。由此我们可以推断？',
				'answers'=>array(
						array('option'=>'李四今年18岁', 'value'=>'0' ),
						array('option'=>'李四比张三大18岁', 'value'=>'0' ),
						array('option'=>'李四在18年前做过此题', 'value'=>'0' ),
						array('option'=>'李四已经做出来了', 'value'=>'6' ),
				)),
		array('question'=>'女：快点！你在干啥子？男：马上,我在穿HAI子！问：男的现在可能在做什么？',
				'answers'=>array(
						array('option'=>'照镜子', 'value'=>'0' ),
						array('option'=>'系鞋带', 'value'=>'6' ),
						array('option'=>'穿衣服', 'value'=>'0' ),
						array('option'=>'给孩子穿衣服', 'value'=>'0' ),
				)),
		array('question'=>'甲：你爪子？乙：肚子忽然痛了！问：爪子是什么意思？',
				'answers'=>array(
						array('option'=>'乙有爪子', 'value'=>'0' ),
						array('option'=>'做什么的意思', 'value'=>'6' ),
						array('option'=>'甲询问乙的爪子在哪里', 'value'=>'0' ),
						array('option'=>'说不清楚', 'value'=>'0' ),
				)),
		array('question'=>'男：给你讲件事,龅牙叔下台了女：鬼扯。男：鬼扯我才不扯。问：从这段话我们可以知道什么？',
				'answers'=>array(
						array('option'=>'有个鬼叫龅牙叔', 'value'=>'0' ),
						array('option'=>'女的不相信有鬼', 'value'=>'0' ),
						array('option'=>'男的说他说的是实话', 'value'=>'6' ),
						array('option'=>'男的在和女的扯皮', 'value'=>'0' ),
				)),
		array('question'=>'班上共有N个渣渣.一天大扫除,先扫出10堆渣渣,再派10个渣渣去渣渣场丢渣渣,教室头还剩下几个渣渣在扫渣渣？问：上面这段话中,与人渣相同的词共有几个？',
				'answers'=>array(
						array('option'=>'2个', 'value'=>'0' ),
						array('option'=>'3个', 'value'=>'7' ),
						array('option'=>'N个', 'value'=>'0' ),
						array('option'=>'N-10个', 'value'=>'0' ),
				)),
		array('question'=>'四川人普通话说的不好,就说他说的是（　）普通话？',
				'answers'=>array(
						array('option'=>'红烧', 'value'=>'0' ),
						array('option'=>'椒盐', 'value'=>'7' ),
						array('option'=>'麻辣', 'value'=>'0' ),
						array('option'=>'糖醋', 'value'=>'0' ),
				)),
		array('question'=>'（　）得烤蛇吃,此处应该填什么？',
				'answers'=>array(
						array('option'=>'饿', 'value'=>'0' ),
						array('option'=>'穷', 'value'=>'0' ),
						array('option'=>'疯', 'value'=>'0' ),
						array('option'=>'懒', 'value'=>'7' ),
				)),
		array('question'=>'烤（KAO一声）沙罐,指的是？',
				'answers'=>array(
						array('option'=>'一道菜', 'value'=>'0' ),
						array('option'=>'一道工艺品', 'value'=>'0' ),
						array('option'=>'被枪毙', 'value'=>'7' ),
						array('option'=>'迷信说法,用沙罐来占卜', 'value'=>'0' ),
				)),
		array('question'=>'这件衣服很相因,指的是（　）？',
				'answers'=>array(
						array('option'=>'这件衣服很便宜', 'value'=>'7' ),
						array('option'=>'这件衣服质量很好', 'value'=>'0' ),
						array('option'=>'这件衣服很适合你', 'value'=>'0' ),
						array('option'=>'这件衣服我们可以换着穿', 'value'=>'0' ),
				)),
		array('question'=>'甲：告诉你一件事情……乙：是不是真的哦？甲：真的哦！ 这时候乙最有可能说的是：',
				'answers'=>array(
						array('option'=>'你少骗我！', 'value'=>'0' ),
						array('option'=>'真的还煮的呢！', 'value'=>'7' ),
						array('option'=>'少来哄我！', 'value'=>'0' ),
						array('option'=>'我不信', 'value'=>'0' ),
				)),
		array('question'=>'下面与[你又吃胡了！]意思相近的是？',
				'answers'=>array(
						array('option'=>'你又赢了！', 'value'=>'7' ),
						array('option'=>'你吃了这么多了,还吃？！', 'value'=>'0' ),
						array('option'=>'你怎么又偷吃东西了？', 'value'=>'0' ),
						array('option'=>'你又输了？', 'value'=>'0' ),
				)),
		array('question'=>'[污猫皂狗]形容的是什么？',
				'answers'=>array(
						array('option'=>'一个人养了很多动物', 'value'=>'0' ),
						array('option'=>'天色阴沉,快下雨了', 'value'=>'0' ),
						array('option'=>'一个人很邋遢', 'value'=>'7' ),
						array('option'=>'一个人思想不健康', 'value'=>'0' ),
				)),
		array('question'=>'甲：（　）乙：锤子！甲最有可能说的是什么？',
				'answers'=>array(
						array('option'=>'你要买什么？', 'value'=>'0' ),
						array('option'=>'你吃了吗？', 'value'=>'0' ),
						array('option'=>'现在网上流行什么？', 'value'=>'0' ),
						array('option'=>'听说你泡了个MM', 'value'=>'7' ),
				)),
		array('question'=>'下列词中不表示颜色的是',
				'answers'=>array(
						array('option'=>'迅白', 'value'=>'0' ),
						array('option'=>'黢黑', 'value'=>'0' ),
						array('option'=>'缺青', 'value'=>'0' ),
						array('option'=>'日白', 'value'=>'7' ),
				)),
);


if (is_mobile()) {
	require_once './../a_include/question_test_mobile.php';
} else {
	require_once './../a_include/question_test.php';
}
?>