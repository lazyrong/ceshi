<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='fysh';
setcookie('v_appname',$app_name, time()+3000, '/');
reset_appstatus ( $app_name );
$questionAnswerList = array(
array('question'=>'上海话里的棺材板是一种',
		'answers'=>array(
				array('option'=>'家具样式', 'value'=>'0' ),
				array('option'=>'昆虫', 'value'=>'5' ),
				array('option'=>'刑具', 'value'=>'0' ),
				array('option'=>'骂人的话', 'value'=>'0' ),
				)),
array('question'=>'上海话里与曾经沧海难为水最对应的是',
		'answers'=>array(
				array('option'=>'老吃老骗', 'value'=>'0' ),
				array('option'=>'老偷老骗', 'value'=>'0' ),
				array('option'=>'老吃老做', 'value'=>'5' ),
				array('option'=>'老吃老喝', 'value'=>'0' ),
				)),
array('question'=>'上海话里形容出师不利的形象化说法为',
		'answers'=>array(
				array('option'=>'头一只蟋蟀就输掉', 'value'=>'0' ),
				array('option'=>'头一个女朋友就跑掉', 'value'=>'0' ),
				array('option'=>'头一只炮仗就不响', 'value'=>'5' ),
				array('option'=>'头一笔买卖就蚀掉', 'value'=>'0' ),
				)),
array('question'=>'上海话里形容生气之极的像声词为',
		'answers'=>array(
				array('option'=>'啊噜啊噜', 'value'=>'0' ),
				array('option'=>'啊兀啊兀', 'value'=>'0' ),
				array('option'=>'啊咕啊咕', 'value'=>'0' ),
				array('option'=>'啊扑啊扑', 'value'=>'5' ),
				)),
array('question'=>'上海话中，下列哪个短语的含义和其他不同？',
		'answers'=>array(
				array('option'=>'台老三', 'value'=>'5' ),
				array('option'=>'翘辫子', 'value'=>'0' ),
				array('option'=>'到提篮桥去', 'value'=>'0' ),
				array('option'=>'到铁板新村去', 'value'=>'0' ),
				)),
array('question'=>'上海话中可替代下句中，好歹我们也认识这么多年了的【好歹】一词的像声词是',
		'answers'=>array(
				array('option'=>'PaPa', 'value'=>'5' ),
				array('option'=>'PangPang', 'value'=>'0' ),
				array('option'=>'PaoPao', 'value'=>'0' ),
				array('option'=>'PanPan', 'value'=>'0' ),
				)),
array('question'=>'上海话中与金刚钻相对的是',
		'answers'=>array(
				array('option'=>'阿三头', 'value'=>'0' ),
				array('option'=>'阿屙卵', 'value'=>'5' ),
				array('option'=>'阿诈里', 'value'=>'0' ),
				array('option'=>'阿屈死', 'value'=>'0' ),
				)),
array('question'=>'捣浆糊在旧上海的原意是指',
		'answers'=>array(
				array('option'=>'烹饪中的勾芡', 'value'=>'0' ),
				array('option'=>'混水摸鱼', 'value'=>'0' ),
				array('option'=>'蹂躏雏妓', 'value'=>'5' ),
				array('option'=>'股票交易中跟峰', 'value'=>'0' ),
				)),
array('question'=>'四马路的女人在上海话中指',
		'answers'=>array(
				array('option'=>'蛮横无礼的女人', 'value'=>'0' ),
				array('option'=>'见过世面的女人', 'value'=>'0' ),
				array('option'=>'失身柳巷的女人', 'value'=>'5' ),
				array('option'=>'猥祟卑鄙的女人', 'value'=>'0' ),
				)),
array('question'=>'上海话里的包脚布常常指一种',
		'answers'=>array(
				array('option'=>'外国进口布料', 'value'=>'0' ),
				array('option'=>'街头小报', 'value'=>'0' ),
				array('option'=>'限制你自由的人', 'value'=>'5' ),
				array('option'=>'面食', 'value'=>'0' ),
				)),
array('question'=>'可以代替在上海话中【我受骗了！】的是',
		'answers'=>array(
				array('option'=>'我啊中刀了！', 'value'=>'0' ),
				array('option'=>'我上当了！', 'value'=>'0' ),
				array('option'=>'我拨噱进了！', 'value'=>'0' ),
				array('option'=>'我闷脱了！', 'value'=>'5' ),
				)),
array('question'=>'在上海话中，下列哪个短语中的【老】没有年华逝去的意思',
		'answers'=>array(
				array('option'=>'老浜瓜', 'value'=>'0' ),
				array('option'=>'老甲鱼', 'value'=>'0' ),
				array('option'=>'老屁眼', 'value'=>'5' ),
				array('option'=>'老菜皮', 'value'=>'0' ),
				)),
array('question'=>'以下短语不是上海人用来嘲讽近视眼的为',
		'answers'=>array(
				array('option'=>'嘎梁', 'value'=>'0' ),
				array('option'=>'横梁', 'value'=>'0' ),
				array('option'=>'木梁', 'value'=>'5' ),
				array('option'=>'书独头', 'value'=>'0' ),
				)),
array('question'=>'以下汉字组合与【读者文摘】在上海话中发音不同的是',
		'answers'=>array(
				array('option'=>'毒责愤扎', 'value'=>'0' ),
				array('option'=>'毒崭愤灾', 'value'=>'0' ),
				array('option'=>'毒崭愤扎', 'value'=>'0' ),
				array('option'=>'发的烂污面嗲', 'value'=>'5' ),
				)),
array('question'=>'上海话中【吃的洋籼米】这句话的下半句不是',
		'answers'=>array(
				array('option'=>'发的糍饭嗲', 'value'=>'5' ),
				array('option'=>'发的糯米嗲', 'value'=>'0' ),
				array('option'=>'发的泡饭嗲', 'value'=>'0' ),
				)),
array('question'=>'在父亲训斥儿子时，下列哪些说法不能最好地替代北方人所说的【我揍你！】',
		'answers'=>array(
				array('option'=>'我喇一记！', 'value'=>'0' ),
				array('option'=>'我打侬！', 'value'=>'5' ),
				array('option'=>'我请侬吃生活！', 'value'=>'0' ),
				array('option'=>'霉头触到哈尔滨', 'value'=>'0' ),
				)),
array('question'=>'以下不是上海话中形容倒楣的短语是',
		'answers'=>array(
				array('option'=>'霉头触到印度国', 'value'=>'0' ),
				array('option'=>'额角头碰到棺材板', 'value'=>'0' ),
				array('option'=>'霉豆腐干', 'value'=>'5' ),
				)),
array('question'=>'在上海话中【我吃他的干醋】与【我吃他的老酸】不是相同的含义',
		'answers'=>array(
				array('option'=>'对', 'value'=>'0' ),
				array('option'=>'错', 'value'=>'5' ),
				)),
array('question'=>'上海话中【横竖横】的歇后语为【拆牛棚】',
		'answers'=>array(
				array('option'=>'对', 'value'=>'5' ),
				array('option'=>'错', 'value'=>'0' ),
				)),
array('question'=>'旧上海话中【鸟】的一般发音为【Diao】',
		'answers'=>array(
				array('option'=>'对', 'value'=>'0' ),
				array('option'=>'错', 'value'=>'5' ),
				)),
);

if (is_mobile()) {
	require_once './../a_include/question_test_mobile.php';
} else {
	require_once './../a_include/question_test.php';
}
?>