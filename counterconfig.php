<?
session_start();
require_once './a_cache/app_top.php';
header('Content-Type: text/html; charset=utf-8');
$act = $_REQUEST['act'];
$c = new SaeCounter();
$app_counter_list = array();
foreach ($app_list as $appname => $hot_app) {
	$app_counter_list[$appname] = $c->get("app_result_count_".$appname);
}
arsort($app_counter_list);

var_dump($app_counter_list);
$counter_config = array(
	array('key'=>'app_nine_game', 'title'=>'app下载数'),
	array('key'=>'result_count', 'title'=>'结果页总数'),
	array('key'=>'result_qq_count', 'title'=>'结果页(单向)总数'),
	array('key'=>'result_qqun_count', 'title'=>'结果页（Q群）总数'),
	array('key'=>'result_qqzone_count', 'title'=>'结果页（空间）总数'),
	array('key'=>'check_qqzone_count', 'title'=>'结果页判断空间粉丝总数'),
	array('key'=>'check_qqzone_yes_count', 'title'=>'结果页判断空间粉丝(已关注)总数'),
	array('key'=>'check_qqzone_no_count', 'title'=>'结果页判断空间粉丝(未关注)总数'),
	);
if ($act == 'init') {
	echo '初始化开始<br />';
	foreach ($counter_config as $cnt) {
	    $c->create($cnt['key'],1);
		echo '初始化'.$cnt['title'].'（'.$cnt['key'].'）<br />';
	}
	echo '初始化完成<br />';
} else if ($act == 'reset') {
	echo '重计数开始<br />';
	foreach ($counter_config as $cnt) {
		$c->set($cnt['key'], 1);
		echo '重计数'.$cnt['title'].'（'.$cnt['key'].'）<br />';
	}
	echo '重计数完成<br />';
}

echo '<br /><br /><br />';
echo '计数器列表<br />';
foreach ($counter_config as $cnt) {
	var_dump($c->get($cnt['key']));
	echo $cnt['title'].'（'.$cnt['key'].'）：'.$c->get($cnt['key']).'<br />';
}

?>