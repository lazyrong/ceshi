<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$left_px=get_left_px($nick);
$num=str_to_num($nick,$app_name);

if($num>9)
{
	$num=ceil($num/10);
}

$sex=get_sex();

if($sex==2)//如果为女
{
	switch($num)
	{
		case 0:$str='大富大贵命';break;
		case 1:$str='一生操劳命';break;
		case 2:$str='悲催人生命';break;
		case 3:$str='受气丫头命';break;
		case 4:$str='潇洒脱俗命';break;
		case 5:$str='红颜祸水命';break;
		case 6:$str='一生平凡命';break;
		case 7:$str='大起大落命';break;
		case 8:$str='千金小姐命';break;
		case 9:$str='  求包养命';break;
		case 10:$str='红颜祸水命';break;
	}
}
else
{
	switch($num)
	{
		case 0:$str='大富大贵命';break;
		case 1:$str='一生操劳命';break;
		case 2:$str='悲催人生命';break;
		case 3:$str='情感纠结命';break;
		case 4:$str='潇洒脱俗命';break;
		case 5:$str='天生少爷命';break;
		case 6:$str='一生平凡命';break;
		case 7:$str='大起大落命';break;
		case 8:$str='天生老爷命';break;
		case 9:$str='情场得意命';break;
		case 10:$str='情感纠结命';break;
	}
}

$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,90,13,0,14,'fff');
$img=createImg($img,$str,45,170,13,0,30,'fff','katong');

if($sex!=2&&$num==5){$str='少爷命';}
if($sex!=2&&$num==8){$str='老爷命';}

$content='/惊恐 不是吧，刚刚在这个网站算出'.$name.'居然是天生'.$str.'！你与生俱来的命运是什么？平凡还是富贵？快来算算#你天生是什么命#吧~：'.$url;
$content=$content.' ，你也试试吧！';

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你天生是什么命";
$pagrams[summary] = "你与生俱来的命运是什么？是天生平凡还是大富大贵？马上来测试 一下你就知道！".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$str.'】';