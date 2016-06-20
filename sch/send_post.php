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
while($i<16)
{
	$score=$score+$_POST['i'.$i];
	$i++;
}


if($score>=0&&$score<=20)
{
	$jieguo="完全不懂大家在说啥～好辣啊！";
}

if($score>20&&$score<=40)
{
	$jieguo="你的四川话貌似还欠点火候，再学习学习吧～";
}

if($score>40&&$score<=60)
{
	$jieguo="到四川有几年了吧～有些川椒味喽～辣辣辣～";
}

if($score>60&&$score<=80)
{
	$jieguo="你的四川话很不错，可以自由行走四川了～～";
}
if($score>80&&$score<=100)
{
	$jieguo="你是四川本地人吧～！完全难不倒你啊～膜拜下～";
}

$score=''.$score.'分';

$img_path='./imgs/sch.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,108,155,12,0,16,'f00','yahei');
$img=createImg($img,$score,170,220,12,0,50,'f00','yahei');
$img=createImg($img,$jieguo,90,265,11,0,20,'f00','yahei');

$content='我刚参加了《四川话等级考试》，我考了'.$score.'分，够辣吧~辣辣辣，推荐给大家玩玩， 测试LINK：'.$url;


$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->四川话等级考试";
$pagrams[summary] = "四川话四级测试，回答15道题，就能测出你的四川话地道不地道~".$pagrams[url];
$rt_info=post_send2($pagrams);