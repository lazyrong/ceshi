<?
$infos = get_user_info ();
$name = $infos ['name'];
$nick = $infos ['nick'];
$url = $infos ['url'];
$left_px = get_left_px ( $nick );
$num = str_to_num ( $nick, $app_name );

if ($num > 20) {
	$num = ceil ( $num / 5 );
}
if ($num == 0) {
	$num = 1;
}
if ($num == 1) {
	$str = '矮油，还挺专一嘛~';
}
if ($num == 2) {
	$str = '一个是现在爱的，还有一个呢？';
}
if ($num >= 3 && $num < 6) {
	$str = '嗯，还算正常。。。';
}
if ($num >= 6 && $num < 10) {
	$str = '您感情真丰富。。。';
}
if ($num >= 10 && $num < 16) {
	$str = '您今生注定是一个有故事的人。';
}
if ($num >= 16 && $num <= 20) {
	$str = '您的人生可以写成书出版了。';
}

$img_path = './imgs/app_img.png';
$img = getImgType ( $img_path );
// $img=createImg($img,'@'.$nick,$left_px,90,13,0,14,'fff');
$img = createImg ( $img, $nick, $left_px, 90, 13, 0, 14, 'fff' );
$img = createImg ( $img, $num . '个', 90, 183, 13, 0, 60, 'fff', 'katong' );
$img = createImg ( $img, $str, 15, 238, 11, 0, 14, 'fff' );

$content = '/偷笑 OMG，经过预测，原来' . $name . '一生可能会爱上' . $num . '个人，还不赶快来看看你#一生会爱上多少人#~：' . $url;
$content = $content . ' ，你也试试吧！';
$pagrams = array ();
$pagrams [content] = $content;
$pagrams [img] = $img;
$pagrams [type] = 'png';
$pagrams [url] = $url;
$pagrams [title] = "点击测试->一生会爱上多少人";
$pagrams [summary] = "每个人的一生都有属于自己的几段感情~你的一生会爱上几个人？快来测测吧~不准不要钱哦，亲~" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_title'] = '【' . $num . '个】';