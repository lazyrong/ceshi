<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$left_px=get_left_px($nick);
$num=str_to_num($nick,$app_name);

if($num>33)
{
	$num=ceil($num/3);
}

switch($num)
{
	case 0:$str='赵';break;
	case 1:$str='钱';break;
	case 2:$str='孙'; break;
	case 3:$str='李';break;
	case 4:$str='周';break;
	case 5:$str='吴';break;
	case 6:$str='郑';break;
	case 7:$str='王';break;
	case 8:$str='冯';break;
	case 9:$str='陈';break;
	case 10:$str='蒋';break;
	case 11:$str='沈';break;
	case 12:$str='韩';break;
	case 13:$str='杨';break;
	case 14:$str='朱';break;
	case 15:$str='秦';break;
	case 16:$str='许';break;
	case 17:$str='何';break;
	case 18:$str='吕';break;
	case 19:$str='张';break;
	case 20:$str='金';break;
	case 21:$str='谢';break;
	case 22:$str='邹';break;
	case 23:$str='章';break;
	case 24:$str='苏';break;
	case 25:$str='马';break;
	case 26:$str='余';break;
	case 27:$str='万';break;
	case 28:$str='宋';break;
	case 29:$str='黄';break;
	case 30:$str='罗';break;
	case 31:$str='胡';break;
	case 32:$str='毛';break;
	case 33:$str='彭';break;
}

$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,89,90,13,0,14,'fff');
$img=createImg($img,$str,240,170,13,0,60,'fff');



$content='OMG....刚刚在这个网站测出'.$name.'未来的另一半姓什么了，在茫茫人海中,你找到你的另一半了吗？快来测测#你的另一半姓什么#吧~测试地址：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你的另一半姓什么";
$pagrams[summary] = "想知道你未来的另一半是姓什么吗？是姓赵，还是姓王？赶快来测试一下吧！~~~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info ['result_title'] = '【'.$str.'】';