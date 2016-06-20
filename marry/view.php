<?php 
header('Content-Type: text/html; charset=utf-8');
require_once './../global.inc.php';
require_once '../a_cache/app_top.php';
require_once './../a_include/func/Funcs.inc.php';
$app_name = 'marry';
$score='12';
if ($_REQUEST['score']) {
	setcookie ( 'app_'.$app_name.'_score', $_REQUEST['score'], time () + 3000, '/' );
} else if ($_POST['i1'] != '' && $_POST['i12'] != '') {
	$score=12;
	$i=1;
	while($i<=12) {
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
check_appstatus($app_name);
$url = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$url = str_replace ( 'index.php', '', $url );
$url = str_replace ( 'view.php', '', $url );
$resultscore = array(
		'12'=>array(
				'pic'=>'http://app.qpic.cn/mblogpic/df8ea6f9567075cf8f5a/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfxw1le14j20c60d5tah.jpg',
				'text'=>'你不爱也不爱你的人',
				'range'=>'12~23分',
				'remark'=>'你的爱情道路并不平坦，在经历了刻骨铭心的情伤之后，对于爱情会无法再保持原先那种最纯粹的信念，为了不再受伤，于是你会选择没有感情付出的婚姻，你认为只有这样才能掌控自己。或是因为现实环境的逼迫而进行妥协，比如接受父母安排的相亲婚姻，利益关系的政治婚姻等。但是你也别觉得沮丧，只要积极乐观的精神还在，在婚姻中培养出感情，你也能比别人幸福。',
				),
		'16'=>array(
				'pic'=>'http://app.qpic.cn/mblogpic/8430ea083a3cde2cd940/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfxw2d1mnj20c60d5wg9.jpg',
				'text'=>'你不爱也不爱你的人',
				'range'=>'12~23分',
				'remark'=>'你的爱情道路并不平坦，在经历了刻骨铭心的情伤之后，对于爱情会无法再保持原先那种最纯粹的信念，为了不再受伤，于是你会选择没有感情付出的婚姻，你认为只有这样才能掌控自己。或是因为现实环境的逼迫而进行妥协，比如接受父母安排的相亲婚姻，利益关系的政治婚姻等。但是你也别觉得沮丧，只要积极乐观的精神还在，在婚姻中培养出感情，你也能比别人幸福。',
				
				),
		'20'=>array(
				'pic'=>'http://app.qpic.cn/mblogpic/8015e529e0cdab806e5c/2000',
				'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebfxwhrzrwj20c60d5762.jpg',
				'text'=>'你不爱也不爱你的人',
				'range'=>'12~23分',
				'remark'=>'你的爱情道路并不平坦，在经历了刻骨铭心的情伤之后，对于爱情会无法再保持原先那种最纯粹的信念，为了不再受伤，于是你会选择没有感情付出的婚姻，你认为只有这样才能掌控自己。或是因为现实环境的逼迫而进行妥协，比如接受父母安排的相亲婚姻，利益关系的政治婚姻等。但是你也别觉得沮丧，只要积极乐观的精神还在，在婚姻中培养出感情，你也能比别人幸福。',
				
				),
		'24'=>array(
				'pic'=>'http://app.qpic.cn/mblogpic/fc8a68a3d310a5feb9a2/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfxwj35anj20c60d5abr.jpg',
				'text'=>'爱你的人',
				'range'=>'24~35分',
				'remark'=>'在寻找爱情的旅途中你也和大多数人一样，会执着于爱情，执着于与所爱之人携手一生，但寻寻觅觅，磕磕绊绊之后，你会领悟到世间最珍贵的不是“得不到”和“已失去”，而是现在能把握的幸福。当一个人为你而改变，把你的兴趣变成他的兴趣，对你无悔的付出，你的心会很容易便沦陷。没有谁规定因为感动的爱情就不是爱情，当还能拥有时，好好珍惜吧，幸福要认真抓住。',
				
				),
		'28'=>array(
				'pic'=>'http://app.qpic.cn/mblogpic/ffe0f59500e11c5e4124/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfxwksyqgj20c60d575z.jpg',
				'text'=>'爱你的人',
				'range'=>'24~35分',
				'remark'=>'在寻找爱情的旅途中你也和大多数人一样，会执着于爱情，执着于与所爱之人携手一生，但寻寻觅觅，磕磕绊绊之后，你会领悟到世间最珍贵的不是“得不到”和“已失去”，而是现在能把握的幸福。当一个人为你而改变，把你的兴趣变成他的兴趣，对你无悔的付出，你的心会很容易便沦陷。没有谁规定因为感动的爱情就不是爱情，当还能拥有时，好好珍惜吧，幸福要认真抓住。',
				
				),
		'32'=>array(
				'pic'=>'http://app.qpic.cn/mblogpic/ad4ac804d39fed32e394/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfxwlcwjbj20c60d50uf.jpg',
				'text'=>'爱你的人',
				'range'=>'24~35分',
				'remark'=>'在寻找爱情的旅途中你也和大多数人一样，会执着于爱情，执着于与所爱之人携手一生，但寻寻觅觅，磕磕绊绊之后，你会领悟到世间最珍贵的不是“得不到”和“已失去”，而是现在能把握的幸福。当一个人为你而改变，把你的兴趣变成他的兴趣，对你无悔的付出，你的心会很容易便沦陷。没有谁规定因为感动的爱情就不是爱情，当还能拥有时，好好珍惜吧，幸福要认真抓住。',
				
				),
		'36'=>array(
				'pic'=>'http://app.qpic.cn/mblogpic/0897fbe9f087ef9a3d5c/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfxwlvvd0j20c60d540b.jpg',
				'text'=>'你爱的也爱你的人',
				'range'=>'36~47分',
				'remark'=>'你是一位很幸运的人，童话中王子和公主的幸福结局能发生在你身上。虽然运气有着不可代替的作用，让你在茫茫人海中遇到那个让你心动，同样也为你着迷的人，但更多的是出于你们的努力，因为懂得彼此珍惜，所以不轻易放弃，因为懂得经营爱情，所以能让感情长久。可婚姻比爱情更复杂，也更现实，若想让婚后的几十年长久且甜蜜的走下去，别忘了理解，包容与信任，也别忘了保持良好的互动。',
				
				),
		'40'=>array(
				'pic'=>'http://app.qpic.cn/mblogpic/97ea4ba29b4ea206d77a/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfxwmcalgj20c60d5wga.jpg',
				'text'=>'你爱的也爱你的人',
				'range'=>'36~47分',
				'remark'=>'你是一位很幸运的人，童话中王子和公主的幸福结局能发生在你身上。虽然运气有着不可代替的作用，让你在茫茫人海中遇到那个让你心动，同样也为你着迷的人，但更多的是出于你们的努力，因为懂得彼此珍惜，所以不轻易放弃，因为懂得经营爱情，所以能让感情长久。可婚姻比爱情更复杂，也更现实，若想让婚后的几十年长久且甜蜜的走下去，别忘了理解，包容与信任，也别忘了保持良好的互动。',
				
				),
		'44'=>array(
				'pic'=>'http://app.qpic.cn/mblogpic/8890f50442ac4b204738/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfxwmum5vj20c60d540b.jpg',
				'text'=>'你爱的也爱你的人',
				'range'=>'36~47分',
				'remark'=>'你是一位很幸运的人，童话中王子和公主的幸福结局能发生在你身上。虽然运气有着不可代替的作用，让你在茫茫人海中遇到那个让你心动，同样也为你着迷的人，但更多的是出于你们的努力，因为懂得彼此珍惜，所以不轻易放弃，因为懂得经营爱情，所以能让感情长久。可婚姻比爱情更复杂，也更现实，若想让婚后的几十年长久且甜蜜的走下去，别忘了理解，包容与信任，也别忘了保持良好的互动。',
				
				),
		'48'=>array(
				'pic'=>'http://app.qpic.cn/mblogpic/9f86dfca50054cd51106/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfxwp70e7j20c60d5dhj.jpg',
				'text'=>'你爱的人',
				'range'=>'48~60分',
				'remark'=>'你是一个对爱情很有毅力的人，有一颗坚如磐石的心。只要认定一个人，便会付出一切努力去得到他。宁为玉碎不为瓦全，便是你的写照，你的坚韧能让对方感动而对你倾心，但同样过于执着，不择手段去得到他的人，只会让你的婚姻很不堪。幸福与彼此折磨的结局就在你的一念之间，始终坚持真诚与爱才能得到你想要得到的一切。婚姻不是爱的终点，你能得到的幸福应该更多。',
				
				),
		'52'=>array(
				'pic'=>'http://app.qpic.cn/mblogpic/048109c4c7e1ecc119bc/2000',
				'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebfxwrk5ksj20c60d5dhj.jpg',
				'text'=>'你爱的人',
				'range'=>'48~60分',
				'remark'=>'你是一个对爱情很有毅力的人，有一颗坚如磐石的心。只要认定一个人，便会付出一切努力去得到他。宁为玉碎不为瓦全，便是你的写照，你的坚韧能让对方感动而对你倾心，但同样过于执着，不择手段去得到他的人，只会让你的婚姻很不堪。幸福与彼此折磨的结局就在你的一念之间，始终坚持真诚与爱才能得到你想要得到的一切。婚姻不是爱的终点，你能得到的幸福应该更多。',
				
				),
		'56'=>array(
				'pic'=>'http://app.qpic.cn/mblogpic/35465ff4a3494b2c872a/2000',
				'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebfxwrzr1hj20c60d5gnb.jpg',
				'text'=>'你爱的人',
				'range'=>'48~60分',
				'remark'=>'你是一个对爱情很有毅力的人，有一颗坚如磐石的心。只要认定一个人，便会付出一切努力去得到他。宁为玉碎不为瓦全，便是你的写照，你的坚韧能让对方感动而对你倾心，但同样过于执着，不择手段去得到他的人，只会让你的婚姻很不堪。幸福与彼此折磨的结局就在你的一念之间，始终坚持真诚与爱才能得到你想要得到的一切。婚姻不是爱的终点，你能得到的幸福应该更多。',
				
				),
		'60'=>array(
				'pic'=>'http://app.qpic.cn/mblogpic/6fa7d52c7e42df6e6660/2000',
				'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebfxwsgy8hj20c60d5wg7.jpg',
				'text'=>'你爱的人',
				'range'=>'48~60分',
				'remark'=>'你是一个对爱情很有毅力的人，有一颗坚如磐石的心。只要认定一个人，便会付出一切努力去得到他。宁为玉碎不为瓦全，便是你的写照，你的坚韧能让对方感动而对你倾心，但同样过于执着，不择手段去得到他的人，只会让你的婚姻很不堪。幸福与彼此折磨的结局就在你的一念之间，始终坚持真诚与爱才能得到你想要得到的一切。婚姻不是爱的终点，你能得到的幸福应该更多。',
				
				),
		);
$result = $resultscore[$score];
if (!$result) {
	$result = $resultscore[array_rand($resultscore)];
}

if (strtolower($result_pic_pf) == 'sina') {
	$result ['pic'] = $result ['pic_sina']?$result ['pic_sina']:$result ['pic'];
}
$img_path='./imgs/result/'.$score.'.png';
$img=getImgType($img_path);

$content='我刚测试了谁会和你结婚，原来我将会跟【'.$result['text'].'】结婚！感觉这个测试好准啊！想知道你会和什么样的人结婚，赶快来试试吧！测试地址： '.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams['pic'] = $result['pic'];
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->谁会和你结婚";
$pagrams[summary] = "爱我的人为我付出一切，我却为我爱的人流泪狂乱心碎，爱与被爱同样受罪 ，怎么抉择呢？快来测试一下吧！".$pagrams[url];
$rt_info=post_send2($pagrams);

$rt_info['url'] = $url;
$rt_info ['result_img'] = $result['pic'];
$rt_info['result_title'] =  '【'.$result['text'].'】';

setcookie ( 'app_'.$app_name.'_score', NULL, -3000, '/' );

if (is_mobile ()) {
	require_once './result_mobile.php';
} else {
	require_once './result.php';
}
?>
