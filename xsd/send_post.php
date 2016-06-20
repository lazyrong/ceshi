<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);

$sex=get_sex();
/*
if($sex=='2') {
	$folder='girl';
	if($num>7)
	{
		$num=ceil($num/15);
	}
}
else
{
	$folder='boy';
	if($num>7)
	{
		$num=ceil($num/15);
	}
}
if ($num == 0) $num=1;

$img_path='./imgs/'.$folder.'/'.$num.'.jpg';
$img=getImgType($img_path);
// $img=createImg($img,$nick,115,28,13,0,14,'000');
*/
$resultlist = array();
if($sex=='2') {
	$resultlist = array(
		array(
			'pic'=>'http://app.qpic.cn/mblogpic/03eb2464ca9e468523b4/2000',
			'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebeuym48vaj205k07swer.jpg',
			'jieguo'=>'南湘-郭碧婷',
			'text'=>'',
			'img' => './imgs/girl/4.jpg'
		),
		array(
			'pic'=>'http://app.qpic.cn/mblogpic/8ef621adc85aedf7707a/2000',
			'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebeuynd4m8j205k07sjrj.jpg',
			'jieguo'=>'杨洋-林泉',
			'text'=>'',
			'img' => './imgs/girl/6.jpg'
		),
		array(
			'pic'=>'http://app.qpic.cn/mblogpic/42851fdeb854d823341c/2000',
			'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebeuykwsx6j205k07s74h.jpg',
			'jieguo'=>'Kitty-商侃',
			'text'=>'',
			'img' => './imgs/girl/2.jpg'
		),
		array(
			'pic'=>'http://app.qpic.cn/mblogpic/6a77f408b1598a025a44/2000',
			'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebeuymuddaj205k07st8y.jpg',
			'jieguo'=>'唐宛如-谢依霖',
			'text'=>'',
			'img' => './imgs/girl/5.jpg'
		),
		array(
			'pic'=>'http://app.qpic.cn/mblogpic/0e60b3772cf230f3a1c6/2000',
			'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebeuyjsmtaj205k07sglr.jpg',
			'jieguo'=>'林萧-杨幂',
			'text'=>'',
			'img' => './imgs/girl/1.jpg'
		),
		array(
			'pic'=>'http://app.qpic.cn/mblogpic/f809578a9ce559b01576/2000',
			'pic_sina'=>'http://ww2.sinaimg.cn/mw690/84f58744gw1ebeuylpr1pj205k07smxd.jpg',
			'jieguo'=>'顾里-郭采洁',
			'text'=>'',
			'img' => './imgs/girl/3.jpg'
		),
		array(
			'pic'=>'http://app.qpic.cn/mblogpic/c0d7e5f4dec7888886d4/2000',
			'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebeuynzsatj205k07sdg1.jpg',
			'jieguo'=>'叶传萍-王琳',
			'text'=>'',
			'img' => './imgs/girl/7.jpg'
		),
	);
} else {
	$resultlist = array(
		array(
			'pic'=>'http://app.qpic.cn/mblogpic/efdc5314228a7bc4e3bc/2000',
			'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebeuxfsx10j205k07sq35.jpg',
			'jieguo'=>'涧溪-李锐铭',
			'text'=>'',
			'img' => './imgs/boy/4.jpg'
		),
		array(
			'pic'=>'http://app.qpic.cn/mblogpic/f6cd1fb35909b50191f2/2000',
			'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebeux9zuu5j205k07sgls.jpg',
			'jieguo'=>'顾源-柯震东',
			'text'=>'',
			'img' => './imgs/boy/1.jpg'
		),
		array(
			'pic'=>'http://app.qpic.cn/mblogpic/58b3a1780bd50cf60e80/2000',
			'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebeuxk4k3nj205k07swep.jpg',
			'jieguo'=>'卫海-杜天浩',
			'text'=>'',
			'img' => './imgs/boy/5.jpg'
		),
		array(
			'pic'=>'http://app.qpic.cn/mblogpic/f860bb6c571bca5cdbc0/2000',
			'pic_sina'=>'http://ww4.sinaimg.cn/mw690/84f58744gw1ebeuxdocjaj205k07swep.jpg',
			'jieguo'=>'崇光-陈学东',
			'text'=>'',
			'img' => './imgs/boy/2.jpg'
		),
		array(
			'pic'=>'http://app.qpic.cn/mblogpic/411ab3f8f359346c3164/2000',
			'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebeuxmm85dj205k07sglu.jpg',
			'jieguo'=>'席城-姜潮',
			'text'=>'',
			'img' => './imgs/boy/6.jpg'
		),
		array(
			'pic'=>'http://app.qpic.cn/mblogpic/9a6850c5df73dfb83a00/2000',
			'pic_sina'=>'http://ww1.sinaimg.cn/mw690/84f58744gw1ebeuxeky13j205k07st8u.jpg',
			'jieguo'=>'宫洺-凤小岳',
			'text'=>'',
			'img' => './imgs/boy/3.jpg'
		),
		array(
			'pic'=>'http://app.qpic.cn/mblogpic/3bc3f07f129450a30ef6/2000',
			'pic_sina'=>'http://ww3.sinaimg.cn/mw690/84f58744gw1ebeuxpdylnj205k07sgly.jpg',
			'jieguo'=>'导演-郭敬明',
			'text'=>'',
			'img' => './imgs/boy/7.jpg'
		),
	);
}
$num = $num % count($resultlist);
$result = $resultlist[$num];
if (!$result) {
	$result = $resultlist[array_rand($resultlist)];
}
if (strtolower($result_pic_pf) == 'sina') {
	$result ['pic'] = $result ['pic_sina']?$result ['pic_sina']:$result ['pic'];
}
$img=getImgType($result['img']);
$content='/偷笑，哈哈，原来'.$name.'是《小时代》里的这个人物！《小时代》由郭敬明创作导演，热火上映。是一部当下时尚年轻人生活的真实写照。快来测测#你是小时代里的谁#吧~：'.$url.' ，你也试试吧! ';

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams['pic'] = $result['pic'];
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你是小时代里的谁";
$pagrams[summary] = "《小时代》由郭敬明创作导演，热火上映。是一部当下时尚年轻人生活的真实写照。快来测测#你是小时代里的谁#吧~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] = $result['jieguo'];
$rt_info['result_img'] = $result['pic'];