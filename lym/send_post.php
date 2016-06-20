<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);

$sex=get_sex();

if($sex=='2')//如果为女
{
	if($num>33)
	{
		$num=ceil($num/3);
	}
}
else
{
	if($num>50)
	{
		$num=ceil($num/2);
	}
}
if($num>50){
	$num = 50;
}

$img_path='./imgs/'.$num.'.jpg';
$img=getImgType($img_path);
$img=createImg($img,$nick,115,28,13,0,14,'000');


$content='/偷笑，原来【'.$nick.'】隐秘的另一面是这样的啊！谁也不知道啊~，想知道你或Ta隐秘的另一面是什么样的吗？输入名字就能马上揭示Ta不为人知的另一面哦~~~~#揭示你隐秘的另一面#地址：'.$url;
$content=$content.' ，你也试试吧！';

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->揭示你隐秘的另一面";
$pagrams[summary] = "每个人都有不为人知的隐秘的另一面，输入自己或Ta的名字，就能揭示他的隐秘另一面了~".$pagrams[url];
$rt_info=post_send2($pagrams);