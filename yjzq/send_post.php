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
while($i<8)
{
	$score=$score+$_POST['i'.$i];
	$i++;
}


if($score>=0&&$score<=1)
{
	$jieguo=1;
}

if($score>=2&&$score<=3)
{
	$jieguo=2;
}

if($score>=4&&$score<=5)
{
	$jieguo=3;
}

if($score>=6&&$score<=7)
{
	$jieguo=4;
}



$img_path='./imgs/'.$jieguo.'.PNG';
$img=getImgType($img_path);
$img=createImg($img,$nick,40,50,12,0,16,'a60');

$content='/害羞经过测试，原来我给人的第一印象是这样的！想知道你给别人的第一印象如何，是否能够让别人一眼就忘不掉你？快来测试一下吧！#一见钟情测试#：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;

$pagrams[title] = "点击测试->你会让人一见钟情吗？";
$pagrams[summary] = "想知道对方眼里的你，是漂亮、温柔还是固执？测试一下吧！".$pagrams[url];
$rt_info=post_send2($pagrams);