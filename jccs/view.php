<?php 
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'jccs';
$score='';
if ($_POST['i1'] != '' && $_POST['i5'] != '') {
	$score=0;
	$i=1;
	while($i<=5) {
		$score = $score + $_POST['i'.$i];
		$i++;
	}
	setcookie ( 'app_'.$app_name.'_score', $score, time () + 3000, '/' );
} else {
	$score = $_COOKIE['app_'.$app_name.'_score'];
}
if (!islogined()) {
	header('Location:./login.php?id=q&app='.$app_name.'&act=view');
	exit;
}
if (strlen($score) == 0 || !is_numeric($score)) {
	header('Location:./');
	exit;
}
check_appstatus ( $app_name );
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );

$result = array (
		0 => array (
				'unkown'=>array('pic'=>'http://t1.qpic.cn/mblogpic/a1ec3bcb5528607b459c/2000',
						'text'=>'你的成绩过低，老湿崩溃了...',
						'score'=>'？？？',
						'img'=>'./imgs/result/unknow.jpg'
				),
				'-100'=>array('pic'=>'http://t1.qpic.cn/mblogpic/433f300e437deb09cb8c/2000',
						'text'=>'这是怎样的境界...',
						'score'=>'-100分',
						'img'=>'./imgs/result/-100.jpg'
				),
				'-10'=>array('pic'=>'http://t1.qpic.cn/mblogpic/9ac67fc06406eebd3bf8/2000',
						'text'=>'你知道的太多了...',
						'score'=>'-10分',
						'img'=>'./imgs/result/-10.jpg'
				),
		),
		1 => array (
				'-1'=>array('pic'=>'http://t1.qpic.cn/mblogpic/85b4d128a8a4b81896e2/2000',
						'text'=>'前后六百年无人能超越您邪恶的巅峰...',
						'score'=>'-1分',
						'img'=>'./imgs/result/-1.jpg'
				),
		),
		2 => array (
				'0'=>array('pic'=>'http://t1.qpic.cn/mblogpic/f74e3732c71ca9365cfa/2000',
						'text'=>'回家找家长签字明早交上来！',
						'score'=>'0分',
						'img'=>'./imgs/result/0.jpg'
				),
				'1'=>array('pic'=>'http://t1.qpic.cn/mblogpic/d41cad1df4e3564eb99c/2000',
						'text'=>'童鞋！你让我那神马来拯救你！',
						'score'=>'1分',
						'img'=>'./imgs/result/1.jpg'
				),
		),
		3 => array (
				'2'=>array('pic'=>'http://t1.qpic.cn/mblogpic/8ea352ecfb39e6f574e0/2000',
						'text'=>'问世间谁最YD，直叫你当仁不让！',
						'score'=>'2分',
						'img'=>'./imgs/result/2.jpg'
				),
				'3'=>array('pic'=>'http://t1.qpic.cn/mblogpic/1d1aded1d080ed327890/2000',
						'text'=>'你已悟道禅宗，天眼即开，马赛克已经对你无效了！',
						'score'=>'3分',
						'img'=>'./imgs/result/3.jpg'
				),
				'5'=>array('pic'=>'http://t1.qpic.cn/mblogpic/227ee189ccc6fa012a44/2000',
						'text'=>'你是为了衬托时间的纯洁而存在的吗！',
						'score'=>'5分',
						'img'=>'./imgs/result/5.jpg'
				),
		),
		4 => array (
				'6'=>array('pic'=>'http://t1.qpic.cn/mblogpic/9b5824e74c2ae851ee0e/2000',
						'text'=>'你平时上课都想些什么呢！！',
						'score'=>'6分',
						'img'=>'./imgs/result/6.jpg'
				),
				'8'=>array('pic'=>'http://t1.qpic.cn/mblogpic/f7fd330bfee6682ad9ae/2000',
						'text'=>'别人装纯，你知道装经验丰富...',
						'score'=>'8分',
						'img'=>'./imgs/result/8.jpg'
				),
				'11'=>array('pic'=>'http://t1.qpic.cn/mblogpic/514de6e62255a9b371ba/2000',
						'text'=>'苍老师让我转告你，她很欣慰！',
						'score'=>'11分',
						'img'=>'./imgs/result/11.jpg'
				),
		),
		5 => array (
				'13'=>array('pic'=>'http://t1.qpic.cn/mblogpic/c52cab6bcb8409ae7dea/2000',
						'text'=>'你一定隐藏着浓浓的寂寞吧！',
						'score'=>'13分',
						'img'=>'./imgs/result/13.jpg'
				),
				'14'=>array('pic'=>'http://t1.qpic.cn/mblogpic/08c419b6bde720ded8a6/2000',
						'text'=>'矜持一点，好吗？',
						'score'=>'14分',
						'img'=>'./imgs/result/14.jpg'
				),
				'18'=>array('pic'=>'http://t1.qpic.cn/mblogpic/8fb80bb792318887048c/2000',
						'text'=>'口味能轻点吗？',
						'score'=>'18分',
						'img'=>'./imgs/result/18.jpg'
				),
				'20'=>array('pic'=>'http://t1.qpic.cn/mblogpic/2ba2c62327c78eb50c00/2000',
						'text'=>'晚上精力旺盛，早上无精打采。该！',
						'score'=>'20分',
						'img'=>'./imgs/result/20.jpg'
				),
		),
		6 => array (
				'21'=>array('pic'=>'http://t1.qpic.cn/mblogpic/164fe2f3aba9a8f98cfc/2000',
						'text'=>'不要挣扎了，释放你内心的野兽吧！',
						'score'=>'21分',
						'img'=>'./imgs/result/21.jpg'
				),
				'23'=>array('pic'=>'http://t1.qpic.cn/mblogpic/0dcd9cae86b99e77422a/2000',
						'text'=>'你一定是一个折翼的恶魔！',
						'score'=>'23分',
						'img'=>'./imgs/result/23.jpg'
				),
				'25'=>array('pic'=>'http://t1.qpic.cn/mblogpic/d1af2bd23e4721c2b0f4/2000',
						'text'=>'能考到这个分数，说明你已经长大了。',
						'score'=>'25分',
						'img'=>'./imgs/result/25.jpg'
				),
				'27'=>array('pic'=>'http://t1.qpic.cn/mblogpic/7748b5c0d1e5710768c8/2000',
						'text'=>'人在江湖漂，哪能不风骚。',
						'score'=>'27分',
						'img'=>'./imgs/result/27.jpg'
				),
				'30'=>array('pic'=>'http://t1.qpic.cn/mblogpic/f1bf110b258cee8f6202/2000',
						'text'=>'你肯定想看3D肉蒲团吧？',
						'score'=>'30分',
						'img'=>'./imgs/result/30.jpg'
				),

		),
		7 => array (
				'31'=>array('pic'=>'http://t1.qpic.cn/mblogpic/683e2909c1969164ffb8/2000',
						'text'=>'你悟性极高，是个YD的好胚子！',
						'score'=>'31分',
						'img'=>'./imgs/result/31.jpg'
				),
				'33'=>array('pic'=>'http://t1.qpic.cn/mblogpic/95899911f18749492658/2000',
						'text'=>'在你纯洁的道路上，你笔直的跑骗了...',
						'score'=>'33分',
						'img'=>'./imgs/result/33.jpg'
				),
				'34'=>array('pic'=>'http://t1.qpic.cn/mblogpic/a0f4e5e63d597a6b35a4/2000',
						'text'=>'在你纯洁的外表下，藏着一颗闷骚的心...',
						'score'=>'34分',
						'img'=>'./imgs/result/34.jpg'
				),
				'36'=>array('pic'=>'http://t1.qpic.cn/mblogpic/337d6555186ea9a0029e/2000',
						'text'=>'当年你也是个纯情的小嫩芽，结果下了场春雨...',
						'score'=>'36分',
						'img'=>'./imgs/result/36.jpg'
				),
				'37'=>array('pic'=>'http://t1.qpic.cn/mblogpic/efaad755af19bf813330/2000',
						'text'=>'这个学期过去，你早熟了很多。',
						'score'=>'37分',
						'img'=>'./imgs/result/37.jpg'
				),
				'41'=>array('pic'=>'http://t1.qpic.cn/mblogpic/6bbf8fc4ac9a17ec74d6/2000',
						'text'=>'这个分数对得起祖国吗？',
						'score'=>'41分',
						'img'=>'./imgs/result/41.jpg'
				),
		),
		8 => array (
				'43'=>array('pic'=>'http://t1.qpic.cn/mblogpic/bf6aad5727697d43df9a/2000',
						'text'=>'自从幼儿园毕业以后，你就脱离了纯洁的队伍。',
						'score'=>'43分',
						'img'=>'./imgs/result/43.jpg'
				),
				'46'=>array('pic'=>'http://t1.qpic.cn/mblogpic/dfe64326350ecb2bb814/2000',
						'text'=>'回家好好反省。',
						'score'=>'46分',
						'img'=>'./imgs/result/46.jpg'
				),
				'48'=>array('pic'=>'http://t1.qpic.cn/mblogpic/d2395383a07afd08f644/2000',
						'text'=>'你纯洁的很含蓄~',
						'score'=>'48分',
						'img'=>'./imgs/result/48.jpg'
				),
				'50'=>array('pic'=>'http://t1.qpic.cn/mblogpic/86b3bec606eea3c4fa82/2000',
						'text'=>'让我们用艺术的角度来欣赏苍老师的作品~',
						'score'=>'50分',
						'img'=>'./imgs/result/50.jpg'
				),
				'55'=>array('pic'=>'http://t1.qpic.cn/mblogpic/e07155e7c43d3936c1e0/2000',
						'text'=>'你通往纯洁的道路上，塌方了...',
						'score'=>'55分',
						'img'=>'./imgs/result/55.jpg'
				),
				'57'=>array('pic'=>'http://t1.qpic.cn/mblogpic/68f3a79455ccb2a42366/2000',
						'text'=>'你邪恶的很清晰脱俗...',
						'score'=>'57分',
						'img'=>'./imgs/result/57.jpg'
				),
		),
		9 => array (
				'58'=>array('pic'=>'http://t1.qpic.cn/mblogpic/1f7024a153698f285134/2000',
						'text'=>'时间，让纯洁越走越远...',
						'score'=>'58分',
						'img'=>'./imgs/result/58.jpg'
				),
				'60'=>array('pic'=>'http://t1.qpic.cn/mblogpic/a132393ac545889e7bec/2000',
						'text'=>'及格了，你还有得救...',
						'score'=>'60分',
						'img'=>'./imgs/result/60.jpg'
				),
				'62'=>array('pic'=>'http://t1.qpic.cn/mblogpic/0ca1e515d307f2cc6180/2000',
						'text'=>'苍老师白救你了...',
						'score'=>'62分',
						'img'=>'./imgs/result/62.jpg'
				),
				'66'=>array('pic'=>'http://t1.qpic.cn/mblogpic/d9fbba4a57d0514c0882/2000',
						'text'=>'江山如此多娇，何不使劲风骚。',
						'score'=>'66分',
						'img'=>'./imgs/result/66.jpg'
				),
				'69'=>array('pic'=>'http://t1.qpic.cn/mblogpic/cde4d5f2cb62b5bdd186/2000',
						'text'=>'小样，看不出你还挺纯的？',
						'score'=>'69分',
						'img'=>'./imgs/result/69.jpg'
				),
		),
		10 => array (
				'72'=>array('pic'=>'http://t1.qpic.cn/mblogpic/35f7faf0e3054730c666/2000',
						'text'=>'你是一个人见人爱，菊见菊开的好青年！',
						'score'=>'72分',
						'img'=>'./imgs/result/72.jpg'
				),
				'76'=>array('pic'=>'http://t1.qpic.cn/mblogpic/3130b6bf99bb0075cd74/2000',
						'text'=>'除了纯洁，你神马都木有！！',
						'score'=>'76分',
						'img'=>'./imgs/result/76.jpg'
				),
				'79'=>array('pic'=>'http://t1.qpic.cn/mblogpic/9adac0819171798fc58a/2000',
						'text'=>'霸气侧漏！！！纯洁的孩纸伤不起啊！',
						'score'=>'79分',
						'img'=>'./imgs/result/79.jpg'
				),
				'80'=>array('pic'=>'http://t1.qpic.cn/mblogpic/0814546a1f7d821dc93c/2000',
						'text'=>'你这么纯洁，以后怎么混社会！',
						'score'=>'80分',
						'img'=>'./imgs/result/80.jpg'
				),
				'82'=>array('pic'=>'http://t1.qpic.cn/mblogpic/39148b22666b4a6bc500/2000',
						'text'=>'终于找到为数不多的纯洁宝宝！',
						'score'=>'82分',
						'img'=>'./imgs/result/82.jpg'
				),
		),
		11 => array (
				'86'=>array('pic'=>'http://t1.qpic.cn/mblogpic/78fedda45d9dac65219a/2000',
						'text'=>'你上辈子一定是个裸奔的天使~',
						'score'=>'86分',
						'img'=>'./imgs/result/86.jpg'
				),
				'88'=>array('pic'=>'http://t1.qpic.cn/mblogpic/9774c833bd0cdbda4712/2000',
						'text'=>'你凹凸了，赶快回去温习下印度爱经吧~',
						'score'=>'88分',
						'img'=>'./imgs/result/88.jpg'
				),
				'89'=>array('pic'=>'http://t1.qpic.cn/mblogpic/7bf0c57982f69aea3ba8/2000',
						'text'=>'你冰清玉洁，纯如百合。',
						'score'=>'89分',
						'img'=>'./imgs/result/89.jpg'
				),
				'91'=>array('pic'=>'http://t1.qpic.cn/mblogpic/cc025ce6c224889e58e8/2000',
						'text'=>'同学，你纯洁得让人心旷神怡。',
						'score'=>'91分',
						'img'=>'./imgs/result/91.jpg'
				),
		),
		12 => array (
				'92'=>array('pic'=>'http://t1.qpic.cn/mblogpic/124177995e9a4aaf379e/2000',
						'text'=>'一定要在家长会上重重表扬你~',
						'score'=>'92分',
						'img'=>'./imgs/result/92.jpg'
				),
				'93'=>array('pic'=>'http://t1.qpic.cn/mblogpic/fc3f817449a536a0cff4/2000',
						'text'=>'喜欢你单纯的样子，专注投入。',
						'score'=>'93分',
						'img'=>'./imgs/result/93.jpg'
				),
				'94'=>array('pic'=>'http://t1.qpic.cn/mblogpic/afcd293e09aab1edadda/2000',
						'text'=>'你的纯洁，亮瞎了老湿的双眼。',
						'score'=>'94分',
						'img'=>'./imgs/result/94.jpg'
				),
		),
		13 => array (
				'96'=>array('pic'=>'http://t1.qpic.cn/mblogpic/c08a766d24d81b0fd67c/2000',
						'text'=>'你一定是个可爱单纯，含蓄奔放的孩纸~',
						'score'=>'96分',
						'img'=>'./imgs/result/96.jpg'
				),
				'95'=>array('pic'=>'http://t1.qpic.cn/mblogpic/a74e9ed33712aca0684c/2000',
						'text'=>'如今像你这么纯洁的人已经不多了！',
						'score'=>'95分',
						'img'=>'./imgs/result/95.jpg'
				),
		),
		14 => array (
				'97'=>array('pic'=>'http://t1.qpic.cn/mblogpic/0bfaf36c2a7ebeeb4d14/2000',
						'text'=>'很好，你有一颗纯洁善良的心。',
						'score'=>'97分',
						'img'=>'./imgs/result/97.jpg'
				),
		),
		15 => array (
				'98'=>array('pic'=>'http://t1.qpic.cn/mblogpic/f29fd4fe3e4acda9856e/2000',
						'text'=>'你纯洁的一刻，胜过犯人邪恶的一生。',
						'score'=>'98分',
						'img'=>'./imgs/result/98.jpg'
				),
				'99'=>array('pic'=>'http://t1.qpic.cn/mblogpic/8597891df2f0e9888126/2000',
						'text'=>'非常好！你没有被任何马赛克玷污过！',
					 'score'=>'99分',
						'img'=>'./imgs/result/99.jpg'
				),
				'100'=>array('pic'=>'http://t1.qpic.cn/mblogpic/96a2e1c4b892e1232f0a/2000',
						'text'=>'你太单纯了，让我们情何以堪！',
						'score'=>'100分',
						'img'=>'./imgs/result/100.jpg'
				),
		)
);

