<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='nsns';
if ($_REQUEST['sex'] == '1') {
	$app_pre_img = 'imgs/pre_nan.jpg';
	$app_title = '“男神”测试卷';
} else if ($_REQUEST['sex'] == '2') {
	$app_pre_img = 'imgs/pre_ns.jpg';
	$app_title = '“女神”测试卷';
} else {
	header('Location:./index.php');
}
reset_appstatus ( $app_name );
setcookie('v_appname',$app_name, time()+3000, '/');
setcookie('app_'.$app_name.'_sex',$_REQUEST['sex'], time()+3000, '/');
setcookie($app_name.'_score_key',uniqid(), time()+3000, '/');
$nanquestList = array(
array('question'=>'对待问路的人，即使是同性，也能耐心地指路？',
		'answers'=>array(
				array('option'=>'A、YES', 'value'=>'20' ),
				array('option'=>'B、NO', 'value'=>'0' ),
				)),
array('question'=>'夏季能够依然坚持自己的脚不外露，坚定自己的帆布鞋等？',
		'answers'=>array(
				array('option'=>'A、YES', 'value'=>'20' ),
				array('option'=>'B、NO', 'value'=>'0' ),
				)),
array('question'=>'即使有女朋友，依然能够在公共场合向柳下惠看齐？',
		'answers'=>array(
				array('option'=>'A、YES', 'value'=>'15' ),
				array('option'=>'B、NO', 'value'=>'0' ),
				)),
array('question'=>'对待女生，即使再生气，也不大声说话？',
		'answers'=>array(
				array('option'=>'A、YES', 'value'=>'20' ),
				array('option'=>'B、NO', 'value'=>'0' ),
				)),
array('question'=>'至少有一项自己喜欢的运动，并持之以恒？',
		'answers'=>array(
				array('option'=>'A、YES', 'value'=>'25' ),
				array('option'=>'B、NO', 'value'=>'0' ),
				)),
array('question'=>'换下的衣服不洗，隔几天再穿？',
		'answers'=>array(
				array('option'=>'A、YES', 'value'=>'-30' ),
				array('option'=>'B、NO', 'value'=>'0' ),
				)),
array('question'=>'对来来往往的女生露出不一样的神情？',
		'answers'=>array(
				array('option'=>'A、YES', 'value'=>'-20' ),
				array('option'=>'B、NO', 'value'=>'0' ),
				)),
array('question'=>'在女生面前滔滔不绝，犹如三峡断堤？',
		'answers'=>array(
				array('option'=>'A、YES', 'value'=>'-20' ),
				array('option'=>'B、NO', 'value'=>'0' ),
				)),
);
$nvquestList = array(
array('question'=>'我若出门，必定洗头；我若在家，不洗不梳？',
		'answers'=>array(
				array('option'=>'A、YES', 'value'=>'-20' ),
				array('option'=>'B、NO', 'value'=>'0' ),
				)),
array('question'=>'要我陪你到老，飘逸的长发必不可少，等待着它的及腰？',
		'answers'=>array(
				array('option'=>'A、YES', 'value'=>'20' ),
				array('option'=>'B、NO', 'value'=>'0' ),
				)),
array('question'=>'过着二师弟的生活，却想要大师兄的身材？',
		'answers'=>array(
				array('option'=>'A、YES', 'value'=>'-25' ),
				array('option'=>'B、NO', 'value'=>'0' ),
				)),
array('question'=>'每天早上看时间不是为了起床，而是算算还能赖床多久？',
		'answers'=>array(
				array('option'=>'A、YES', 'value'=>'-25' ),
				array('option'=>'B、NO', 'value'=>'0' ),
				)),
array('question'=>'跟男生讲话时落落大方，上的了厅堂，下得了厨房？',
		'answers'=>array(
				array('option'=>'A、YES', 'value'=>'30' ),
				array('option'=>'B、NO', 'value'=>'0' ),
				)),
array('question'=>'说脏话跟你半毛钱关系都没有？',
		'answers'=>array(
				array('option'=>'A、YES', 'value'=>'30' ),
				array('option'=>'B、NO', 'value'=>'0' ),
				)),
array('question'=>'见公交车开来顿时抛开淑女姿势蜂拥而至？',
		'answers'=>array(
				array('option'=>'A、YES', 'value'=>'-10' ),
				array('option'=>'B、NO', 'value'=>'0' ),
				)),
array('question'=>'有自己的小梦想，并且像个小向日葵一样每天付出一点点努力？',
		'answers'=>array(
				array('option'=>'A、YES', 'value'=>'20' ),
				array('option'=>'B、NO', 'value'=>'0' ),
				)),
);
$questionAnswerList = ($_REQUEST['sex'] == '1') ? $nanquestList : $nvquestList;
if (is_mobile()) {
	require_once './../a_include/question_test_mobile.php';
} else {
	require_once './../a_include/question_test.php';
}
?>