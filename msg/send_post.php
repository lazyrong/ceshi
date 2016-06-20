<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);

$sex=get_sex();

if($sex=='2')//如果为女
{
	$folder='girl';
	if($num>9)
	{
		$num=ceil($num/11);
	}
}
else
{
	$folder='boy';
	if($num>20)
	{
		$num=ceil($num/5);
	}
}


$img_path='./imgs/'.$folder.'/'.$num.'.jpg';
$img=getImgType($img_path);
$img=createImg($img,$nick,115,28,13,0,14,'000');


$content='/偷笑，哈哈，原来'.$name.'命中注定是《梦三国》中的这个英雄人物！你喜欢玩梦三国吗？快来测测#你是梦三国中的谁#吧~：'.$url;
$content=$content.' ，你也试试吧！';

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你是梦三国中的谁";
$pagrams[summary] = "欢迎来到梦三国的世界，在这里，你会发现自己命中注定将成为哪位三国英雄。".$pagrams[url];
$rt_info=post_send2($pagrams);