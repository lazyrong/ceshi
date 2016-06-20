<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='marry';
reset_appstatus($app_name);
setcookie('v_appname',$app_name, time()+3000, '/');
$questionAnswerList = array(
'1'=>array('question'=>'你觉得B真是因为爱Y才和TA结婚的吗？',
		'answers'=>array(
				array('option'=>'A.是', 'value'=>'4' ),
				array('option'=>'B.不是', 'value'=>'0' ),
				)),
'2'=>array('question'=>'B出轨了但依然对Y很好，你认为TA更多是因为害怕，还是愧疚？',
		'answers'=>array(
				array('option'=>'A.因为害怕', 'value'=>'4' ),
				array('option'=>'B.因为愧疚', 'value'=>'0' ),
				)),
'3'=>array('question'=>'B重新爱上曾拒绝过自己的人，你觉得TA是出于以下哪种原因？',
		'answers'=>array(
				array('option'=>'A.余情未了，深埋的感情重新复活', 'value'=>'4' ),
				array('option'=>'B.未完成情节，为证明自己的魅力', 'value'=>'0' ),
				)),
'4'=>array('question'=>'当发现你爱的人不爱你，你会继续追逐，用爱感动对方吗？',
		'answers'=>array(
				array('option'=>'A.会', 'value'=>'4' ),
				array('option'=>'B.不会', 'value'=>'0' ),
				)),
'5'=>array('question'=>'假设你是Y，当B说依然爱你，依然把你当成生命的唯一时，你还会相信吗？',
		'answers'=>array(
				array('option'=>'A.信', 'value'=>'4' ),
				array('option'=>'B.压根不信', 'value'=>'0' ),
				)),
'6'=>array('question'=>'你觉得一个人能同时爱两个人吗？',
		'answers'=>array(
				array('option'=>'A.不能', 'value'=>'4' ),
				array('option'=>'B.能', 'value'=>'0' ),
				)),
'7'=>array('question'=>'如果B哀求Y的原谅，并承诺跟第三者分手，你认为Y应该选择原谅，还是选择离婚？',
		'answers'=>array(
				array('option'=>'A.原谅', 'value'=>'4' ),
				array('option'=>'B.离婚', 'value'=>'0' ),
				)),
'8'=>array('question'=>'假设Y和B已经有了小宝宝，但已没有感情，为了宝宝，他们是否应该勉强在一起？',
		'answers'=>array(
				array('option'=>'A.是的', 'value'=>'4' ),
				array('option'=>'B.不应该', 'value'=>'0' ),
				)),
'9'=>array('question'=>'若是B已经不再爱Y，你是Y 的话你会怎么做？',
		'answers'=>array(
				array('option'=>'A.成全B的幸福', 'value'=>'4' ),
				array('option'=>'B.你不好过，也让他们不好过', 'value'=>'0' ),
				)),
'10'=>array('question'=>'精神的背叛和肉体的背叛，你更不能接受哪种？',
		'answers'=>array(
				array('option'=>'A.精神的', 'value'=>'4' ),
				array('option'=>'B.肉体的', 'value'=>'0' ),
				)),
'11'=>array('question'=>'“爱的人都没了，还要钱干什么”，如果当一个人因另一半出轨而离婚，却不接受财产的补偿，你会认为这个人…?',
		'answers'=>array(
				array('option'=>'A.高尚，维护了尊严', 'value'=>'4' ),
				array('option'=>'B.傻得无药可救', 'value'=>'0' ),
				)),
'12'=>array('question'=>'假设你是故事中的那位第三者，你会接受一个曾经拒绝过的人吗？',
		'answers'=>array(
				array('option'=>'A.可能会，这世界唯一不变的就是变 ', 'value'=>'4' ),
				array('option'=>'B.不会，好马不吃回头草', 'value'=>'0' ),
				)),
);
if (is_mobile()) {
	require_once './../a_include/question_test_mobile.php';
} else {
	require_once './../a_include/question_test.php';
}
?>