<?
$infos = get_user_info ();
$name = $infos ['name'];
$nick = $infos ['nick'];
$url = $infos ['url'];
$num = str_to_num ( $nick, $app_name );

$num = 0;
$i = 1;
while ( $i < 2 ) {
	$num = $num + $_POST ['i' . $i];
	$i ++;
}
$num = strval ( $num );
if ($num == '1') {
	$pic = 'http://app.qpic.cn/mblogpic/97f8a544e14b46d96a40/2000';
	$xingzuo = '白羊座';
	$lian = '双鱼座';
}
if ($num == '2') {
	$pic = 'http://app.qpic.cn/mblogpic/f00df13d9ac0ed6e5adc/2000';
	$xingzuo = '金牛座';
	$lian = '巨蟹座';
}
if ($num == '3') {
	$pic = 'http://app.qpic.cn/mblogpic/c752ab4a5d81311cd96c/2000';
	$xingzuo = '双子座';
	$lian = '射手座';
}
if ($num == '4') {
	$pic = 'http://app.qpic.cn/mblogpic/68084536247ce263c89c/2000';
	$xingzuo = '巨蟹座';
	$lian = '双子座';
}
if ($num == '5') {
	$pic = 'http://app.qpic.cn/mblogpic/e74f33492085bfd131d6/2000';
	$xingzuo = '狮子座';
	$lian = '魔羯座';
}
if ($num == '6') {
	$pic = 'http://app.qpic.cn/mblogpic/90281abf300ff24a9856/2000';
	$xingzuo = '处女座';
	$lian = '水瓶座';
}
if ($num == '7') {
	$pic = 'http://app.qpic.cn/mblogpic/3b81d135d5b2a2f53f2e/2000';
	$xingzuo = '天秤座';
	$lian = '狮子座';
}
if ($num == '8') {
	$pic = 'http://app.qpic.cn/mblogpic/789f3af233a3e9e9bace/2000';
	$xingzuo = '天蝎座';
	$lian = '天秤座';
}
if ($num == '9') {
	$pic = 'http://app.qpic.cn/mblogpic/677d593366ce9f852ad0/2000';
	$xingzuo = '射手座';
	$lian = '金牛座';
}
if ($num == '10') {
	$pic = 'http://app.qpic.cn/mblogpic/8fecfa1fc8e68f759f48/2000';
	$xingzuo = '魔羯座';
	$lian = '天蝎座';
}
if ($num == '11') {
	$pic = 'http://app.qpic.cn/mblogpic/54f21c6648d3bdc53832/2000';
	$xingzuo = '水瓶座';
	$lian = '白羊座';
}
if ($num == '12') {
	$pic = 'http://app.qpic.cn/mblogpic/f1a81f79b9fab09a403c/2000';
	$xingzuo = '双鱼座';
	$lian = '处女座';
}

$img_path='./imgs/'.$num.'.jpg';
$img=getImgType($img_path);

$content = '【哪个星座在暗恋你？】暗恋是最美的恋爱，你暗恋的人也可能正在暗恋着你哦~根据测试，原来' . $lian . '的某个人暗恋着' . $xingzuo . '的我/害羞 想知道暗恋你的人是谁吗？快来测试#暗恋你的星座#吧！【测试地址->' . $url . '】';
$content = $content . ' ，你也试试吧！';

$pagrams = array ();
$pagrams [content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
$pagrams ['pic'] = $pic;
$pagrams [url] = $url;
$pagrams [title] = "点击测试->暗恋你的星座";
$pagrams [summary] = "【哪个星座在暗恋你？】通过对你的星座性格进行分析，找出那个暗恋你的星座有缘人~测试地址：" . $pagrams [url];
$rt_info = post_send3 ( $pagrams );
$rt_info ['result_img'] = $pic;
$rt_info ['result_title'] = '【' . $lian . '】';