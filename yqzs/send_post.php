<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num1=str_to_num($nick,$app_name);
$num2=str_to_num($num1,$nick);
$num3=str_to_num($num2,$nick);

$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,29,140,10,0,20,'19f');
$img=createImg($img,$num1,185,208,13,0,40,'f37','katong');
$img=createImg($img,$num2,185,263,13,0,40,'f37','katong');
$img=createImg($img,$num3,185,318,13,0,40,'f37','katong');

$content='哈哈~经过测试，这就是'.$name.'2013年的综合运气指数噢~！想知道2013年你什么运气会比较好？财运？桃花运？还是事业运？快来算算吧~~#2013综合运气指数#：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->2013综合运气指数";
$pagrams[summary] = "想不想知道在2013年自己的财运，桃花运，事业运如何？快来测测你这一年的综合运气指数吧~~~".$pagrams[url];
$rt_info=post_send2($pagrams);