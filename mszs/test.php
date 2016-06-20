<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';

$app_name='mszs';
setcookie('v_appname',$app_name, time()+3000, '/');
reset_appstatus($app_name);
$questionAnswerList = array(
		array('question'=>'如果你要参加整人派对，好好整整你的好友时，你会选择以下哪一种方式？',
				'answers'=>array(
						array('option'=>'找朋友的老板一起过', 'value'=>'1' ),
						array('option'=>'向对方表白爱慕', 'value'=>'2' ),
						array('option'=>'找人妖跳艳舞', 'value'=>'3' ),
						array('option'=>'假扮警察临检找茬', 'value'=>'4' ),
						array('option'=>'酒中加入调味料', 'value'=>'5' ),
				)),
);

if (is_mobile()) {
	require_once './../a_include/question_test_mobile.php';
} else {
	require_once './../a_include/question_test.php';
}
?>