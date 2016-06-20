<?
//jssj('adj_appstart');
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
	case 0:$str=' 十年';break;
	case 1:$str=' 七年';break;
	case 2:$str='五个月'; break;
	case 3:$str='11个月';break;
	case 4:$str='16个月';break;
	case 5:$str='22个月';break;
	case 6:$str='六个月';break;
	case 7:$str='十三天';break;
	case 8:$str=' 七天';break;
	case 9:$str=' 十天';break;
	case 10:$str='六个月';break;
	case 11:$str=' 三年';break;
	case 12:$str='七个月';break;
	case 13:$str='二十天';break;
	case 14:$str='八十天';break;
	case 15:$str='九个月';break;
	case 16:$str='一个月';break;
	case 17:$str='三个月';break;
	case 18:$str=' 五年';break;
	case 19:$str='五十天';break;
	case 20:$str='四十天';break;
	case 21:$str='三天半';break;
	case 22:$str=' 五天';break;
	case 23:$str='十九天';break;
	case 24:$str='二十天';break;
	case 25:$str='18个月';break;
	case 26:$str='九十天';break;
	case 27:$str=' 一天';break;
	case 28:$str='两个月';break;
	case 29:$str='11个月';break;
	case 30:$str='十个月';break;
	case 31:$str='四个月';break;
	case 32:$str='一辈子';break;
	case 33:$str='七十天';break;
}

$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
//$img=createImg($img,'@'.$nick,$left_px,90,13,0,14,'fff');
$img=createImg($img,$nick,$left_px,90,13,0,14,'fff');
$img=createImg($img,$str,30,190,13,0,60,'fff','katong');


//$content='经过预测，@'.$_POST['t_name'].' 能爱一个人'.$str.'！快来看看#你能爱一个人多长时间#吧~：'.$url;
$content='经过预测，'.$nick.' 能爱一个人'.$str.'！快来看看#你能爱一个人多长时间#吧~：'.$url;
$pagrams = array();

$content=$content.' ，你也试试吧！';
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你能爱一个人多长时间";
$pagrams[summary] = "每个人一生都会真正爱上一个人，那么你会爱TA多久？一天？一年？十年？还是一辈子？".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] = '【'.$str.'】';