<?
$infos=get_user_info();
$name=$_COOKIE['v_name'];
$nick=$_COOKIE['v_nick'];
$url=$infos['url'];
$nick_len=mb_strlen($nick,'UTF8');
switch($nick_len)
{
	case 1:$left_px=145;break;
	case 2:$left_px=130;break;
	case 3:$left_px=118;break;
	case 4:$left_px=108;break;
	case 5:$left_px=96;break;
	case 6:$left_px=87;break;
	case 7:$left_px=77;break;
	case 8:$left_px=67;break;
	case 9:$left_px=57;break;
	case 10:$left_px=47;break;
	case 11:$left_px=37;break;
	case 12:$left_px=27;break;
	default:$left_px=27;
}

$score=0;
$i=1;
while($i<2)
{
	$score=$score+$_POST['i'.$i];
	$i++;
}

if ($score == 1) {
	$pic = 'http://app.qpic.cn/mblogpic/a706f079bdb4657bc702/2000';
	$pic_sina = 'http://ww3.sinaimg.cn/mw690/84f58744gw1ebeun6t5i6j208q0almxv.jpg';
} else if ($score == 2) {
	$pic = 'http://app.qpic.cn/mblogpic/7e84c95d48858d652792/2000';
	$pic_sina = 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebeun79kilj208q0almxs.jpg';
} else if ($score == 3) {
	$pic = 'http://app.qpic.cn/mblogpic/6010b331d861cfa23c62/2000';
	$pic_sina = 'http://ww2.sinaimg.cn/mw690/84f58744gw1ebeun8eaigj208q0al3z5.jpg';
} else if ($score == 4) {
	$pic = 'http://app.qpic.cn/mblogpic/a9c7602aabbb1d74d780/2000';
	$pic_sina = 'http://ww1.sinaimg.cn/mw690/84f58744gw1ebeunb1wacj208q0alq3f.jpg';
}
if (strtolower($result_pic_pf) == 'sina') {
	$pic = $pic_sina;
}
$img_path='./imgs/'.$score.'.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,130,80,12,0,16,'f00');

$content='/惊讶原来我对待爱情的态度是这样的！想知道自己是不是一个敢于追求爱情的人，对爱情的胆子大不大？快来测试一下吧！#爱情勇敢度测试#：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
$pagrams['pic'] = $pic;
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->测试你的爱情勇敢度";
$pagrams[summary] = "你是一个敢于追求爱情的人吗？别不好意思。追求爱是天性。今天用一个测试的小游戏来测量一下自己对爱情的胆子大不大。".$pagrams[url];

$rt_info=post_send2($pagrams);
$rt_info['result_img'] = $pic;