$randresult = $result[$score];
if (empty($randresult)) {
	$randresult = $result[array_rand($result)];
}
$scoreresult = $randresult[array_rand($randresult)];

$img=getImgType($scoreresult['img']);
$content='我刚参加了节操考试并取得了'.$scoreresult['score'].'的成绩，得到评价：'.$scoreresult['text'].' 小伙伴们，快来和我比比节操吧！地址：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams['pic'] = $scoreresult['pic'];
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->节操考试";
$pagrams[summary] = "回答五个问题，看看你的节操还剩多少？~".$pagrams[url];
$rt_info=post_send2($pagrams);

$rt_info['url'] = $url;
$rt_info ['result_img'] = $scoreresult['pic'];
$rt_info['result_title'] =  '【得分：'.$scoreresult['score'].'，'.$scoreresult['text'].'】';

setcookie ( 'app_'.$app_name.'_score', NULL, -3000, '/' );

// 	$mmc=@memcache_init();
// 	$mmc->set('app_result_'.$_COOKIE ['v_o_t_openid'],$rt_info,MEMCACHE_COMPRESSED,1000);
// 	header('Location:../result.php');
// 	exit;
// } else {
if (is_mobile ()) {
	require_once './../a_include/rt_mobile.php';
} else {
	require_once './../a_include/header.php';
	require_once './../a_include/rt_main.php';
	require_once './../a_include/footer.php';
}
?>
