<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$left_px=get_left_px($nick);
$num=str_to_num($nick,$app_name);

if($num>10)
{
	$num=ceil($num/10);
}

switch($num)
{
	case 0:$year='2013';break;
	case 1:$year='2014';break;
	case 2:$year='2015';break;
	case 3:$year='2016';break;
	case 4:$year='2017';break;
	case 5:$year='2018';break;
	case 6:$year='2019';break;
	case 7:$year='2020';break;
	case 8:$year='2021';break;
	case 9:$year='2022';break;
	case 10:$year='2023';break;
}
$month=rand(1,12);
$date=$year.'年'.$month.'月';
$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,90,13,0,14,'fff');
$img=createImg($img,$date,50,165,13,0,25,'fff');

$content='HOHO~，刚刚在这个网站测出'.$name.'居然会在'.$date.'结婚。。。。剩男剩女们你们准备好了么？敢不敢#测测你会在何时结婚#？地址：'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->测测你何时结婚";
$pagrams[summary] = "剩男剩女们，想知道自己什么时候结婚吗？快来测测看吧！".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$date.'】';