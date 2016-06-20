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


if ($num == '0') {
	$pic = 'http://app.qpic.cn/mblogpic/f40596f4a612f10247ee/2000';
	$result='http://app.qpic.cn/mblogpic/982988683c6f80f635ee/2000';
	$desc='断：不收取不需要的东西；舍：处理掉没用的东西；离：放下对物质的迷恋。';
	$lian = '断舍离';
}
if ($num == '1') {
	$pic = 'http://app.qpic.cn/mblogpic/14de53da275ac7926778/2000';
	$result='http://app.qpic.cn/mblogpic/36ff3a1951dffc447bb0/2000';
	$desc='任何人和人之间的关系，都可以用三个词来形容：你好，谢谢，再见。所以，要珍惜，不要惋惜。';
	$lian = '你谢见';
}
if ($num == '2') {
	$pic = 'http://app.qpic.cn/mblogpic/c969e3489218e4f892ea/2000';
	$result='http://app.qpic.cn/mblogpic/15b2a9df4b6144a2e110/2000';
	$desc='无论你怎样理解，自由都不只是一个概念。新的一年，在为生活奔波的路上，请别忘了它。';
	$lian = '自由';
}
if ($num == '3') {
	$pic = 'http://app.qpic.cn/mblogpic/4c5344732d88b07fb3ba/2000';
	$result='http://app.qpic.cn/mblogpic/b6cc1df2f7e5454e9a8c/2000';
	$desc='新的一年，你会出现大的转机，无论过往多么失意或伤心，主导权，都掌握在自己手里。';
	$lian = '转运';
}
if ($num == '4') {
	$pic = 'http://app.qpic.cn/mblogpic/cd767230e31bcb201a46/2000';
	$result='http://app.qpic.cn/mblogpic/09090994ece0b805d00c/2000';
	$desc='虽然是老调重弹，但能坦然面对孤独的人，不会活得太糟糕。';
	$lian = '孤独';
}
if ($num == '5') {
	$pic = 'http://app.qpic.cn/mblogpic/c9823908f3cec94c1304/2000';
	$result='http://app.qpic.cn/mblogpic/c994b344ec25eaf2e2c0/2000';
	$desc='人和人，其实是凭勇气分出区别的。我不想给你其他祝愿，只愿你有勇气，在生活中选择面前。';
	$lian = '勇气';
}
if ($num == '6') {
	$pic = 'http://app.qpic.cn/mblogpic/214b4a7586b8d6439456/2000';
	$result='http://app.qpic.cn/mblogpic/49a83d27e0a7136fbac4/2000';
	$desc='知足不是放弃努力和梦想，而是要你学会珍惜。新的一年，从珍惜眼前的人和物开始。';
	$lian = '知足';
}
if ($num == '7') {
	$pic = 'http://app.qpic.cn/mblogpic/03660577b8c283b62e46/2000';
	$result='http://app.qpic.cn/mblogpic/2992d057c9f4cee68eb2/2000';
	$desc='旅行不仅是看风景，更是过另一种生活。新的一年，让一切喧嚣远去，在你途中，享受崭新的每一刻。';
	$lian = '旅行';
}
if ($num == '8') {
	$pic = 'http://app.qpic.cn/mblogpic/575d61c658c7709f389c/2000';
	$result='http://app.qpic.cn/mblogpic/3625c20395c09361bf6c/2000';
	$desc='保持个性，不忘初心，做你想做的事，成为你想成为的人，今年的你，有钱，任性！';
	$lian = '任性';
}
if ($num == '9') {
	$pic = 'http://app.qpic.cn/mblogpic/7cf5d5fdc0430445bd3a/2000';
	$result='http://app.qpic.cn/mblogpic/2364f4a64385020ddd90/2000';
	$desc='可是，谁不是下意识地想靠近温柔的人呢？虽然很难，新年，试着做一个温柔的人吧。';
	$lian = '温柔';
}


// $img_path='./imgs/'.$folder.'/'.$num.'.jpg';
// $img=getImgType($img_path);

$content = '2015我的新年签是：' . $lian."，祝福我吧！";
$pagrams = array ();
$pagrams [content] = $content;
// $pagrams[img] = $img;
// $pagrams[type] = 'jpg';
$pagrams ['pic'] = $pic;
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "[我的新年签：".$lian."]";
$pagrams [summary] = $desc;
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_img'] = $result;
$rt_info ['result_title'] = '【' . $lian . '】';