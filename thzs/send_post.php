<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);

$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,80,90,10,0,14,'790');
$img=createImg($img,$num,200,163,13,0,40,'19f','katong');

$content='OMG，经过测试，这个居然就是'.$name.'在2015年的桃花运指数~~~~/偷笑。。。2015年是不是你的桃花年？你的Ta今年会不会出现？快来测测吧~~~#2015桃花指数#：'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->2015桃花指数";
$pagrams[summary] = "2015年是不是你的桃花年？你的Ta今年会不会出现？快来测测你今年的桃花运如何吧~~".$pagrams[url];
$rt_info=post_send2($pagrams);