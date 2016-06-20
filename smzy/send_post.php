<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$left_px=get_left_px($nick);
$num=str_to_num($nick,$app_name);

if($num>19)
{
	$num=ceil($num/5);
}

$r_str[0]='  黑客';
$r_str[1]='魔术师';
$r_str[2]='  间谍';
$r_str[3]=' 杀手';
$r_str[4]='占卜师';
$r_str[5]='  侦探';
$r_str[6]='  巫师';
$r_str[7]='  神偷';
$r_str[8]='黑社会';
$r_str[9]='  黑客';
$r_str[10]='  卧底';
$r_str[11]='  骗子';
$r_str[12]='  道士';
$r_str[13]='催眠师';
$r_str[14]='占星师';
$r_str[15]='黑社会';
$r_str[16]='  骗子';
$r_str[17]='  卧底';
$r_str[18]='  间谍';
$r_str[19]='  特工';
$r_str[20]='  骗子';


$str=$r_str[$num];
$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,90,13,0,14,'fff');
$img=createImg($img,$str,30,190,13,0,60,'fff','katong');

$content='/偷笑 OMG，原来在现在最神秘的职业中，最适合'.$name.'的居然是'.$str.'！你是否也向往那些带有神秘色彩的职业？！快来看看#哪个神秘职业最适合你#吧~：'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->哪个神秘职业最适合你";
$pagrams[summary] = "每天千篇一律的工作有没有让你感到厌倦？你是否也向往那些带有神秘色彩的职业？其实，从事那些神秘职业原本也都是些普通人，测试一下，看看你的将来有可能从事那种神秘职业呢？".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$str.'】';