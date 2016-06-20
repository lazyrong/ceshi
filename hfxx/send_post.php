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

$age=0;
$i=1;
while($i<31)
{
	$age=$age+$_POST['i'.$i];
	$i++;
}


if($age>=1000&&$age<=1150)
{
	$score=$age-1000;
	$jieguo="纯直男";
	$sex="帅哥";
}

if($age>1150)
{
	$score=$age-1000;
	$jieguo="心里有“她”";
	$sex="帅哥";
}

if($age>=180&&$age<=300)
{
	$score=$age;
	$jieguo="纯直女";
	$sex="美女";
}

if($age<180)
{
	$score=$age;
	$jieguo="巾帼英雄";
	$sex="美女";
}
if($age>300&&$age<500)
{
	$score=$age;
	$jieguo="非人类";
	$sex="美女";
}
if($age>=500&&$age<1000)
{
	$$score=$age-1000;
	$jieguo="非人类";
	$sex="帅哥";
}


$img_path='./imgs/xlnl.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,160,12,0,16,'a60');
$img=createImg($img,$score,155,215,11,0,26,'f37','yahei');
$img=createImg($img,$jieguo,135,268,11,0,17,'f37','yahei');

$content='经过哈佛标准性向测试，本'.$sex.'居然是：'.$jieguo.' ！你是纯直男还是Gay、是纯直女还是巾帼英雄？想知道你的潜在性别倾向是什么吗？完成30个专业测试题就能鉴定出，微博最火性向测试，快来试试吧！#哈佛性向测试#：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->哈佛性向测试";
$pagrams[summary] = "伟大的灵魂都是雌雄共体的，每个人的心中都潜藏着另一个ta！！哈佛大学性别倾向测试帮你来识别。题目一共30道。".$pagrams[url];
$rt_info=post_send2($pagrams);