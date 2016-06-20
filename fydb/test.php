<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='fydb';
setcookie('v_appname',$app_name, time()+3000, '/');
reset_appstatus ( $app_name );
$questionAnswerList = array(
		array('question'=>'“哎呀吗呀，他对象长的老棵碜了”一句中，“棵碜”指',
				'answers'=>array(
						array('option'=>'好看', 'value'=>'0' ),
						array('option'=>'丑', 'value'=>'5' ),
						array('option'=>'长相一般', 'value'=>'0' ),
						array('option'=>'美若天仙', 'value'=>'0' ),
				)),
		array('question'=>'与“瘪独子”意思最接近的解释是',
				'answers'=>array(
						array('option'=>'吃饱', 'value'=>'0' ),
						array('option'=>'深呼吸', 'value'=>'0' ),
						array('option'=>'混蛋，没人样', 'value'=>'5' ),
						array('option'=>'鸡蛋', 'value'=>'0' ),
				)),
		array('question'=>'嘿，那边有人干仗呢。“干仗”的意思：',
				'answers'=>array(
						array('option'=>'发生口角', 'value'=>'0' ),
						array('option'=>'扭秧歌', 'value'=>'0' ),
						array('option'=>'打架', 'value'=>'5' ),
						array('option'=>'作战', 'value'=>'0' ),
				)),
		array('question'=>'与“骂血人了”意思最接近的解释是',
				'answers'=>array(
						array('option'=>'赞美对方是一个有血有肉的人', 'value'=>'0' ),
						array('option'=>'很漂亮', 'value'=>'0' ),
						array('option'=>'脸有血色', 'value'=>'0' ),
						array('option'=>'太狠了，极至', 'value'=>'5' ),
				)),
		array('question'=>'这孩子真各应人。“各应”是指',
				'answers'=>array(
						array('option'=>'烦人、讨人厌', 'value'=>'5' ),
						array('option'=>'招人喜欢', 'value'=>'0' ),
						array('option'=>'天真活泼', 'value'=>'0' ),
						array('option'=>'呆若木鸡', 'value'=>'0' ),
				)),
		array('question'=>'与“劲儿劲儿地”意思最接近的解释是',
				'answers'=>array(
						array('option'=>'力大无比', 'value'=>'0' ),
						array('option'=>'皮筋', 'value'=>'0' ),
						array('option'=>'执着，有精神头', 'value'=>'0' ),
						array('option'=>'没完没了', 'value'=>'5' ),
				)),
		array('question'=>'这间屋子真埋汰。“埋汰”是：',
				'answers'=>array(
						array('option'=>'脏', 'value'=>'5' ),
						array('option'=>'整洁', 'value'=>'0' ),
						array('option'=>'豪华', 'value'=>'0' ),
						array('option'=>'简陋', 'value'=>'0' ),
				)),
		array('question'=>'与“噶鼓”意思最接近的解释是',
				'answers'=>array(
						array('option'=>'独特', 'value'=>'5' ),
						array('option'=>'饿了', 'value'=>'0' ),
						array('option'=>'难受', 'value'=>'0' ),
						array('option'=>'一种乐器', 'value'=>'0' ),
				)),
		array('question'=>'他盯把儿看我。该句子的意思是：',
				'answers'=>array(
						array('option'=>'他盯着我', 'value'=>'0' ),
						array('option'=>'他恶狠狠地看我', 'value'=>'0' ),
						array('option'=>'他总看我', 'value'=>'5' ),
						array('option'=>'他深情地看着我', 'value'=>'0' ),
				)),
		array('question'=>'与“磨叽”意思最接近的解释是',
				'answers'=>array(
						array('option'=>'拉磨', 'value'=>'0' ),
						array('option'=>'一种病名', 'value'=>'0' ),
						array('option'=>'罗里罗嗦', 'value'=>'5' ),
						array('option'=>'哭了', 'value'=>'0' ),
				)),
		array('question'=>'二椅着',
				'answers'=>array(
						array('option'=>'二把手，副手', 'value'=>'0' ),
						array('option'=>'不男不女', 'value'=>'5' ),
						array('option'=>'二百五', 'value'=>'0' ),
						array('option'=>'双人沙发', 'value'=>'0' ),
				)),
		array('question'=>'与“撒漠”意思最接近的解释是',
				'answers'=>array(
						array('option'=>'往四处看', 'value'=>'5' ),
						array('option'=>'武术', 'value'=>'0' ),
						array('option'=>'捡东西', 'value'=>'0' ),
						array('option'=>'荒漠化', 'value'=>'0' ),
				)),
		array('question'=>'选出“欠儿登”的同义词',
				'answers'=>array(
						array('option'=>'有债务', 'value'=>'0' ),
						array('option'=>'哪儿有事哪儿到', 'value'=>'5' ),
						array('option'=>'有债权', 'value'=>'0' ),
						array('option'=>'牛', 'value'=>'0' ),
				)),
		array('question'=>'与“缸肛地”意思最接近的解释是',
				'answers'=>array(
						array('option'=>'结实', 'value'=>'0' ),
						array('option'=>'极好，很特别', 'value'=>'0' ),
						array('option'=>'痔疮', 'value'=>'0' ),
						array('option'=>'酸菜缸', 'value'=>'0' ),
				)),
		array('question'=>'“吭哧瘪肚”的意思为：',
				'answers'=>array(
						array('option'=>'IQ高', 'value'=>'0' ),
						array('option'=>'IQ低', 'value'=>'0' ),
						array('option'=>'速度快', 'value'=>'0' ),
						array('option'=>'速度慢', 'value'=>'5' ),
				)),
		array('question'=>'与“卖呆儿”意思最接近的解释是',
				'answers'=>array(
						array('option'=>'拐卖人口', 'value'=>'0' ),
						array('option'=>'个体户', 'value'=>'0' ),
						array('option'=>'闲着无事看热闹', 'value'=>'5' ),
						array('option'=>'神经病', 'value'=>'0' ),
				)),
		array('question'=>'“打腰”的同意词为：',
				'answers'=>array(
						array('option'=>'吹牛', 'value'=>'0' ),
						array('option'=>'裤腰带', 'value'=>'0' ),
						array('option'=>'吃香', 'value'=>'5' ),
						array('option'=>'减肥', 'value'=>'0' ),
				)),
		array('question'=>'与“夜儿个”意思最接近的解释是',
				'answers'=>array(
						array('option'=>'月亮', 'value'=>'0' ),
						array('option'=>'昨天', 'value'=>'5' ),
						array('option'=>'身高', 'value'=>'0' ),
						array('option'=>'黑', 'value'=>'0' ),
				)),
		array('question'=>'“无极六兽”是指：',
				'answers'=>array(
						array('option'=>'六种动物', 'value'=>'0' ),
						array('option'=>'精神饱满', 'value'=>'0' ),
						array('option'=>'性格凶残', 'value'=>'0' ),
						array('option'=>'百无聊赖', 'value'=>'5' ),
				)),
		array('question'=>'与“叽咯浪”意思最接近的解释是',
				'answers'=>array(
						array('option'=>'拌嘴', 'value'=>'5' ),
						array('option'=>'戏水', 'value'=>'0' ),
						array('option'=>'撞船', 'value'=>'0' ),
						array('option'=>'食品', 'value'=>'0' ),
				)),
);

if (is_mobile()) {
	require_once './../a_include/question_test_mobile.php';
} else {
	require_once './../a_include/question_test.php';
}
?>