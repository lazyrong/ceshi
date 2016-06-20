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
	case 0:$str='34岁';break;
	case 1:$str='35岁';break;
	case 2:$str='36岁'; break;
	case 3:$str='37岁';break;
	case 4:$str='38岁';break;
	case 5:$str='39岁';break;
	case 6:$str='40岁';break;
	case 7:$str='41岁';break;
	case 8:$str='29岁';break;
	case 9:$str='43岁';break;
	case 10:$str='44岁';break;
	case 11:$str='45岁';break;
	case 12:$str='46岁';break;
	case 13:$str='47岁';break;
	case 14:$str='48岁';break;
	case 15:$str='49岁';break;
	case 16:$str='50岁';break;
	case 17:$str='51岁';break;
	case 18:$str='30岁';break;
	case 19:$str='53岁';break;
	case 20:$str='54岁';break;
	case 21:$str='55岁';break;
	case 22:$str='56岁';break;
	case 23:$str='57岁';break;
	case 24:$str='58岁';break;
	case 25:$str='59岁';break;
	case 26:$str='60岁';break;
	case 27:$str='61岁';break;
	case 28:$str='62岁';break;
	case 29:$str='26岁';break;
	case 30:$str='64岁';break;
	case 31:$str='65岁';break;
	case 32:$str='66岁';break;
	case 33:$str='67岁';break;
}
$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,90,13,0,14,'fff');
$img=createImg($img,$str,70,190,13,0,60,'fff','katong');

$content='/偷笑，刚刚在这个网站测出'.$name.'要'.$str.'才能发财。。真是没想到啊~哈哈。。快来看看#你什么时候才能发财#~：'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你什么时候才能发财";
$pagrams[summary] = "人人都关心自己什么时候能发财，但每个人财运状况不一样，我们从名字来分析一下，您什么时候能走上致富之路吧。".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$str.'】';