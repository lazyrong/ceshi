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

if($age<30)
{
	$age=rand(18,28);
	$yzd=rand(60,80).'%';
	$csd=rand(30,40).'%';
	$lhd=rand(5,20).'%';
}

if($age>=30&&$age<50)
{
	$age=rand(25,35);
	$yzd=rand(50,60).'%';
	$csd=rand(40,50).'%';
	$lhd=rand(20,30).'%';
}

if($age>=50&&$age<65)
{
	$age=rand(35,45);
	$yzd=rand(30,40).'%';
	$csd=rand(50,60).'%';
	$lhd=rand(30,40).'%';
}

if($age>=65&&$age<75)
{
	$age=rand(45,55);
	$yzd=rand(20,30).'%';
	$csd=rand(60,80).'%';
	$lhd=rand(50,70).'%';
}

if($age>75)
{
	$age=rand(55,70);
	$yzd=rand(5,20).'%';
	$csd=rand(70,80).'%';
	$lhd=rand(70,90).'%';
}

$img_path='./imgs/xlnl.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,160,12,0,16,'a60');
$img=createImg($img,$age,170,215,11,0,30,'f37','katong');
$img=createImg($img,$yzd,170,268,11,0,22,'f37','katong');
$img=createImg($img,$csd,170,302,12,0,22,'f37','katong');
$img=createImg($img,$lhd,170,338,12,0,22,'f37','katong');

$content='经过科学标准测试，我的心理年龄居然是 '.$age.' 岁！你知道你的心理年龄是多少吗？完成30个专业测试题就能鉴定出，快来试试吧！#专业心理年龄鉴定#：'.$url;

$pagrams = array();

$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->专业心理年龄鉴定";
$pagrams[summary] = "想知道你的心理年龄和实际年龄的差距吗？这是一套专业的心理年龄测试题，一定要耐心做完哦~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info ['result_title'] = '【'.$age.'岁】';