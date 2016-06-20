<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='fynm';
setcookie('v_appname',$app_name, time()+3000, '/');
reset_appstatus ( $app_name );
$questionAnswerList = array(
		array('question'=>'各揪下的意思是',
				'answers'=>array(
						array('option'=>'请坐下', 'value'=>'0' ),
						array('option'=>'请蹲下', 'value'=>'4' ),
						array('option'=>'请起立', 'value'=>'0' ),
						array('option'=>'请躺下', 'value'=>'0' ),
				)),
		array('question'=>'各跑的意思是',
				'answers'=>array(
						array('option'=>'形容人跑的很快', 'value'=>'0' ),
						array('option'=>'比赛的发令语', 'value'=>'0' ),
						array('option'=>'对他人的带引号的爱称', 'value'=>'4' ),
						array('option'=>'形容人另类有个性', 'value'=>'0' ),
				)),
		array('question'=>'球迷性眼的意思是',
				'answers'=>array(
						array('option'=>'球迷的视力很好', 'value'=>'0' ),
						array('option'=>'球迷的视力很差', 'value'=>'0' ),
						array('option'=>'德性样儿', 'value'=>'4' ),
						array('option'=>'形容人很可爱', 'value'=>'0' ),
				)),
		array('question'=>'歌捞捞是房屋的哪个位置',
				'answers'=>array(
						array('option'=>'书房', 'value'=>'0' ),
						array('option'=>'屋顶', 'value'=>'0' ),
						array('option'=>'角落', 'value'=>'4' ),
						array('option'=>'客厅', 'value'=>'0' ),
				)),
		array('question'=>'格角在的含义是',
				'answers'=>array(
						array('option'=>'用工具搅和', 'value'=>'4' ),
						array('option'=>'对年长者的敬称', 'value'=>'0' ),
						array('option'=>'一种食品', 'value'=>'0' ),
						array('option'=>'句末语气词', 'value'=>'0' ),
				)),
		array('question'=>'拾翻的准确定义是',
				'answers'=>array(
						array('option'=>'十次', 'value'=>'0' ),
						array('option'=>'寻找', 'value'=>'4' ),
						array('option'=>'捡取', 'value'=>'0' ),
				)),
		array('question'=>'撮落表达的是一种什么行为',
				'answers'=>array(
						array('option'=>'收拾', 'value'=>'4' ),
						array('option'=>'说人没出息', 'value'=>'0' ),
						array('option'=>'一小块儿', 'value'=>'0' ),
				)),
		array('question'=>'割启盖子是讲人身上的哪个部位',
				'answers'=>array(
						array('option'=>'头部', 'value'=>'0' ),
						array('option'=>'手腕', 'value'=>'0' ),
						array('option'=>'膝盖', 'value'=>'4' ),
				)),
		array('question'=>'歌唠子窝是讲人身上的哪个部位',
				'answers'=>array(
						array('option'=>'颈部', 'value'=>'0' ),
						array('option'=>'腋下', 'value'=>'4' ),
						array('option'=>'肘关节', 'value'=>'0' ),
				)),
		array('question'=>'坎球是指',
				'answers'=>array(
						array('option'=>'谈论球类比赛', 'value'=>'0' ),
						array('option'=>'足球', 'value'=>'0' ),
						array('option'=>'乒乓球', 'value'=>'0' ),
						array('option'=>'愣货', 'value'=>'4' ),
				)),
		array('question'=>'合浪浪的意思',
				'answers'=>array(
						array('option'=>'一起来发彪', 'value'=>'0' ),
						array('option'=>'角落，胡同', 'value'=>'4' ),
						array('option'=>'一种食品', 'value'=>'0' ),
				)),
		array('question'=>'毛一毛直译为',
				'answers'=>array(
						array('option'=>'看一看', 'value'=>'4' ),
						array('option'=>'加工一下', 'value'=>'0' ),
						array('option'=>'很痒', 'value'=>'0' ),
				)),
		array('question'=>'耐比兜直译为',
				'answers'=>array(
						array('option'=>'经受住寒冷', 'value'=>'0' ),
						array('option'=>'挨打', 'value'=>'4' ),
						array('option'=>'属于语气词', 'value'=>'0' ),
				)),
		array('question'=>'戳火多见于什么场合',
				'answers'=>array(
						array('option'=>'说别人讨厌时', 'value'=>'4' ),
						array('option'=>'幼儿园', 'value'=>'0' ),
						array('option'=>'锅炉房', 'value'=>'0' ),
				)),
		array('question'=>'杰板子指人身体的哪个部位',
				'answers'=>array(
						array('option'=>'脊背', 'value'=>'0' ),
						array('option'=>'腰部', 'value'=>'0' ),
						array('option'=>'胸部', 'value'=>'0' ),
						array('option'=>'足部', 'value'=>'4' ),
				)),
		array('question'=>'格溜是形容',
				'answers'=>array(
						array('option'=>'不直', 'value'=>'0' ),
						array('option'=>'逃跑', 'value'=>'0' ),
						array('option'=>'遛弯儿', 'value'=>'4' ),
				)),
		array('question'=>'定蒙地是形容',
				'answers'=>array(
						array('option'=>'地板的一种', 'value'=>'0' ),
						array('option'=>'突然', 'value'=>'4' ),
						array('option'=>'形容地硬', 'value'=>'0' ),
				)),
		array('question'=>'紧股是形容',
				'answers'=>array(
						array('option'=>'衣服太紧', 'value'=>'0' ),
						array('option'=>'美臀', 'value'=>'0' ),
						array('option'=>'不停的干某件事', 'value'=>'4' ),
				)),
		array('question'=>'各产是形容',
				'answers'=>array(
						array('option'=>'个人产业', 'value'=>'0' ),
						array('option'=>'晒脸', 'value'=>'4' ),
						array('option'=>'一种动作', 'value'=>'0' ),
				)),
		array('question'=>'不进眼是形容',
				'answers'=>array(
						array('option'=>'某人很讨厌', 'value'=>'4' ),
						array('option'=>'眼睛太小', 'value'=>'0' ),
						array('option'=>'眼睛里进东西了', 'value'=>'0' ),
				)),
		array('question'=>'扑刀子是形容',
				'answers'=>array(
						array('option'=>'拿着刀子', 'value'=>'0' ),
						array('option'=>'杂技的一种', 'value'=>'0' ),
						array('option'=>'形容某人乱闯', 'value'=>'4' ),
				)),
		array('question'=>'袭人是形容',
				'answers'=>array(
						array('option'=>'打人', 'value'=>'0' ),
						array('option'=>'偷袭', 'value'=>'0' ),
						array('option'=>'美丽', 'value'=>'4' ),
				)),
		array('question'=>'疙瘩子是形容',
				'answers'=>array(
						array('option'=>'痘痘', 'value'=>'0' ),
						array('option'=>'凹凸不平', 'value'=>'0' ),
						array('option'=>'一种食物', 'value'=>'4' ),
				)),
		array('question'=>'撇你妈是形容',
				'answers'=>array(
						array('option'=>'撇某人的妈妈', 'value'=>'0' ),
						array('option'=>'骗人', 'value'=>'4' ),
						array('option'=>'生气', 'value'=>'0' ),
				)),
		array('question'=>'机迷是形容',
				'answers'=>array(
						array('option'=>'清楚', 'value'=>'4' ),
						array('option'=>'机密', 'value'=>'0' ),
						array('option'=>'一种游戏', 'value'=>'0' ),
				)),
);


if (is_mobile()) {
	require_once './../a_include/question_test_mobile.php';
} else {
	require_once './../a_include/question_test.php';
}
?>