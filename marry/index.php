<?
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';


if (islogined () && ($_REQUEST['act'] == 'view')) {
	header('Location:./view.php');
	exit;
}
if (islogined () && ($_REQUEST['act'] == 'test')) {
	header('Location:./test.php');
	exit;
}

$app_name='marry';

$question_num = 5;
setcookie('v_appname',$app_name, time()+3000, '/');
setcookie ( 'app_'.$app_name.'_score', NULL, - 3000, '/' );
reset_appstatus($app_name);
if (is_mobile()) {
	$app_intro= '<p style="text-align: center;color:rgb(173,74,33)">
有人说：人的一生要遇到四种人，第一个是自己，第二个是最爱你的人，第三个是你最爱的人，第四个是共度一生的人。生活是现实的，后面的三个人往往不会是同一个人。那么，你会如何抉择呢？
</p>
<p style="text-align: center;color:rgb(231,0,107)">
情景：Y和B从小就认识，但不是很熟，后来上了大学时考入同一座城市，因为是老乡彼此常常相互照应，不论念书时还是放假回乡，都会常在一起玩，后来就相爱了。感情成熟后顺利结了婚，并且婚后感情一直很好，没有任何不愉快。可是一次偶然的机会，Y发现B出轨了，第三者是B曾经追求过的但遭到拒绝的对象，他们再一次校友聚会上重遇，时空变换居然让他们互生情愫，渐渐走到了一起......
</p>';
	require_once './../a_include/question_index_mobile.php';
} else {
	$app_intro= '回答5道题，看看你的节操还剩多少？';
	require_once './question_index.php';
}
?>