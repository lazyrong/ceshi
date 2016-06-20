<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);
$left_px = 67;
if ($num < 10) {
	$left_px = 112;
}
$retstr = "";
if ($num < 20) {
	$retstr = '恭喜您获得光棍荣誉证书~~';
} else if ($num < 40) {
	$retstr = '去街上见一对拆一对吧~';
} else if ($num < 50) {
	$retstr = '请君待明年~~';
} else if ($num < 60) {
	$retstr = '丘比特射箭时手抖了下~~';
} else if ($num < 70) {
	$retstr = '暮然回首,大叔大娘有无数~';
} else if ($num < 80) {
	$retstr = '脱光无限好，只是易感冒。';
} else if ($num < 90) {
	$retstr = '恭喜！您的春天来了~~';
} else {
	$retstr = '今年光棍节注定与您无缘！';
}
$img_path='./imgs/result.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,37,82,12,0,13.5,'19f');
$img=createImg($img,$num,$left_px,260,11,0,90,'f37','yahei');
$img=createImg($img,$retstr,35,335,12,0,13.5,'a60');

$content='OMG，经过测试，今年光棍节'.$name.'的脱光指数为'.$num.'！'.$retstr.' /偷笑。。。一年一度的苦逼光棍节又来了~今年你能脱光吗？快来测测你的光棍节脱光指数吧~~测试地址：'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->光棍节脱光指数";
$pagrams[summary] = "一年一度的苦逼光棍节又来了~今年你能脱光吗？快来测测你的脱光指数吧~~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【脱光指数：'.$num.'！'.$retstr.'】';