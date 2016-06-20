<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$case=rand(1,6);
$num1=rand(500,3000);
$num2=rand(120,1000);
$num3=rand(30,800);

$nick=$nick.'：';
$p1="在全世界将近 70 亿人口中,";
switch($case)
{
	case 1:$p2="有 $num1 人认识你名字！";$p3="有 $num2 人有你的手机号码！";$p4="有 $num3 人看过你的艳照！";$p5="虽然都是从相亲网站看到的！";
	break;
	case 2:$p2="有 $num1 人知道你的名字！";$p3="有 $num2 人偷偷暗恋你！";$p4="有 $num3 人给你写过情书！";$p5="恭喜你可以练习签名了~";
	break;
	case 3:$p2="有 $num1 人认识的你网名！";$p3="有 $num2 人看过你的帖子！";$p4="有 $num3 人踩过你的帖！";$p5="别再到处发你的照片了~~！";
	break;
	case 4:$p2="有 $num1 人认识你的名字！";$p3="有 $num2 人惦记你的音容！";$p4="有 $num3 人想给你毁容！";$p5="你还是找个地方躲起来吧~";
	break;
	case 5:$p2="有 $num1 人知道的你大名！";$p3="有 $num2 人曾注视过你10分钟！";$p4="有 $num3 人曾被你雷到过！";$p5="大家都说你长得很幽默~~！";
	break;
	case 6:$p2="有 $num1 人认识的你大名！";$p3="有 $num2 人找你签过名！";$p4="有 $num3 人曾追过你！";$p5="这些年，你还在躲债吗？";
	break;

}

$img_path='./imgs/zmd.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,82,120,20,-4,16,'63a','katong');
$img=createImg($img,$p1,82,170,18,0,18,'a60','katong');
$img=createImg($img,$p2,82,205,18,0,18,'19f','katong');
$img=createImg($img,$p3,82,240,18,0,18,'f90','katong');
$img=createImg($img,$p4,82,275,18,0,18,'f37','katong');
$img=createImg($img,$p5,82,310,18,0,18,'790','katong');

$content='【知名度测试】'.$nick.'，在全世界将近70亿人口中，'.$p2.$p3.$p4.$p5.'#测测你的知名度#：'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->测测你的知名度";
$pagrams[summary] = "你的知名度如何？快来分析下吧！系统会根据你的微博信息精确分析出你的知名度哦~".$pagrams[url];
$rt_info=post_send2($pagrams);