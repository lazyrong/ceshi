<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);

$left_px=40;
$nick_len=mb_strlen($nick,'UTF8');
switch($nick_len)
{
	case 1:$left_px=90;break;
	case 2:$left_px=80;break;
	case 3:$left_px=70;break;
	case 4:$left_px=60;break;
	case 5:$left_px=50;break;
	case 6:$left_px=40;break;
}

if($num>33)
{
	$num=ceil($num/3);
}

$sex=get_sex();
if($sex=='2')//如果为女
{
	$folder='girl';
}
else
{
	$folder='boy';
}

$img_path='./imgs/'.$folder.'/'.$num.'.jpg';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,182,12,0,13.5,'fff');

$content='/偷笑，原来'.$name.'在好友们眼中是这个形象，哈哈哈~~~你知不知道你在好友眼中是什么形象？快来测测吧！#你在好友眼中的形象#：'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你在好友眼中的形象";
$pagrams[summary] = "想不想知道你在你周围的好友眼中是什么形象？快来查一下吧！还可以查到你的好友在其他好友眼中的形象哟~".$pagrams[url];
$rt_info=post_send2($pagrams);