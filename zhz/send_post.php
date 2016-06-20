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
	if($num>25)
	{
		$num=ceil($num/4);
	}
}
else
{
	$folder='boy';
	if($num>9)
	{
		$num=ceil($num/11);
	}
}


$img_path='./imgs/'.$folder.'/'.$num.'.jpg';
$img=getImgType($img_path);
$img=createImg($img,$nick,115,28,13,0,14,'000');


$content='/偷笑，原来'.$name.'最像《甄嬛传》中的这个人物！《甄嬛传》作为近期最不脑残的宫斗剧，触动了你的哪根神经？快来测测#你最像甄嬛传中的谁#吧~：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你最像甄嬛传中的谁";
$pagrams[summary] = "《甄嬛传》作为近期最不脑残的宫斗剧，触动了你的哪根神经？你的心计，为人处世像后宫中的哪个妃子？".$pagrams[url];
$rt_info=post_send2($pagrams);