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
	case 0:$str='胆小';break;
	case 1:$str='没情调';break;
	case 2:$str='思路缓慢';break;
	case 3:$str='情商低';break;
	case 4:$str='骄傲自大';break;
	case 5:$str='大便后不洗手';break;
	case 6:$str='赖床';break;
	case 7:$str='饭前不洗手';break;
	case 8:$str='一双袜子穿七天';break;
	case 9:$str='懒货';break;
	case 10:$str='吃货';break;
	case 11:$str='懒货！';break;
	case 12:$str='喜欢闻臭袜子';break;
	case 13:$str='爱占小便宜';break;
	case 14:$str='爱羡慕嫉妒恨';break;
	case 15:$str='迟到早退';break;
	case 16:$str='喜欢指挥人';break;
	case 17:$str='睡前不洗脸';break;
	case 18:$str='经常撒谎';break;
	case 19:$str='爱做春梦';break;
	case 20:$str='吃饭时放屁';break;
	case 21:$str='心眼多';break;
	case 22:$str='唱歌像鬼嚎';break;
	case 23:$str='做事半途而废';break;
	case 24:$str='一个月不洗头';break;
	case 25:$str='出口成脏';break;
	case 26:$str='目中无人';break;
	case 27:$str='好色';break;
	case 28:$str='吃货';break;
	case 29:$str='好色';break;
	case 30:$str='爱占小便宜';break;
	case 31:$str='大便后不洗手';break;
	case 32:$str='心眼多';break;
	case 33:$str='赖床';break;
}


$str_left=40;
$str_len=mb_strlen($str,'UTF8');
switch($str_len)
{
	case 2:$f_size=60;$str_left=65;break;
	case 3:$f_size=53;break;
	case 4:$f_size=40;break;
	case 5:$f_size=32;break;
	case 6:$f_size=27;break;
	case 7:$f_size=23;break;
}
$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,90,13,0,14,'fff');
$img=createImg($img,$str,$str_left,190,13,0,$f_size,'fff','katong');

$content='刚刚在这个网站测出'.$name.'居然有这样的坏毛病，/偷笑，快来看看你或者你的好友有什么坏毛病吧~#测测你的坏毛病#：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->测测你的坏毛病";
$pagrams[summary] = "每个人都有各种大大小小的坏毛病，快来测测你的坏毛病是什么吧~（还可以测好友们的哦~~~）".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$str.'】';